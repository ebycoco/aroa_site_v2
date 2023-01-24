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
                    <h1>Nos références</h1>
                </div>
                @role('admin|editeur')
                    <div class="col-md-3 text-right">
                        <button type="button" data-toggle="modal" data-target="#modal-add-presentation" class="btn btn-primary">
                            <i class="fas fa-plus-circle text-white"></i> Ajouter une référence
                        </button>

                    </div>
                @endrole
                <div class="modal fade" id="modal-add-presentation" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Créer une référence</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.add.reference') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="pole_id">Choisir Pôle</label>
                                        <select name="pole_id" id="pole_id" class="select2 form-control"
                                            style="width: 100%">
                                            <option value="">Sélectionner le pôle</option>
                                            @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                                <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="titre">Titre</label>
                                                <input type="text" class="form-control" name="titre" id="titre"
                                                    placeholder="Ex: texte">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description_fr">Description en français</label>
                                                    <textarea name="description_fr" id="description_fr" cols="30" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter référence</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <form action="#" method="GET">@csrf
                    <div class="form-group">

                        <label for="pole">Filtrer</label>
                        <select name="categorie_article" id="categorie_article" class="select2 form-control">
                            <option value="" class="form-control">Selectionner le pôle</option>
                            @foreach (\App\Models\Pole::orderBy('nom_pole', 'ASC')->get() as $pole)
                                <option value="{{ $pole->id }}">{{ $pole->nom_pole }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body pb-0">
            <div class="row categorie_blog">
                @foreach ($references as $reference)
                    <div class="col-md-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">{{ $reference->title }}</h3>
                                <p class="text-muted text-center"></p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        {!! \Illuminate\Support\Str::limit(strip_tags($reference->description_fr), 120, $end = '...') !!}
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <button type="button" data-toggle="modal"
                                        data-target="#modal-view-reference{{ $reference->id }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye text-white"></i>
                                    </button>
                                    @role('admin|editeur')
                                        <a href="{{ route('admin.create.reference', $reference->id) }}"
                                            class="btn btn-secondary btn-sm">
                                            <i class="fas fa-edit text-white"></i>
                                        </a>
                                        <button type="button" id="deleteReference{{ $reference->id }}"
                                            class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash text-white"></i>
                                        </button>
                                    @endrole
                                </div>
                                {{-- <a href="#" class="btn btn-primary btn-block"><b>Voir</b></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal-view-reference{{ $reference->id }}" style="display: none;"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Voir référence</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-title  m-3">
                                            <h3>{{ $reference->title }}</h3>
                                        </div>
                                        <div class="card-body  m-3">
                                            <div>
                                                {!! $reference->description_fr !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        $(function() {

                            $('#deleteReference{{ $reference->id }}').on('click', function() {
                                Swal.fire({
                                    title: 'Sûr de vouloir supprimer?',
                                    text: "{{ $reference->title }}",
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
                                        window.location.href = "/admin/delete-reference/{{ $reference->id }}";
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
            <!-- /.card-body -->
            <div class="card-footer text-center">
                {{-- <nav aria-label="Contacts Page Navigation"> --}}
                {{ $references->links('pagination::bootstrap-4') }}
                {{-- </nav> --}}
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
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content_en'), {
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
