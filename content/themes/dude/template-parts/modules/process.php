<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-18 17:42:04
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-02-12 17:43:37
 *
 * @package dude
 */

if ( 9 === get_the_id() ) {
  include get_theme_file_path( 'template-parts/modules/static/process-tech.php' );
}
