<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marian
 */

get_header();
$listing_address = ! empty( marian_meta( 'listing_address') ) ? marian_meta( 'listing_address') : 'N/A';
$listing_map    = ! empty( marian_meta( 'listing_map') ) ? marian_meta( 'listing_map') : '';
$listing_price  = ! empty( marian_meta( 'listing_price') ) ? marian_meta( 'listing_price') : '';
$phone_number   = ! empty( marian_meta( 'phone_number') ) ? marian_meta( 'phone_number') : '';
$listing_email  = ! empty( marian_meta( 'listing_email') ) ? marian_meta( 'listing_email') : '';
$listing_area   = ! empty( marian_meta( 'listing_area') ) ? marian_meta( 'listing_area') : '';

if( have_posts() ) {
    while( have_posts() ) : the_post();
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    ?>
    <!-- bradcam_area  -->
    <div class="bradcam_area" style="background-image: url(<?php echo esc_url( $featured_img_url )?>)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <div class="icon">
                            <i class="flaticon-food"></i>
                        </div>
                        <h4><?php the_title()?></h4>
                        <?php
                            if ( $listing_address != '' ) {
                                echo '<p>'.wp_kses_post($listing_address).'</p>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="listing_details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="single_details">
                        <h3><?php _e('Description', 'marian')?></h3>
                        <?php the_content()?>
                    </div>
                    <div class="single_details">
                        <h3><?php _e('Location', 'marian')?></h3>
                        <div class="map_Wrap">
                            <div class="d-sm-block ">
                                <div class="map_inner_info">
                                    <?php
                                        $args = array(
                                            'width'        => '100%',
                                            'height'       => '450px',
                                            'zoom'         => 14,
                                            'marker'       => true,
                                            // 'marker_icon'  => 'https://url_to_icon.png',
                                            'marker_title' => __('Click me for details', 'marian'),
                                            'info_window'  => '
                                            <div class="marian_map_popup">
                                                <h3>'.get_the_title().'</h3>
                                                <p>'.$listing_address.'</p>
                                                <ul>
                                                    <li> <i class="fa fa-phone"></i>
                                                        '.$phone_number.'</li>
                                                    <li><i class="fa fa-envelope"></i> '.$listing_email.'</li>
                                                </ul>'
                                                .get_the_post_thumbnail('','marian_listing_thumb_362x250',['class'=>'img-fluid']).'
                                            </div>
                                            ',
                                        );
                                        $prop_map = rwmb_meta( '_marian_listing_map', $args );
                                        echo $prop_map;
                                    ?>
                                </div>
                            </div>       
                        </div>
                    </div>
                    <div class="single_details">
                        <h3><?php _e('Contact Now', 'marian')?></h3>
                        <div class="col-lg-12 p-0">
                            <?php echo do_shortcode( '[contact-form-7 id="238" title="Contact for Listing"]' )?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <?php 

    marian_related_items( get_the_ID() );
    endwhile;
}

// Footer============
get_footer();