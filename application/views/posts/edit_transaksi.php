<h2><?= $title;?></h2>

<?php echo validation_errors(); ?>

<div class="row">
    <div class="col-lg-6">
<?php echo form_open('posts/update_transaksi'); 
foreach ($posts as $key) {
  
?>

  <div class="form-group">
    <label>ID Transaksi</label>
    <input type="number" class="form-control" name="id_transaksi" placeholder="Add ID Transaksi" value="<?= $key['id_transaksi'] ?>">
  </div>
  <div class="form-group">
    <label>Jenis Hose</label>
    <input type="text" class="form-control" id="nama_hose" name="hose_transaksi" placeholder="Add Nama Hose" value="<?= $key['hose_transaksi'] ?>">
  </div>
  <div class="form-group">
    <label>Konfigurasi Hose</label>
    <input type="text" class="form-control" id="nama_khose" name="konf_transaksi" placeholder="Add Konfigurasi Hose" value="<?= $key['konf_transaksi'] ?>">
  </div>
  <div class="form-group">
    <label>Diameter</label>
    <input type="text" class="form-control" id="nama_diameter" name="diameter" placeholder="Add Diameter Hose" value="<?= $key['diameter'] ?>" >
  </div>
  <div class="form-group">
    <label>Panjang Hose</label>
    <input type="text" class="form-control" name="panjang" placeholder="Add Panjang Hose" value="<?= $key['panjang'] ?>">
  </div>
  <div class="form-group">
    <label>Fitting 1</label>
    <input type="text" class="form-control" id="nama_fitting" name="fitting1" placeholder="Add Fitting 1" value="<?= $key['fitting1'] ?>">
  </div>
  <div class="form-group">
    <label>Ukuran Fitting 1</label>
    <input type="number" class="form-control" name="ukuran1" placeholder="Add Ukuran Fitting1" value="<?= $key['ukuran1'] ?>">
  </div>

  <div class="form-group">
    <label>Fitting 2</label>
    <input type="text" class="form-control" id="nama_fitting2" name="fitting2" placeholder="Add Fitting 2" value="<?= $key['fitting2'] ?>">
  </div>
  </div>

  <div class="col-lg-6">
  <div class="form-group">
    <label>Ukurang Fitting 2</label>
    <input type="number" class="form-control" name="ukuran2" placeholder="Add Ukuran Fitting 2" value="<?= $key['ukuran2'] ?>">
  </div>
  <div class="form-group">
    <label>Product Number Unit</label>
    <input type="text" class="form-control" name="pn_unit" placeholder="Add Product Number Unit" value="<?= $key['pn_unit'] ?>">
  </div>
  <div class="form-group">
    <label>Aplikasi</label>
    <input type="text" class="form-control" name="aplikasi" placeholder="Add Aplikasi" value="<?= $key['aplikasi'] ?>">
  </div>
  <div class="form-group">
    <label>Customer</label>
    <input type="text" class="form-control" id="nama_customer" name="customer" placeholder="Add Customer" value="<?= $key['customer'] ?>">
  </div>
  <div class="form-group">
    <label>Product Number Hose Assembly</label>
    <input type="text" class="form-control" name="pn_assy" placeholder="Add Product Number Hose Assembly" value="<?= $key['pn_assy'] ?>">
  </div>
  <div class="form-group">
    <label>Lokasi</label>
    <input type="text" class="form-control" id="nama_lokasi" name="lokasi" placeholder="Add Lokasi" value="<?= $key['lokasi'] ?>">
  </div>
  <div class="form-group">
    <label>Kondisi</label>
    <input type="text" class="form-control" name="kondisi_transaksi" placeholder="Add Kondisi" value="<?= $key['kondisi_transaksi'] ?>">
  </div>
  <br>
  <center><button type="submit" class="btn btn-info">Submit</button></center>
  </div>
<?php } ?>
</form>
</div>
