<?php

  if ( ! defined( 'ABSPATH' ) ) {
      exit;
    }
?>
<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="site-form" method="post">
	<input type="hidden" name="action" value="form_integration">
	<div class="fields-wrapper">
		<div class="form-group">
      <label for="name-field"><?php echo esc_html( pll__( 'Ваше ім’я' ) );?></label>
			<input type="text" name="name" id="name-field" class="form-control" required>
		</div>
		<div class="form-group">
      <label for="phone-field"><?php echo esc_html( pll__( 'Ваш номер телефону' ) );?></label>
			<input type="tel" name="phone" id="phone-field" class="form-control" required>
		</div>
		<!--<div class="form-group">
      <label for="email-field">Email</label>
			<input type="email" name="email" id="email-field" class="form-control" required>
		</div>-->
	</div>

	<button type="submit" class="button"><?php echo esc_html( pll__( 'Залишити заявку' ) ); ?></button>
	<input type="hidden" name="form-lang" value="<?php echo get_bloginfo('language');?>">
	<input type="hidden" name="page-url" value="<?php echo get_page_link(''); ?>">
	<input type="hidden" name="home-url" value="<?php echo get_home_url(''); ?>">
	<input type="hidden" name="page-name" value="<?php the_title();?>">
</form>