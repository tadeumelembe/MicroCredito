<div class="modal fade create-modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="create-modal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="create-modal">Adicionar Parente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <form id="create-form" class="needs-validation" novalidate method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Primeiro nome" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="surname">Apelido</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Último nome" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthdate">Data de Nascimento</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Data de nascimeto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nationality">Grau de Parentesco</label>
                                <select class="form-control" id="grau-parentesco" name="grau-parentesco">
                                    <option>Selecione</option>
                                    <option value="Pai">Pai/Mãe</option>
                                    <option value="Filho">FIlho (a)</option>
                                    <option value="Esposo">Esposo (a)</option>
                                    <option value="Irmão">Irmão (a)</option>
                                    <option value="Primo">Primo (a)</option>
                                    <option value="Sobrinho">Sobrinho (a)</option>
                                    <option value="Amigo">Amigo (a)</option>
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
                                <label for="estado">Estado Civíl</label>
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
                                <label for="gender">Sexo</label>
                                <select class="form-control" id="gender" name="gender">
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
                                <input type="text" class="form-control input-mask" data-inputmask="'mask': '9999999999999a'" id="doc-number" name="doc-number" placeholder="Número do BI" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nuit">NUIT</label>
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
                                <label for="phone-number">Telefone</label>
                                <input type="text" class="form-control input-mask" data-inputmask="'mask': '999999999'" id="phone-number" name="phone-number" placeholder="Número de Telefone" required>
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

                </form>
            </div>
            <div class="modal-footer">
                <button id="create-submit" class="btn btn-secondary float-right">Submeter</button>
                <button data-dismiss="modal" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>