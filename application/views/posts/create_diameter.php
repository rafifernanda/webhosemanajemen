<center><h2><?= $title;?></h2></center>
<br>

<?php echo validation_errors(); ?>

<div class="row">
	<div class="col-lg-4">
	<?php echo form_open('posts/create_controller_diameter'); ?>
	  <div class="form-group">
	    <label>ID Diameter</label>
	    <input type="number" class="form-control" name="id_diameter" placeholder="Add ID Diameter">
	  </div>
	  <div class="form-group">
	    <label>Nama Diameter</label>
	    <input type="text" class="form-control" name="ukuran_diameter" placeholder="Add Nama Diameter">
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
                      <th>Ukuran</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($posts as $post) : ?>
                    <tr>
                      <td><?php echo $post['id_diameter']; ?></td>
                      <td><?php echo $post['ukuran_diameter']; ?></td>
                      <td><a class="btn btn-info btn-circle btn-sm" href="<?php echo site_url('/posts/edit_diameter/'.$post['id_diameter']); ?>" title="Edit"><i><i class="fas fa-info-circle"></i></i></a> | <a class="btn btn-danger btn-circle btn-sm" href="<?php echo site_url('/posts/delete_diameter/'.$post['id_diameter']); ?>" title="Delete"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
	</div>
</div>