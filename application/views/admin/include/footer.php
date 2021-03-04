     

         


          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright &copy; 
      <?php $copyYear = 2019; 
            $curYear = date('Y'); 
            echo $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');?> <a href="#">IT-TSMB</a>. All rights reserved.</span>
              <!--<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>-->

          
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

  <!-- Script -->

    <script src="<?=base_url();?>assets/vendors/js/vendor.bundle.base.js">"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?=base_url();?>assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url();?>assets/js/off-canvas.js"></script>
    <script src="<?=base_url();?>assets/js/hoverable-collapse.js"></script>
    <script src="<?=base_url();?>assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?=base_url();?>assets/js/dashboard.js"></script>
    <script src="<?=base_url();?>assets/js/todolist.js"></script>
    <!-- End custom js for this page -->





    <!-- DataTables  & Plugins -->
<script src="<?=base_url();?>assets_other/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url();?>assets_other/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->




<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


  </body>
</html>
