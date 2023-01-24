{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
<div class="text-center form-down">
    <div class="text-center">
        <p class="telecharger" style="margin: 10px auto;">
            <a href="#" id="telecharger" class="btn" data-bs-toggle="modal" data-bs-target="#trainingDownload">
                Téléchargez le catalogue
            </a><br>
            <span id="download_result" style="width: 100%"></span>
        </p>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="trainingDownload" tabindex="-1" aria-labelledby="trainingDownloadLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="trainingDownloadLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show showErrors" role="alert"
                        style="display: none; text-align: left">
                        <ul>
                            <li id="showErrorsnom"></li>
                            <li id="showErrorsemail"></li>
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                    <div id="formulaire">
                        <form method="POST" id="formulairedown">@csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom" required id="nom"
                                    name="nom">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" required id="email"
                                    name="email">
                            </div>
                            <div class="spinner-border text-primary" role="status" style="display: none" id="animation_down">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button> --}}
                                <button class="btn telecharger" type="button" id="down">Télécharger</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Button trigger modal -->
