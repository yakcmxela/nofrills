<?php
// Template Name: Subpage
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


<div class="page-content">
	<div class="page-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/aerial-road-woods.jpg');">
		<div class="p-xl d-flex flex-column justify-content-center align-items-start">
			<div class="page-banner-header-container px-l">
				<h3 class="page-banner-header soft-shadow text-shadow mb-0">Customer Resources</h3> 
			</div>
			<ul class="page-banner-scroll-navigation px-l c-w text-shadow">
				<li class="my-l">
					<a href="#front-page-section-1"><h3>Save energy</h3></a>
				</li>
				<li class="my-l">
					<a href="#front-page-section-2"><h3>Heating assistance</h3></a>
				</li>
				<li class="my-l">
					<a href="#front-page-section-3"><h3>Service Equipment</h3></a>
				</li>
			</ul>
			<div class="px-l c-w page-banner-link">
				<a href=""><h6 class="text-shadow">Contact Us</h6></a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>