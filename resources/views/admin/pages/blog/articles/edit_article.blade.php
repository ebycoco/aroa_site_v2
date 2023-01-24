@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Article
@endsection


@section('content')
    <div class="card card-solid mb-3">
        <div class="card-header">
            <div class="card-title pb-0 m-3">
                <h1>Article</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.edit.article', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="old_title" value="{{ $article->title_article }}">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pole_id">Choisir Pôle</label>
                                <select name="pole_id" id="pole_id" class="select2 form-control" style="width: 100%">
                                    {{-- <option value="">Sélectionner le pôle</option> --}}
                                    @foreach (\App\Models\Pole::orderBy('nom_pole', "ASC")->get() as $pole)
                                        <option value="{{ $pole->id }}"
                                            @if ($article->pole_id == $pole->id) selected @endif>
                                            {{ $pole->nom_pole }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Choisir la catégorie</label>
                                <select name="category_id" id="category_id" class="select2 form-control" style="width: 100%">
                                    {{-- <option value="">Sélectionner le pôle</option> --}}
                                    @foreach (\App\Models\CategoryArticle::orderBy('title_category', "ASC")->get() as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($article->category_id == $category->id) selected @endif>
                                            {{ $category->title_category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title_article">Titre article</label>
                            <input type="text" name="title_article" id="title_article" class="form-control" value="{{ $article->title_article }}">
                            {{-- <textarea name="title_article" id="title_article" cols="30" rows="2"
                                class="form-control"></textarea> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image_article">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_article" id="image_article">
                                    <label class="custom-file-label" for="image_article">Image de l'article</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Charger</span>
                                </div>
                            </div>
                            <div class="mt-2">
                                <img src="{{ asset('public/images/articles/' . $article->image_article) }}"
                                alt="{{ $article->image_article }}" width="80"  height="60" class="mt-2">
                                <a href="{{ asset('public/images/articles/'. $article->image_article) }}" class="btn btn-sm btn-success" target="_blank"><i class="fas fa-eye"></i> Voir image</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="update_article_fr">Article en français</label>
                            <textarea id="update_article_fr" name="update_article_fr" class="form-control">{{ $article->article_fr }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="update_article_en">Article en anglais</label>
                            <textarea id="update_article_en" name="update_article_en"
                                class="form-control">{{ $article->article_en }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Modifier article</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#update_article_fr'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#update_article_en'), {
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
