<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Marian
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$footer_logo_img_id = get_theme_mod( 'footer_logo_img' );
	$footer_logo_img 	= !empty($footer_logo_img_id) ? wp_get_attachment_image_src( $footer_logo_img_id, 'marian_footer_logo_109x36' )[0] : '';
	$site_url 	    	= home_url('/');	
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'marian' ), '<span><a target="_blank" href="' . esc_url( $url ) . '">', '</a></span>', date( 'Y' ) );
	$copyRight = !empty( marian_opt( 'marian_footer_copyright_text' ) ) ? marian_opt( 'marian_footer_copyright_text' ) : $copyText;
	?>
	<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
		<div class="single-footer-caption mb-30">
			<div class="footer-logo">
				<?php
					if ( $footer_logo_img ) {
						?>
							<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url($footer_logo_img)?>" alt="footer logo"></a>
						<?php
					} else {
						?>
						<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url( MARIAN_DIR_IMGS_URI . 'footer_logo.png' )?>" alt="footer logo"></a>
						<?php
					}
				?>
			</div>
			<?php
				// Social profiles
				$social_opt = marian_opt('marian_social_profile_toggle');
				if ( $social_opt == true ) {
					$social_items = marian_opt('marian_social_profiles');
					if( is_array( $social_items ) && count( $social_items ) > 0 ){
						echo '<div class="footer-social footer-social2">';
							foreach ($social_items as $value) {
								echo '<a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr( str_replace('fa ', 'fab ', $value['social_icon']) ) .'"></i> </a>';
							}
						echo '</div>';
					}          
				} 
			?>
			<div class="footer-pera">
				<p><?php echo wp_kses_post( $copyRight );?></p>
			</div>
		</div>
	</div>
	<?php
			
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		dynamic_sidebar( 'footer-2' );
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}

	// Footer widget 4
	if( is_active_sidebar( 'footer-4' ) ){
		dynamic_sidebar( 'footer-4' );
	}