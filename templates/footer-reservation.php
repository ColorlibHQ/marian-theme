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

	$marian_reservation_title     = !empty( marian_opt( 'marian_reservation_title' ) ) ? marian_opt( 'marian_reservation_title' ) : '';
	$marian_reservation_sub_title = !empty( marian_opt( 'marian_reservation_sub_title' ) ) ? marian_opt( 'marian_reservation_sub_title' ) : '';
	$marian_reservation_btn_text  = !empty( marian_opt( 'marian_reservation_btn_text' ) ) ? marian_opt( 'marian_reservation_btn_text' ) : '';
	$marian_reservation_btn_url	  = !empty( marian_opt( 'marian_reservation_btn_url' ) ) ? marian_opt( 'marian_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $marian_reservation_title )?></h3>
			<p><?php echo esc_html( $marian_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $marian_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $marian_reservation_btn_text )?></a>
		</div>
	</div>