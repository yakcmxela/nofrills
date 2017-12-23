<?php
// Template Name: Price Plans
?>
<?php get_header(); ?>

<?php
// Custom Fields
$banner_image = get_field('banner_image');
$banner_header_text = get_field('banner_header_text');
$banner_link_text = get_field('banner_link_text');
$banner_link = get_field('banner_link');
$banner_position = get_field_object('banner_position');
$intro_title = get_field('intro_title');
$intro_text = get_field('intro_text');
?>


<div class="page-content Price-Plans">
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bills-people.jpg');">
	</div>
	<div class="intro mx-auto p-xl center">
		<h2><?php echo $intro_title; ?></h2>
		<p><?php echo $intro_text; ?></p>
		<p><strong>Select a plan below to sign-up.</strong></p>
	</div>
	<div class="section-block">
		<div class="plans">
			<?php if ( have_rows('plans') ) : ?>
				<?php while ( have_rows('plans') ) : the_row(); ?>
					<div class="block hard-shadow mx-auto">
						<img src="<?php the_sub_field('plan_icon'); ?>">
						<div class="info">
							<h5><?php the_sub_field('plan_name') ?></h5>
							<p><?php the_sub_field('plan_description') ?></p>
						</div>
						<div class="button mt-xl" data-plan="">
							<h6>Select Plan</h6>
						</div>	
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>