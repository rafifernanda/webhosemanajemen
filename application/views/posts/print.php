<!DOCTYPE html>
<html>
<head>
	<title>Cetak Barcode</title>
	<style>
		.example-print {
    display: none;
}
@media print {
   .example-screen {
       display: none;
    }
    .example-print {
       display: block;
    }
}
	</style>

	 <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?> " rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/css/chosen.css'); ?>" rel="stylesheet">
</head>

<body>

	<div class="col-lg-4">
<?php echo form_open('posts/update_transaksi'); 
foreach ($posts as $key) {
  
?>

	<div class="example-print">
		<table>
  <tr>
    <td rowspan="3"><img src="<?=base_url('generate/qrcode/item-'.$key['id_transaksi'] .'.png')?>" style="width: 100px"></td>
    <td>&nbsp;</td>
    <td colspan="2"><img src="<?php echo base_url('assets/img/tracking.png'); ?>" width="95"></td>
    
  </tr>
  <tr>
  	<td>ID</td>
    <td>: <?= $key['id_transaksi'];?></td>
  </tr>
  <tr>
  	<td>SN</td>
    <td>: -</td>
  </tr>
</table>
		<div>
				<?php
					include_once APPPATH . 'vendor/autoload.php';
					$qrCode = new Endroid\QrCode\QrCode($key['id_transaksi']);
					$qrCode->writeFile('generate/qrcode/item-'.$key['id_transaksi'] .'.png');
				?>
				<!-- <img src="<?=base_url('generate/qrcode/item-'.$key['id_transaksi'] .'.png')?>" style="width: 100px"> -->
		</div>

	</div>
	<div class="example-screen">
<br>
<table>
  <tr>
    <td rowspan="3"><img src="<?=base_url('generate/qrcode/item-'.$key['id_transaksi'] .'.png')?>" style="width: 100px"></td>
    <td>&nbsp;</td>
    <td colspan="2"><img src="<?php echo base_url('assets/img/tracking.png'); ?>" width="95"></td>
    
  </tr>
  <tr>
  	<td>ID</td>
    <td>: <?= $key['id_transaksi'];?></td>
  </tr>
  <tr>
  	<td>SN</td>
    <td>: -</td>
  </tr>
</table>
<br>
<form>

<center><input class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" value="Print QR Code" onClick="window.print()"></center>
</form>	
		<div>
				<?php
					include_once APPPATH . 'vendor/autoload.php';
					$qrCode = new Endroid\QrCode\QrCode($key['id_transaksi']);
					$qrCode->writeFile('generate/qrcode/item-'.$key['id_transaksi'] .'.png');
				?>
				
		</div>


	</div>
	


<?php } ?>
	</form>
	</div>
</body>
</html>