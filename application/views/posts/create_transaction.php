<h2><?= $title;?></h2>

<?php echo validation_errors(); ?>

<div class="row">
    <div class="col-lg-6">
<?php echo form_open('posts/create_controller_transaksi'); ?>

  <div class="form-group">
    <label>ID Transaksi</label>
    <input type="number" class="form-control" name="id_transaksi" placeholder="Add ID Transaksi">
  </div>
  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Nama Hose', 'nama_hose', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="hose_transaksi" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($jhose as $key => $value): ?>

          <?php $options[$value->nama_hose] = $value->nama_hose;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('hose_transaksi', $options, set_value('hose_transaksi'),$attributes=array()); ?>
      </div>
    </div>
  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Konfigurasi Hose', 'nama_khose', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="konf_transaksi" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($khose as $key => $value): ?>

          <?php $options[$value->nama_khose] = $value->nama_khose;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('konf_transaksi', $options, set_value('konf_transaksi'),$attributes=array()); ?>
      </div>
    </div>
  <!-- <div class="form-group">
    <label>Diameter</label>
    <input type="text" class="form-control" name="diameter" placeholder="Add Diameter Hose">
  </div> -->
  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Ukuran Diameter', 'ukuran_diameter', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="diameter" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($diameter as $key => $value): ?>

          <?php $options[$value->ukuran_diameter] = $value->ukuran_diameter;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('diameter', $options, set_value('diameter'),$attributes=array()); ?>
      </div>
    </div>
  <div class="form-group">
    <label>Panjang Hose</label>
    <input type="text" class="form-control" name="panjang" placeholder="Add Panjang Hose">
  </div>
  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Fitting 1', 'nama_fitting', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="fitting1" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($fitting as $key => $value): ?>

          <?php $options[$value->nama_fitting] = $value->nama_fitting;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('fitting1', $options, set_value('fitting1'),$attributes=array()); ?>
      </div>
    </div>
  <div class="form-group">
    <label>Ukuran Fitting 1</label>
    <input type="number" class="form-control" name="ukuran1" placeholder="Add Ukuran Fitting1">
  </div>

  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Fitting 1', 'nama_fitting', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="fitting2" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($fitting as $key => $value): ?>

          <?php $options[$value->nama_fitting] = $value->nama_fitting;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('fitting2', $options, set_value('fitting2'),$attributes=array()); ?>
      </div>
    </div>

  </div>

  <div class="col-lg-6">
  <div class="form-group">
    <label>Ukurang Fitting 2</label>
    <input type="number" class="form-control" name="ukuran2" placeholder="Add Ukuran Fitting 2">
  </div>
  <div class="form-group">
    <label>Product Number Unit</label>
    <input type="text" class="form-control" name="pn_unit" placeholder="Add Product Number Unit">
  </div>
  <div class="form-group">
    <label>Aplikasi</label>
    <input type="text" class="form-control" name="aplikasi" placeholder="Add Aplikasi">
  </div>
  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Nama Customer', 'nama_customer', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="customer" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($customer as $key => $value): ?>

          <?php $options[$value->nama_customer] = $value->nama_customer;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('customer', $options, set_value('customer'),$attributes=array()); ?>
      </div>
    </div>
  <div class="form-group">
    <label>Product Number Hose Assembly</label>
    <input type="text" class="form-control" name="pn_assy" placeholder="Add Product Number Hose Assembly">
  </div>
  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Lokasi', 'nama_lokasi', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="lokasi" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($lokasi as $key => $value): ?>

          <?php $options[$value->nama_lokasi] = $value->nama_lokasi;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('lokasi', $options, set_value('lokasi'),$attributes=array()); ?>
      </div>
    </div>
  <div class="form-group">
      <div label class="control-label" style="display: block;clear: both;">
        <?php echo form_label('Pilih Konfigurasi Hose', 'kondisi', $attributes = array()); ?>
      </div>
      <div class="input" style="display: block;clear: both;" name="kondisi_transaksi" >
        <?php $options = array(""=>"") ?>

        <?php foreach ($kondisi as $key => $value): ?>

          <?php $options[$value->kondisi] = $value->kondisi;?>
          
        <?php endforeach ?>
        <?php echo form_dropdown('kondisi_transaksi', $options, set_value('kondisi_transaksi'),$attributes=array()); ?>
      </div>
    </div>
  <br>
  <center><button type="submit" class="btn btn-info">Submit</button></center>
</div>
</form>
</div>
