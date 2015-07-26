<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */
?>
<div id="sidebar">
	<div class="enquiry">
		<a href="<?php echo home_url( '/' ); ?>contact-and-booking/enquiry-form.html"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/pictures/online-enquiry.gif" alt="Online Enquiry" /></a>
	</div>
	<div class="prices">
		<h3>Prices</h3>
		<ul>
			<li class="holidays">
				<a href="<?php echo get_permalink(1402); ?>" class="arrow">arrow</a>
				<span>PADI courses</span></li>
			<li class="courses">
				<a href="<?php echo get_permalink(94); ?>" class="arrow">arrow</a>
				<span>Groups</span></li>
			<li class="courses">
				<a href="<?php echo get_permalink(1402); ?>" class="arrow">arrow</a>
				<span>Fun diving</span></li>
			<li class="diving">
				<a href="<?php echo get_permalink(1695); ?>" class="arrow">arrow</a>
				<span>PADI Professional</span></li>
		</ul>
	</div>
	<? include '_listingslab/_php/sidebar_top.php';?>
	<? include '_listingslab/_php/sidebar_bottom.php';?>
	<? include '_listingslab/_php/tripadvisor.php';?>
<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=242&amp;locationId=2208965&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2"></script>

	<? wp_reset_query();?>
	
</div>