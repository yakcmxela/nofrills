<?php
// Template Name: Front-page
?>
<?php get_header(); ?>

<?php
// Custom Fields
$banner_image = get_field('banner_image');
$banner_header_text = get_field('banner_header_text');
$banner_link = get_field('banner_link');
$banner_position = get_field_object('banner_position');
?>


<div class="page-content Landing">
	<div class="banner d-flex flex-column justify-content-center align-items-start">
		<div class="landing-page-banner" style="background-image: url('<?php echo $banner_image['url']; ?>');"></div>
		<div class="banner-contents">
			<?php echo $banner_header_text ?>
			<div class="button mt-s d-flex justify-content-center">
				<?php echo $banner_link ?>
			</div>
		</div>
		<div class="prices d-flex align-items-center justify-content-center">
			<h6>Today's Fuel Prices</h6>
			<?php if( have_rows('todays_prices') ):
				while ( have_rows('todays_prices') ) : the_row(); ?>
				<div class="product">
					<h6><?php echo the_sub_field('fuel_type') ?></h6>
					<h6>$<?php echo the_sub_field('fuel_price') ?></h6>
				</div>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
	<div class="section-block">
		<div class="container-fluid p-0 center">
			<h3 class="pb-l">Heat your <a class="c-y" href="/">home</a>, fuel your <a class="c-y" href="">business</a>, save <a class="c-g" href="">money.</a></h4>
				<div class="row icons">
					<?php if( have_rows('link_blocks') ):
						while (have_rows('link_blocks') ) : the_row(); ?>
							<div class="col-xl-4 p-l">
								<img src="<?php the_sub_field('nflp_image'); ?>">
								<div>
									<h5>
										<?php the_sub_field('nflp_title'); ?>
									</h5>
									<?php the_sub_field('nflp_text'); ?>
									<div class="button">
										<a class="title-link" href="<?php the_sub_field('nflp_link'); ?>">
											<?php the_sub_field('nflp_link_text'); ?>
										</a>
									</div>
								</div>
							</div>
						<?php endwhile;
					endif; ?>
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
</div>

<?php get_footer(); ?>