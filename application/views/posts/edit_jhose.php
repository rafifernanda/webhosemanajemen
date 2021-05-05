<center><h2><?= $title;?></h2></center>
<br>

<?php echo validation_errors(); ?>

	<div class="col-lg-4">
<?php echo form_open('posts/update_jhose'); 
foreach ($posts as $key) {
  
?>

	  <div class="form-group">
	    <label>ID Hose</label>
	    <input type="number" class="form-control" name="id_jhose" placeholder="Add ID Hose" value="<?= $key['id_jhose'] ?>" readonly>
	  </div>
	  <div class="form-group">
	    <label>Nama Hose</label>
	    <input type="text" class="form-control" name="nama_hose" placeholder="Add Nama Hose" value="<?= $key['nama_hose'] ?>">
	  </div>
	  
	  <button type="submit" class="btn btn-info">Submit</button>

<?php } ?>
	</form>
	</div>