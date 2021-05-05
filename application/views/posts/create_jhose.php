<center><h2><?= $title;?></h2></center>
<br>

<?php echo validation_errors(); ?>

<div class="row">
	<div class="col-lg-4">
	<?php echo form_open('posts/create_controller_jhose'); ?>
	  <div class="form-group">
	    <label>ID Hose</label>
	    <input type="number" class="form-control" name="id_jhose" placeholder="Add ID Hose">
	  </div>
	  <div class="form-group">
	    <label>Nama Hose</label>
	    <input type="text" class="form-control" id="nama_hose" name="nama_hose" placeholder="Add Nama Hose" >
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
                      <th>Nama</th>
                      <th>ActionData</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($posts as $post) : ?>
                    <tr>
                      <td><?php echo $post['id_jhose']; ?></td>
                      <td><?php echo $post['nama_hose']; ?></td>
                      <td><a class="btn btn-info btn-circle btn-sm" href="<?php echo site_url('/posts/edit_jhose/'.$post['id_jhose']); ?>" title="Edit"><i><i class="fas fa-info-circle" alt="edit"></i></i></a> | <a class="btn btn-danger btn-circle btn-sm" href="<?php echo site_url('/posts/delete_jenishose/'.$post['id_jhose']); ?>" title="Delete"><i class="fas fa-trash"></i></a> | <a class="btn btn-warning btn-circle btn-sm" href="<?php echo site_url('/posts/print/'.$post['id_jhose']); ?>" title="Print"><i class="fa fa-print"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
	</div>
</div>