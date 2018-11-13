     <!-- Sticky Footer -->
     <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Aloj-ar 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="<?php echo base_url()."assets/"; ?>#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar Sesion" debajo si esta listo para cerrar la sesion.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <!--<a class="btn btn-primary" href="<//?php echo base_url()."assets"; ?>login.html">Logout</a>-->
            <a class="btn btn-primary" href="<?=base_url("login/cerrar_sesion");?>">Cerrar Sesion</a>

            <!--PROBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANDO REGISTRO-->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()."assets/"; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()."assets/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()."assets/"; ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()."assets/"; ?>js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url()."assets/"; ?>js/demo/datatables-demo.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/demo/chart-area-demo.js"></script>

  </body>

</html>