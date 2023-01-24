@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Article
@endsection


@section('content')
    <div class="card card-solid">
        <div class="card-title pb-0 m-3">
            <div class="row">
                <div class="col-md-9">
                    <h1>Notre équipe</h1>
                </div>
                @role('admin|editeur')
                    <div class="col-md-3 text-right">
                        <button type="button" data-toggle="modal" data-target="#modal-add-presentation" class="btn btn-primary">
                            <i class="fas fa-plus-circle text-white"></i> Ajouter un membre
                        </button>

                    </div>
                @endrole
            </div>
            <div class="modal fade" id="modal-add-presentation" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Créer un membre</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.add.team') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="pole_id">Choisir Pôle</label>
                                    <select name="pole_id" id="pole_id" class="addteam form-control" style="width: 100%">
                                        <option value="">Sélectionner le pôle</option>
                                        @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                            <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" name="nom" id="nom"
                                                placeholder="Ex: DIBY">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prenom">Prénoms</label>
                                            <input type="text" class="form-control" name="prenom" id="prenom"
                                                placeholder="Ex: Didier">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Ex: exemple.test@aroapartners.com">
                                </div>
                                <div class="form-group">
                                    <label for="telephone">telephone</label>
                                    <input type="tel" class="form-control" name="telephone" id="telephone"
                                        placeholder="Ex: 0700000000">
                                </div>
                                <div class="form-group">
                                    <label for="poste">Poste</label>
                                    <input type="text" class="form-control" name="poste" id="poste"
                                        placeholder="Ex: Manager">
                                </div>

                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photo">
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook"
                                        placeholder="Ex: Didier">
                                </div>
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" id="linkedin"
                                        placeholder="Ex: Didier">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter"
                                        placeholder="Ex: Didier">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="article_fr">Article fr</label>
                                    <textarea id="article_fr" name="article_fr"></textarea>
                                </div> --}}
                                <button type="submit" class="btn btn-primary">Ajouter membre</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-body pb-0">
            <div class="mt-3">
                <form action="#" method="GET">@csrf
                    <div class="form-group">

                        <label for="pole">Filtrer</label>
                        <select name="pole" id="pole" class="select2 form-control" style="width: 100%">
                            <option value="" class="form-control">Selectionner le pôle</option>
                            @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="row categorie_blog">
                @foreach ($teams as $team)
                    <div class="col-md-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center"><img
                                        src="{{ asset('public/images/team/small/' . $team->photo) }}"
                                        alt="User profile picture" class="profile-user-img img-fluid img-circle"
                                        style="height: 95px !important"></div>
                                <h3 class="profile-username text-center">{{ $team->nom }} {{ $team->prenom }}</h3>
                                <p class="text-muted text-center"></p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item"><b>{{ $team->email }}</b></li>
                                    <li class="list-group-item"><b>{{ $team->telephone }}</b></li>
                                    <li class="list-group-item"><b>{{ $team->poste }}</b></li>
                                    <li class="list-group-item">

                                        <b>Pôles:
                                            <ul>
                                                @foreach (\App\Models\Pole::whereIn('id', array_map('intval', explode('"', $team->pole_id)))->get() as $pole)
                                                <li>
                                                    {{ $pole->nom_pole }} <br>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </b>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <button type="button" data-toggle="modal"
                                        data-target="#modal-view-team{{ $team->id }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye text-white"></i>
                                    </button>
                                    @role('admin|editeur')
                                        <button type="button" data-toggle="modal"
                                            data-target="#modal-edit-team{{ $team->id }}" class="btn btn-secondary btn-sm">
                                            <i class="fas fa-edit text-white"></i>
                                        </button>
                                        <button type="button" id="deleteTeam{{ $team->id }}" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash text-white"></i>
                                        </button>
                                    @endrole
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-view-team{{ $team->id }}" style="display: none;"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Créer un membre</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body box-profile">
                                        <div class="text-center"><img
                                                src="{{ asset('public/images/team/small/' . $team->photo) }}"
                                                alt="User profile picture" class="profile-user-img img-fluid img-circle"
                                                style="height: 95px !important"></div>
                                        <h3 class="profile-username text-center">{{ $team->nom }} {{ $team->prenom }}
                                        </h3>
                                        <p class="text-muted text-center"></p>
                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item"><b>{{ $team->email }}</b></li>
                                            <li class="list-group-item"><b>{{ $team->telephone }}</b></li>
                                            <li class="list-group-item"><b>{{ $team->poste }}</b></li>
                                            <li class="list-group-item">

                                                <b>Pôles:
                                                    <ul>
                                                        @foreach (\App\Models\Pole::whereIn('id', array_map('intval', explode('"', $team->pole_id)))->get() as $pole)
                                                        <li>
                                                            {{ $pole->nom_pole }} <br>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </b>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-edit-team{{ $team->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Créer un membre</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.edit.team', $team->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="pole_id">Choisir Pôle</label>
                                            <select name="pole_id" id="pole_id" class="editteam form-control"
                                                style="width: 100%">
                                                <option value="">Sélectionner le pôle</option>
                                                @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                                    <option value="{{ $pole->id }}"
                                                        @if ($team->pole_id == $pole->id) selected @endif>
                                                        {{ $pole->nom_pole }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nom">Nom</label>
                                                    <input type="text" class="form-control" name="nom" id="nom"
                                                        placeholder="Ex: DIBY" value="{{ $team->nom }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prenom">Prénoms</label>
                                                    <input type="text" class="form-control" name="prenom" id="prenom"
                                                        placeholder="Ex: Didier" value="{{ $team->prenom }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Ex: exemple.test@aroapartners.com"
                                                value="{{ $team->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="telephone">telephone</label>
                                            <input type="tel" class="form-control" name="telephone" id="telephone"
                                                placeholder="Ex: 0700000000" value="{{ $team->telephone }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="poste">Poste</label>
                                            <input type="text" class="form-control" name="poste" id="poste"
                                                placeholder="Ex: Manager" value="{{ $team->poste }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="photo">Photo</label>
                                            <input type="file" class="form-control" name="photo" id="photo">
                                            <img src="{{ asset('public/images/team/small/' . $team->photo) }}" alt=""
                                                width="200" height="150">
                                        </div>
                                        <div class="form-group">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook"
                                                placeholder="Ex: Didier" value="{{ $team->facebook }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="linkedin">Linkedin</label>
                                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                                placeholder="Ex: Didier" value="{{ $team->linkedin }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" class="form-control" name="twitter" id="twitter"
                                                placeholder="Ex: Didier" value="{{ $team->twitter }}">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="article_fr">Article fr</label>
                                            <textarea id="article_fr" name="article_fr"></textarea>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary">Modifier membre</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        $(function() {
                            $('.editteam').select2()
                            $('#deleteTeam{{ $team->id }}').on('click', function() {
                                Swal.fire({
                                    title: 'Sûr de vouloir supprimer?',
                                    text: "{{ $team->nom }}",
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
                                        window.location.href = "/admin/delete-team/{{ $team->id }}";
                                    }
                                })
                                // var record = $(this).attr("record");
                                // var recordid = $(this).attr("recordid");
                                // var categoryname = $(this).attr("categoryname");

                            });

                        })
                    </script>
                @endforeach
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            {{-- <nav aria-label="Contacts Page Navigation"> --}}
            {{ $teams->links('pagination::bootstrap-4') }}
            {{-- </nav> --}}
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
