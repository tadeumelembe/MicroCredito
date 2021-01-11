<div class="modal fade create-modal" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="create-modal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="create-modal">Novo Empréstimo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form id="create-form" class="needs-validation" novalidate method="post" action="{{route('emprestimos.store')}}">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Cliente</label>
                                <select id="Customer" name="customer_id" class="form-control select2">

                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="taxa-juro">Taxa de Juro</label><br>
                                <div class="input-group">
                                    <span class="input-group-addon input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </span>
                                    <input type="text" id="taxa-juro" name="taxaJuro" data-bts-prefix="MT" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" inputmode="numeric" value="5">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor-concedido">Valor Concedido</label>
                                <div class="input-group">
                                    <span class="input-group-addon input-group-prepend">
                                        <span class="input-group-text">MT</span>
                                    </span>
                                    <input type="number" id="valor-concedido" name="valorConcedido" data-bts-prefix="mt" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0'" inputmode="numeric">
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefone">Valor a Pagar</label><br>
                                <h5 class="text-success" id="valor-total" for="telefone">MT 0</h5>
                                <input type="number" class="invisible" id="valorDivida" name="valorDivida">
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
