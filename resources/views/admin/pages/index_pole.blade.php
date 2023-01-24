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
                    <div class="card-title m-3">
                        <h1>Créer metier</h1>
                    </div>
                    <div class="card-body">
                        <div class="form row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.add.icone') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nom_metier">Nom du metier</label>
                                                <input type="text" class="form-control" placeholder="Nom pôle"
                                                    name="nom_metier">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="url">URL</label>
                                                <input type="text" class="form-control" placeholder="URL" name="url"
                                                    id="url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="icone_noire">Logo noir metier</label>
                                                <input type="file" class="form-control" name="icone_noire"
                                                    id="icone_noire">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="icone_blanche">Logo blanc metier</label>
                                                <input type="file" class="form-control" name="icone_blanche"
                                                    id="icone_blanche">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="icone_blanche_cercle">Logo blanc cercle metier</label>
                                                <input type="file" class="form-control" name="icone_blanche_cercle"
                                                    id="icone_blanche_cercle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary">Ajouter metier</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bordered Table</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nom du pôle</th>
                                    <th>URL</th>
                                    <th>Logo noir du metier</th>
                                    <th>Logo blanc du metier</th>
                                    {{-- <th>Logo blanc du cercle</th> --}}
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($metiers as $metier)
                                    <tr>
                                        <td>{{ $metier->id }}</td>
                                        <td>{{ $metier->nom_icone }}</td>
                                        <td>{{ $metier->url }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('public/images/logo/metiers/noir/' . $metier->icone_noire) }}"
                                                alt="" width="80">
                                        </td>
                                        <td class="text-center">
                                            <img style="background-color:  rgb(112, 110, 110)"
                                                src="{{ asset('public/images/logo/metiers/blanc/' . $metier->icone_blanche) }}"
                                                alt="" width="80">
                                        </td>
                                        <td class="text-center">
                                            <img style="background-color:  rgb(112, 110, 110)"
                                                src="{{ asset('public/images/logo/metiers/blanccercle/' . $metier->icone_blanche_cercle) }}"
                                                alt="" width="80">
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <a href="#" data-toggle="modal"
                                                    data-target="#modal-edit-metier{{ $metier->id }}">
                                                    <i class="fas fa-edit text-primary m-2"></i>
                                                </a>
                                                <a href="#" id="deleteMetier{{ $metier->id }}">
                                                    <i class="fas fa-trash text-danger m-2"></i>
                                                </a>
                                            </div>
                                            <div class="modal fade" id="modal-edit-metier{{ $metier->id }}"
                                                style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modifier metier</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.edit.metier', $metier->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="old_name"
                                                                    value="{{ $metier->nom_icone }}">
                                                                <div class="form-group">
                                                                    <label for="nom_metier">Nom du metier</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Nom pôle" name="nom_metier"
                                                                        value="{{ $metier->nom_icone }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="url">URL</label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="URL" name="url"
                                                                        value="{{ $metier->url }}">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="icone_noire">Logo noir
                                                                                metier</label>
                                                                            <input type="file" class="form-control"
                                                                                name="icone_noire">
                                                                            <img class="mt-3"
                                                                                src="{{ asset('public/images/logo/metiers/noir/' . $metier->icone_noire) }}"
                                                                                alt="" width="100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="icone_blanche">Logo blanc
                                                                                metier</label>
                                                                            <input type="file" class="form-control"
                                                                                name="icone_blanche">
                                                                            <p class="mt-3">
                                                                                <img style="background-color: rgb(112, 110, 110)"
                                                                                    src="{{ asset('public/images/logo/metiers/blanc/' . $metier->icone_blanche) }}"
                                                                                    alt="" width="100">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="icone_blanche_cercle">Logo blanc
                                                                                cercle metier</label>
                                                                            <input type="file" class="form-control"
                                                                                name="icone_blanche_cercle"
                                                                                id="icone_blanche_cercle">
                                                                            <p class="mt-3">
                                                                                <img style="background-color: rgb(112, 110, 110)"
                                                                                    src="{{ asset('public/images/logo/metiers/blanccercle/' . $metier->icone_blanche_cercle) }}"
                                                                                    alt="" width="100">
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Fermer</button>
                                                                    {{-- <input type="submit" value="Modifier"> --}}
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Modifier</button>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </td>

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
