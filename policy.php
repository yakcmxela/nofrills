<?php
// Template Name: Policy
?>
<?php get_header(); ?>


<?php
// Custom Fields
$content = get_field('content');
?>


<div class="page-content Policy">
	<div class="section-block">
		<?php echo $content; ?>
	</div>
</div>

<?php get_footer(); ?>