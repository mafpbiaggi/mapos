<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/visualiza-clientes.css" />

<div class="widget-box">
    <div class="widget-title">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Dados do Cliente</a></li>
            <li><a data-toggle="tab" href="#tab2">Ordens de Serviço</a></li>
            <div class="buttons">
                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                    echo '<a title="Icon Title" class="btn btn-mini btn-info" href="' . base_url() . 'index.php/clientes/editar/' . $result->idClientes . '"><i class="icon-pencil icon-white"></i> Editar</a>';
                } ?>
            </div>
        </ul>
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">

            <div class="accordion" id="collapse-group">
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span>
                                <h5>Dados Pessoais / Empresa</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse in accordion-body" id="collapseGOne">
                        <div class="widget-content">
                            <table class="table table-bordered table-title">
                                <tbody>
                                    <tr>
                                        <th>Nome / Fantasia</th>
                                        <td><?php echo $result->nomeCliente ?></td>
                                    </tr>
                                    <tr>
                                        <th>Apelido</th>
                                        <td><?php echo $result->nome2 ?></td>
                                    </tr>
                                    <tr>
                                        <th>Observações</th>
                                        <td><?php echo $result->obsCliente ?></td>
                                    </tr>
                                    <tr>
                                        <th>Razão Social</th>
                                        <td><?php echo $result->razaoSocial ?></td>
                                    </tr>
                                    <tr>
                                        <th>Data de Nascimento</th>
                                        <td><?php echo formatDateToView($result->dataNascimento); ?></td>
                                    </tr>
                                    <tr>
                                        <th>CPF / CNPJ</th>
                                        <td><?php echo $result->documento ?></td>
                                    </tr>
                                    <tr>
                                        <th>Inscrição Municipal</th>
                                        <td><?php echo $result->inscriMunic ?></td>
                                    </tr>
                                    <tr>
                                        <th>Inscrição Estadual</th>
                                        <td><?php echo $result->inscriEstad ?></td>
                                    </tr>
                                    <tr>
                                        <th>Data de Cadastro</th>
                                        <td><?php echo formatDateToView($result->dataCadastro) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span>
                                <h5>Contatos</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGTwo">
                        <div class="widget-content">
                            <table class="table table-bordered table-title">
                                <tbody>
                                    <tr>
                                        <th>Nome</th>
                                        <td><?php echo $result->contato ?></td>
                                    </tr>
                                    <tr>
                                        <th>Telefone 1</th>
                                        <td><?php echo $result->telefoneCliente ?></td>
                                    </tr>
                                    <tr>
                                        <th>Telefone 2</th>
                                        <td><?php echo $result->telefone2 ?></td>
                                    </tr>
                                    <tr>
                                        <th>Celular 1</th>
                                        <td><?php echo $result->celular ?></td>
                                    </tr>
                                    <tr>
                                        <th>Celular 2</th>
                                        <td><?php echo $result->celular2 ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email Principal</th>
                                        <td><?php echo $result->emailCliente ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email Alternativo</th>
                                        <td><?php echo $result->email2Cliente ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                <span class="icon"><i class="icon-list"></i></span>
                                <h5>Endereço</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGThree">
                        <div class="widget-content">
                            <table class="table table-bordered table-title">
                                <tbody>
                                    <tr>
                                        <th>Logradouro</th>
                                        <td><?php echo $result->rua ?></td>
                                    </tr>
                                    <tr>
                                        <th>Número</th>
                                        <td><?php echo $result->numero ?></td>
                                    </tr>
                                    <tr>
                                        <th>Complemento</th>
                                        <td><?php echo $result->endComplemento ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bairro</th>
                                        <td><?php echo $result->bairro ?></td>
                                    </tr>
                                    <tr>
                                        <th>Cidade</th>
                                        <td><?php echo $result->cidade ?> - <?php echo $result->estado ?></td>
                                    </tr>
                                    <tr>
                                        <th>CEP</th>
                                        <td><?php echo $result->cep ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Tab 2-->
        <div id="tab2" class="tab-pane" style="min-height: 300px">
            <?php if (!$results) { ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data de Entrada</th>
                            <th>Data de Saída</th>
                            <th>Descrição</th>
                            <th>Defeito</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6">Nenhuma OS Cadastrada</td>
                        </tr>
                    </tbody>
                </table>

            <?php } else { ?>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data de Entrada</th>
                            <th>Data de Saída</th>
                            <th>Descricao</th>
                            <th>Defeito</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($results as $r) {
                            $dataInicial = formatDateToView($r->dataInicial);
                            $dataFinal = formatDateToView($r->dataFinal);
                            echo '<tr>';
                            echo '<td style="text-align: center">' . $r->idOs . '</td>';
                            echo '<td>' . $dataInicial . '</td>';
                            echo '<td>' . $dataFinal . '</td>';
                            echo '<td>' . $r->descricaoProduto . '</td>';
                            echo '<td>' . $r->defeito . '</td>';

                            echo '<td>';
                            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                                echo '<a href="' . base_url() . 'index.php/os/visualizar/' . $r->idOs . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
                            }
                            if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                                echo '<a href="' . base_url() . 'index.php/os/editar/' . $r->idOs . '" class="btn btn-info tip-top" title="Editar OS"><i class="icon-pencil icon-white"></i></a>';
                            }

                            echo  '</td>';
                            echo '</tr>';
                        } ?>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            <?php  } ?>
        </div>
    </div>
</div>
