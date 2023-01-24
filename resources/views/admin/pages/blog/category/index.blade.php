@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Categorie blog
@endsection

<style>
    .pagination{
        justify-content: center;
    }
</style>
@section('content')
    <div class="card card-solid">
        <div class="card-title pb-0 m-3">
            <div class="row">
                <div class="col-md-9">
                    <h1>Categorie</h1>
                </div>
                <div class="col-md-3 float-right">
                    <button type="button" data-toggle="modal" data-target="#modal-add-presentation" class="btn btn-primary">
                        <i class="fas fa-plus-circle text-white"></i> Ajouter une catgorie
                    </button>
                    <div class="modal fade" id="modal-add-presentation" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Créer une catgorie</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.add.category') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="pole_id">Choisir Pôle</label>
                                            <select name="pole_id" id="pole_id" class="select2 form-control" style="width: 100%">
                                                <option value="">Sélectionner le pôle</option>
                                                @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                                    <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="titre_categorie">Titre categorie</label>
                                            <input type="text" class="form-control" name="titre_categorie"
                                                id="titre_categorie" placeholder="Titre categorie">
                                        </div>
                                        <div class="form-group">
                                            <label for="image_categorie">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image_categorie" id="image_categorie">
                                                    <label class="custom-file-label" for="image_categorie">Image de la catégorie</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Charger</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajouter catégorie</button>
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
                        <select name="categorie_article" id="categorie_article" class="select2 form-control">
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
            <div class="row categorie_blog">
                @include('admin.pages.blog.category.ajax_category')
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            {{-- <nav aria-label="Contacts Page Navigation"> --}}
                {{ $categories->links('pagination::bootstrap-4') }}
            {{-- </nav> --}}
        </div>
        <!-- /.card-footer -->
    </div>
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <script>
        $(function() {
            var categorie = $('#categorie_article')
            // alert(categorie.val())
            categorie.on('change', function() {
                // alert($(this).val())
                // this.form.submit();
                var sort = $(this).val();
                $.ajax({
                    url: '{{ route("admin.categorie.article") }}',
                    method: "get",
                    data: {
                        sort: sort,
                    },
                    success: function(data) {

                        console.log(data)
                        // $(".categorie_blog").append("<p>"+data.data[0]['titre_expertise']+"</p>");

                        $(".categorie_blog").html('');
                        $(".categorie_blog").html(data);
                    }

                });
            });
        })
    </script>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

    </script>
@endsection
