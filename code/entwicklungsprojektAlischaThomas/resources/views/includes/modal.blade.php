<div class="modal fade" id="scriptmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Skript Eintrag erstellen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addform" action="{{ route('scripts.store') }}" method="POST">
                <div class="modal-body">
                    <div class="container">
                        @csrf

                        <div class="row">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Szenennr</strong>
                                        <input type="text" name="Szenennr" class="form-control" placeholder="Szenennr:z.B. 1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Einstellungsnr</strong>
                                        <input type="text" name="Einstellungsnr" class="form-control" placeholder="Einstellungsnr z.B. 1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Bildbeschreibung</strong>
                                        <textarea name="Bildbeschreibung" class="form-control" style="height:150px" placeholder="Bildbeschreibung"></textarea>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Kamera</strong>
                                        <textarea name="Kamera" class="form-control" style="height:150px" placeholder="Kamera"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Ort</strong>
                                        <textarea name="Ort" class="form-control" style="height:150px" placeholder="Ort"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Ton</strong>
                                        <textarea name="Ton" class="form-control" style="height:150px" placeholder="Ton"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Effekt</strong>
                                        <textarea name="Effekt" class="form-control" style="height:150px" placeholder="Effekt"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" id="addform">Eintrag speichern</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
            </div>
        </div>
    </div>
</div>
