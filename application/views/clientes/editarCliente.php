<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Editar Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal">
                    <div class="control-group">
                        <?php echo form_hidden('idClientes', $result->idClientes) ?>
                        <label for="nomeCliente" class="control-label">Nome / Fantasia<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo $result->nomeCliente; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="nome2" class="control-label">Apelido</label>
                        <div class="controls">
                            <input id="nome2" type="text" name="nome2" value="<?php echo $result->nome2; ?>" />
                        </div>
                    </div>


                    <div class="control-group">
                        <label for="razaoSocial" class="control-label">Razão Social</label>
                        <div class="controls">
                            <input id="razaoSocial" type="text" name="razaoSocial" value="<?php echo $result->razaoSocial; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="obsCliente" class="control-label">Observações</label>
                        <div class="controls">
                            <input id="obsCliente" type="text" name="obsCliente" value="<?php echo $result->obsCliente; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="dataNascimento" class="control-label">Data de Nascimento</label>
                        <div class="controls">
                            <input id="dataNascimento" type="text" name="dataNascimento" value="<?php echo date('d/m/Y', strtotime($result->dataNascimento)); ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="tipoDocCliente" class="control-label">Tipo do Documento<span class="required">*</span></label>
                        <div class="controls">
                            <select id="tipoDocCliente" name="tipoDocCliente">
                                <?php if ($result->tipoDocCliente == "CPF") { ?>
                                    <option selected="selected" value="CPF"><?php echo $result->tipoDocCliente; ?></option>
                                    <option value="CNPJ">CNPJ</option>
                                <?php } else { ?>
                                    <option value="CPF">CPF</option>
                                    <option selected="selected" value="CNPJ"><?php echo $result->tipoDocCliente; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="documento" class="control-label">CPF/CNPJ<span class="required">*</span></label>
                        <div class="controls">
                            <input id="documento" type="text" name="documento" value="<?php echo $result->documento; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="inscriMunic" class="control-label">Inscrição Municipal</label>
                        <div class="controls">
                            <input id="inscriMunic" type="text" name="inscriMunic" value="<?php echo $result->inscriMunic; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="inscriEstad" class="control-label">Inscrição Estadual</label>
                        <div class="controls">
                            <input id="inscriEstad" type="text" name="inscriEstad" value="<?php echo $result->inscriEstad; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="contato" class="control-label">Contato</label>
                        <div class="controls">
                            <input id="contato" type="text" name="contato" value="<?php echo $result->contato; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="telefoneCliente" class="control-label">Telefone 1</label>
                        <div class="controls">
                            <input id="telefoneCliente" type="text" name="telefoneCliente" value="<?php echo $result->telefoneCliente; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="telefone2" class="control-label">Telefone 2</label>
                        <div class="controls">
                            <input id="telefone2" type="text" name="telefone2" value="<?php echo $result->telefone2; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Celular 1<span class="required">*</span></label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular" value="<?php echo $result->celular; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular2" class="control-label">Celular 2</label>
                        <div class="controls">
                            <input id="celular2" type="text" name="celular2" value="<?php echo $result->celular2; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="emailCliente" class="control-label">Email Principal</label>
                        <div class="controls">
                            <input id="emailCliente" type="text" name="emailCliente" value="<?php echo $result->emailCliente; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email2Cliente" class="control-label">Email Alternativo</label>
                        <div class="controls">
                            <input id="email2Cliente" type="text" name="email2Cliente" value="<?php echo $result->email2Cliente; ?>" />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CEP<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cep" type="text" name="cep" onblur="pesquisacep(this.value);" value="<?php echo $result->cep; ?>" />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label">Logradouro<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rua" type="text" name="rua" value="<?php echo $result->rua; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label">Número<span class="required">*</span></label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value="<?php echo $result->numero; ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="endComplemento" class="control-label">Complemento</label>
                        <div class="controls">
                            <input id="endComplemento" type="text" name="endComplemento" value="<?php echo $result->endComplemento; ?>" />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label">Bairro<span class="required">*</span></label>
                        <div class="controls">
                            <input id="bairro" type="text" name="bairro" value="<?php echo $result->bairro; ?>" />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">Cidade<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cidade" type="text" name="cidade" value="<?php echo $result->cidade; ?>" />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="uf" class="control-label">Estado<span class="required">*</span></label>
                        <div class="controls">
                            <input id="uf" type="text" name="estado" value="<?php echo $result->estado; ?>" />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Salvar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>js/jquery-1.2.6.pack.js"></script>
<script src="<?php echo base_url() ?>js/jquery.maskedinput-1.1.4.pack.js"></script>
<script src="<?php echo base_url() ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/js/general-masks.js"></script>
<script src="<?php echo base_url() ?>assets/js/cep.js"></script>
<script src="<?php echo base_url() ?>assets/js/clientes/document.js"></script>
<script src="<?php echo base_url() ?>assets/js/clientes/validate.js"></script>
