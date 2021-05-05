<center><h2><?= $title;?></h2></center>
<br>

<?php echo validation_errors(); ?>

	<div class="col-lg-4">
<?php echo form_open('posts/update_lokasi'); 
foreach ($posts as $key) {
  
?>

	  <div class="form-group">
	    <label>ID Hose</label>
	    <input type="number" class="form-control" name="id_lokasi" placeholder="Add ID Lokasi" value="<?= $key['id_lokasi'] ?>" readonly>
	  </div>
	  <div class="form-group">
	    <label>Nama Hose</label>
	    <input type="text" class="form-control" name="nama_lokasi" placeholder="Add Nama Lokasi" value="<?= $key['nama_lokasi'] ?>">
	  </div>
	  
	  <button type="submit" class="btn btn-info">Submit</button>

<?php } ?>
	</form>
	</div>