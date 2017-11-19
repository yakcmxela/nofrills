<?php
// Template Name: Delivery Area
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


<div class="page-content Delivery-Area">
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/roadway-river.jpg');">
		<div class="search-box-container justify-content-center align-items-center">
			<div class="d-flex align-items-center">
				<h3 class="title c-w">On-time delivery to</h3><i class="fa fa-search"></i>
			</div>
			<div class="search-box">
			</div>
		</div>
		<p class="view-full"><a href="#map">View Full Service Area<br/><i class="fa fa-angle-down fa-3x"></i></a></p>
		
	</div>
	<div class="yes-service Yes d-flex flex-column justify-content-center align-items-center">
		<h5 class="return-to-search c-y">Return to search</h5>
		<h5>Good news, we deliver to you! <a href="<?php echo get_site_url(); ?>/sign-up">Sign up for service!</a></h5>
	</div>
	<div class="no-service No d-flex flex-column justify-content-center align-items-center">
		<h5 class="return-to-search c-y">Return to search</h5>
		<h5>Uh oh! Looks like we aren't delivering to your area yet. <a href="<?php echo get_site_url(); ?>/contact-us">Request service.</a></h5>
	</div>
	<div id="map">
		<script type="text/javascript">
			// Initialize leaflet map	
			mapboxgl.accessToken = 'pk.eyJ1IjoiYWxleHBtY2theSIsImEiOiJjajd0MHgxZGg1MHN4MndxdTM5ODh6MnJzIn0.rf5yQmrxDvzkGR0XU30lpQ';
			var map = new mapboxgl.Map({
				container: 'map',
				style: 'mapbox://styles/mapbox/light-v9',
				center: [-68.27784, 44.535858],
				zoom: 9
			});

			var geocoder = new MapboxGeocoder({
				accessToken: mapboxgl.accessToken,
				placeholder: "",
				country: 'US'
			});

			map.scrollZoom.disable();
			map.addControl(new mapboxgl.NavigationControl());
			map.addControl(geocoder);

			var search_coordinates;

			geocoder.on('result', function(e){
				$('.banner').addClass('Small');
				map_marker = document.createElement('div');
				map_marker.id = 'marker';

				new mapboxgl.Marker(map_marker)
				.setLngLat(e.result.center)
				.addTo(map);
				search_coordinates = e.result.center;

				var search_within = turf.featureCollection([
					turf.polygon([[
						// coords
						[
						-68.79793167114258, 45.00753503123719
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
						]])
					]);

				var points = turf.featureCollection([
					turf.point(search_coordinates)
					]);

				var points_within = turf.pointsWithinPolygon(points, search_within);
				console.log(points_within);
				if (points_within.features.length > 0) {
					$('.yes-service').addClass('Active');
					$('.no-service').removeClass('Active');
				} else {
					$('.no-service').addClass('Active');
					$('.yes-service').removeClass('Active');
				}

			});

			var delivery_area = {
				'id': 'delivery_area',
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
				}
				map.on('load', function() {
					L.marker([-68.27784, 44.535858]).addTo(map);
					map.addLayer(delivery_area);
				});


			</script>
		</div>
	</div>

	<?php get_footer(); ?>