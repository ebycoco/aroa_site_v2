@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Profile
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (!Auth::guard('admin')->user()->pole || !Auth::guard('admin')->user()->photo)
            <div class="alert alert-warning" role="alert">
                @if ((!Auth::guard('admin')->user()->pole && !Auth::guard('admin')->user()->photo))
                    <h3>Veuillez mettre a jour votre profile</h3>
                @else
                    @if (!Auth::guard('admin')->user()->photo)
                        <h3>Veuillez mettre a jour votre profile une image</h3>
                    @endif
                    @if (!Auth::guard('admin')->user()->pole)
                        <h3>Veuillez mettre a jour votre profile selectionné le pole</h3>
                    @endif
                @endif
              </div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('public/images/profile/small/' . Auth::guard('admin')->user()->photo) }}"
                                    alt="User profile picture">
                            </div>
                             <div class="text-center mt-3 mb-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                    <i class="fas fa-download text-white"></i>
                                    Changer Image
                                </button>
                             </div>
                             @include('admin/modal/modal_ajout_avatar')
                            <h3 class="profile-username text-center">{{ Auth::guard('admin')->user()->nom }}
                                {{ Auth::guard('admin')->user()->prenoms }}
                            </h3>
                            <p class="text-muted text-center">{{ Auth::guard('admin')->user()->poste }}</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>{{ Auth::guard('admin')->user()->email }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ Auth::guard('admin')->user()->telephone }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ Auth::guard('admin')->user()->poste }}</b>
                                </li>
                                <li class="list-group-item">
                                    <b>{{ Auth::guard('admin')->user()->pole }}</b>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-primary-info"><b>Voir</b></a>
                            @include('admin/modal/modal_info')
                        </div>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#activity"
                                        data-toggle="tab">Changer mot de passe</a></li>

                                <li class="nav-item"><a class="nav-link active" href="#settings"
                                        data-toggle="tab">Info perso</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="activity">
                                    <form class="form-horizontal" action="{{ route('admin.changepassword') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="mdpa" class="col-sm-4 col-form-label">Mot de passe actuel</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="mdpa" placeholder="Mot de passe actuel"
                                                    name="mdpa">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nmdp" class="col-sm-4 col-form-label">Nouveau mot de passe</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="prenoms"
                                                    placeholder="Nouveau mot de passe" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="rmdp" class="col-sm-4 col-form-label">Repeter mot de passe</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="email" placeholder="Repeter mot de passe"
                                                    name="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Soumettre</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane active" id="settings">
                                    <form class="form-horizontal" action="{{ route('admin.postProfile') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nom" placeholder="Nom"
                                                    value="{{ Auth::guard('admin')->user()->nom }}" name="nom">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="prenoms" class="col-sm-2 col-form-label">Prénoms</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="prenoms" placeholder="Prénoms"
                                                    value="{{ Auth::guard('admin')->user()->prenoms }}" name="prenoms">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" placeholder="Email"
                                                    value="{{ Auth::guard('admin')->user()->email }}" name="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="poste" class="col-sm-2 col-form-label">Poste</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="poste" placeholder="Poste"
                                                    value="{{ Auth::guard('admin')->user()->poste }}" name="poste">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pole" class="col-sm-2 col-form-label">Pole</label>
                                            <div class="col-sm-10">
                                                <select name="pole" id="pole" class="select2 form-control">
                                                    <option value="" class="form-control">Selectionner le pôle</option>
                                                    @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                                        <option value="{{ $pole->nom_pole }}"
                                                            @if (Auth::guard('admin')->user()->pole == $pole->nom_pole) selected @endif>
                                                            {{ $pole->nom_pole }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="telephone" class="col-sm-2 col-form-label">Téléphone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="telephone"
                                                    placeholder="Téléphone"
                                                    value="{{ Auth::guard('admin')->user()->telephone }}"
                                                    name="telephone">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Soumettre</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
