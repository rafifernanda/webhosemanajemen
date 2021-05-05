<h2><?= $title ?></h2>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th></th>
                      <th>ID</th>
                      <th>Tanggal_Transaksi</th>
                      <th>Jenis_Hose</th>
                      <th>Konfigurasi_Hose</th>
                      <th>Diameter</th>
                      <th>Panjang</th>
                      <th>Nama_Fitting_1</th>
                      <th>Ukuran_1</th>
                      <th>Nama_Fitting_2</th>
                      <th>Ukuran_2</th>
                      <th>PN_Unit</th>
                      <th>Aplikasi</th>
                      <th>Customer</th>
                      <th>PN_Assy</th>
                      <th>Lokasi</th>
                      <th>Kondisi</th>
                      <th>Lifetime</th>
                      <th>Edit/Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php foreach($posts as $post) : ?>
                    <tr>
                      <td><a class="btn btn-warning btn-circle btn-sm" href="<?php echo site_url('/posts/print/'.$post['id_transaksi']); ?>" title="Print"><i class="fa fa-print"></i></a></td>
                      <td><?php echo $post['id_transaksi']; ?></td>
                      <td><?php echo $post['tgl_transaksi']; ?></td>
                      <td><?php echo $post['hose_transaksi']; ?></td>
                      <td><?php echo $post['konf_transaksi']; ?></td>
                      <td><?php echo $post['diameter']; ?></td>
                      <td><?php echo $post['panjang']; ?></td>
                      <td><?php echo $post['fitting1']; ?></td>
                      <td><?php echo $post['ukuran1']; ?></td>
                      <td><?php echo $post['fitting2']; ?></td>
                      <td><?php echo $post['ukuran2']; ?></td>
                      <td><?php echo $post['pn_unit']; ?></td>
                      <td><?php echo $post['aplikasi']; ?></td>
                      <td><?php echo $post['customer']; ?></td>
                      <td><?php echo $post['pn_assy']; ?></td>
                      <td><?php echo $post['lokasi']; ?></td>
                      <td><?php echo $post['kondisi_transaksi']; ?></td>
                      <td><?php echo $post['lifetime']; ?> days</td>

                      <td><a class="btn btn-info btn-circle btn-sm" href="<?php echo site_url('/posts/edit_transaksi/'.$post['id_transaksi']); ?>"><i><i class="fas fa-info-circle"></i></i></a> | | <a class="btn btn-danger btn-circle btn-sm" href="<?php echo site_url('/posts/delete_transaksi/'.$post['id_transaksi']); ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>