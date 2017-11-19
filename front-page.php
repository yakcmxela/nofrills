<?php
// Template Name: Front-page
?>
<?php get_header(); ?>

<?php
// Custom Fields
	$banner_image = get_field('banner_image');
	$banner_header_text = get_field('banner_header_text');
	$banner_link_text = get_field('banner_link_text');
	$banner_link = get_field('banner_link');
	$banner_position = get_field_object('banner_position');
?>


<div class="page-content Landing">
	<div class="banner d-flex flex-column justify-content-center align-items-start">
		<img class="landing-page-banner" src="<?php echo $banner_image['url']; ?>">
		<div class="banner-contents">
			<h1>Going the extra mile <a href="<?php echo get_site_url(); ?>">since 1980.</a></h1>
			<div class="buttons mt-l d-flex justify-content-center">
				<h6><a href="<?php echo get_site_url(); ?>/sign-up">Become a Customer</a></h6>
				<h6><a href="<?php echo get_site_url(); ?>/online-bill-pay">Online Bill Pay</a></h6>
			</div>
		</div>
		<div class="prices d-flex align-items-center justify-content-center">
			<h6>Today's Fuel Prices</h6>
			<div class="product">
				<h6>Oil #2</h6>
				<h6>$2.319</h6>
			</div>
			<div class="product">
				<h6>Kerosene</h6>
				<h6>$3.099</h6>
			</div>
		</div>
	</div>
	<div class="section-block">
		<div class="container-fluid p-0 center">
			<h3 class="pb-l">Heat your <a class="c-y" href="/">home</a>, fuel your <a class="c-y" href="">business</a>, save <a class="c-g" href="">money.</a></h4>
			<div class="row icons">
				<div class="col-lg-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/house.png">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a href="<?php echo get_site_url(); ?>/delivery-area">Delivery Area</a>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/business-truck.png">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<a href="<?php echo get_site_url(); ?>/products-services">Products &amp; Services</a>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/icons/money.png">
					<p>We offer comprehensive pricing plans to suited for families and businesses of all budgets. Let's find the right plan for you.</p>
					<a href="<?php echo get_site_url(); ?>/price-plans">Price Plans</a>
				</div>
			</div>
		</div>
	</div>
	<div class="secion-block" id="map">
		<script type="text/javascript">
			// Initialize leaflet map
				
				mapboxgl.accessToken = 'pk.eyJ1IjoiYWxleHBtY2theSIsImEiOiJjajd0MHgxZGg1MHN4MndxdTM5ODh6MnJzIn0.rf5yQmrxDvzkGR0XU30lpQ';
				var map = new mapboxgl.Map({
					container: 'map',
					style: 'mapbox://styles/mapbox/light-v9',
					center: [-68.27784, 44.535858],
					zoom: 9
				});
				map.on('load', function() {
					L.marker([-68.27784, 44.535858]).addTo(map);
					map.addLayer({
						'id': 'coverage',
						'type': 'fill',
						'source': {
							'type': 'geojson',
							'data': {
								'type': 'Feature',
								'geometry': {
									'type': 'Polygon',
									'coordinates': [[
								// Map Coordinates
									[
									-68.79793167114258,
									45.00753503123719
									],
									[
									-69.17695999145508,
									44.79158175909385
									],
									[
									-69.02040481567383,
									44.50434127765394
									],
									[
									-68.87758255004883,
									44.44554600843547
									],
									[
									-68.78969192504883,
									44.44554600843547
									],
									[
									-68.85560989379883,
									44.32777776128442
									],
									[
									-68.55623245239258,
									44.223552064879726
									],
									[
									-68.14699172973633,
									44.203866109361435
									],
									[
									-67.72951126098633,
									44.47103123156185
									],
									[
									-67.69380569458008,
									44.67255939212044
									],
									[
									-67.98768997192383,
									44.88701247981298
									],
									[
									-68.55623245239258,
									44.85781578061526
									],
									[
									-68.51778030395508,
									44.98617046357792
									],
									[
									-68.79793167114258,
									45.00753503123719
									]
								]]
							}
						}
					},
					'layout': {},
					'paint': {
						'fill-color': '#00853c',
						'fill-opacity': 0.2
					}
					});

				});
				map.addControl(new mapboxgl.NavigationControl());
				map.scrollZoom.disable();
	</script>
	</div>
	<div class="page-section" id="front-page-section-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/aerial-road-woods.jpg');">
	</div>
</div>

<?php get_footer(); ?>