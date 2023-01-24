<div class="modal fade" id="modal-primary-info" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Mes informations profile</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-10">
                    <p>Nom: <b>{{ Auth::guard('admin')->user()->nom }}</b></p>
                    <p>Prenom: <b>{{ Auth::guard('admin')->user()->prenoms }}</b></p>
                    <p>Poste: <b>{{ Auth::guard('admin')->user()->poste }}</b></p>
                    <p>E-mail: <b>{{ Auth::guard('admin')->user()->email }}</b></p>
                    <p>Téléphone: <b>{{ Auth::guard('admin')->user()->telephone }}</b></p>
                    @if (Auth::guard('admin')->user()->pole)
                    <p>Pole: <b>{{ Auth::guard('admin')->user()->pole }}</b></p>
                    @endif

                    </div>
                </div>
            </div>
            <div class="d-flex align-self-center mb-3">
            <button type="submit" class="btn btn-danger"data-dismiss="modal">Fermer</button>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
