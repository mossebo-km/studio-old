<?php
  // check if the flexible content field has rows of data
  if ( have_rows( 'post_content_flexible' ) ) {


       // loop through the rows of data
      while ( have_rows( 'post_content_flexible' ) ) {
        the_row();
        $imgClass = ( isset( get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] ) ) ? ' ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] : '';

        if ( get_row_layout() === 'text_bloks' ) {

          echo '<div class="row">';

          if ( get_sub_field( 'columns_number' ) === '1/1' ) {

            echo '<div class="col-12' . $imgClass . '">' . get_sub_field( 'text_block_100p' ) . '</div>';
            // var_dump( get_sub_field( 'img_editor_block_padding_right_remove' ) );
          } elseif ( get_sub_field( 'columns_number' ) === '1/2+1/2' ) {

            echo '<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_50p_6p6_l' ) . '</div>';
            echo '<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_50p_6p6_r' ) . '</div>';

          } elseif ( get_sub_field( 'columns_number' ) === '1/3+1/3+1/3' ) {

            echo '<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_33p_4p4p4_l' ) . '</div>';
            echo '<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_33p_4p4p4_c' ) . '</div>';
            echo '<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_33p_4p4p4_r' ) . '</div>';

          } elseif ( get_sub_field( 'columns_number' ) === '1/4+1/4+1/4+1/4' ) {

            echo '<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_25p_3p3p3p3_1' ) . '</div>';
            echo '<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_25p_3p3p3p3_2' ) . '</div>';
            echo '<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_25p_3p3p3p3_3' ) . '</div>';
            echo '<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 ' . get_sub_field( 'img_editor_block_padding_right_remove' )[ 0 ] . '">' . get_sub_field( 'text_block_25p_3p3p3p3_4' ) . '</div>';

          }

          echo '</div>';
          if ( get_sub_field( 'vertical_bottom_margin' ) !== '0px') {
            echo '<div class="vertical-padding-bottom-' . get_sub_field( 'vertical_bottom_margin' ) . '"></div>';
          }
        } // end if;

      } // endwhile;
  } // end if;
?>
