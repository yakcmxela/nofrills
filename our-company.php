<?php
// Template Name: Our Company
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


<div class="page-content Our-Company">
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/history.jpg');"></div>
	<div class="container-fluid p-0">
		<div class="intro mt-xl mb-s mx-auto">
			<h2>Going the extra mile since 1980.</h2>
			<h5>A locally owned and operated family business.</h5>
			<p>September of 1980 was marked by the birth of Charlie and Kathy Birdsall's youngest son and by the beginning of a business venture that would change their lives. Hard work, honesty, and devotion to family and community were values that nurtured Charlie and Kathy's business and children.</p>
			<p>No Frills Oil was the first successful cash oil company in the Ellsworth area and the first oil company to offer Pre-Paid oil. No Frills has and always will put the needs of its customers first.</p>
			<div class="images d-flex justify-content-center">
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/johana.png">
					<p><strong>Johana Birdsall</strong><br/>Commander</p>
				</div>
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/filling.png">
					<p><strong>Charlie Birdsall</strong><br/>Oil Ninja<br/></p>
				</div>
				<div class="image">
					<img src="<?php echo get_template_directory_uri(); ?>/img/office.png">
					<p><strong>Kathy Birdsall</strong><br/>Phone Wizard</p>
				</div>
			</div>
		</div>
		<div class="section-block">
			<div class="row justify-content-center center mb-xl mx-auto">
				<div class="col-xl-4">
					<h1 class="plus first">+</h1>
					<div class="block mx-auto">
						<h2>Value</h2>
						<p>We understand what it takes to earn a buck and know how important is to save where you can. Our products and services are delivered at a fair price by conscientious, quality-driven employees.</p>
						<div class="review">
							<p class="block-shadow">"Friendly, professional, really good prices."</p>
							<p>Blake K.</p>
						</div>
						<div class="d-flex justify-content-center c-y">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="block mx-auto">
						<h2>Service</h2>
						<p>Our customer service is second to none. Whether you buy 100 gallons or 100,000 gallons -- a warm friendly member of the No Frills team will be there to greet you every time.</p>
						<div class="review">
							<p class="block-shadow">"Awesome people here. Always the best. Prompt courteous service."</p>
							<p>Coref F. Gordon</p>
						</div>
						<div class="d-flex justify-content-center c-y">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<h1 class="plus last">+</h1>
					<div class="block mx-auto">
						<h2>Community</h2>
						<p class="my-s">Giving back to the community is a part of what makes us who we are. Each year we pledge our support to many wonderful local organizations.</p>

						<div class="review">
							<p class="block-shadow">"A very awesome, community oriented company! The Maine Veterans Project had a need and No Frills stepped up to the plate without hesitation!"</p>
							<p>Doc Goodwin</p>
						</div>
						<div class="d-flex justify-content-center c-y">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div>
			</div>
			<h6 class="center c-mg">We proudly support:</h6>
			<div class="d-flex justify-content-center community-logos">
				<img src="<?php echo get_template_directory_uri(); ?>/img/maine-coast.png">
				<img src="<?php echo get_template_directory_uri(); ?>/img/girl-scouts.png">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ymca.png">
			</div>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>