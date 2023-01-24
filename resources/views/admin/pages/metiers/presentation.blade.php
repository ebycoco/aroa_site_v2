@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Tableau de bord
@endsection


@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary">

                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="card-title">Présentations des pôles</h3>
                            </div>
                            @role('admin|editeur')
                            <div class="col-md-3">
                                <button type="button" data-toggle="modal" data-target="#modal-add-presentation"
                                    class="btn btn-primary">
                                    <i class="fas fa-plus-circle text-white"></i> Ajouter une presentation
                                </button>
                            </div>
                            @endrole
                        </div>

                    </div>
                    <div class="modal fade" id="modal-add-presentation" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ajouter une présentation</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.add.presentation') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="pole">Choisir Pôle</label>
                                            <select name="pole" id="pole" class="select2 form-control" style="width: 100%">
                                                <option value="">Sélectionner le pôle</option>
                                                @foreach (\App\Models\Pole::get() as $pole)
                                                    <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="presentation">Presentation</label>
                                            <textarea id="presentation" name="presentation"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image" id="image">
                                                    <label class="custom-file-label" for="image">Image de la
                                                        presentation</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Charger</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajouter présentation</button>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Pôle</th>
                                    <th>Présentation</th>
                                    <th>Image de presentation</th>
                                    @role('admin|editeur')
                                        <th style="width: 40px">Action</th>
                                    @endrole
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($presentations as $presentation)
                                    <tr>
                                        <td>{{ $presentation->nom_pole }}</td>
                                        <td>{!! \Illuminate\Support\Str::limit(strip_tags($presentation->presentation_fr), 120, $end = '...') !!}</td>
                                        <td>
                                            <img src="{{ asset('public/images/presentations/poles/' . $presentation->image) }}"
                                                alt="" width="80">
                                        </td>
                                        @role('admin|editeur')
                                            <td>
                                                <a href="{{ route('admin.edit.presentation', $presentation->id) }}"><i
                                                        class="fas fa-edit text-primary"></i></a>

                                            </td>
                                        @endrole
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#presentation'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#presentation{{ $presentation->id }}'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
