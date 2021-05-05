<center><h2><?= $title;?></h2></center>
<br>

<?php echo validation_errors(); ?>

	<div class="col-lg-4">
<?php echo form_open('posts/update_diameter'); 
foreach ($posts as $key) {
  
?>

	  <div class="form-group">
	    <label>ID Hose</label>
	    <input type="number" class="form-control" name="id_diameter" placeholder="Add ID Diameter" value="<?= $key['id_diameter'] ?>" readonly>
	  </div>
	  <div class="form-group">
	    <label>Nama Hose</label>
	    <input type="text" class="form-control" name="ukuran_diameter" placeholder="Add Ukuran Diameter" value="<?= $key['ukuran_diameter'] ?>">
	  </div>
	  
	  <button type="submit" class="btn btn-info">Submit</button>

<?php } ?>
	</form>
	</div>