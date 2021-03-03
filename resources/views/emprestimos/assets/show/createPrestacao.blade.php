<div class="modal fade create-modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="create-modal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="create-modal">Pagar emprestimo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form id="create-parente-form" class="needs-validation" novalidate method="post" action="{{url('parentes/create')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="valor">Valor a pagar</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">MT</span>
                                    </div>
                                    <input type="number" name="valor" id="valor" class="form-control" placeholder="Valor">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="create-parente" class="btn btn-secondary float-right">Submeter</button>
                <button data-dismiss="modal" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>