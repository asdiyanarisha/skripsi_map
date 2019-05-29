<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('themepengunjung') ?>/styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('themepengunjung') ?>/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('themepengunjung') ?>/styles/contact_responsive.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<!-- start map plugin -->
<link rel='stylesheet' type='text/css' href='<?php echo base_url('themepengunjung') ?>/tomtom_map/css/map.css'/>
<link rel='stylesheet' type='text/css' href='<?php echo base_url('themepengunjung') ?>/tomtom_map/elements.css'/>
<!-- end map plugin -->

<style>
  #map { width: 100%; height: 300px; padding: 0; }
</style>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="<?php echo base_url('themepengunjung') ?>/images/logo.png" alt=""></a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<!-- <li class="main_nav_item"><a href="<?php echo base_url("") ?>">Beranda</a></li> -->
								<li class="main_nav_item"><a href="<?php echo base_url("data") ?>">Data</a></li>
								<!-- <li class="main_nav_item"><a href="<?php echo base_url("pemetaan") ?>">Pemetaan</a></li> -->
								<li class="main_nav_item"><a href="<?php echo base_url("tentang") ?>">About</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url("kontak") ?>">Contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="<?php echo base_url('themepengunjung') ?>/images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('themepengunjung') ?>/images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title" style="font-size: 38px;">Sistem Informasi Showroom</div>
		</div>
	</div>

	<!-- <div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="mapid" style="width: 600px; height: 400px;"></div>
			</div>
		</div>
	</div> -->
	<div id="mapid" style="width: 100%; height: 600px;">
		<div id="labels-container">
        <label>Reset Direction And Remove Instruction</label>
        <div id="route-labels"></div>
        <input type="button" id="submit-button" value="Clear">
      </div>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <form method="post" action="<?php echo base_url('pencarian') ?>">
				    <label for="formGroupExampleInput">Cari Mobil</label>
				  <div class="input-group">
				    <input type="text" name="kata_kunci" class="form-control" id="formGroupExampleInput" placeholder="Masukkan kata kunci">
				  </div>
				  <br>
				  	<button class="btn btn-primary" type="submit">Search</button>
				  
				</form> -->
				<form action="<?php echo base_url('pencarian/hasil') ?>" method="post">
							<div class="input-group">
								<input type="text" class="form-control search" name="kata_kunci" id="q" placeholder="Search..." required>
								<span>
									<button class="btn btn-default" type="submit">Cari</button>
								</span>
							</div>
						</form>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<h2>Data Showroom yang masuk</h2>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Nama Showroom</th>
				      <th scope="col">Alamat</th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php foreach ($map as $key => $value): ?>
				    	
				    <tr>
				      <th scope="row"><?php echo $key+1 ?></th>
				      <td><?php echo $value['nama'] ?></td>
				      <td><?php echo $value['alamat'] ?></td>
				      
				    </tr>
				    <?php endforeach ?>
				    
				  </tbody>
				</table>
			</div>
		</div>
	</div>
	<hr>

<!-- <div id="map"></div> -->

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="<?php echo base_url('themepengunjung') ?>/images/logo.png" alt="">Beranda</a></div>
							</div>
							<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
							labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							 consequat.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="<?php echo base_url('themepengunjung') ?>/images/placeholder.svg" alt=""></div>
									</div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="<?php echo base_url('themepengunjung') ?>/images/phone-call.svg" alt=""></div>
									</div>
									<div class="contact_info_text">+62875647836489</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="<?php echo base_url('themepengunjung') ?>/images/message.svg" alt=""></div>
									</div>
									<div class="contact_info_text">gas@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>Copyright © 2019  All rights reserved</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

</div>

<script src="<?php echo base_url('themepengunjung') ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('themepengunjung') ?>/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url('themepengunjung') ?>/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url('themeadmin/') ?>leaflet/leaflet.js"></script>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
<!-- start map plugin -->
<script type='text/javascript' src='<?php echo base_url('themepengunjung') ?>/tomtom_map/js/form.js'></script>
<script type='text/javascript' src='<?php echo base_url('themepengunjung') ?>/tomtom_map/js/tomtom.min.js'></script>
<script>
// build data json
var showroom = {
	"place": [
		<?php foreach ($map as $key => $value): ?>
		{
			"geometry": {
				"coordinates": [
					<?php echo $value['lat'] ?>, <?php echo $value['longt'] ?>
				]
			},
			"properties": {
				"name": "<?php echo $value['nama'] ?>"
			}
		},
		<?php endforeach ?>
	],
	"map_properties": {
		"tokenApi": 'vGhRrDJOvD9hOdOfGADGcDYp7y8U3tGm',
		"baseUrl": '<?php echo base_url('themepengunjung') ?>'
	}
}
</script>
<script type='text/javascript' src='<?php echo base_url('themepengunjung') ?>/tomtom_map/map_showroom.js'></script>
<!-- end map plugin -->
<script src="<?php echo base_url('themepengunjung') ?>/plugins/parallax-js-master/parallax.min.js"></script>

<script src="<?php echo base_url('themepengunjung') ?>/js/contact_custom.js"></script>

</body>

</html>