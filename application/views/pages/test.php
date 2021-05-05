<!DOCTYPE html>
<html>
<head>
  <title>Autocomplete</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top: 100px;">
      <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <h3>Autocomplete</h3>
          <label>Full Name : </label>
          <input type="text" id="nama_fitting" class="form-control" placeholder="Enter Name">
        </div>
        <div class="col-sm-3"></div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

      $( "#nama_fitting" ).autocomplete({
        source: function( request, response )
        {
          $.ajax({
            url: "<?php echo base_url(); ?>posts/userdata",
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
</body>
</html>