<?php $this->load->view('relatorios/imprimir/imprimirHeader'); ?>
  <body style="background-color: transparent">
      <div class="container-fluid">
          <div class="row-fluid">
              <div class="span12">
                  <div class="widget-box">
                      <div class="widget-title">
                          <h4 style="text-align: center">Relatório | Clientes | MapOS</h4>
                      </div>
                      <div class="widget-content nopadding">

                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th style="font-size: 1.2em; padding: 5px;">Nome</th>
                              <th style="font-size: 1.2em; padding: 5px;">Telefone</th>
                              <th style="font-size: 1.2em; padding: 5px;">Celular</th>
                              <th style="font-size: 1.2em; padding: 5px;">Email</th>
                              <th style="font-size: 1.2em; padding: 5px;">Nascimento</th>
                              <th style="font-size: 1.2em; padding: 5px;">Cadastro</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          foreach ($clientes as $c) {
                              $dataNascimento = date('d/m/Y', strtotime($c->dataNascimento));
                              $dataCadastro = date('d/m/Y', strtotime($c->dataCadastro));
                              echo '<tr>';
                              echo '<td>' . $c->nomeCliente . '</td>';
                              echo '<td>' . $c->telefoneCliente . '</td>';
                              echo '<td>' . $c->celular . '</td>';
                              echo '<td>' . $c->emailCliente . '</td>';
                              echo '<td>' . $dataNascimento . '</td>';
                              echo '<td>' . $dataCadastro . '</td>';
                              echo '</tr>';
                          }
                          ?>
                      </tbody>
                  </table>
                  </div>
              </div>
                  <h5 style="text-align: right">Data do Relatório: <?php echo date('d/m/Y');?></h5>
          </div>
      </div>
</div>

    <!-- Arquivos js-->
    <script src="<?php echo base_url();?>js/excanvas.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.flot.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.flot.resize.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>js/sosmc.js"></script>
    <script src="<?php echo base_url();?>js/dashboard.js"></script>
  </body>
</html>
