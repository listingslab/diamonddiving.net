<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */

get_header(); ?>

	<div class="main-content">
		<h2 class="page-title">The page cannot be found</h2>
		<p>The page you are looking might have been removed, had its name changed, or is temporarily unavailable.</p>

		<p>Please try the following:</p>
		<ul>
			<li>If you typed the page address in the Address bar make sure it is spelled correctly.</li>
			<li><a href="<? bloginfo('url') ?>">Click here</a> to open the home page and then look for links to the information you want.</li>			
			<li>Click the Back button in your browser to try another link.</li>			
		</ul>
	</div>
	<?php get_sidebar(); ?>
	<div class="relax">&nbsp;</div>

<?php get_footer(); ?>