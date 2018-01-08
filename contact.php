<?php
// Template Name: Contact Page
?>
<?php get_header(); ?>

<?php
// Custom Fields
$banner_image = get_field('banner_image');
$banner_position = get_field_object('banner_position');
$address = get_field('address');
$phone_number = get_field('phone_number');
$email_address = get_field('email_address');
$m_f_hours = get_field('m_f_hours');
$sat_hours = get_field('sat_hours');
$sun_hours = get_field('sun_hours');
?>


<div class="page-content Contact">
	<div class="banner" style="background-image: url('<?php echo $banner_image['url']; ?>');">
	</div>
	<div class="section-block hard-shadow">
		<div class="block contact-form">
			<div  class="d-flex align-items-center my-s">
				<i class="fa fa-map fa-2x"></i>
				<?php echo $address; ?>
			</div>
			<div class="d-flex align-items-center my-s">
				<i class="fa fa-phone-square fa-2x"></i>
				<div>
					<?php echo $phone_number ?>
				</div>
			</div>
			<div class="d-flex align-items-center my-s">
				<i class="fa fa-envelope-square fa-2x"></i>
				<?php echo $email_address ?>
			</div>
			<div class="d-flex align-items-center mt-s mb-l">
				<i class="fa fa-calendar fa-2x"></i>
				<p>Monday - Friday: <?php echo $m_f_hours; ?><br/>Saturday: <?php echo $sat_hours; ?><br/>Sunday: <?php echo $sun_hours ?></p>
			</div>
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</div>
		<div id="map">
			<script type="text/javascript">


				mapboxgl.accessToken = 'pk.eyJ1IjoiYWxleHBtY2theSIsImEiOiJjajd0MHgxZGg1MHN4MndxdTM5ODh6MnJzIn0.rf5yQmrxDvzkGR0XU30lpQ';
				var map = new mapboxgl.Map({
					container: 'map',
					style: 'mapbox://styles/mapbox/light-v9',
					center: [-68.27784, 44.535858],
					zoom: 12
				});

				var popup = new mapboxgl.Popup()

				var map_marker = document.createElement('div');
				map_marker.id = 'marker';

				new mapboxgl.Marker(map_marker)
				.setLngLat([-68.27784, 44.535858])
				.setPopup(popup)
				.addTo(map);
				map.addControl(new mapboxgl.NavigationControl());
				map.scrollZoom.disable();

			</script>
		</div>
	</div>		
</div>

<?php get_footer(); ?>