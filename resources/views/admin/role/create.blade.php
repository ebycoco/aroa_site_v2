@extends('admin.layouts.main')
@section('title')
    AroaPartners || Admin - Dashboard
@endsection
@section('page')
    Création de rôle
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Liste des rôles</h3>
                            <div class="text-right">
                                <a class="btn btn-danger" href="{{ route('role.index') }}"><i class="fas fa-eye"></i> Voir les roles</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <role />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
