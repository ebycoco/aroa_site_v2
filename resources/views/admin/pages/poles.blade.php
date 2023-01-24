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
                        <h1>Créer pole</h1>
                    </div>
                    <div class="card-body">
                        <div class="form row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.add.pole') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nom_pole">Nom du pole</label>
                                                <input type="text" class="form-control" placeholder="Nom pôle" name="nom_pole">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="url">URL</label>
                                                <input type="text" class="form-control" placeholder="URL" name="url" id="url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="iconeNoire">Logo noir pole</label>
                                                <input type="file" class="form-control" name="logo_noir_pole" id="iconeNoire">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="iconeBlanche">Logo blanc pole</label>
                                                <input type="file" class="form-control" name="logo_blanc_pole" id="iconeBlanche">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter pôle</button>
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
                                    <th>Logo noir pole</th>
                                    <th>Logo blanc pole</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($poles as $pole)
                                    <tr>
                                        <td>{{ $pole->id }}</td>
                                        <td>{{ $pole->nom_pole }}</td>
                                        <td>{{ $pole->url }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('public/images/logo/poles/noir/' . $pole->logo_noir_pole) }}" alt=""
                                                width="80">
                                        </td>
                                        <td class="text-center">
                                            <img style="background: rgb(97, 95, 95)" src="{{ asset('public/images/logo/poles/blanc/' . $pole->logo_blanc_pole) }}" alt=""
                                                width="80">
                                        </td>
                                        <td>
                                            
                                            <a href="#" data-toggle="modal"
                                                data-target="#modal-edit-pole{{ $pole->id }}" class="btn btn-primary btn-sm m-1">
                                                <i class="fas fa-edit text-white"></i>
                                            </a>
                                            <button type="button" id="deletePole{{ $pole->id }}"
                                                class="btn btn-danger btn-sm m-1">
                                                <i class="fas fa-trash text-white"></i>
                                            </button>
                                            <div class="modal fade" id="modal-edit-pole{{ $pole->id }}" style="display: none;"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Default Modal</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.edit.pole', $pole->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="old_name" value="{{ $pole->nom_pole }}">
                                                                <div class="form-group">
                                                                    <label for="nom_pole">Nom du pole</label>
                                                                    <input type="text" class="form-control" placeholder="Nom pôle" name="nom_pole" value="{{ $pole->nom_pole }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="url">URL</label>
                                                                    <input type="text" class="form-control" placeholder="URL" name="url" value="{{ $pole->url }}">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="icone_noire">Logo noir pole</label>
                                                                            <input type="file" class="form-control" name="logo_noir_pole" id="icone_noire">
                                                                            <img src="{{ asset('public/images/logo/poles/noir/' . $pole->logo_noir_pole) }}" alt="" width="100">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="icone_blanche">Logo blanc pole</label>
                                                                            <input type="file" class="form-control" name="logo_blanc_pole" id="icone_blanche">
                                                                            <img style="background-color: #000" src="{{ asset('public/images/logo/poles/blanc/' . $pole->logo_blanc_pole) }}" alt="" width="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Fermer</button>
                                                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        $(function() {

                            $('#deletePole{{ $pole->id }}').on('click', function() {
                                Swal.fire({
                                    title: 'Sûr de vouloir supprimer?',
                                    text: "{{ $pole->nom_pole }}",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Oui, Supprimer !',
                                    cancelButtonText: 'Annuler !'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                            'Effectué!',
                                            'L\'élément est supprimé.',
                                            'success'
                                        )
                                        window.location.href = "/admin/delete-pole/{{ $pole->id }}";
                                    }
                                })
                                // var record = $(this).attr("record");
                                // var recordid = $(this).attr("recordid");
                                // var categoryname = $(this).attr("categoryname");

                            });

                        })
                    </script>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-title m-3">
                        <h1>Ajouter icones</h1>
                    </div>
    
                    <div class="card-body">
                        <form action="{{ route('admin.pole.icone') }}" method="POST" id="video" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="icone">Icone</label>
                                <input type="file" class="form-control" name="icone" id="icone">
                                <span id="error_icone"></span>
                            </div>
                            <div class="form-group">
                                <label for="nom_pole">Nom pôle</label>
                                <input type="text" class="form-control" name="nom_pole" id="nom_pole" placeholder="Nom pole">
                                <span id="error_nom_pole"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
    
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
