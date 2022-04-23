<?php
/**
 * @Author:             Roni Laukkarinen, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-10 16:50:23
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-04-23 10:57:24
 *
 * @package dude
 */

$reference = [];
$reference_id = get_sub_field( 'selected_reference' );

if ( empty( $reference_id ) ) {
  return;
}

$reference = array(
  'id'                => $reference_id,
  'upper_title'       => get_the_title( $reference_id ),
  'title'             => ( ! empty( $title ) ) ? $title : get_the_title( $reference_id ),
  'excerpt'           => ( ! empty( $description ) ) ? $description : get_the_excerpt( $reference_id ),
  'permalink'         => get_the_permalink( $reference_id ),
  'frontpage_upsell_title' => get_field( 'frontpage_upsell_title', $reference_id ),
  'frontpage_upsell_desc' => get_field( 'frontpage_upsell_desc', $reference_id ),
  'image_skew' => get_field( 'image_skew', $reference_id ),
); ?>

<section class="block block-references-one has-light-bg" style="overflow: visible;">
  <div class="container" style="overflow: visible;">

    <div class="cols cols-two" style="overflow: visible;">

      <div class="col col-content" style="overflow: visible;">
        <p class="block-pre-title" aria-describedby="<?php echo esc_html( sanitize_title( $reference['frontpage_upsell_title'] ) ); ?>"><?php echo esc_html( $reference['upper_title'] ); ?></p>
        <h2 class="block-title" id="<?php echo esc_html( sanitize_title( $reference['frontpage_upsell_title'] ) ); ?>"><?php echo esc_html( $reference['frontpage_upsell_title'] ); ?></h2>

        <div class="content">
          <?php echo wpautop( $reference['frontpage_upsell_desc'] ); // phpcs:ignore ?>
        </div>

        <p class="button-wrapper"><a style="background: none !important; padding: 0 !important;" href="<?php echo esc_html( $reference['permalink'] ) ?>" class="button button-mint">

        <svg style="overflow: visible;" class="liquid-button"
          data-text="Tutustu työhön"
          data-force-factor="0.1"
          data-layer-1-viscosity="0.5"
          data-layer-2-viscosity="0.4"
          data-layer-1-mouse-force="400"
          data-layer-2-mouse-force="500"
          data-layer-1-force-limit="1"
          data-layer-2-force-limit="2"
        ></svg>

        </a></p>
      </div>

      <div class="col col-reference-image col-reference-image-main">

        <div class="reference-image-skew" aria-hidden="true">
          <?php vanilla_lazyload_tag( $reference['image_skew']['ID'] ); ?>
        </div>

      </div>

    </div>

  </div>
</section>
