<?php $this->load->view('relatorios/imprimir/imprimirHeader'); ?>
  <body style="background-color: transparent">
      <div class="container-fluid">
          <div class="row-fluid">
              <div class="span12">
                  <div class="widget-box">
                      <div class="widget-title">
                          <h4 style="text-align: center">Relatório | Produtos | MapOS</h4>
                      </div>
                      <div class="widget-content nopadding">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th style="font-size: 1.2em; padding: 5px;">Descrição</th>
                              <th style="font-size: 1.2em; padding: 5px;">UN</th>
                              <th style="font-size: 1.2em; padding: 5px;">Preço Compra</th>
                              <th style="font-size: 1.2em; padding: 5px;">Preço Venda</th>
                              <th style="font-size: 1.2em; padding: 5px;">Estoque</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          foreach ($produtos as $p) {
                              echo '<tr>';
                              echo '<td>' . $p->descricao. '</td>';
                              echo '<td>' . $p->unidade . '</td>';
                              echo '<td>' . $p->precoCompra . '</td>';
                              echo '<td>' . $p->precoVenda . '</td>';
                              echo '<td>' . $p->estoque. '</td>';
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
