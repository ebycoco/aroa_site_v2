@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Article
@endsection


@section('content')
    <div class="card card-solid">
        <div class="card-title pb-0 m-3">
            <div class="row">
                <div class="col-md-9">
                    <h1>Article</h1>
                </div>
                @role('admin|editeur')
                    <div class="col-md-3 text-right">
                        <button type="button" data-toggle="modal" data-target="#modal-add-presentation" class="btn btn-primary">
                            <i class="fas fa-plus-circle text-white"></i> Ajouter un article
                        </button>

                    </div>
                @endrole
                <div class="modal fade" id="modal-add-presentation" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Créer un article</h4>
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
                                    <div class="select-category">
                                        @if (isset($categories))
                                            @include('admin.pages.blog.articles.ajax_category_select')
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="titre_article">Titre article</label>
                                        <input type="text" class="form-control" name="titre_article" id="titre_article"
                                            placeholder="Titre article">
                                    </div>

                                    <div class="form-group">
                                        <label for="image_article">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image_article"
                                                    id="image_article">
                                                <label class="custom-file-label" for="image_article">Image de
                                                    l'article</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Charger</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="article_fr">Article fr</label>
                                        <textarea id="article_fr" name="article_fr"></textarea>
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
                        <select name="categorie_article" id="categorie_article" class="select2 form-control"
                            style="width: 100%">
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
                @include('admin.pages.blog.articles.ajax_articles')
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            {{-- <nav aria-label="Contacts Page Navigation"> --}}
            {{ $articles->links('pagination::bootstrap-4') }}
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
                    url: '/admin/articles/index',
                    method: "get",
                    data: {
                        sort: sort,
                    },
                    success: function(data) {

                        // console.log(data)
                        // $(".categorie_blog").append("<p>"+data.data[0]['titre_expertise']+"</p>");

                        $(".categorie_blog").html('');
                        $(".categorie_blog").html(data);
                    }

                });
            });

            var pole = $('#pole_id')
            pole.on('change', function() {
                var categorie_id = $(this).val()
                $.ajax({
                    url: '/admin/get-categories',
                    method: "get",
                    data: {
                        categorie_id: categorie_id,
                    },
                    success: function(data) {

                        console.log(data)
                        // $(".categorie_blog").append("<p>"+data.data[0]['titre_expertise']+"</p>");

                        $(".select-category").html('');
                        $(".select-category").html(data);
                    }

                });
            })


        })
    </script>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#article_fr'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
