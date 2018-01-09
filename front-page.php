<?php
// Template Name: Front-page
?>
<?php get_header(); ?>

<?php
// Custom Fields
$banner_image = get_field('banner_image');
$banner_header_text = get_field('banner_header_text');
$banner_link = get_field('banner_link');
$banner_position = get_field('banner_position');

?>


<div class="page-content Landing">
	<div class="banner d-flex flex-column justify-content-center align-items-start">
		<div class="landing-page-banner" style="background-image: url('<?php echo $banner_image['url']; ?>'); background-position: <?php echo $banner_position; ?>"></div>
		<div class="banner-contents">
			<?php echo $banner_header_text ?>
			<div class="button mt-m d-flex justify-content-center">
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
			<h3 class="pb-l">Heat your <a class="c-y" href="/">home</a>, fuel your <a class="c-y" href="">business</a>, save <a class="c-g" href="">money.</a></h3>
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
				//L.marker([-68.27784, 44.535858]).addTo(map);
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
						              -68.75096082687378,
						              44.88214739188459
						            ],
						            [
						              -68.85945081710815,
						              44.8665763456234
						            ],
						            [
						              -68.97480726242065,
						              44.843211876563394
						            ],
						            [
						              -68.90202283859253,
						              44.69599298172069
						            ],
						            [
						              -68.82649183273315,
						              44.65986223989897
						            ],
						            [
						              -68.84846448898315,
						              44.6188216638084
						            ],
						            [
						              -68.8237452507019,
						              44.60220174915696
						            ],
						            [
						              -68.81413221359253,
						              44.577752058683366
						            ],
						            [
						              -68.7962794303894,
						              44.567969302679685
						            ],
						            [
						              -68.7743067741394,
						              44.56503415498704
						            ],
						            [
						              -68.7688136100769,
						              44.54644144698689
						            ],
						            [
						              -68.7523341178894,
						              44.532737755596294
						            ],
						            [
						              -68.7578272819519,
						              44.51315545869879
						            ],
						            [
						              -68.78117322921753,
						              44.49062768005079
						            ],
						            [
						              -68.81138563156128,
						              44.44456558540571
						            ],
						            [
						              -68.8347315788269,
						              44.42299211572251
						            ],
						            [
						              -68.83335828781128,
						              44.3906169787868
						            ],
						            [
						              -68.81962537765503,
						              44.357242035876375
						            ],
						            [
						              -68.8402247428894,
						              44.326795363769975
						            ],
						            [
						              -68.82649183273315,
						              44.2982986787259
						            ],
						            [
						              -68.75920057296753,
						              44.30419567985763
						            ],
						            [
						              -68.73173475265503,
						              44.316970483696764
						            ],
						            [
						              -68.70426893234253,
						              44.3002644115815
						            ],
						            [
						              -68.66169691085815,
						              44.283553584572715
						            ],
						            [
						              -68.57929944992065,
						              44.23732831822538
						            ],
						            [
						              -68.53250026702881,
						              44.21764696919354
						            ],
						            [
						              -68.49278211593628,
						              44.238312212932016
						            ],
						            [
						              -68.49827527999878,
						              44.276671273775186
						            ],
						            [
						              -68.5381007194519,
						              44.316970483696764
						            ],
						            [
						              -68.53535413742065,
						              44.35429627478576
						            ],
						            [
						              -68.52848768234253,
						              44.386691502152054
						            ],
						            [
						              -68.49690198898315,
						              44.39257961837961
						            ],
						            [
						              -68.47630262374878,
						              44.36509667482153
						            ],
						            [
						              -68.45295667648315,
						              44.36804189293882
						            ],
						            [
						              -68.46531629562378,
						              44.33268950205708
						            ],
						            [
						              -68.4611964225769,
						              44.289452066459056
						            ],
						            [
						              -68.43235731124878,
						              44.257003086458845
						            ],
						            [
						              -68.4007716178894,
						              44.23437653539356
						            ],
						            [
						              -68.34847927093506,
						              44.21174128124646
						            ],
						            [
						              -68.27706813812256,
						              44.21764696919354
						            ],
						            [
						              -68.28409552574158,
						              44.258478428784606
						            ],
						            [
						              -68.27860236167908,
						              44.27716289413908
						            ],
						            [
						              -68.26006293296814,
						              44.28060412151815
						            ],
						            [
						              -68.22847723960876,
						              44.28404514735239
						            ],
						            [
						              -68.21611762046814,
						              44.29387553917738
						            ],
						            [
						              -68.20101141929626,
						              44.29534995604581
						            ],
						            [
						              -68.19483160972595,
						              44.302721485103355
						            ],
						            [
						              -68.18453192710876,
						              44.30468706988257
						            ],
						            [
						              -68.18178534507751,
						              44.319426857963876
						            ],
						            [
						              -68.16324591636658,
						              44.32532173664836
						            ],
						            [
						              -68.16805243492126,
						              44.34840430835639
						            ],
						            [
						              -68.17423224449158,
						              44.369514446465864
						            ],
						            [
						              -68.16942572593689,
						              44.38521938054099
						            ],
						            [
						              -68.17766547203064,
						              44.39601407929593
						            ],
						            [
						              -68.1975781917572,
						              44.40533517145092
						            ],
						            [
						              -68.2250440120697,
						              44.41220239438348
						            ],
						            [
						              -68.24770331382751,
						              44.440153478144595
						            ],
						            [
						              -68.26555609703064,
						              44.44897735945844
						            ],
						            [
						              -68.25319647789001,
						              44.46172061276446
						            ],
						            [
						              -68.23365390300751,
						              44.45853506014474
						            ],
						            [
						              -68.19826483726501,
						              44.459760293259436
						            ],
						            [
						              -68.17629218101501,
						              44.45829001043651
						            ],
						            [
						              -68.14745306968689,
						              44.453388800301774
						            ],
						            [
						              -68.15157294273376,
						              44.43427015014068
						            ],
						            [
						              -68.14470648765564,
						              44.41563570350106
						            ],
						            [
						              -68.15294623374939,
						              44.39454219215587
						            ],
						            [
						              -68.15225958824158,
						              44.374913492661456
						            ],
						            [
						              -68.12410712242126,
						              44.37442269084739
						            ],
						            [
						              -68.11243414878845,
						              44.35920579433504
						            ],
						            [
						              -68.09664130210876,
						              44.33661859851472
						            ],
						            [
						              -68.05681586265564,
						              44.322865609179345
						            ],
						            [
						              -68.03415656089783,
						              44.31451400659747
						            ],
						            [
						              -68.01667392253876,
						              44.344230473756056
						            ],
						            [
						              -68.01255404949188,
						              44.3746680922686
						            ],
						            [
						              -68.00328433513641,
						              44.393806234702645
						            ],
						            [
						              -67.98886477947235,
						              44.38104816826202
						            ],
						            [
						              -67.9692953824997,
						              44.380802793578475
						            ],
						            [
						              -67.94148623943329,
						              44.39012630860479
						            ],
						            [
						              -67.93564975261688,
						              44.40018422514324
						            ],
						            [
						              -67.91333377361298,
						              44.394787509250165
						            ],
						            [
						              -67.89616763591766,
						              44.39037164420998
						            ],
						            [
						              -67.88209140300751,
						              44.40214654387963
						            ],
						            [
						              -67.82818973064423,
						              44.41931402530711
						            ],
						            [
						              -67.83024966716766,
						              44.43549589232457
						            ],
						            [
						              -67.82612979412079,
						              44.46123053905879
						            ],
						            [
						              -67.8374594449997,
						              44.47838067107881
						            ],
						            [
						              -67.84947574138641,
						              44.51560360577554
						            ],
						            [
						              -67.8432959318161,
						              44.528577068252744
						            ],
						            [
						              -67.89960086345673,
						              44.64496395877106
						            ],
						            [
						              -68.20988416671753,
						              44.794505452883094
						            ],
						            [
						              -68.39665174484253,
						              44.79742899855565
						            ],
						            [
						              -68.50102186203003,
						              44.84223815129916
						            ],
						            [
						              -68.62873792648315,
						              44.889931335077634
						            ],
						            [
						              -68.75096082687378,
						              44.88214739188459
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