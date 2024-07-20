<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package security-holding
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

get_header();
?>

  <section class="error-404 not-found">
    <div class="top-pic">
      <img src="<?php echo THEME_PATH;?>/assets/img/page-404-top.jpg" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="content col-12 text-center">
          <h2><?php echo esc_html( pll__( 'Сторінки не знайденно' ) ); ?></h2>
          <div class="pic-404">
            <img src="<?php echo THEME_PATH;?>/assets/img/page-404-bottom.jpg" alt="">
          </div>
          <a href="<?php echo get_home_url('/');?>" class="button"><?php echo esc_html( pll__( 'Повернутись на головну' ) ); ?></a>
        </div>
      </div>
    </div>
  </section><!-- .error-404 -->

<?php
get_footer();
