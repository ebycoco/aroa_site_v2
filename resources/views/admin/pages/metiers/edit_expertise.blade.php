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
                    <div class="card-header bg-primary">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title">Expertise "{{ $expertise->titre_expertise }}"</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-danger" href="{{ route('admin.page.presentation.expertise') }}">
                                    <i class="fas fa-eye"></i> Voir les expertises
                                </a>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.update.expertise', $expertise->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="titre">Pôle</label>
                                <input type="text" name="titre" id="titre" placeholder="Titre"
                                    value="{{ $expertise->titre_expertise }}" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="presentation">Expertise français</label>
                                <textarea id="expertise_fr" name="expertise_fr">{{ $expertise->expertise_fr }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="presentation">Expertise anglais</label>
                                <textarea id="expertise_en" name="expertise_en">{{ $expertise->expertise_en }}</textarea>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary float-right">Modifier expertise</button>
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
            .create(document.querySelector('#expertise_fr'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            }).catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#expertise_en'), {
                extraPlugins: [SimpleUploadAdapterPlugin],
            }).catch(error => {
                console.error(error);
            });
    </script>
@endsection
