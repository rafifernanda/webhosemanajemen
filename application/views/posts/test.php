<h2><?= $title ?></h2>
<br><br>

<div class="col-lg-4">
	<form>
	  <div class="form-group">
	    <div label class="control-label" style="display: block;clear: both;">
	    	<?php echo form_label('Pilih Nama Hose', 'nama_hose', $attributes = array()); ?>
	    </div>
	    <div class="input" style="display: block;clear: both;">
	    	<?php $options = array(""=>"") ?>

	    	<?php foreach ($jhose as $key => $value): ?>

	    		<?php $options[$value->id_jhose] = $value->nama_hose;?>
	    		
	    	<?php endforeach ?>
	    	<?php echo form_dropdown('nama_hose', $options, set_value('nama_hose'),$attributes=array()); ?>
	    </div>
	  </div>
	  
	  <button type="submit" class="btn btn-info">Submit</button>
	</form>
	</div>