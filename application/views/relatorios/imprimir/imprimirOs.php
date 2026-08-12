
<?php $this->load->view('relatorios/imprimir/imprimirHeader'); ?>
  <body style="background-color: transparent">
      <div class="container-fluid">
          <div class="row-fluid">
              <div class="span12">
                  <div class="widget-box">
                      <div class="widget-title">
                          <h4 style="text-align: center">Relatório | Ordens de Serviço | MapOS</h4>
                      </div>
                      <div class="widget-content nopadding">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th style="font-size: 1.2em; padding: 5px;">OS</th>
                              <th style="font-size: 1.2em; padding: 5px;">Cliente</th>
                              <th style="font-size: 1.2em; padding: 5px;">Status</th>
                              <th style="font-size: 1.2em; padding: 5px;">Data de Entrada</th>
                              <th style="font-size: 1.2em; padding: 5px;">Data de Saída</th>
                              <th style="font-size: 1.2em; padding: 5px;">Descrição</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          foreach ($os as $c) {
                              echo '<tr>';
                              echo '<td>' . $c->idOs . '</td>';
                              echo '<td>' . $c->nomeCliente . '</td>';
                              echo '<td>' . $c->status . '</td>';
                              echo '<td>' . date('d/m/Y',  strtotime($c->dataInicial)) . '</td>';
                              echo '<td>' . date('d/m/Y',  strtotime($c->dataFinal)) . '</td>';
                              echo '<td>' . $c->descricaoProduto. '</td>';
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
    <script src="<?php echo base_url();?>js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>js/sosmc.js"></script>
    <script src="<?php echo base_url();?>js/dashboard.js"></script>
  </body>
</html>
