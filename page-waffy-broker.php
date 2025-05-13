<?php
/**
 * Template Name: Waffy Broker
 * 
 * The template for displaying the Waffy Broker page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Waffy
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		get_template_part( 'template-parts/broker/broker-header' );
		get_template_part( 'template-parts/broker/why-waffy' );
		get_template_part( 'template-parts/broker/use-waffy' );
		get_template_part( 'template-parts/broker/continue-your-work' );
		get_template_part( 'template-parts/broker/faq-broker' );
		?>

	</main>
<?php

get_footer();
