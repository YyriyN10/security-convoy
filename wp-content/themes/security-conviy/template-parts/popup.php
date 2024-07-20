<!-- The Modal -->
<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'security_contact_form_block_title'.security_lang_prefix());
	$contactFormSubtitle = carbon_get_post_meta(get_the_ID(), 'security_contact_form_block_subtitle'.security_lang_prefix());
?>
<div class="modal form-modal" id="formModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h2 class="block-title small-title small-margin"><?php echo $contactFormTitle;?></h2>
				<p class="subtitle"><?php echo $contactFormSubtitle;?></p>
				<button type="button" class="close" data-dismiss="modal">
					<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.293031 1.29308C0.480558 1.10561 0.734866 1.00029 1.00003 1.00029C1.26519 1.00029 1.5195 1.10561 1.70703 1.29308L7.00003 6.58608L12.293 1.29308C12.3853 1.19757 12.4956 1.12139 12.6176 1.06898C12.7396 1.01657 12.8709 0.988985 13.0036 0.987831C13.1364 0.986677 13.2681 1.01198 13.391 1.06226C13.5139 1.11254 13.6255 1.18679 13.7194 1.28069C13.8133 1.37458 13.8876 1.48623 13.9379 1.60913C13.9881 1.73202 14.0134 1.8637 14.0123 1.99648C14.0111 2.12926 13.9835 2.26048 13.9311 2.38249C13.8787 2.50449 13.8025 2.61483 13.707 2.70708L8.41403 8.00008L13.707 13.2931C13.8892 13.4817 13.99 13.7343 13.9877 13.9965C13.9854 14.2587 13.8803 14.5095 13.6948 14.6949C13.5094 14.8803 13.2586 14.9855 12.9964 14.9878C12.7342 14.99 12.4816 14.8892 12.293 14.7071L7.00003 9.41408L1.70703 14.7071C1.51843 14.8892 1.26583 14.99 1.00363 14.9878C0.741432 14.9855 0.49062 14.8803 0.305212 14.6949C0.119804 14.5095 0.0146347 14.2587 0.0123563 13.9965C0.0100779 13.7343 0.110873 13.4817 0.293031 13.2931L5.58603 8.00008L0.293031 2.70708C0.10556 2.51955 0.000244141 2.26525 0.000244141 2.00008C0.000244141 1.73492 0.10556 1.48061 0.293031 1.29308Z" fill="white"/>
					</svg>

				</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
        <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="site-form" method="post">
          <input type="hidden" name="action" value="form_integration">
          <div class="fields-wrapper">
            <div class="form-group">
              <label for="name-field-2"><?php echo esc_html( pll__( 'Ваше ім’я' ) );?></label>
              <input type="text" name="name" id="name-field-2" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="phone-field-2"><?php echo esc_html( pll__( 'Ваш номер телефону' ) );?></label>
              <input type="tel" name="phone" id="phone-field-2" class="form-control" required>
            </div>
            <!--<div class="form-group">
              <label for="email-field-2">Email</label>
              <input type="email" name="email" id="email-field-2" class="form-control" required>
            </div>-->
          </div>

          <button type="submit" class="button"><?php echo esc_html( pll__( 'Залишити заявку' ) ); ?></button>
          <input type="hidden" name="form-lang" value="<?php echo get_bloginfo('language');?>">
          <input type="hidden" name="page-url" value="<?php echo get_page_link(''); ?>">
          <input type="hidden" name="home-url" value="<?php echo get_home_url(''); ?>">
          <input type="hidden" name="page-name" value="<?php the_title();?>">
        </form>
			</div>

		</div>
	</div>
</div>