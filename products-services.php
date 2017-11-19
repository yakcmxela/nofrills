<?php
// Template Name: Products and Services
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


<div class="page-content Products-Services">
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/farmer-business.jpg');">
	</div>
	<div class="section-block">
		<div class="intro p-xl">
			<h2>Heat your <a class="c-y" href="">home</a>, fuel your <a class="c-g" href="">business</a>.</h2>
			<h5>Professional service, on-time delivery. No Frills.</h5>
		</div>
		<div class="block d-flex flex-column align-items-end hard-shadow">
			<?php if ( have_rows('product') ) : ?>
				<?php while ( have_rows('product') ) : the_row(); ?>
					<div class="blanket" style="background-image: url('<?php the_sub_field('product_image'); ?>');" data-product="<?php the_sub_field('product_title'); ?>"></div>
				<?php endwhile; ?>
			<?php endif;?>
			<div class="category-select">
				<div class="d-flex justify-content-center">
					<h3 class="products-button">Products &amp; Services</h3>
				</div>
				<div class="title">
					<?php if ( have_rows('product') ) : ?>
						<?php while ( have_rows('product') ) : the_row(); ?>
						<h1 class="" data-product="<?php the_sub_field('product_title'); ?>"><?php the_sub_field('product_title'); ?></h1>
						<?php endwhile; ?>
					<?php endif;?>
				</div>	
				<div class="d-flex justify-content-center align-items-center icons">
					<div class="arrow-container">
						<i class="fa fa-caret-left fa-5x arrow left"></i>
					</div>
					<?php if ( have_rows('product') ) : ?>
						<?php while ( have_rows('product') ) : the_row(); ?>
							<img class="icon" src="<?php the_sub_field('icon'); ?>">
						<?php endwhile; ?>
					<?php endif; ?>
					<div class="arrow-container">
						<i class="fa fa-caret-right fa-5x arrow right"></i>
					</div>
				</div>	
			</div>
			<div class="description-container align-self-center">
			<?php if ( have_rows('product') ) : ?>
				<?php while ( have_rows('product') ) : the_row(); ?>
					<div class="info block-shadow Hidden <?php the_sub_field('type'); ?>" data-product="<?php the_sub_field('product_title'); ?>">
						<?php if ( have_rows('product_description') ) :
							while ( have_rows('product_description') ) : the_row(); ?>
								<div class="my-s pl-s">
								<h3><?php the_sub_field('product_description_title'); ?></h3>
								<?php the_sub_field('product_description_text'); ?>	
								</div>	
							<?php endwhile; ?>
						<?php endif; ?>
						<div class="button d-flex">
							<a href="">
								<h6>Sign up for <?php the_sub_field('product_title'); ?></h6>
							</a>
						</div>
					</div>
					<?php endwhile; ?>
			<?php endif;?>
		</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>