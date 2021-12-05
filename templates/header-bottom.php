<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Marian
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

$page_title = ! empty( marian_meta( 'page_title') ) ? marian_meta( 'page_title') : '';
$banner_img = ! empty( marian_meta( 'banner_img') ) ? marian_meta( 'banner_img') : '';
$headerimg  = (isset($banner_img['image']) && $banner_img['image'] != '') ? $banner_img['image'] : get_header_image();
?>

<section class="hero-banner zigzag_bg_2" <?php echo marian_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row">
            <div class="breadcrumb_tittle">
                <?php
                    if ( $page_title ) {
                        echo '<span>'.esc_html($page_title).'</span>';
                    }
                ?>
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'marian') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'marian') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'marian' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'marian' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'marian' );

                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>