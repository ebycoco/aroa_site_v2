@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
Modifier Categorie
@endsection
@section('content')
    <div class="card card-solid">
        <div class="card-title pb-0 m-1">
            <div class="card-header bg-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Modifier Categorie</h3>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('admin.categorie.article') }}" class="btn btn-danger"><i class="fas fa-eye"></i> Voir categories</a>
                    </div>
                </div>
            </div>       
        </div>
        <div class="card-body pb-0">
            <form action="{{ route('admin.edit.category', $categorie->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="old_title"
                        value="{{ $categorie->title_category }}">
                    <input type="hidden" name="old_description"
                        value="{{ $categorie->description }}">
                </div>
                <div class="form-group">
                    <label for="pole">Choisir Pôle</label>
                    <select name="pole" id="pole" class="select2 form-control" style="width: 100%">
                        <option value="">Sélectionner le pôle</option>
                        @foreach (\App\Models\Pole::get() as $pole)
                            <option value="{{ $pole->id }}"
                                @if ($categorie->pole_id == $pole->id) selected @endif>
                                {{ $pole->nom_pole }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title_category">Titre expertise</label>
                    <textarea name="title_category" id="title_category" cols="30" rows="2"
                        class="form-control">{{ $categorie->title_category }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image_category">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image_category" id="image_category">
                            <label class="custom-file-label" for="image_category">Image de la catégorie</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Charger</span>
                        </div>
                    </div>
                    <div class="mt-3">
                        <img src="{{ asset('public/images/articles/categorie/' . $categorie->image_category) }}"
                        alt="" class="mt-2" width="200">
                    </div>
                </div>

                <div class="form-group">
                    <label for="update_description">Description</label>
                    <textarea id="update_description" name="update_description" class="form-control">{{ $categorie->description }}</textarea>
                </div>
                <div class="text-center m-3">
                    <button type="submit" class="btn btn-primary mb-3">Modifier catégorie</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#update_description'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            }).then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

    </script>
@endsection
