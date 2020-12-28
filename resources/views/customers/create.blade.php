<div class="modal fade create-modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Adicionar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form class="needs-validation" novalidate method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Primeiro nome" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="apelido">Apelido</label>
                                <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Último nome" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dt-nascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="dt-nascimento" name="dt-nascimento" placeholder="Data de nascimeto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sexo">Nacionalidade</label>
                                <select class="form-control" id="nacionalidade" name="nacionalidade">
                                    <option>Selecione</option>
                                    <option selected value="Moçambique">Moçambique</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sexo">Estado Civíl</label>
                                <select class="form-control" id="estado" name="estado" required>
                                    <option>Selecione</option>
                                    <option value="Solteiro">Solteiro (a)</option>
                                    <option value="Casado">Casado (a)</option>
                                    <option value="Viúvo">Viúvo (a)</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                <select class="form-control" id="sexo" name="sexo">
                                    <option>Selecione</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bi">BI</label>
                                <input type="text" class="form-control input-mask" data-inputmask="'mask': '9999999999999a'" id="bi" name="bi" placeholder="Número do BI" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="NUIT">NUIT</label>
                                <input type="number" class="form-control" id="nuit" name="nuit" placeholder="NUIT" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control input-mask" data-inputmask="'mask': '999999999'" id="telefone" name="telefone" placeholder="Número de Telefone" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control input-mask" data-inputmask="'alias': 'email'" inputmode="email" id="email" name="email" placeholder="Email">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rua">Rua</label>
                                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua/Av" required>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="casa">Casa</label>
                                <input type="text" class="form-control" id="casa" name="casa" placeholder="Número da Casa" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary float-right" type="submit">Submeter</button>
                </form>
            </div>
        </div>
    </div>
</div>