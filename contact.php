<?php
// Template Name: Contact Page
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


<div class="page-content Contact">
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/aerial-road-woods.jpg');">
	</div>
	<div class="section-block hard-shadow">
		<div class="block contact-form">
			<a class="d-flex align-items-center my-s" href="tel:2074223581">
				<i class="fa fa-phone-square fa-2x"></i>
				<p>(207)422-3581</p>
			</a>
			<a class="d-flex align-items-center my-s" href="mailto:info@nofrillsoil.com">
				<i class="fa fa-envelope-square fa-2x"></i>
				<p>info@nofrillsoil.com</p>
			</a>
			<div class="d-flex align-items-center mt-s mb-l">
				<i class="fa fa-calendar fa-2x"></i>
				<p>Monday - Friday: 7AM - 5PM<br/>Saturday - Sunday: Closed</p>
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
					zoom: 9
				});

				var popup = new mapboxgl.Popup()

				var map_marker = document.createElement('div');
				map_marker.id = 'marker';

				new mapboxgl.Marker(map_marker)
				.setLngLat([-68.27784, 44.535858])
				.setPopup(popup)
				.addTo(map);


			</script>
		</div>
	</div>		
</div>

<?php get_footer(); ?>