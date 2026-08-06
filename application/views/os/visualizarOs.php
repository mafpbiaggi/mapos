<?php $totalServico = 0; $totalProdutos = 0;?>
<div class="row-fluid" style="margin-top: 0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-tags"></i>
                </span>
                <h5>Ordem de Serviço</h5>
                <div class="buttons">
                    <?php if($this->permission->checkPermission($this->session->userdata('permissao'),'eOs')){
                        echo '<a title="Icon Title" class="btn btn-mini btn-info" href="'.base_url().'index.php/os/editar/'.$result->idOs.'"><i class="icon-pencil icon-white"></i> Editar</a>'; 
                    } ?>
                    
                    <a id="imprimir" title="Imprimir" class="btn btn-mini btn-inverse" href=""><i class="icon-print icon-white"></i> Imprimir</a>
                </div>
            </div>
            <div class="widget-content" id="printOs">
                <div class="invoice-content">
                    <div class="invoice-head" style="margin-bottom: 0">

                        <table class="table" style="margin-top: 0; margin-bottom: 0">
                            <tbody>
                                <?php if($emitente == null) {?>
                                            
                                <tr>
                                    <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a><<<</td>
                                </tr>
                                <?php } else {?>
                                <tr>
                                    <td style="width: 25%"><img src=" <?php echo $emitente[0]->url_logo; ?> "></td>
                                    <td> <span style="font-size: 13px; "> <b> <?php echo $emitente[0]->nome; ?> </b> </span> </br> <span style="font-size: 12px; "> <?php echo $emitente[0]->rua.', '.$emitente[0]->numero.' - '.$emitente[0]->bairro.' - '.$emitente[0]->cidade.' - '.$emitente[0]->uf; ?> </span> </br> <span style="font-size: 12px; "> E-mail: <?php echo $emitente[0]->email; ?></span> </br> <span style="font-size: 12px;"> Fone: <?php echo $emitente[0]->telefone.' | WhatsApp: '.$emitente[0]->whatsapp; ?></span></td>
                                    <td style="width: 20%; text-align: right;">O.S.: <span><?php echo $result->idOs?></span></br></br><span style="font-size: 12px;">Entrada: <?php echo date('d/m/Y' ,strtotime($result->dataInicial))?></br><?php if ($result->dataFinal != "0000-00-00") {?>Saída: <?php echo date('d/m/Y' ,strtotime($result->dataFinal));}?></span></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
			
                
                        <table class="table" style="margin-bottom: 0; margin-top: 0">
                            <tbody>
                                <tr>
                                    <td style="width: 70%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span><h5>Cliente</h5></span>

                                                <?php if($result->razaoSocial != null) {?>
	                                                <span style="font-size: 12px; ">Nome Fantasia: </span><span style="font-size: 14px;"><?php echo $result->nomeCliente?></span><br/>
        	                                        <span style="font-size: 12px; ">Razão Social: <?php echo $result->razaoSocial?></span><br/>
                                                <?php } else {?>
                	                                <span style="font-size: 12px; ">Nome: </span><span style="font-size: 14px;"><?php echo $result->nomeCliente?></span><br/>
						<?php }?> 
					        <font style="font-size: 12px; "><span>Endereço: <?php echo $result->rua?>, <?php echo $result->numero?> <?php echo $result->endComplemento?>, <?php echo $result->bairro?> - <?php echo $result->cidade?> - <?php echo $result->estado?></span><br/>
						<span>Telefone 1: <?php echo $result->telefoneCliente?> | Telefone 2: <?php echo $result->telefone2?></span><br/>
					    	<span>Celular 1: <?php echo $result->celular?> | Celular 2: <?php echo $result->celular2?></span><br/>
					    	<span>E-mail: <?php echo $result->emailCliente?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width:30%; padding-left: 45px; text-align: right">
                                        <ul>
                                            <li>
						
                                                <span><h5>Laboratório Técnico</h5></span>
                                                <span style="font-size: 12px;">Responsável: </span><span style="font-size: 14px;"><?php echo $result->nome?></span>
                                                <!--
						                        <font style="font-size: 12px; "><span>Telefone: <//?php echo $result->telefone?></span><br/>
                                                <span>Email: <//?php echo $result->email?></span></font>
                                                -->
					    </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table> 
      
                    </div>

                    <div style="margin-top: 0; padding-top: 0; margin-bottom: 0; padding-bottom: 0">

                    <?php if($result->descricaoProduto != null){?>
                    <hr style="margin-top: 0; margin-bottom: 0;">
                    <h5>Descrição</h5>
                    <p>
                        <?php echo $result->descricaoProduto?>
                        
                    </p>
                    <?php }?>

                    <?php if($result->defeito != null){?>
                    <hr style="margin-top: 0; margin-bottom: 0;">
                    <h5>Defeito Informado</h5>
                    <p>
                        <?php echo $result->defeito?>
                    </p>
                    <?php }?>

                    <?php if($result->laudoTecnico != null){?>
                    <hr style="margin-top: 0; margin-bottom: 0;">
                    <h5>Laudo Técnico / Orçamento</h5>
                    <p>
                        <?php echo $result->laudoTecnico?>
                    </p>
                    <?php }?>

                    <?php if($result->observacoes != null){?>
                    <hr style="margin-top: 0; margin-bottom: 0;">
                    <h5>Observações</h5>
                    <p>
                        <?php echo $result->observacoes?>
                    </p>
                    <?php }?>

                    <?php if($result->garantia != null){?>
                    <hr style="margin-top: 0; margin-bottom: 0;">
                    <h5>Garantia</h5>
                    <p style="font-size: 20px";>
                        <?php echo $result->garantia?>
                    </p>
                    <?php }?>

                        <?php if($produtos != null){?>
                        <br />
                        <table class="table table-bordered" id="tblProdutos">
                                    <thead>
                                        <tr>
                                            <th>Produto(s)</th>
                                            <th>Quantidade</th>
                                            <th>Preço</th>
                                            <th>Desconto</th>
                                            <th>Sub-total Produto(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach ($produtos as $p) {

                                            $totalProdutos = $totalProdutos + $p->subTotal;
                                            echo '<tr>';

                                            //Paliativo para preencher a visualizacão da OS enquanto ainda já registros vazios.
                                            if ($p->descriProd_os == NULL || $p->descriProd_os == ""){
                                                echo '<td style="font-size: 12px"> '.$p->descricao.'</td>';
                                            } else {
                                                echo '<td style="font-size: 12px" >'.$p->descriProd_os.'</td>';
                                            }

                                            echo '<td style="width: 100px; font-size: 12px; text-align: center">'.$p->quantidade.'</td>';
                                            echo '<td style="width:  80px; font-size: 12px; text-align: right">R$ '.number_format($p->precoProd_os,2,',','.').'</td>';
                                            echo '<td style="width:  80px; font-size: 12px; text-align: right">R$ '.number_format($p->descProd_os,2,',','.').'</td>';
                                            echo '<td style="width: 100px; font-size: 12px; text-align: right">R$ '.number_format($p->subTotal,2,',','.').'</td>';
                                            echo '</tr>';
                                        }?>

                                        <tr>
                                            <td colspan="4" style="text-align: right"><strong>Total:</strong></td>
                                            <td style="text-align: right"><strong>R$ <?php echo number_format($totalProdutos,2,',','.');?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                               <?php }?>

                        <?php if($servicos != null){?>
                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Serviço(s)</th>
                                                <th>Quantidade / Horas</th>
                                                <th>Preço</th>
                                                <th>Desconto</th>
                                                <th>Sub-total Serviço(s)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        setlocale(LC_MONETARY, 'en_US');
                                        foreach ($servicos as $s) {

					                        $totalServico = $totalServico + $s->subTotal;
                                            echo '<tr>';

                                            //Paliativo para preencher a visualizacão da OS enquanto ainda já registros vazios.
                                            if ($s->descriSrv_os == NULL || $s->descriSrv_os == ""){
                                                echo '<td style="font-size: 12px" >'.$s->descricao.'</td>';
                                            } else {
                                                echo '<td style="font-size: 12px" >'.$s->descriSrv_os.'</td>';
                                            }

                                            echo '<td style="width: 100px; font-size: 12px; text-align: center">'.$s->quantServico.'</td>';
                                            echo '<td style="width: 80px; font-size: 12px; text-align: right">R$ '.number_format($s->precoSrv_os,2,',','.').'</td>';
                                            echo '<td style="width: 80px; font-size: 12px; text-align: right">R$ '.number_format($s->descSrv_os,2,',','.').'</td>';
                                            echo '<td style="width: 100px; font-size: 12px; text-align: right">R$ '.number_format($s->subTotal, 2, ',', '.').'</td>';
                                            echo '</tr>';
                                        }?>

                                        <tr>
                                            <td colspan="4" style="text-align: right"><strong>Total:</strong></td>
                                            <td style="text-align: right"><strong>R$ <?php  echo number_format($totalServico, 2, ',', '.');?></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                        <?php }?>
                        <hr />

			<?php if(($totalProdutos + $totalServico) != 0) {?>
		    	<h4 style="text-align: right">Valor Total: R$ <?php echo number_format($totalProdutos + $totalServico,2,',','.');}?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#imprimir").click(function(){         
            PrintElem('#printOs');
        })

        function PrintElem(elem)
        {
            Popup($(elem).html());
        }

        function Popup(data)
        {
            var mywindow = window.open('', 'MapOs', 'height=600,width=800');
            mywindow.document.write('<html><head><title>OS | Visualizar Impressão</title>');
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap.min.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/bootstrap-responsive.min.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/matrix-style.css' />");
            mywindow.document.write("<link rel='stylesheet' href='<?php echo base_url();?>assets/css/matrix-media.css' />");


            mywindow.document.write("</head><body >");
            mywindow.document.write(data);
            
            mywindow.document.write("</body></html>");

            setTimeout(function(){ mywindow.print(); }, 35);
            //mywindow.print();
            //mywindow.close();

            return true;
        }

    });
</script>
