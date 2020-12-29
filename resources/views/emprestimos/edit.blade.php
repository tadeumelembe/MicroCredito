<div class="modal fade edit-modal" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="edit-modal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="edit-modal">Novo Empréstimo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form id="edit-form" class="needs-validation" novalidate method="post">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e-customer">Cliente</label>
                                <select id="e-customer" name="customer" class="form-control select2">
                                    <option> </option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="AZ">Arizona</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e-taxa-juro">Taxa de Juro</label><br>
                                <div class="input-group">
                                    <span class="input-group-addon input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </span>
                                    <input type="text" id="e-taxa-juro" name="taxa-juro" data-bts-prefix="mt" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" inputmode="numeric" value="5">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e-valor-concedido">Valor Concedido</label>
                                <div class="input-group">
                                    <span class="input-group-addon input-group-prepend">
                                        <span class="input-group-text">MT</span>
                                    </span>
                                    <input type="text" id="e-valor-concedido" name="valor-concedido" data-bts-prefix="mt" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" inputmode="numeric">
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefone">Valor Total</label><br>
                                <h5 class="text-success" id="valor-total" for="telefone">MT 0</h5>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="edit-submit" class="btn btn-primary float-right" type="submit">Submeter</button>
                <button data-dismiss="modal" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>