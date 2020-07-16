<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:14:20
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-07-16 17:37:30
 *
 * @package dude
 */

$title = get_the_title();
$title_alt = get_post_meta( get_the_id(), 'title_alt', true );
$content = get_post_meta( get_the_id(), 'hero_content', true );

if ( ! empty( $title_alt ) ) {
  $title = $title_alt;
}
?>

<section class="block block-hero block-hero-light block-company">
  <div class="container">

    <div class="content">
      <h1><?php echo $title ?></h1>

      <div class="hero-description">
        <?php if ( ! empty( $content ) ) {
          echo wpautop( $content ); // phpcs:ignore
        }
        ?>
      </div>

    </div>

  </div>

  <div class="visual" aria-hidden="true">
    <div class="background-image preview lazyload" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/dude-visual-20.jpg');" data-src="<?php echo get_template_directory_uri(); ?>/images/dude-visual.jpg" data-src-mobile="<?php echo get_template_directory_uri(); ?>/images/dude-visual.jpg"></div>
    <div class="background-image full-image"<?php if ( preg_match( '/Windows Phone|Lumia|iPad|Safari/i', $_SERVER['HTTP_USER_AGENT'] ) ) :  // phpcs:ignore ?> style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/dude-visual.jpg');"<?php endif; ?>></div>
    <noscript><div class="background-image full-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/dude-visual.jpg');"></div></noscript>
  </div>

</section>