<?php
// Template Name: 404
?>
<?php get_header(); ?>

	<div class="page-content FourOFour" >
		<div class="section-block d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/roadway-river.jpg'); min-height: 85vh">
			<h2 class="c-w">Oops!</h2>
			<h3 class="c-w m-4">It looks like that can't be found.</h3>
			<h2 class="c-y"><strong><a href="<?php get_site_url(); ?>/">Return home.</a></strong></h2>
		</div>
	</div>

<?php get_footer(); ?>
