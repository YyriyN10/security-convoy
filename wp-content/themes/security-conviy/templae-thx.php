<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Thx
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package security-holding
	 *
	 */

	get_header();?>

	<!-- Thx content -->
	<section class="thx-content">
	  <div class="container">
	    <div class="row">
        <div class="content col-12">
	        <?php the_content();?>
          <a href="<?php echo get_home_url('/');?>" class="button"><?php echo esc_html( pll__( 'Повернутись на головну' ) ); ?></a>
        </div>
	    </div>
	  </div>
	</section>
<?php get_footer();