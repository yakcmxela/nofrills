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
?>


<div class="page-content Price-Plans">
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bills-people.jpg');">
	</div>
	<div class="intro mx-auto p-xl center">
		<h2>Pricing Plans</h2>
		<p>We understand that our customers have varying budgets and unique energy needs. Our goal is to offer you the best plan at the greatest value. Electronic payments are available for all of our pricing plans.</p>
		<p><strong>Select a plan below to sign-up.</strong></p>
	</div>
	<div class="section-block">
		<div class="plans">
			<div class="block hard-shadow mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/downside-protection.png">
				<div class="info">
					<h5>Downside Protection</h5>
					<p>If you want to <strong>lock-in</strong> your energy needs for the winter, but think the price might go down. Then Downside Protection might be right for you. If you invest in Downside Protection and the price goes down then you get the <strong>lower price</strong>. Downside Protection can be combined with our fixed budget or pre-paid plans.</p>
				</div>
				<div class="button block-shadow mt-xl" data-plan="">
					<h6>Select Plan</h6>
				</div>	
			</div>
			<div class="block hard-shadow mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/pre-paid.png">
				<div class="info">
					<h5>Pre-Paid Plan</h5>
					<p>Very simply, you reserve the gallons you need for the winter (October 1st thru April 30th), and pay for your oil in the summer. It is important to note, if the cash price drops below your contract price, you still pay the contract price. This plan is available for #2 heating oil, kerosene and propane.</p>
				</div>
				<div class="button block-shadow mt-xl" data-plan="">
					<h6>Select Plan</h6>
				</div>	
			</div>
			<div class="block hard-shadow mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/fixed-budget.png">
				<div class="info">
					<h5>Fixed Price Budget</h5>
					<p>Pay for your winter's oil in equal payments over an 11 month period (June to April). Sign up any time from May thru October, however your payment amount will be lowest if you sign up in May or June. If the cash price drops, you still pay the contract price. This plan is available for #2 heating oil, kerosene and propane.</p>
				</div>
				<div class="button block-shadow mt-xl" data-plan="">
					<h6>Select Plan</h6>
				</div>	
			</div>
			<div class="block hard-shadow mx-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/floating-budget.png">
				<div class="info">
					<h5>Floating Budget</h5>
					<p> You receive a discount off our cash price on the day of delivery. With the floating budget plan you make 11 monthly payments, from June to April, based on your estimated usage so you can spread out your heating bill.Your payment will fluctuate with the cash price of the day. This plan is available for #2 heating oil and kerosene.</p>
				</div>
				<div class="button block-shadow mt-xl" data-plan="">
					<h6>Select Plan</h6>
				</div>	
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>