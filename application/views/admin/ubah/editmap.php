<style>
	#map { width: 100%; height: 300px; padding: 0; }
</style>

<br/>
<!-- <div  class="ui-bar-a ui-corner-all ui-shadow" style="padding:0.5em; margin-top:7px; margin-right:2px;"> 	
</div> -->
<div  class="ui-bar-a ui-corner-all ui-shadow" style="padding:0.5em; margin-top:7px; margin-right:2px;"> 	
<div id="map"></div>
</div>
<br/>

	<form method="post" enctype="multipart/form-data">
				<div class="box-body">
<div class="form-group">
						<label>lat</label>
						<input type="text" class="form-control" name="lat" id="lat" value="<?php echo $map['lat'] ?>">
					</div>

					<div class="form-group">
						<label>longt</label>
						<input type="text" class="form-control" name="longt" id="longt" value="<?php echo $map['longt'] ?>">
					</div>
					<div class="form-group">
						<label>Nama Asrama</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $map['nama'] ?>">	
						
					</div>
					
					<div class="form-group">
						<label>Alamat</label>
						<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="alamat" id="message" required><?php echo $map['alamat'] ?></textarea>
					</div>
					<div class="form-group">
						<label>telpon</label>
						<input type="text" class="form-control" name="telpon" id="telepon" value="<?php echo $map['telpon'] ?>">
					</div>
					
					<hr>
					<img src="<?php echo base_url("assets/$map[foto]") ?>" width="100">
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" class="form-control" name="foto" multiple="multiple">	
						
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="deskripsi" id="message" required><?php echo $map['deskripsi'] ?></textarea>
					</div>
					
					
					
				</div>
				<div class="box-footer clearfix">
					<button type="button" onclick="window.history.go(-1);" class="btn btn-warning">Batal</button>
					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</div>
				
			</form>


<script src="<?php echo base_url('themeadmin/') ?>leaflet/leaflet.js"></script>
<script>
	var tileLayer = new L.TileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png',{
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
});

var map = new L.Map('map', {
  'center': [<?php echo $map['lat'] ?>, <?php echo $map['longt'] ?>],
  'zoom': 12,
  'layers': [tileLayer]
});

var marker = L.marker([<?php echo $map['lat'] ?>, <?php echo $map['longt'] ?>],{
  draggable: true
}).addTo(map);

marker.on('dragend', function (e) {
  document.getElementById('lat').value = marker.getLatLng().lat;
  document.getElementById('longt').value = marker.getLatLng().lng;
});
</script>
