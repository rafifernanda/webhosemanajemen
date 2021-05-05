<h2><?= $title;?></h2>

<?php echo validation_errors(); ?>

<div class="row">
    <div class="col-lg-6">
<?php echo form_open('posts/create_controller_transaksi'); ?>

  <div class="form-group">
    <label>ID Transaksi</label>
    <input type="text" class="form-control" name="id_transaksi" placeholder="Isi ID Transaksi" value="<?= $cus_id;?>" readonly>
  </div>
  <div class="form-group">
    <label>Jenis Hose</label>
    <input type="text" class="form-control" id="nama_hose" name="hose_transaksi" placeholder="Isi Nama Hose">
  </div>
  <div class="form-group">
    <label>Konfigurasi Hose</label>
    <input type="text" class="form-control" id="nama_khose" name="konf_transaksi" placeholder="Isi Konfigurasi Hose">
  </div>
  <div class="form-group">
    <label>Diameter</label>
    <input type="text" class="form-control" id="ukuran_diameter" name="diameter" placeholder="Isi Diameter Hose">
  </div>
  <div class="form-group">
    <label>Panjang Hose</label>
    <input type="text" class="form-control" name="panjang" placeholder="Silahkan Isi Manual !">
  </div>
  <div class="form-group">
    <label>Fitting 1</label>
    <input type="text" class="form-control" id="nama_fitting" name="fitting1" placeholder="Isi Fitting 1">
  </div>
  <div class="form-group">
    <label>Ukuran Fitting 1</label>
    <input type="text" class="form-control" id="ukuran_fitting1" name="ukuran1" placeholder="Isi Ukuran Fitting 1">
  </div>

  <div class="form-group">
    <label>Fitting 2</label>
    <input type="text" class="form-control" id="nama_fitting2" name="fitting2" placeholder="Isi Fitting 2">
  </div>
  </div>

  <div class="col-lg-6">
  <div class="form-group">
    <label>Ukuran Fitting 2</label>
    <input type="text" class="form-control" id="ukuran_fitting2" name="ukuran2" placeholder="Isi Ukuran Fitting 2">
  </div>
  <div class="form-group">
    <label>Product Number Unit</label>
    <input type="text" class="form-control" id="nama_unit" name="pn_unit" placeholder="Isi PN Unit">
  </div>
  <div class="form-group">
    <label>Aplikasi</label>
    <input type="text" class="form-control" name="aplikasi" placeholder="Silahkan Isi Manual !">
  </div>
  <div class="form-group">
    <label>Customer</label>
    <input type="text" class="form-control" id="nama_customer" name="customer" placeholder="Isi Customer">
  </div>
  <div class="form-group">
    <label>Product Number Hose Assembly</label>
    <input type="text" class="form-control" name="pn_assy" placeholder="Silahkan Isi Manual !">
  </div>
  <div class="form-group">
    <label>Lokasi</label>
    <input type="text" class="form-control" id="nama_lokasi" name="lokasi" placeholder="Isi Lokasi">
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Kondisi</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kondisi_transaksi" id="gridRadios1" value="Good" checked>
          <label class="form-check-label" for="gridRadios1">
            Good
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kondisi_transaksi" id="gridRadios2" value="Not Good">
          <label class="form-check-label" for="gridRadios2">
            Not Good
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Lifetime</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="lifetime" id="gridRadios3" value="365" checked>
          <label class="form-check-label" for="gridRadios3">
            1 Tahun
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="lifetime" id="gridRadios4" value="731">
          <label class="form-check-label" for="gridRadios4">
            2 Tahun
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="lifetime" id="gridRadios5" value="1096">
          <label class="form-check-label" for="gridRadios5">
            3 Tahun
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <!-- <div class="form-group">
    <label>Kondisi</label>
    <input type="text" class="form-control" id="kondisi" name="kondisi_transaksi" placeholder="Add Kondisi">
  </div> -->
  <!-- <br>
  <br> -->
  <center><button type="submit" class="btn btn-info">Submit</button></center>
  </div>
</form>

</div>
