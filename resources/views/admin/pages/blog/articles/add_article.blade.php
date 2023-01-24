@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Article
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
                    <h1>Article</h1>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.add.article') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="pole_id">Choisir Pôle</label>
                    <select name="pole_id" id="pole_id" class="form-control">
                        <option value="">Sélectionner le pôle</option>
                        @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                            <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="select-category">
                    @if (isset($categories))
                    @include(
                        'admin.pages.blog.articles.ajax_category_select'
                    )
                @endif
                </div>
                <div class="form-group">
                    <label for="titre_article">Titre article</label>
                    <input type="text" class="form-control" name="titre_article" id="titre_article"
                        placeholder="Titre article">
                </div>
                <div class="form-group">
                    <label for="image_article">Image article</label>
                    <input type="file" class="form-control" name="image_article" id="image_article">
                </div>
                <div class="form-group">
                    <label for="article_fr">Article fr</label>
                    <textarea id="article_fr" name="article_fr"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter article</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <script>
        $(function() {
            
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
