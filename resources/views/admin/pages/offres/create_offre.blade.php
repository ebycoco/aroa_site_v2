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
                <h1>Offre d'emploi</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.add.offre') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pole_id">Choisir Pôle</label>
                                <select name="pole_id" id="pole_id" class="select2 form-control" style="width: 100%">
                                    <option value="">Sélectionner le pôle</option>
                                    @foreach (\App\Models\Pole::get() as $pole)
                                        <option value="{{ $pole->id }}">
                                            {{ $pole->nom_pole }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_offre">Titre offre</label>
                                <input type="text" name="title_offre" id="title_offre" class="form-control" placeholder="Titre de l'offre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_title_offre">Meta titre offre</label>
                                <input type="text" name="meta_title_offre" id="meta_title_offre" class="form-control" placeholder="Meta titre de l'offre">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="meta_description_offre">Titre offre</label>
                                <input type="text" name="meta_description_offre" id="meta_description_offre" class="form-control" placeholder="Meta description de l'offre">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image_offre">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image_offre" id="image_offre">
                                        <label class="custom-file-label" for="image_offre">Image de l'offre</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Charger</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="date_post_offre">Date de poste offre</label>
                                <input type="date" name="date_post_offre" id="date_post_offre" class="form-control" placeholder="Titre de l'offre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="heure_post_offre">Heure de poste offre</label>
                                <input type="time" name="heure_post_offre" id="heure_post_offre" class="form-control" placeholder="Titre de l'offre">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="content_fr">Contenu offre en français</label>
                                <textarea name="content_fr" id="content_fr" cols="30" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="content_en">Contenu offre en anglais</label>
                                <textarea name="content_en" id="content_en" cols="30" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Ajouter offre emploi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#content_fr'), {
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
            .create(document.querySelector('#content_en'), {
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
