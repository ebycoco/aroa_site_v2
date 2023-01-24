@foreach ($categories as $categorie)
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                {{ \Illuminate\Support\Str::limit(strip_tags($categorie->title_category), 30, $end = '...') }}
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        {!! \Illuminate\Support\Str::limit(strip_tags($categorie->description), 120, $end = '...') !!}
                    </div>
                    <div class="col-5 text-center mt-5">
                        <img src="{{ asset('public/images/articles/categorie/' . $categorie->image_category) }}"
                            alt="user-avatar" class="img-circle img-fluid">
                    </div>
                </div>
                <p class="text-muted text-sm mt-5">
                    <b>Pôle: </b>{{ \App\Models\Pole::where('id', $categorie->pole_id)->get()->first()->nom_pole }}
                </p>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button type="button" data-toggle="modal" data-target="#modal-view-experte{{ $categorie->id }}"
                        class="btn btn-sm btn-secondary">
                        <i class="fas fa-eye"></i>
                    </button>
                    <a href="{{ route('admin.update.category', $categorie->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    {{-- <button type="button" data-toggle="modal" data-target="#modal-edit-experte{{ $categorie->id }}"
                        class="btn btn-sm btn-primary"> --}}
                        
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" id="deleteCategory{{ $categorie->id }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
                <div class="modal fade" id="modal-view-experte{{ $categorie->id }}" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Voir la catégorie</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header text-muted border-bottom-0">
                                        {{ $categorie->title_category }}
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                {!! $categorie->description !!}
                                                {{-- <h2 class="lead"><b>Nicole Pearson</b></h2> --}}
                                                <p class="text-muted text-sm mt-5"><b>Pôle:
                                                    </b>{{ \App\Models\Pole::where('id', $categorie->pole_id)->get()->first()->nom_pole }}
                                                </p>

                                            </div>
                                            {{-- <div class="col-5 text-center">
                                                            <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar"
                                                                class="img-circle img-fluid">
                                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal de modificaton de l'expertise --}}
                <div class="modal fade" id="modal-edit-experte{{ $categorie->id }}" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Voir la catégorie</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.edit.category', $categorie->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="old_title"
                                            value="{{ $categorie->title_category }}">
                                        <input type="hidden" name="old_description"
                                            value="{{ $categorie->description }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pole">Choisir Pôle</label>
                                        <select name="pole" id="pole" class="form-control">
                                            <option value="">Sélectionner le pôle</option>
                                            @foreach (\App\Models\Pole::get() as $pole)
                                                <option value="{{ $pole->id }}"
                                                    @if ($categorie->pole_id == $pole->id) selected @endif>
                                                    {{ $pole->nom_pole }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title_category">Titre expertise</label>
                                        <textarea name="title_category" id="title_category" cols="30" rows="2"
                                            class="form-control">{{ $categorie->title_category }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="title_category">Titre expertise</label>
                                        <input type="file" name="image_category" id="image_category"
                                            class="form-control">
                                        <img src="{{ asset('public/images/articles/categorie/' . $categorie->image_category) }}"
                                            alt="" class="mt-2" width="200">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_description{{ $categorie->id }}">Description</label>
                                        <textarea id="update_description{{ $categorie->id }}" name="update_description" class="form-control">{{ $categorie->description }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Modifier catégorie</button>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- @section('scripts') --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
  
    {{-- @section('scripts') --}}
        <script>
            ClassicEditor
                .create(document.querySelector('#update_description{{ $categorie->id }}'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    {{-- @endsection --}}
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#deleteCategory{{ $categorie->id }}').on('click', function() {
                Swal.fire({
                    title: 'Sûr de vouloir supprimer?',
                    text: "{{ $categorie->title_category }}!",
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
                        window.location.href = "/admin/delete-category/{{ $categorie->id }}";
                    }
                })
                // var record = $(this).attr("record");
                // var recordid = $(this).attr("recordid");
                // var categoryname = $(this).attr("categoryname");

            });
        })
    </script>
    {{-- @endsection --}}
@endforeach
