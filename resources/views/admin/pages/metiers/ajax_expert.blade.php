@foreach ($expertises as $expertise)
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                {{ \Illuminate\Support\Str::limit(strip_tags($expertise->titre_expertise), 30, $end = '...') }}
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-12">
                        {!! \Illuminate\Support\Str::limit(strip_tags($expertise->expertise_fr), 120, $end = '...') !!}
                        {{-- <h2 class="lead"><b>Nicole Pearson</b></h2> --}}
                        <p class="text-muted text-sm mt-5"><b>Pôle:
                            </b>{{ \App\Models\Pole::where('id', $expertise->pole_id)->get()->first()->nom_pole }}
                        </p>

                    </div>
                    {{-- <div class="col-5 text-center">
                                    <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar"
                                        class="img-circle img-fluid">
                                </div> --}}
                </div>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button type="button" data-toggle="modal" data-target="#modal-view-experte{{ $expertise->id }}"
                        class="btn btn-sm btn-secondary">
                        <i class="fas fa-eye"></i>
                    </button>
                    @role('admin|editeur')
                    <a href="{{ route('admin.edit.expertise', $expertise->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        
                        <button type="button" class="btn btn-sm btn-danger" id="deleteExperte{{ $expertise->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    @endrole
                </div>
                <div class="modal fade" id="modal-view-experte{{ $expertise->id }}" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Voir l'expertise</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header text-muted border-bottom-0">
                                        {{ $expertise->titre_expertise }}
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                {!! $expertise->expertise !!}
                                                {{-- <h2 class="lead"><b>Nicole Pearson</b></h2> --}}
                                                <p class="text-muted text-sm mt-5"><b>Pôle:
                                                    </b>{{ \App\Models\Pole::where('id', $expertise->pole_id)->get()->first()->nom_pole }}
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
                <div class="modal fade" id="modal-edit-experte{{ $expertise->id }}" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Voir l'expertise</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.add.expertise') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="pole">Choisir Pôle</label>
                                        <select name="pole" id="pole" class="form-control">
                                            <option value="">Sélectionner le pôle</option>
                                            @foreach (\App\Models\Pole::get() as $pole)
                                                <option value="{{ $pole->id }}"
                                                    @if ($expertise->pole_id == $pole->id) selected @endif>
                                                    {{ $pole->nom_pole }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="titre_expertise">Titre expertise</label>
                                        <textarea name="titre_expertise" id="titre_expertise" cols="30" rows="2" class="form-control">{{ $expertise->titre_expertise }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="expertise">Expertise</label>
                                        <textarea id="expertise{{ $expertise->id }}" name="expertise" class="form-control">{{ $expertise->expertise }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter expertise</button>
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
    <script>
        ClassicEditor
            .create(document.querySelector('#expertise{{ $expertise->id }}'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#deleteExperte{{ $expertise->id }}').on('click', function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, Supprimer !'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Effectué!',
                            'Your file has been deleted.',
                            'success'
                        )
                        window.location.href = "/admin/delete-expertise/{{ $expertise->id }}";
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
