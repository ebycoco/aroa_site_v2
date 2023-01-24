@foreach ($emplois as $emploi)
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                {{ \Illuminate\Support\Str::limit(strip_tags($emploi->title_offre), 30, $end = '...') }}
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        {!! \Illuminate\Support\Str::limit(strip_tags($emploi->content_fr), 120, $end = '...') !!}
                    </div>
                    <div class="col-5 text-center mt-5">
                        <img src="{{ asset('public/images/offres/' . $emploi->image_offre) }}" alt="user-avatar"
                            class="img-circle img-fluid">
                    </div>
                </div>
                <p class="text-muted text-sm mt-5">
                    <b>Pôle: </b>{{ \App\Models\Pole::where('id', $emploi->pole_id)->get()->first()->nom_pole }}
                </p>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button type="button" data-toggle="modal" data-target="#modal-view-article{{ $emploi->id }}"
                        class="btn btn-sm btn-secondary">
                        <i class="fas fa-eye"></i>
                    </button>
                    {{-- <button type="button" data-toggle="modal" data-target="#modal-edit-article{{ $emploi->id }}"
                        class="btn btn-sm btn-primary">
                        <i class="fas fa-edit"></i>
                    </button> --}}
                    @role('admin|editeur')
                        <a href="{{ route('admin.update.offre', $emploi->id) }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></a>
                        <button type="button" class="btn btn-sm btn-danger" id="deleteOffre{{ $emploi->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    @endrole
                </div>
                <div class="modal fade" id="modal-view-article{{ $emploi->id }}" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Voir l'article</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header text-muted border-bottom-0">
                                        {{ $emploi->title_offre }}
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                {!! $emploi->content_fr !!}
                                                <p class="text-muted text-sm mt-5"><b>Pôle:
                                                    </b>{{ \App\Models\Pole::where('id', $emploi->pole_id)->get()->first()->nom_pole }}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal de modificaton de l'expertise --}}
                <div class="modal fade" id="modal-edit-article{{ $emploi->id }}" style="display: none;"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Voir l'article</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.edit.article', $emploi->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="old_title" value="{{ $emploi->title_offre }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pole_id">Choisir Pôle</label>
                                        <select name="pole_id" id="pole_id" class="form-control">
                                            <option value="">Sélectionner le pôle</option>
                                            @foreach (\App\Models\Pole::get() as $pole)
                                                <option value="{{ $pole->id }}"
                                                    @if ($emploi->pole_id == $pole->id) selected @endif>
                                                    {{ $pole->nom_pole }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Choisir Pôle</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">Sélectionner le pôle</option>
                                            @foreach (\App\Models\CategoryArticle::get() as $category)
                                                <option value="{{ $category->id }}"
                                                    @if ($emploi->category_id == $category->id) selected @endif>
                                                    {{ $category->title_category }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title_offre">Titre article</label>
                                        <textarea name="title_offre" id="title_offre" cols="30" rows="2" class="form-control">{{ $emploi->title_offre }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_offre">Titre article</label>
                                        <input type="file" name="image_offre" id="image_offre" class="form-control">
                                        <img src="{{ asset('public/images/articles/' . $emploi->image_offre) }}"
                                            alt="{{ $emploi->image_offre }}" width="200" class="mt-2">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_offre_fr">Article en français</label>
                                        <textarea id="update_offre_fr{{ $emploi->id }}" name="update_offre_fr" class="form-control">{!! $emploi->article_fr !!}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Modifier article</button>
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
            .create(document.querySelector('#update_offre_fr{{ $emploi->id }}'))
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
            $('#deleteOffre{{ $emploi->id }}').on('click', function() {
                Swal.fire({
                    title: 'Sûr de vouloir supprimer?',
                    text: "{{ $emploi->title_offre }}!",
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
                        window.location.href = "/admin/delete-offre/{{ $emploi->id }}";
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
