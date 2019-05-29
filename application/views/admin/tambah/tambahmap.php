<style>
	#map-canvas { width: 100%; height: 300px; padding: 0; }
</style>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBDoXzgc9vtZqeducCYe3svlIJ_AYlrXik" type="text/javascript"></script>
<br/>
<div  class="ui-bar-a ui-corner-all ui-shadow" style="padding:0.5em; margin-top:7px; margin-right:2px;">
	<div class="form-group">
						<label>lat</label>
						<input type="text" class="form-control" name="lat" id="lat">
					</div>

					<div class="form-group">
						<label>longt</label>
						<input type="text" class="form-control" name="longt" id="lng">
					</div> 	
<div id="map-canvas"></div>
</div>
<br/>

	<form method="post" enctype="multipart/form-data">
				<div class="box-body">

					<div class="form-group">
						<label>Nama Museum</label>
						<input type="text" class="form-control" name="nama_museum">	
						
					</div>
					
					<div class="form-group">
						<label>Tanggal Akhir</label>
						<input type="text" class="form-control" name="tanggal_akhir">	
						
					</div>
					
					<div class="form-group">
						<label>lat</label>
						<input type="text" class="form-control" name="lat" id="lat">
					</div>

					<div class="form-group">
						<label>longt</label>
						<input type="text" class="form-control" name="longt" id="lng">
					</div>
					
					
					
				</div>
				<div class="box-footer clearfix">
					<button type="button" onclick="window.history.go(-1);" class="btn btn-warning">Batal</button>
					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</div>
				
			</form>

<script>
    function updateMarkerPosition(latLng) {
		document.getElementById('lat').value = [latLng.lat()];
		document.getElementById('lng').value = [latLng.lng()];
	}

    var myOptions = {
      zoom: 16,
        scaleControl: true,
      center:  new google.maps.LatLng(-7.791812, 110.366047),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

	
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        myOptions);

	var marker1 = new google.maps.Marker({
	position : new google.maps.LatLng(-7.791812, 110.366047),
	title : 'lokasi',
	map : map,
	draggable : true
	});
	
	//updateMarkerPosition(latLng);

	google.maps.event.addListener(marker1, 'drag', function() {
		updateMarkerPosition(marker1.getPosition());
	});
</script>