@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Tableau de bord
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title">Presentation "{{ $presentation->pole->nom_pole }}"</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-primary" href="{{ route('admin.page.presentation') }}">
                                    <i class="fas fa-eye"></i> Voir les presentations
                                </a>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.update.presentation', $presentation->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="pole">Pôle</label>
                                <input type="text" name="pole" id="pole" disabled
                                    value="{{ $presentation->pole->nom_pole }}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="presentation">Presentation en français</label>
                                <textarea id="presentation" name="presentation">{{ $presentation->presentation_fr }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="presentation_en">Presentation en anglais</label>
                                <textarea id="presentation_en" name="presentation_en">{{ $presentation->presentation_en }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="image">
                                        <label class="custom-file-label" for="image">Image de la presentation</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Charger</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('public/images/presentations/poles/' . $presentation->image) }}"
                                            alt="user-avatar" class="img-circle img-fluid" width="100">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Modifier présentation</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#presentation'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            }).catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#presentation_en'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            }).catch(error => {
                console.error(error);
            });
    </script>
@endsection
