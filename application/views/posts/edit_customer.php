<center><h2><?= $title;?></h2></center>
<br>

<?php echo validation_errors(); ?>

	<div class="col-lg-4">
<?php echo form_open('posts/update_customer'); 
foreach ($posts as $key) {
  
?>

	  <div class="form-group">
	    <label>ID Hose</label>
	    <input type="number" class="form-control" name="id_customer" placeholder="Add ID Customer" value="<?= $key['id_customer'] ?>" readonly>
	  </div>
	  <div class="form-group">
	    <label>Nama Hose</label>
	    <input type="text" class="form-control" name="nama_customer" placeholder="Add Nama Customer" value="<?= $key['nama_customer'] ?>">
	  </div>
	  
	  <button type="submit" class="btn btn-info">Submit</button>

<?php } ?>
	</form>
	</div>