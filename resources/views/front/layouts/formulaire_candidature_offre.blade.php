<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary" data-toggle="modal"
            data-target="#exampleModal">@lang('home.Postuler')</a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="color: #000">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">@lang('home.Postuler')</h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <form id="commentForm" name="commentForm">
                                <div class="form-outline mb-4"><label class="form-label"
                                        for="nom"><b>@lang('home.Nom')</b></label>
                                    <input type="text" id="nom"
                                        style="border: 1px solid #ddd; width:100%; border-radius: 8px; height:40px"
                                        name="nom" />

                                </div>
                                <div class="form-outline mb-4"><label class="form-label"
                                        for="prenoms"><b>@lang('home.Prénoms')</b></label>
                                    <input type="text" id="prenoms"
                                        style="border: 1px solid #ddd; width:100%; border-radius: 8px; height:40px"
                                        name="prenoms" />

                                </div>
                                <div class="form-outline mb-4"><label class="form-label"
                                        for="email"><b>@lang('home.Email')</b></label>
                                    <input type="email" id="email"
                                        style="border: 1px solid #ddd; width:100%; border-radius: 8px; height:40px"
                                        name="email" />

                                </div>


                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label"
                                            for="cv"><b>@lang('home.CV')</b></label>
                                        <input type="file" id="cv"
                                            style="border: 1px solid #ddd; width:100%; border-radius: 8px; height:40px"
                                            name="cv" />

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="lm"><b>@lang('home.Lettre de
                                                motivation')</b></label>
                                        <input type="file" id="lm"
                                            style="border: 1px solid #ddd; width:100%; border-radius: 8px; height:40px"
                                            name="lm" />

                                    </div>
                                </div>

                                <!-- Submit button -->

                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">@lang('home.Fermer')</button>
                                    <button type="submit" class="btn btn-primary"
                                        id="postule">@lang('home.Postuler')</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>