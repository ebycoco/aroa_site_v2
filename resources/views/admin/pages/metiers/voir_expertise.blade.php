@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Expertises
@endsection

<style>
    .pagination {
        justify-content: center;
    }
</style>
@section('content')
    <div class="card card-solid">
        <div class="card-title pb-0 m-3">
            <div class="row">
                <div class="col-md-9">
                    <h1>Expertises</h1>
                </div>
                <div class="col-md-3 float-right">
                    @role('admin|editeur')
                        <button type="button" data-toggle="modal" data-target="#modal-add-presentation" class="btn btn-primary">
                            <i class="fas fa-plus-circle text-white"></i> Ajouter une expertise
                        </button>
                    @endrole
                    <div class="modal fade" id="modal-add-presentation" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Créer une expertise</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.add.expertise') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="pole">Choisir Pôle</label>
                                            <select name="pole" id="pole" class="select2 form-control" style="width: 100%">
                                                <option value="">Sélectionner le pôle</option>
                                                @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                                    <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="titre_expertise">Titre expertise</label>
                                            <input type="text" class="form-control" name="titre_expertise"
                                                id="titre_expertise" placeholder="Titre expertise">
                                        </div>
                                        <div class="form-group">
                                            <label for="expertise">Expertise</label>
                                            <textarea id="expertise" name="expertise"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajouter expertise</button>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="mt-3">
                <form action="#" method="GET">@csrf
                    <div class="form-group">
                        <select name="pole_expertise" id="pole_expertise" class="select2 form-control" style="width: 100%">
                            <option value="">Selectionner le pôle</option>
                            @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body pb-0">
            <div class="row expertises">
                @include('admin.pages.metiers.ajax_expert')
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            {{-- <nav aria-label="Contacts Page Navigation"> --}}
            {{ $expertises->links('pagination::bootstrap-4') }}
            {{-- </nav> --}}
        </div>
        <!-- /.card-footer -->
    </div>
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <script>
        $(function() {
            var pole = $('#pole_expertise')
            // alert(pole.val())
            pole.on('change', function() {
                // alert($(this).val())
                // this.form.submit();
                var sort = $(this).val();
                $.ajax({
                    url: '{{ route("admin.page.presentation.expertise") }}',
                    method: "get",
                    data: {
                        sort: sort,
                    },
                    success: function(data) {

                        // console.log(data)
                        // $(".expertises").append("<p>"+data.data[0]['titre_expertise']+"</p>");

                        $(".expertises").html('');
                        $(".expertises").html(data);
                    }

                });
            });
        })
    </script>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#expertise'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
