<?php
// Template Name: Form Success
?>
<?php get_header(); ?>

<div class="page-content Form-Success d-flex flex-column align-items-center justify-content-center p-l center" style="height: 100%; width: 100%">
	<h1 class="mb-3">Thank you!</h1>
	<p>We will contact you once you're application is reviewed. You will be redirected to the front page in a few moments.</p>
	<p class="c-y"><a href="<?php echo get_site_url(); ?>/">Click here to return home now.</a></p>
	<script type="text/javascript">
		setTimeout(function() {
			window.location = "http://nofrillsoil.com";
		}, 8000);
	</script>
</div>

<?php get_footer(); ?>