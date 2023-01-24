@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Offre d'emploi
@endsection


@section('content')
    <div class="card card-solid">
        <div class="card-title pb-0 m-3">
            <div class="row">
                <div class="col-md-9">
                    <h1>Offre d'emploi</h1>
                </div>
                @role('admin')
                    <div class="col-md-3 text-right">
                        <a href="{{ route('admin.create.offre') }}" class="btn btn-primary"><i
                                class="fas fa-plus-circle text-white"></i> Ajouter une offre</a>
                        {{-- <button type="button" data-toggle="modal" data-target="#modal-add-presentation" class="btn btn-primary">
                        <i class="fas fa-plus-circle text-white"></i> Ajouter une offre
                    </button> --}}

                    </div>
                @endrole
                <div class="modal fade" id="modal-add-presentation" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Créer une offre</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.add.article') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="pole_id">Choisir Pôle</label>
                                        <select name="pole_id" id="pole_id" class="select2 form-control"
                                            style="width: 100%">
                                            <option value="">Sélectionner le pôle</option>
                                            @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                                <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="titre_article">Titre offre</label>
                                        <input type="text" class="form-control" name="titre_article" id="titre_article"
                                            placeholder="Titre article">
                                    </div>
                                    <div class="form-group">
                                        <label for="image_article">Image offre</label>
                                        <input type="file" class="form-control" name="image_article" id="image_article">
                                    </div>
                                    <div class="form-group">
                                        <label for="offre_fr">Offre fr</label>
                                        <textarea id="offre_fr" name="offre_fr"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter article</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <form action="#" method="GET">@csrf
                    <div class="form-group">
                        <select name="categorie_article" id="categorie_article" class="select2 form-control">
                            <option value="" class="form-control">Selectionner le pôle</option>
                            @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body pb-0">
            <div class="row categorie_blog">
                @include('admin.pages.offres.ajax_emploi')
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            {{-- <nav aria-label="Contacts Page Navigation"> --}}
            {{ $emplois->links('pagination::bootstrap-4') }}
            {{-- </nav> --}}
        </div>
        <!-- /.card-footer -->
    </div>
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <script>
        $(function() {
            // var categorie = $('#categorie_article')
            // alert(categorie.val())
            // categorie.on('change', function() {
            //     // alert($(this).val())
            //     // this.form.submit();
            //     var sort = $(this).val();
            //     $.ajax({
            //         url: '/admin/articles/index',
            //         method: "get",
            //         data: {
            //             sort: sort,
            //         },
            //         success: function(data) {

            //             // console.log(data)
            //             // $(".categorie_blog").append("<p>"+data.data[0]['titre_expertise']+"</p>");

            //             $(".categorie_blog").html('');
            //             $(".categorie_blog").html(data);
            //         }

            //     });
            // });



        })
    </script>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#offre_fr'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
