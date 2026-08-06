<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">Nome / Fantasia<span class="required">*</span></label>
                       <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="nome2" class="control-label">Apelido</label>
                        <div class="controls">
                            <input id="nome2" type="text" name="nome2" value="<?php echo set_value('nome2'); ?>"  />
                        </div>
                    </div>

		            <div class="control-group">
                        <label for="razaoSocial" class="control-label">Razão Social</label>
                        <div class="controls">
                            <input id="razaoSocial" type="text" name="razaoSocial" value="<?php echo set_value('razaoSocial'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="obsCliente" class="control-label">Observações</label>
                        <div class="controls">
                            <input id="obsCliente" type="text" name="obsCliente" value="<?php echo set_value('obsCliente'); ?>"  />
                        </div>
                    </div>

		            <div class="control-group">
                        <label for="dataNascimento" class="control-label">Data de Nascimento</label>
                        <div class="controls">
                            <input id="dataNascimento" class"span12 datepicker" type="text" name="dataNascimento" placeholder="dd/mm/yyyy" value=""  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="tipoDocCliente" class="control-label">Tipo do Documento<span class="required">*</span></label>
                        <div class="controls">
                            <select id="tipoDocCliente" type="text" name="tipoDocCliente">
                                <option disabled selected>Selecione</option>
                                <option value="CPF">CPF</option>
                                <option value="CNPJ">CNPJ</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="documento" class="control-label">CPF/CNPJ<span class="required">*</span></label>
                        <div class="controls">
                            <input id="documento" type="text" name="documento" value="<?php echo set_value('documento'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="inscriMunic" class="control-label">Inscrição Municipal</label>
                        <div class="controls">
                            <input id="inscriMunic" type="text" name="inscriMunic" value="<?php echo set_value('inscriMunic'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="inscriEstad" class="control-label">Inscrição Estadual</label>
                        <div class="controls">
                            <input id="inscriEstad" type="text" name="inscriEstad" value="<?php echo set_value('inscriEstad'); ?>"  />
                        </div>
                    </div>

		            <div class="control-group">
                        <label for="contato" class="control-label">Contato</label>
                        <div class="controls">
                            <input id="contato" type="text" name="contato" value="<?php echo set_value('contato'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="telefoneCliente" class="control-label">Telefone 1</label>
                        <div class="controls">
                            <input id="telefoneCliente" type="text" name="telefoneCliente" value="<?php echo set_value('telefoneCliente'); ?>"  />
                        </div>
                    </div>
                    
		            <div class="control-group">
                        <label for="telefone2" class="control-label">Telefone 2</label>
                        <div class="controls">
                            <input id="telefone2" type="text" name="telefone2" value="<?php echo set_value('telefone2'); ?>"  />
                        </div>
                    </div>
                            
		            <div class="control-group">
                        <label for="celular" class="control-label">Celular 1<span class="required">*</span></label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular" value="<?php echo set_value('celular'); ?>"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label for="celular2" class="control-label">Celular 2</label>
                        <div class="controls">
                            <input id="celular2" type="text" name="celular2" value="<?php echo set_value('celular2'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="emailCliente" class="control-label">Email Principal</label>
                        <div class="controls">
                            <input id="emailCliente" type="text" name="emailCliente" value="<?php echo set_value('emailCliente'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email2Cliente" class="control-label">Email Alternativo</label>
                        <div class="controls">
                            <input id="email2Cliente" type="text" name="email2Cliente" value="<?php echo set_value('email2Cliente'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CEP<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cep" type="text" name="cep" onblur="pesquisacep(this.value);" value="<?php echo set_value('cep'); ?>"   />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label">Logradouro<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rua" type="text" name="rua" value="<?php echo set_value('rua'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label">Número<span class="required">*</span></label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value="<?php echo set_value('numero'); ?>"  />
                        </div>
                    </div>
                    
		            <div class="control-group">
                        <label for="endComplemento" class="control-label">Complemento</label>
                        <div class="controls">
                            <input id="endComplemento" type="text" name="endComplemento" value="<?php echo set_value('endComplemento'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label">Bairro<span class="required">*</span></label>
                        <div class="controls">
                            <input id="bairro" type="text" name="bairro" value="<?php echo set_value('bairro'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">Cidade<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cidade" type="text" name="cidade" value="<?php echo set_value('cidade'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label">Estado<span class="required">*</span></label>
                        <div class="controls">
                            <input id="uf" type="text" name="estado" value="<?php echo set_value('estado'); ?>"  />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url()?>js/jquery-1.2.6.pack.js"></script>
<script src="<?php echo base_url()?>js/jquery.maskedinput-1.1.4.pack.js"></script>
<script src="<?php echo base_url()?>js/jquery.validate.js"></script>

<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: true},
                  tipoDocCliente:{ required: true},
                  documento:{ required: true},
                  celular:{ required: true},
                  rua:{ required: true},
                  numero:{ required: true},
                  bairro:{ required: true},
                  cidade:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages:{
                  nomeCliente :{ required: 'Campo Requerido.'},
                  tipoDocCliente :{ required: 'Campo Requerido.'},
                  documento :{ required: 'Campo Requerido.'},
                  celular:{ required: 'Campo Requerido.'},
                  rua:{ required: 'Campo Requerido.'},
                  numero:{ required: 'Campo Requerido.'},
                  bairro:{ required: 'Campo Requerido.'},
                  cidade:{ required: 'Campo Requerido.'},
                  estado:{ required: 'Campo Requerido.'},
                  cep:{ required: 'Campo Requerido.'}

            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            
	    unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });

           $("#cep").mask("99999-999");
           $("#dataNascimento").mask("99/99/9999");
      });

      $('#tipoDocCliente').change(function () {
            if (document.getElementById('tipoDocCliente').value == "CPF") {
                $("#documento").unmask();
                $("#documento").mask("999.999.999-99");
            } else {
                $("#documento").unmask();
                $("#documento").mask("99.999.999/9999-99");
            }
        });

      function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('numero').value=("");
      }

      function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
      }

      function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('numero').value="";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);
                document.getElementById('numero').focus('');

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
      };
</script>
