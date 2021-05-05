<center><h2><?= $title;?></h2></center>
<br>

<?php echo validation_errors(); ?>

<div class="row">
	<div class="col-lg-4">
	<?php echo form_open('posts/create_controller_lokasi'); ?>
	  <div class="form-group">
	    <label>ID Lokasi</label>
	    <input type="number" class="form-control" name="id_lokasi" placeholder="Add ID Lokasi">
	  </div>
	  <div class="form-group">
	    <label>Nama Lokasi</label>
	    <input type="text" class="form-control" name="nama_lokasi" placeholder="Add Nama Lokasi">
	  </div>
	  
	  <button type="submit" class="btn btn-info">Submit</button>
	</form>
	</div>
	<div class="col-lg-8">
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Lokasi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($posts as $post) : ?>
                    <tr>
                      <td><?php echo $post['id_lokasi']; ?></td>
                      <td><?php echo $post['nama_lokasi']; ?></td>
                      <td><a class="btn btn-info btn-circle btn-sm" href="<?php echo site_url('/posts/edit_lokasi/'.$post['id_lokasi']); ?>" title="Edit"><i><i class="fas fa-info-circle"></i></i></a> | <a class="btn btn-danger btn-circle btn-sm" href="<?php echo site_url('/posts/delete_lokasi/'.$post['id_lokasi']); ?>" title="Delete"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
	</div>
</div>