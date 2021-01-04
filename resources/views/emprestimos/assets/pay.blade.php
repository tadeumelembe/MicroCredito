<div class="modal fade pay-modal" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="pay-modal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="pay-modal">Novo Prestação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form id="pay-form" class="needs-validation" novalidate method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor">Valor a pagar</label>
                                <div class="input-group">
                                    <span class="input-group-addon input-group-prepend">
                                        <span class="input-group-text">MT</span>
                                    </span>
                                    <input type="text" id="valor" name="valor" data-bts-prefix="mt" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" inputmode="numeric">
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefone">Valor a Remanescente</label><br>
                                <h5 class="text-success" id="valor-remanescente" for="telefone">MT 0</h5>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="create-submit" class="btn btn-secondary float-right" type="submit">Submeter</button>
                <button data-dismiss="modal" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>