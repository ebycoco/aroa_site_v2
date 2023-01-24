@foreach ($articles as $article)
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
            <div class="card-header text-muted border-bottom-0">
                {{ \Illuminate\Support\Str::limit(strip_tags($article->title_article), 30, $end = '...') }}
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        {!! \Illuminate\Support\Str::limit(strip_tags($article->article_fr), 120, $end = '...') !!}
                    </div>
                    <div class="col-5 text-center mt-5">
                        <img src="{{ asset('public/images/articles/' . $article->image_article) }}" alt="user-avatar"
                            class="img-circle img-fluid">
                    </div>
                </div>
                <p class="text-muted text-sm mt-5">
                    <b>Pôle: </b>{{ \App\Models\Pole::where('id', $article->pole_id)->get()->first()->nom_pole }}
                </p>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button type="button" data-toggle="modal" data-target="#modal-view-article{{ $article->id }}"
                        class="btn btn-sm btn-secondary">
                        <i class="fas fa-eye"></i>
                    </button>
                    {{-- <button type="button" data-toggle="modal" data-target="#modal-edit-article{{ $article->id }}"
                        class="btn btn-sm btn-primary">
                        <i class="fas fa-edit"></i>
                    </button> --}}
                    @role('admin')
                        <a href="{{ route('admin.update.article', $article->id) }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></a>
                        <button type="button" class="btn btn-sm btn-danger" id="deleteArticle{{ $article->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    @endrole
                </div>
                <div class="modal fade" id="modal-view-article{{ $article->id }}" style="display: none;"
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
                                        {{ $article->title_article }}
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                {!! $article->article_fr !!}
                                                <p class="text-muted text-sm mt-5"><b>Pôle:
                                                    </b>{{ \App\Models\Pole::where('id', $article->pole_id)->get()->first()->nom_pole }}
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
                <div class="modal fade" id="modal-edit-article{{ $article->id }}" style="display: none;"
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
                                <form action="{{ route('admin.edit.article', $article->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="old_title" value="{{ $article->title_article }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pole_id">Choisir Pôle</label>
                                        <select name="pole_id" id="pole_id" class="form-control">
                                            <option value="">Sélectionner le pôle</option>
                                            @foreach (\App\Models\Pole::get() as $pole)
                                                <option value="{{ $pole->id }}"
                                                    @if ($article->pole_id == $pole->id) selected @endif>
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
                                                    @if ($article->category_id == $category->id) selected @endif>
                                                    {{ $category->title_category }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title_article">Titre article</label>
                                        <textarea name="title_article" id="title_article" cols="30" rows="2" class="form-control">{{ $article->title_article }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_article">Titre article</label>
                                        <input type="file" name="image_article" id="image_article"
                                            class="form-control">
                                        <img src="{{ asset('public/images/articles/' . $article->image_article) }}"
                                            alt="{{ $article->image_article }}" width="200" class="mt-2">
                                    </div>
                                    <div class="form-group">
                                        <label for="update_article_fr">Article en français</label>
                                        <textarea id="update_article_fr{{ $article->id }}" name="update_article_fr" class="form-control">{!! $article->article_fr !!}</textarea>
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
            .create(document.querySelector('#update_article_fr{{ $article->id }}'))
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
            $('#deleteArticle{{ $article->id }}').on('click', function() {
                Swal.fire({
                    title: 'Sûr de vouloir supprimer?',
                    text: "{{ $article->title_article }}!",
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
                        window.location.href = "/admin/delete-article/{{ $article->id }}";
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
