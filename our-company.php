<?php
// Template Name: Our Company
?>
<?php get_header(); ?>

<?php
// Custom Fields
$banner_image = get_field('banner_image');
$banner_position = get_field_object('banner_position');
$intro_heading = get_field('intro_heading');
$intro_subheading = get_field('intro_subheading');
$intro_text = get_field('intro_text');
$sponsorship = get_field('sponsorship')
?>


<div class="page-content Our-Company">
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/history.jpg');"></div>
	<div class="section-block">
		<div class="intro">
			<div class="container-fluid p-0">
				<h2><?php echo $intro_heading ?></h2>
				<h5><?php echo $intro_subheading ?></h5>
				<?php echo $intro_text ?>
				<?php if ( have_rows('employees') ) : ?>
					<div class="images row justify-content-center">
						<?php while ( have_rows('employees') ) : the_row(); ?>
							<div class="col-sm-3">
								<div class="image">
									<img src="<?php the_sub_field('employee_image'); ?>">
								</div>
								<p><strong><?php the_sub_field('employee_name'); ?></strong><br/><?php the_sub_field('employee_title'); ?></p>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="section-block">
		<div class="container-fluid p-0">
			<?php if ( have_rows('oc_blocks') ) : ?>
				<div class="row justify-content-center center mb-l mx-auto">
					<?php while ( have_rows('oc_blocks') ) : the_row(); ?>
						<div class="col-xl-4 p-0 oc-block">
							<h1 class="plus">+</h1>
							<div class="block mx-auto">
								<h2><?php the_sub_field('oc_block_heading'); ?></h2>
								<?php the_sub_field('oc_block_content'); ?>
								<div class="review">
									<p class="block-shadow">"<?php the_sub_field('oc_review'); ?>"</p>
									<p><?php the_sub_field('oc_reviewer'); ?></p>
								</div>
								<div class="d-flex justify-content-center c-y">
									<?php $numStars = get_sub_field('oc_stars'); ?>
									<?php for ($i = 0; $i < $numStars; $i++) {
										echo '<i class="fa fa-star"></i>';
									} ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if (have_rows('sponsorship_logos') ) : ?>
				<h5 class="center c-mg"><?php echo $sponsorship ?></h5>
				<div class="row community-logos">
					<?php while (have_rows('sponsorship_logos') ) : the_row(); ?>
						<div class="col-md-4 center">
							<img class="logo" src="<?php the_sub_field('oc_logo'); ?>">
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>	
	</div>
</div>

<?php get_footer(); ?>