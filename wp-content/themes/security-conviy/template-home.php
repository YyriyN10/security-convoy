<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Template Main
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package security-BSD
	 *
	 */

	get_header();
?>

	<!-- Main screen -->
<?php
	$mainScreenTitle = carbon_get_post_meta(get_the_ID(), 'security_main_screen_title'.security_lang_prefix());
	$mainScreenText = carbon_get_post_meta(get_the_ID(), 'security_main_screen_text'.security_lang_prefix());

	if ( $mainScreenTitle ):
		?>
		<section class="main-screen" >
      <svg class="light" xmlns="http://www.w3.org/2000/svg" width="1440" height="492" viewBox="0 0 1440 492" fill="none">
        <path d="M-17.3387 491.024L-43.0938 -550.85L1519.58 184.118L-17.3387 491.024Z" fill="url(#paint0_linear_778_189)"/>
        <defs>
          <linearGradient id="paint0_linear_778_189" x1="667.761" y1="283.836" x2="337.992" y2="-887.122" gradientUnits="userSpaceOnUse">
            <stop stop-color="#F2D7A5" stop-opacity="0"/>
            <stop offset="1" stop-color="#D8AE5E"/>
          </linearGradient>
        </defs>
      </svg>
			<div class="container">
				<div class="row">
					<div class="content col-md-8 col-12">
            <div class="inner">
              <h1><?php echo $mainScreenTitle;?></h1>
              <p class="text">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="32" viewBox="0 0 28 32" fill="none">
                  <path d="M26.7293 5.18162L14.4793 0.0955547C14.1724 -0.0318203 13.8275 -0.0318828 13.5207 0.0955547L1.27069 5.18162C0.804125 5.37537 0.5 5.83087 0.5 6.33606V12.5189C0.5 21.0322 5.64556 28.6901 13.5276 31.9073C13.8304 32.0309 14.1696 32.0309 14.4724 31.9073C22.3543 28.6902 27.5 21.0322 27.5 12.5189V6.33606C27.5 5.83087 27.1959 5.37537 26.7293 5.18162ZM25 12.5189C25 19.7561 20.75 26.4184 14 29.3922C7.43038 26.4978 3 19.9522 3 12.5189V7.17056L14 2.60343L25 7.17056V12.5189ZM12.6184 16.7322L17.9911 11.3596C18.4792 10.8714 19.2707 10.8714 19.7589 11.3596C20.2471 11.8477 20.247 12.6392 19.7588 13.1273L13.5022 19.3839C13.014 19.8721 12.2226 19.8719 11.7345 19.3839L8.24113 15.8905C7.75294 15.4023 7.75294 14.6109 8.24113 14.1227C8.72931 13.6346 9.52075 13.6346 10.0089 14.1227L12.6184 16.7322Z" fill="url(#paint0_linear_353_417)"/>
                  <defs>
                    <linearGradient id="paint0_linear_353_417" x1="2.2625" y1="-2.63703" x2="33.1264" y2="13.5428" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#D8AE5E"/>
                      <stop offset="1" stop-color="#F2D7A5"/>
                    </linearGradient>
                  </defs>
                </svg>
                <span><?php echo $mainScreenText;?></span>
              </p>
              <a href="#" class="button" data-toggle="modal" data-target="#formModal"><?php echo esc_html( pll__( 'Отримати консультацію' ) ); ?></a>
            </div>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!-- Переваги -->
<?php
	$productDescriptionAdvList = carbon_get_post_meta( get_the_ID(), 'security_product_description_advantages_list'.security_lang_prefix());


	if ( $productDescriptionAdvList):
?>
	<section class="product-description indent-top-big indent-bottom-small animation-tracking">
	  <div class="container">
	    <div class="row second-up">
	      <div class="content col-12">
          <div class="light-element top"><img src="<?php echo THEME_PATH;?>/assets/img/light-adv-top.png" alt=""></div>
          <div class="light-element bottom"><img src="<?php echo THEME_PATH;?>/assets/img/light-adv-bottom.png" alt=""></div>
            <ul class="product-description__term">
	            <?php foreach( $productDescriptionAdvList as $item ):?>
                <li class="product-description__term-item">
                  <span class="product-description__term-icon">
                    <img src="<?php echo $item['icon'];?>" alt="" class="svg-pic">
                  </span>
                  <p class="product-description__term-text"><?php echo $item['description'];?></p>
                </li>
	            <?php endforeach;?>
            </ul>
	      </div>
	    </div>
	  </div>
	</section>
