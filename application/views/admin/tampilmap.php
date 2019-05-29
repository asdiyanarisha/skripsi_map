<style>
  #map { width: 100%; height: 300px; padding: 0; }
</style>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div id="map"></div>
		</div>
    
    
	</div>
</div>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telpon</th>
                  <th>Foto</th>
                  <th>Jam Buka</th>
                  <th>Deskripsi</th>
                  <th>Long</th>
                  <th>Lat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($map as $key => $value): ?>
                
                <tr>
                	<td><?php echo $key+1 ?></td> 
                	<td><a href="<?php echo base_url("admin/map/detail_map/$value[id_map]") ?>"><?php echo $value['nama'] ?></a></td> 
                	<td><?php echo $value['alamat'] ?></td> 
                	<td><?php echo $value['telpon'] ?></td> 
                	<td><img src="<?php echo base_url("assets/$value[foto]") ?>" width="100"></td> 
                	<td>Jam Buka</td> 
                	<td>Deskripsi</td> 
                	<td><?php echo $value['longt'] ?></td> 
                	<td><?php echo $value['lat'] ?></td> 
                	<td>
                		<a href="<?php echo base_url("admin/map/ubah/$value[id_map]") ?>">Edit</a> |
                		<a href="<?php echo base_url("admin/map/hapus/$value[id_map]") ?>">Hapus</a>
                	</td> 
                </tr>
                  
                <?php endforeach ?>
                
                
                
                </tbody>
                <tfoot>
                  <a href="<?php echo base_url('admin/map/tambah') ?>" class="btn btn-app">
                    <i class="fa fa-edit"></i> Tambah
                  </a>
                </tfoot>
                
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
<script>
  var planes = [
  <?php foreach ($map as $key => $value): ?>
    
    ["7C6B07",<?php echo $value['lat'] ?>,<?php echo $value['longt'] ?>],
  <?php endforeach ?>
    ];

        var map = L.map('map').setView([-7.796531, 110.369008], 12);
        mapLink = 
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
            }).addTo(map);

    for (var i = 0; i < planes.length; i++) {
      marker = new L.marker([planes[i][1],planes[i][2]])
        .bindPopup(planes[i][0])
        .addTo(map);
    }
               
    </script>
