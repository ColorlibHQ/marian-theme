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
	?>	
	<div class="footer-area black-bg footer-padding">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<?php get_template_part( 'templates/footer', 'widgets' );?>
			</div>
		</div>
	</div>