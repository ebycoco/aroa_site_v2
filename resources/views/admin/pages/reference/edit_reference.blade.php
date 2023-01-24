@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Modifier reference
@endsection


@section('content')
    <div class="card card-solid">
        <div class="card-title pb-0 m-3">
            <div class="row">
                <div class="col-md-9">
                    <h1>Nos références</h1>
                </div>
                <div class="col-md-3 text-right">
                    <a href="{{ route('admin.reference.view') }}" class="btn btn-primary">
                        <i class="fas fa-eye text-white"></i> Voir références
                    </a>

                </div>
            </div>
            <div class="row">
                <div class="card-body">
                    <form action="{{ route('admin.edit.reference', $reference->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="old_title" value="{{ $reference->title }}">
                            <label for="pole_id">Choisir Pôle</label>
                            <select name="pole_id" id="pole_id" class="select2 form-control" style="width: 100%">
                                <option value="">Sélectionner le pôle</option>
                                @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                    <option value="{{ $pole->id }}" @if ($reference->pole_id == $pole->id) selected @endif>
                                        {{ $pole->nom_pole }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input type="text" class="form-control" name="titre" id="titre"
                                        value="{{ $reference->title }}">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_fr">Description en français</label>
                                        <textarea name="description_fr" id="description_fr" cols="30" class="form-control"
                                            rows="5">{{ $reference->description_fr }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_en">Description en anglais</label>
                                        <textarea name="description_en" id="description_en" cols="30" class="form-control"
                                            rows="5">{{ $reference->description_en }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Modifier référence</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description_fr'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#description_en'), {
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
