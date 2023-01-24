@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Tableau de bord
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-title m-3">
                    <h1>Video page d'accueil</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('home.video') }}" method="POST" id="video" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <input type="file" class="form-control" name="video" id="accueil_video"
                                placeholder="Video accueil">
                            <span id="error_video"></span>
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
                    {{-- {{ dd($datas['video']->video) }} --}}
                    {{-- <img src="{{ asset('public/images/'.$video->video) }}"> --}}
                    <video src="{{ asset('public/images/'.$datas['video']->video) }}" controls autoplay style="width: 100%"></video>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-title m-3">
                    <h1>Nom aroapartners</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('home.name') }}" method="POST">@csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="nom_entreprise" value="{{ $datas['nom']->nom_entreprise }}">
                        </div>
                        <button type="submit" class="btn btn-primary">ajouter</button>
                        {{-- <a href="#" class="btn btn-primary">Nom Aroa</a> --}}
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p>Aroapartners</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-title m-3">
                    <h1>Slogant</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('home.slogant') }}" method="POST">@csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="slogant" value="{{ $datas['slogant']->slogant }}">
                        </div>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-title m-3">
                    <h1>Message</h1>
                </div>

                <div class="card-body">
                    <form action="{{ route('home.message') }}" method="POST">@csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="message" value="{{ $datas['message']->message }}">
                        </div>
                        <button type="submit" class="btn btn-danger">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection
