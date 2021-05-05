
		</div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hose Tracking 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure want to Log Out?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('posts/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> -->


  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js');?>"></script>

  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js');?>"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- Get Jenis Hose -->
  <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_hose" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_jhose",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#nama_hose').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

  <!-- Get Konfigurasi Hose -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_khose" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_khose",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#nama_khose').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

  <!-- Get Ukuran Diameter -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#ukuran_diameter" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_diameter",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#ukuran_diameter').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

    <!-- Get Ukuran Fitting 1 -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#ukuran_fitting1" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_diameter",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#ukuran_fitting1').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

      <!-- Get Ukuran Fitting 2 -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#ukuran_fitting2" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_diameter",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#ukuran_fitting2').val(ui.item.label);
          return false;
        }
      });
    });
  </script>


  <!-- Get Nama Fitting -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_fitting" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_fitting",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#nama_fitting').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

  <!-- Get Nama Fitting2 -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_fitting2" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_fitting",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#nama_fitting2').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

  <!-- Get Nama PN Unit -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_unit" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_unit",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#nama_unit').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

  <!-- Get Customer -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_customer" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_customer",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#nama_customer').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

  <!-- Get Lokasi -->
    <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_lokasi" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata_lokasi",
            type: 'post',
            dataType: "json",
            data:{
              search: request.term
            },
            success: function( data )
            {
              response( data );
            }
          });
        },
        select: function(values, ui){
          $('#nama_lokasi').val(ui.item.label);
          return false;
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
  </script>

</body>

</html>