<?php endif;?>

    <?php
        $serviceTypesBlockTitle = carbon_get_post_meta(get_the_ID(), 'security_types_service_block_title'.security_lang_prefix());
	      $serviceTypesList = carbon_get_post_meta(get_the_ID(), 'security_types_service_list'.security_lang_prefix());

        if( $serviceTypesBlockTitle && $serviceTypesList ):?>
        <!-- Типи послуги -->
        <section class="service-types indent-top-small indent-bottom-big">
          <div class="custom-anchor" id="security-sistem"></div>
          <div class="container">
            <div class="row">
              <h2 class="block-title big-title col-12 text-center"><?php echo $serviceTypesBlockTitle;?></h2>
            </div>
            <div class="row content">
              <div class="light-element"><img src="<?php echo THEME_PATH;?>/assets/img/light-type.png" alt=""></div>
              <?php foreach( $serviceTypesList as $item ):?>
                <div class="service-types__item col-md-6">
                  <div class="inner">
                    <div class="pic">
                      <img
                          class="lazy"
                          data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                          alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                      >
                    </div>
                    <div class="service-types__info">
                      <h3 class="service-types__name"><?php echo $item['name'];?></h3>
                      <p class="service-types__descroption"><?php echo $item['description'];?></p>
	                    <?php if( $item['inner_list'] ):?>
                          <ul>
		                      <?php foreach( $item['inner_list'] as $innerItem ):?>
                                <li>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15.8373 6.4408L9.20567 14.2454L8.03341 13.1735C7.80711 12.9734 7.50403 12.8627 7.18943 12.8652C6.87483 12.8677 6.57389 12.9832 6.35143 13.1869C6.12897 13.3905 6.00278 13.666 6.00005 13.9539C5.99731 14.2419 6.11825 14.5193 6.33681 14.7265L8.46896 16.6782C8.69392 16.8842 8.99906 16.9999 9.31725 17H9.39284C9.56249 16.9906 9.72797 16.9481 9.8782 16.8753C10.0284 16.8026 10.16 16.7013 10.2639 16.5782L17.7306 7.79173C17.8315 7.6783 17.9066 7.54757 17.9516 7.40721C17.9965 7.26685 18.0104 7.11969 17.9923 6.97436C17.9743 6.82903 17.9247 6.68846 17.8466 6.5609C17.7684 6.43334 17.6631 6.32136 17.537 6.23154C17.4109 6.14171 17.2665 6.07584 17.1122 6.0378C16.9579 5.99976 16.7969 5.99031 16.6386 6.01001C16.4802 6.0297 16.3278 6.07815 16.1902 6.1525C16.0526 6.22686 15.9326 6.32562 15.8373 6.443V6.4408Z" fill="url(#paint0_linear_953_6425)"/>
                                    <defs>
                                      <linearGradient id="paint0_linear_953_6425" x1="6.78333" y1="5.09352" x2="18.7656" y2="13.2151" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#D8AE5E"/>
                                        <stop offset="1" stop-color="#F2D7A5"/>
                                      </linearGradient>
                                    </defs>
                                  </svg>
                                  <span><?php echo $innerItem['text'];?></span>
                                </li>
		                      <?php endforeach;?>
                          </ul>
	                    <?php endif;?>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>

            </div>
          </div>
        </section>
    <?php endif;?>

  <!--Призив до дії -->
<?php
	$callToActionBlTitle = carbon_get_post_meta( get_the_ID(), 'security_call_to_action_block_title'.security_lang_prefix());
	$callToActionText = carbon_get_post_meta( get_the_ID(), 'security_call_to_action_text'.security_lang_prefix());

	if ( $callToActionBlTitle ):
		?>
      <section class="call-to-action animation-tracking">
        <svg class="call-to-action__pic" xmlns="http://www.w3.org/2000/svg" width="1023" height="614" viewBox="0 0 1023 614" fill="none">
          <path opacity="0.85" d="M1019.59 186.37C998.967 214.313 974.755 257.163 919.424 254.64C957.931 247.967 1023.14 186.974 1023 106.05C1022.96 86.1148 1023 52.9149 1001.51 0.00649082C964.45 109.315 876.705 119.237 812.767 127.797C709.34 141.638 670.886 179.173 661.59 190.257C642.3 153.365 634.275 151.074 621.876 150.243C618.782 150.036 615.574 149.822 611.702 148.582C611.548 148.53 611.432 148.485 611.349 148.446C611.407 147.563 612.107 145.597 612.627 144.124C614.876 137.777 618.646 127.147 610.706 114.344C598.166 94.1163 580.739 86.952 568.327 84.499C551.933 81.2607 537.536 84.83 531.093 89.5218C524.868 94.0514 517.526 94.2137 508.223 94.4213C501.954 94.5575 494.848 94.7134 487.056 96.3487C476.053 98.6588 464.116 109.607 453.586 119.263C446.817 125.473 439.139 132.514 435.62 132.962C432.67 133.338 430.813 132.871 426.324 131.755C420.639 130.34 412.049 128.199 394.319 126.025C383.643 124.721 377.314 124.474 372.683 124.292C363.375 123.929 360.568 123.818 339.285 115.35C334.236 113.344 329.494 111.391 324.907 109.503C300.419 99.4181 281.082 91.4491 255.632 92.3123C226.12 93.3116 214.228 97.6401 213.733 97.8217L214.967 101.216C150.753 95.1805 56.5251 103.351 21.4886 0C0.00024749 52.9149 0.0323708 86.1148 0.000250647 106.044C-0.147502 186.974 65.0628 247.961 103.568 254.632C48.2382 257.151 24.0325 214.307 3.40497 186.364C13.1438 363.117 132.136 361.824 167.076 358.574L167.5 358.93C114.9 387.822 62.795 369.613 33.8163 336.295C52.1954 435.473 140.892 471.963 224.572 424.876C150.451 497.331 85.5874 449.231 52.4139 420.25C107.108 626.762 241.902 534.768 269.995 497.331C248.179 571 149.545 577.338 100.234 542.016C131.622 632.59 237.418 657.503 293.906 589.722C297.939 629.878 234.727 651.156 195.277 642.998C235.33 686.484 332.463 700.067 368.327 628.055C376.396 664.29 384.464 690.554 427.505 707.776C400.467 733.299 375.496 732.228 351.291 745.811C341.726 802.27 407.778 793.82 403.294 844.543C441.85 837.292 449.322 811.33 474.132 777.512C475.931 825.521 426.613 856.32 409.577 857.222C438.728 885.47 469.146 902.811 487.576 896.165C490.718 905.68 494.026 913.239 471.427 930.274C438.569 955.043 438.569 955.043 462.479 999.724C486.389 1044.4 491.765 1036.56 511.494 1118L511.486 1117.78L511.494 1118C531.221 1036.56 536.599 1044.4 560.502 999.724C584.419 955.043 584.419 955.043 551.553 930.274C528.955 913.239 532.263 905.68 535.396 896.165C553.827 902.811 584.253 885.47 613.411 857.222C596.368 856.32 547.057 825.515 548.848 777.512C573.653 811.33 581.123 837.292 619.68 844.543C615.202 793.82 681.247 802.27 671.683 745.811C647.471 732.228 622.513 733.307 595.467 707.776C638.509 690.554 646.578 664.29 654.646 628.055C690.512 700.067 787.65 686.484 827.697 642.998C788.246 651.156 725.033 629.878 729.069 589.722C785.56 657.497 891.352 632.59 922.74 542.016C873.422 577.346 774.801 571.006 752.985 497.331C781.076 534.768 915.873 626.762 970.56 420.25C937.387 449.231 872.529 497.331 798.409 424.876C882.095 471.969 970.785 435.473 989.163 336.295C960.024 369.8 907.495 388.036 854.593 358.45C887.78 361.774 1009.73 365.395 1019.59 186.37ZM817.173 356.563C793.411 361.999 781.09 367.66 773.909 392.112C766.732 416.57 750.594 416.798 741.634 420.872C732.666 424.948 724.597 436.5 715.629 441.023C706.669 445.552 680.221 452.347 669.902 459.14C659.594 465.928 629.104 492.653 662.285 511.218C695.463 529.79 686.195 501.114 699.049 502.315C711.106 503.445 711.601 514.847 706.218 516.65C700.834 518.474 698.593 522.089 700.834 524.353C703.077 526.618 704.87 533.419 695.458 534.768C686.039 536.131 682.006 530.686 672.145 539.752C662.285 548.812 655.558 549.259 648.388 550.169C641.213 551.076 632.245 559.221 625.526 565.112C618.799 571 618.799 571 618.799 571C618.799 571 581.142 577.793 582.485 549.259C583.636 524.911 572.174 532.049 575.31 520.283C578.451 508.506 580.244 495.378 578.001 486.767C575.76 478.168 552.453 474.541 551.547 471.822C550.647 469.108 530.328 446.312 531.229 437.557C532.121 428.802 540.492 426.993 542.284 426.388C544.075 425.786 558.125 427.589 561.119 427.895C564.107 428.192 564.215 422.04 548.978 403.326L528.844 400.717L495.182 392.318L489.986 400.418L456.902 407.621L466.385 414.001L475.95 422.753C475.95 422.753 473.56 456.577 466.082 466.227C458.61 475.896 426.927 507.896 410.186 508.792V514.736C410.186 514.736 393.754 526.851 376.711 525.708C363.265 524.801 358.93 500.498 377.161 481.925C402.208 456.415 381.053 456.934 389.565 446.331C395.842 438.517 400.923 447.843 404.81 441.509C408.69 435.168 416.616 413.246 404.515 390.151C392.411 367.055 403.917 367.951 391.364 362.065C378.812 356.186 366.528 349.196 355.8 343.349C344.141 337.008 334.581 334.297 319.634 339.728C304.691 345.161 271.363 363.129 238.641 361.766C236.456 361.677 234.265 361.539 232.075 361.358L222.201 347.581L179.153 334.297L135.656 313.479C135.656 313.479 134.127 311.928 132.508 309.528L128.789 300.273C128.538 297.665 129.072 294.965 131.037 292.479C138.213 283.419 139.999 269.383 149.417 251.718C158.834 234.055 177.22 199.635 214.428 191.938C214.428 191.938 212.391 192.431 211.279 186.993C211.279 186.993 211.279 186.993 211.279 186.987L224.591 182.126L212.841 120.846C213.188 115.999 222.278 101.618 222.148 101.599C228.536 100.45 241.716 99.9439 255.882 99.4636C279.811 98.6655 297.611 105.985 322.249 116.129C326.853 118.023 331.615 119.983 336.702 122.008C359.103 130.924 362.463 131.054 372.427 131.444C376.93 131.619 383.096 131.859 393.479 133.131C410.784 135.246 419.123 137.329 424.641 138.705C429.395 139.893 432.267 140.607 436.518 140.068C442.261 139.341 449.372 132.819 458.373 124.565C468.228 115.525 479.406 105.272 488.515 103.357C495.665 101.858 502.134 101.715 508.39 101.579C518.085 101.365 527.232 101.164 535.249 95.3298C540.653 91.3907 553.288 88.8209 566.97 91.527C578.007 93.7075 593.515 100.1 604.705 118.147C610.821 128.004 608.13 135.603 605.964 141.71C604.629 145.474 603.479 148.718 604.957 151.736C605.805 153.462 607.352 154.695 609.569 155.403C614.259 156.908 618.068 157.161 621.421 157.382C630.872 158.011 637.115 158.427 656.06 194.994L659.238 193.314C659.213 193.353 659.202 193.379 659.202 193.379C659.202 193.379 663.781 213.938 699.055 206.435C707.573 204.619 725.053 206.89 730.879 218.655C736.706 230.426 756.441 228.623 764.953 229.077C773.465 229.532 786.024 239.039 800.368 240.402C814.713 241.764 836.683 253.075 835.784 274.814C834.884 296.561 840.93 351.138 817.173 356.563Z" fill="url(#paint0_radial_953_6517)"/>
          <defs>
            <radialGradient id="paint0_radial_953_6517" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(538.967 548.629) rotate(-92.0113) scale(516.797 1158.2)">
              <stop stop-color="#F2D7A5" stop-opacity="0"/>
              <stop offset="1" stop-color="#D8AE5E"/>
            </radialGradient>
          </defs>
        </svg>
        <div class="container">
          <div class="row">
            <div class="content col-12 text-center first-up">
              <h2 class="block-title small-title small-margin"><?php echo $callToActionBlTitle;?></h2>
              <p class="subtitle"><?php echo $callToActionText;?></p>
              <a href="#" class="button" data-toggle="modal" data-target="#formModal"><?php echo esc_html( pll__( 'Отримати пропозицію' ) ); ?></a>
            </div>
          </div>
        </div>
      </section>
	<?php endif;?>

<?php
    $performanceBlockTitle = carbon_get_post_meta(get_the_ID(), 'security_performance_block_title'.security_lang_prefix());
    $performanceList = carbon_get_post_meta(get_the_ID(), 'security_performance_list'.security_lang_prefix());

    if( $performanceBlockTitle && $performanceList ):?>
    <!-- Результативність -->
    <section class="performance indent-top-big indent-bottom-small">
      <div class="container">
        <div class="row">
          <h2 class="block-title small-title col-12 text-center"><?php echo $performanceBlockTitle;?></h2>
        </div>
        <div class="row content">
          <div class="light-element"><img src="<?php echo THEME_PATH;?>/assets/img/light-succses.png" alt=""></div>
          <?php foreach( $performanceList as $item ):?>
            <div class="performance__item col-12">
              <div class="text"><?php echo wpautop($item['text']);?></div>
              <div class="pic">
                <img
                    class="lazy"
                    data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                    alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                >
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
<?php endif;?>

  <!-- Слоган -->
<?php
	$sloganText = carbon_get_post_meta( get_the_ID(), 'security_slogan_text'.security_lang_prefix());
	$sloganTitle = carbon_get_post_meta( get_the_ID(), 'security_slogan_block_title'.security_lang_prefix());
	$sloganGallery = carbon_get_post_meta( get_the_ID(), 'security_slogan_image_list'.security_lang_prefix());

	if ( $sloganText && $sloganTitle ):
		?>
      <section class="slogan indent-top-small indent-bottom-small animation-tracking">
        <div class="container">
          <div class="row first-up">
            <h2 class="block-title text-center col-12 small-title"><?php echo $sloganTitle;?></h2>
            <p class="col-12 subtitle text-center"><?php echo $sloganText;?></p>
          </div>
          <?php if( $sloganGallery ):?>
            <div class="row">
              <div class="gallery col-12">
                <?php foreach( $sloganGallery as $item ):?>
                  <div class="pic">
                    <img
                        class="lazy"
                        data-src="<?php echo wp_get_attachment_image_src($item['image'], 'full')[0];?>"
                        alt="<?php echo get_post_meta($item['image'], '_wp_attachment_image_alt', TRUE);?>"
                    >
                  </div>
                <?php endforeach;?>
              </div>
            </div>
          <?php endif;?>
        </div>
      </section>
	<?php endif;?>

  <!-- Про нас -->
<?php
	$aboutUsBlTitle = carbon_get_post_meta( get_the_ID(), 'security_about_us_block_title'.security_lang_prefix());
	$aboutUsText = carbon_get_post_meta( get_the_ID(), 'security_about_us_text'.security_lang_prefix());
	$aboutUsList = carbon_get_post_meta( get_the_ID(), 'security_about_us_list'.security_lang_prefix());
	$aboutUsAssertionText = carbon_get_post_meta( get_the_ID(), 'security_about_us_assertion_text'.security_lang_prefix());
	$aboutUsAssertionImage = carbon_get_post_meta( get_the_ID(), 'security_about_us_assertion_image'.security_lang_prefix());

	if ( $aboutUsBlTitle && $aboutUsList ):
		?>
      <section class="about-us indent-top-small indent-bottom-big animation-tracking">
        <div class="custom-anchor" id="about-us"></div>
        <div class="container">
          <div class="row first-up">
            <h2 class="block-title big-title col-12 small-margin"><?php echo $aboutUsBlTitle;?></h2>
			  <?php if( $aboutUsText ):?>
                <p class="subtitle col-lg-11"><?php echo $aboutUsText;?></p>
			  <?php endif;?>
          </div>
          <div class="row second-up">
            <ul class="content col-12">
				<?php foreach( $aboutUsList as $item ):?>
                  <li class="item">
					  <?php if( $item['select_type'] == 'image'):?>
                        <div class="item__icon"><img src="<?php echo $item['image'];?>" alt="" class="svg-pic"></div>
					  <?php endif;?>
					  <?php if( $item['select_type'] == 'text'):?>
                        <p class="item__sens">
							<?php echo $item['sense'];?>
                        </p>
					  <?php endif;?>

                    <p class="item__text"><?php echo $item['text'];?></p>
                  </li>
				<?php endforeach;?>
            </ul>
          </div>
        </div>
        <svg class="bg-pic" width="1737" height="1446" viewBox="0 0 1737 1446" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.45">
            <path d="M1269.65 339.859C1144.89 294.133 1009.8 299.708 889.233 355.667C768.703 411.535 677.089 511.036 631.352 635.82C585.614 760.604 591.225 895.741 647.1 1016.27C702.976 1136.79 802.47 1228.35 927.224 1274.08C1051.98 1319.81 1186.98 1314.2 1307.64 1258.27C1428.17 1202.41 1519.78 1102.9 1565.52 978.121C1611.26 853.337 1605.61 718.291 1549.74 597.765C1493.8 477.113 1394.4 385.586 1269.65 339.859ZM928.541 1270.49C804.8 1225.13 706.091 1134.28 650.624 1014.63C595.157 894.987 589.576 760.906 634.942 637.136C680.308 513.366 771.216 414.651 890.773 359.159C1010.42 303.7 1144.46 298.157 1268.21 343.512C1391.95 388.867 1490.66 479.723 1546.12 599.367C1601.59 719.012 1607.08 853.059 1561.71 976.829C1516.35 1100.6 1425.44 1199.31 1305.88 1254.81C1186.33 1310.3 1052.28 1315.84 928.541 1270.49Z" fill="url(#paint0_linear_415_10)"/>
            <path d="M1205.46 342.89C1086.97 299.458 958.644 304.797 844.155 357.86C729.666 410.924 642.666 505.53 599.225 624.047C555.785 742.565 561.072 870.893 614.115 985.467C667.193 1099.95 761.673 1186.96 880.166 1230.39C998.659 1273.82 1126.99 1268.48 1241.51 1215.32C1356 1162.26 1443 1067.65 1486.44 949.137C1529.88 830.62 1524.59 702.292 1471.52 587.81C1418.44 473.327 1323.96 386.322 1205.46 342.89ZM881.517 1226.7C763.945 1183.61 670.25 1097.31 617.581 983.706C564.911 870.105 559.655 742.833 602.758 625.238C645.861 507.642 732.121 413.915 845.729 361.26C959.337 308.605 1086.61 303.298 1204.18 346.392C1321.75 389.486 1415.45 475.786 1468.12 589.387C1520.79 702.988 1526.04 830.259 1482.94 947.855C1439.84 1065.45 1353.58 1159.18 1239.97 1211.83C1126.36 1264.49 998.998 1269.76 881.517 1226.7Z" fill="url(#paint1_linear_415_10)"/>
            <path d="M1141.31 345.825C1029.08 304.688 907.467 309.664 798.985 360.016C690.503 410.368 608.092 499.861 566.915 612.204C525.737 724.547 530.793 846.099 581.072 954.538C631.352 1062.98 720.818 1145.43 833.142 1186.6C945.467 1227.77 1066.99 1222.76 1175.47 1172.41C1283.95 1122.05 1366.36 1032.56 1407.51 920.31C1448.65 808.06 1443.63 686.415 1393.35 577.976C1343.01 469.411 1253.55 386.962 1141.31 345.825ZM834.46 1183C723.148 1142.2 634.433 1060.55 584.562 952.994C534.691 845.437 529.7 724.849 570.505 613.52C611.311 502.191 693.016 413.485 800.617 363.542C908.092 313.657 1028.65 308.712 1139.96 349.511C1251.27 390.311 1339.99 471.962 1389.86 579.52C1439.73 687.077 1444.72 807.665 1403.92 918.994C1363.11 1030.32 1281.41 1119.03 1173.81 1168.97C1066.27 1218.73 945.771 1223.8 834.46 1183Z" fill="url(#paint2_linear_415_10)"/>
            <path d="M1077.13 348.852C971.069 309.975 856.316 314.749 753.783 362.264C651.376 409.72 573.487 494.284 534.607 600.36C495.726 706.436 500.458 821.178 547.997 923.7C595.445 1026.19 680.023 1104.02 786.087 1142.9C892.151 1181.77 1006.9 1177 1109.44 1129.49C1211.88 1081.94 1289.73 997.466 1328.61 891.39C1367.49 785.315 1362.76 670.572 1315.22 568.05C1267.68 465.529 1183.1 387.694 1077.13 348.852ZM787.438 1139.21C682.387 1100.71 598.595 1023.58 551.521 922.064C504.448 820.55 499.781 706.772 538.29 601.71C576.798 496.648 653.889 412.836 755.415 365.789C856.942 318.742 970.73 314.033 1075.78 352.538C1180.83 391.043 1264.62 468.172 1311.7 569.686C1358.68 671.166 1363.47 784.886 1324.93 890.04C1286.42 995.102 1209.33 1078.91 1107.8 1125.96C1006.28 1173.01 892.489 1177.72 787.438 1139.21Z" fill="url(#paint3_linear_415_10)"/>
            <path d="M1012.98 351.79C807.024 276.299 578.013 382.519 502.515 588.495C427.017 794.472 533.138 1023.53 739.098 1099.02C945.057 1174.51 1174.03 1068.38 1249.53 862.407C1325.03 656.431 1218.94 427.282 1012.98 351.79ZM740.415 1095.43C536.389 1020.64 431.318 793.853 506.106 589.812C580.894 385.77 807.732 280.636 1011.67 355.385C1215.6 430.133 1320.76 656.958 1245.98 860.999C1171.19 1065.04 944.349 1170.17 740.415 1095.43Z" fill="url(#paint4_linear_415_10)"/>
            <path d="M948.798 354.817C755.729 284.05 540.972 383.577 470.17 576.743C399.368 769.91 498.844 984.614 692.005 1055.41C885.167 1126.21 1099.83 1026.65 1170.63 833.487C1241.44 640.321 1141.87 425.583 948.798 354.817ZM693.356 1051.73C502.22 981.67 403.794 769.232 473.853 578.093C543.912 386.954 756.345 288.353 947.481 358.411C1138.62 428.469 1237.04 640.906 1166.98 832.045C1096.93 1023.18 884.4 1121.75 693.356 1051.73Z" fill="url(#paint5_linear_415_10)"/>
            <path d="M884.616 357.846C704.436 291.804 504.026 384.672 437.953 564.936C371.88 745.2 464.711 945.551 644.983 1011.63C825.163 1077.67 1025.57 984.801 1091.65 804.537C1157.72 624.273 1064.8 423.888 884.616 357.846ZM646.334 1007.94C468.088 942.607 376.248 744.397 441.578 566.16C506.908 387.923 705.086 296.015 883.332 361.348C1061.58 426.682 1153.42 624.892 1088.09 803.129C1022.76 981.365 824.488 1073.24 646.334 1007.94Z" fill="url(#paint6_linear_415_10)"/>
            <path d="M820.467 360.78C653.177 299.462 467.114 385.671 405.77 553.033C344.426 720.395 430.704 906.426 597.994 967.744C765.285 1029.06 951.348 942.853 1012.69 775.491C1074.04 608.129 987.758 422.098 820.467 360.78ZM599.278 964.242C433.921 903.633 348.726 719.776 409.327 554.441C469.928 389.107 653.759 303.857 819.116 364.466C984.473 425.075 1069.67 608.932 1009.07 774.267C948.467 939.602 764.543 1024.82 599.278 964.242Z" fill="url(#paint7_linear_415_10)"/>
            <path d="M756.284 363.809C601.792 307.183 430.133 386.858 373.518 541.318C316.904 695.778 396.503 867.548 550.904 924.141C705.304 980.734 877.054 901.092 933.669 746.632C990.284 592.173 910.685 420.403 756.284 363.809ZM552.255 920.454C399.788 864.57 321.238 695.066 377.109 542.634C432.981 390.202 602.5 311.519 754.967 367.404C907.434 423.288 985.984 592.792 930.079 745.316C874.173 897.841 704.722 976.339 552.255 920.454Z" fill="url(#paint8_linear_415_10)"/>
            <path d="M692.135 366.748C550.532 314.845 393.129 387.828 341.243 529.386C289.357 670.943 362.312 828.36 503.915 880.262C645.517 932.164 802.921 859.182 854.807 717.624C906.692 576.067 833.646 418.616 692.135 366.748ZM505.198 876.76C365.621 825.6 293.716 670.45 344.892 530.827C396.068 391.205 551.207 319.274 690.784 370.434C830.361 421.594 902.266 576.745 851.09 716.367C799.914 855.989 644.776 927.92 505.198 876.76Z" fill="url(#paint9_linear_415_10)"/>
            <path d="M627.95 369.772C499.237 322.594 356.18 388.918 308.99 517.665C261.833 646.32 328.109 789.476 456.822 836.653C585.535 883.831 728.592 817.508 775.782 688.761C822.88 559.98 756.571 416.916 627.95 369.772ZM458.173 832.967C331.485 786.532 266.259 645.642 312.673 519.015C359.086 392.387 499.911 327.023 626.599 373.459C753.286 419.894 818.513 560.783 772.099 687.411C725.686 814.038 584.861 879.402 458.173 832.967Z" fill="url(#paint10_linear_415_10)"/>
            <path d="M563.707 372.97C447.884 330.517 319.174 390.181 276.713 506.026C234.251 621.871 293.916 750.581 409.739 793.034C525.562 835.488 654.272 775.823 696.734 659.978C739.195 544.134 679.438 415.39 563.707 372.97ZM411.09 789.348C297.292 747.637 238.619 621.068 280.337 507.25C322.055 393.433 448.625 334.761 562.423 376.472C676.221 418.183 734.895 544.753 693.177 658.57C651.459 772.387 524.888 831.059 411.09 789.348Z" fill="url(#paint11_linear_415_10)"/>
            <path d="M499.556 375.905C396.622 338.177 282.225 391.274 244.527 494.124C206.795 597.067 259.814 711.424 362.748 749.152C465.556 786.94 580.045 733.876 617.743 631.025C655.475 528.083 602.397 413.6 499.556 375.905ZM364.032 745.65C263.123 708.664 211.095 596.448 248.084 495.533C285.073 394.618 397.296 342.605 498.205 379.592C599.113 416.578 651.141 528.794 614.152 629.709C577.163 730.624 464.94 782.637 364.032 745.65Z" fill="url(#paint12_linear_415_10)"/>
            <path d="M435.372 378.934C345.329 345.929 245.278 392.368 212.276 482.408C179.273 572.448 225.705 672.577 315.657 705.548C405.609 738.518 505.751 692.114 538.754 602.074C571.757 512.033 525.324 411.904 435.372 378.934ZM317.008 701.861C228.99 669.6 183.607 571.737 215.9 483.632C248.16 395.619 346.07 350.174 434.089 382.436C522.107 414.697 567.491 512.561 535.197 600.665C502.904 688.77 405.027 734.123 317.008 701.861Z" fill="url(#paint13_linear_415_10)"/>
            <path d="M382.343 385.941C305.188 357.661 219.393 397.407 191.119 474.545C162.846 551.682 202.633 637.458 279.787 665.738C356.942 694.018 442.737 654.272 471.011 577.134C499.192 499.963 459.497 414.221 382.343 385.941ZM281.071 662.236C205.942 634.699 167.204 551.189 194.768 475.987C222.333 400.784 305.863 362.09 380.991 389.627C456.12 417.165 494.858 500.674 467.294 575.877C439.764 650.987 356.2 689.773 281.071 662.236Z" fill="url(#paint14_linear_415_10)"/>
            <path d="M340.402 397.126C276.137 373.571 204.688 406.657 181.11 470.985C157.566 535.22 190.674 606.735 254.939 630.29C319.203 653.845 390.652 620.759 414.23 556.431C437.716 492.07 404.666 420.681 340.402 397.126ZM256.29 626.603C194.051 603.791 161.992 534.542 184.793 472.334C207.628 410.034 276.811 377.999 339.05 400.812C401.289 423.625 433.349 492.873 410.547 555.081C387.746 617.289 318.529 649.416 256.29 626.603Z" fill="url(#paint15_linear_415_10)"/>
            <path d="M298.493 408.212C247.118 389.381 189.982 415.9 171.167 467.233C152.318 518.659 178.815 575.728 230.19 594.559C281.565 613.389 338.7 586.87 357.516 535.537C376.331 484.204 349.867 427.042 298.493 408.212ZM231.507 590.964C182.158 572.876 156.652 517.947 174.758 468.55C192.864 419.152 247.734 393.684 297.175 411.806C346.524 429.894 372.031 484.823 353.925 534.221C335.727 583.584 280.857 609.053 231.507 590.964Z" fill="url(#paint16_linear_415_10)"/>
            <path d="M267.673 423.468C229.188 409.361 186.399 429.222 172.279 467.745C158.159 506.267 177.977 549.076 216.462 563.182C254.948 577.288 297.736 557.427 311.856 518.905C325.976 480.382 306.158 437.574 267.673 423.468ZM217.814 559.495C181.354 546.132 162.493 505.556 175.87 469.061C189.246 432.566 229.77 413.757 266.321 427.154C302.781 440.518 321.642 481.093 308.266 517.589C294.889 554.084 254.273 572.859 217.814 559.495Z" fill="url(#paint17_linear_415_10)"/>
            <path d="M247.97 442.801C222.375 433.42 193.933 446.621 184.542 472.241C175.152 497.861 188.325 526.316 213.921 535.697C239.516 545.079 267.958 531.878 277.348 506.258C286.739 480.637 273.566 452.183 247.97 442.801ZM215.272 532.011C191.702 523.372 179.486 497.15 188.167 473.465C196.814 449.872 223.117 437.664 246.687 446.303C270.256 454.942 282.473 481.164 273.791 504.849C265.11 528.534 238.842 540.65 215.272 532.011Z" fill="url(#paint18_linear_415_10)"/>
          </g>
          <defs>
            <linearGradient id="paint0_linear_415_10" x1="965.183" y1="889.486" x2="1090.72" y2="822.469" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint1_linear_415_10" x1="916.25" y1="865.035" x2="1035.5" y2="801.393" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint2_linear_415_10" x1="867.314" y1="840.476" x2="980.288" y2="780.173" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint3_linear_415_10" x1="818.348" y1="816.009" x2="925.046" y2="759.044" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint4_linear_415_10" x1="769.47" y1="791.409" x2="869.874" y2="737.816" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint5_linear_415_10" x1="720.479" y1="766.998" x2="814.618" y2="716.747" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint6_linear_415_10" x1="671.55" y1="742.483" x2="759.399" y2="695.586" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint7_linear_415_10" x1="622.655" y1="717.872" x2="704.215" y2="674.329" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint8_linear_415_10" x1="573.683" y1="693.471" x2="648.973" y2="653.288" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint9_linear_415_10" x1="524.77" y1="668.858" x2="593.775" y2="632.011" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint10_linear_415_10" x1="475.797" y1="644.452" x2="538.531" y2="610.964" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint11_linear_415_10" x1="426.808" y1="620.105" x2="483.252" y2="589.972" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint12_linear_415_10" x1="377.91" y1="595.495" x2="428.065" y2="568.716" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint13_linear_415_10" x1="328.938" y1="571.093" x2="372.824" y2="547.673" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint14_linear_415_10" x1="291.144" y1="550.548" x2="328.744" y2="530.465" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint15_linear_415_10" x1="264.415" y1="534.303" x2="295.745" y2="517.579" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint16_linear_415_10" x1="237.76" y1="517.844" x2="262.8" y2="504.474" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint17_linear_415_10" x1="222.151" y1="505.669" x2="240.922" y2="495.659" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
            <linearGradient id="paint18_linear_415_10" x1="217.703" y1="497.457" x2="230.184" y2="490.801" gradientUnits="userSpaceOnUse">
              <stop stop-color="#D8AE5E" stop-opacity="0.75"/>
              <stop offset="0.195" stop-color="#F2D7A5" stop-opacity="0.5"/>
              <stop offset="1" stop-color="#F2D7A5" stop-opacity="0.05"/>
            </linearGradient>
          </defs>
        </svg>
      </section>
	<?php endif;?>

    <!-- Шлях клієнта -->
<?php
  $customerJourneyBlTitle = carbon_get_post_meta( get_the_ID(), 'security_steps_block_title'.security_lang_prefix());
	$customerJourneyList = carbon_get_post_meta( get_the_ID(), 'security_steps_list'.security_lang_prefix());
	$i = 0;

	if ( $customerJourneyBlTitle && $customerJourneyList ):
?>
    <section class="steps animation-tracking" id="how-we-work">
      <div class="container">
        <div class="row">
          <h2 class="block-title col-12 small-title big-margin first-up"><?php echo $customerJourneyBlTitle;?></h2>
        </div>
        <div class="row second-up">
          <div class="content col-12">
			  <?php foreach( $customerJourneyList as $item ): $i++?>
                <div class="step-item">
                  <?php if( $i < 10 ):?>
                    <p class="number">0<?php echo $i;?></p>
                  <?php else:?>
                    <p class="number"><?php echo $i;?></p>
                  <?php endif;?>

                  <div class="pic-wrapper">
                    <img src="<?php echo $item['image'];?>" alt="" class="svg-pic">
                  </div>
                  <h3 class="step-name"><?php echo $item['title'];?></h3>
                  <p class="description"><?php echo $item['description'];?></p>
                </div>
			  <?php endforeach;?>
          </div>
        </div>
      </div>
    </section>
<?php endif;?>

<?php
	$clientsArgs = array(
		'posts_per_page' => -1,
		'orderby' 	 => 'date',
		'post_type'  => 'clients',
		'post_status'    => 'publish'
	);

	$clientsList = new WP_Query( $clientsArgs );

	if ( $clientsList->have_posts() ) :?>

      <!-- Our clients -->
      <section class="our-clients indent-top-small indent-bottom-small animation-tracking" >
        <div class="custom-anchor" id="our-clients"></div>
        <div class="container">
          <div class="row">
            <h2 class="block-title col-12 small-title big-margin first-up"><?php echo esc_html( pll__( 'Нам довіряють' ) ); ?></h2>
          </div>
          <div class="row second-up">
            <div class="content col-12" id="clients-slider">
				<?php while ( $clientsList->have_posts() ) : $clientsList->the_post(); ?>
                  <div class="slide">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                  </div>
				<?php endwhile;?>
            </div>
          </div>
        </div>
      </section>
	<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
	$contactFormTitle = carbon_get_post_meta(get_the_ID(), 'security_contact_form_block_title'.security_lang_prefix());
	$contactFormSubtitle = carbon_get_post_meta(get_the_ID(), 'security_contact_form_block_subtitle'.security_lang_prefix());

	if ( $contactFormSubtitle && $contactFormTitle ):
		?>
      <!-- Contact form -->
      <section class="contact-form indent-bottom-small indent-top-small animation-tracking" id="contact-form">
        <div class="container">
          <div class="row">
            <div class="content col-12">
              <div class="form-wrapper">
                <h2 class="block-title small-title small-margin first-up"><?php echo $contactFormTitle;?></h2>
                <p class="subtitle first-up"><?php echo $contactFormSubtitle;?></p>
                <div class="second-up">
					<?php get_template_part('template-parts/form');?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
	<?php endif;?>

<?php get_footer();
