<style>
  #map { width: 100%; height: 300px; padding: 0; }
</style>
<div id="map"></div>
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