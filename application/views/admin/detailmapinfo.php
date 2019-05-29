

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $map['nama'] ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Mobil</th>
                  <th>Nama Showroom</th>
                  <th>Foto</th>
                  <th>Deskripsi</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($detail as $key => $value): ?>
                
                <tr>
                	<td><?php echo $key+1 ?></td> 
                  <td><?php echo $value['nama_mobil'] ?></td> 
                  <td><?php echo $value['nama'] ?></td> 
                	<td><?php echo $value['foto_mobil'] ?></td> 
                	<td><?php echo $value['harga'] ?></td> 
                	<td><?php echo $value['deskripsi'] ?></td> 
                	<td>
                		<a href="<?php echo base_url("admin/mobil/ubah/$value[id_mobil]") ?>">Edit</a> |
                		<a href="<?php echo base_url("admin/mobil/hapus/$value[id_mobil]") ?>">Hapus</a>
                	</td> 
                </tr>
                  
                <?php endforeach ?>
                
                
                
                </tbody>
                <!-- <tfoot>
                  <a href="<?php echo base_url('admin/mobil/tambah') ?>" class="btn btn-app">
                    <i class="fa fa-edit"></i> Tambah
                  </a>
                </tfoot> -->
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
<script src="<?php echo base_url('themeadmin/') ?>leaflet/leaflet.js"></script>
