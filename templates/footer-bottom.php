<?php 		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'marian' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( marian_opt( 'marian_footer_copyright_text' ) ) ? marian_opt( 'marian_footer_copyright_text' ) : $copyText;
	?>

	<div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
				<div class="row">
					<div class="col-lg-8">
                        <p class="copy_right">
							<?php echo wp_kses_post( $copyRight );?>
                        </p>
                    </div>
                    <div class="col-lg-4">
						<?php
						// Social profiles
						$social_opt = marian_opt('marian_social_profile_toggle');
						if ( $social_opt == true ) {
							$social_items = marian_opt('marian_social_profiles');
							if( is_array( $social_items ) && count( $social_items ) > 0 ){
								echo '<div class="socail_links"><ul>';
									foreach ($social_items as $value) {
										echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
									}
								echo '</ul></div>';
							}          
						} 
						?>
                    </div>
                </div>
			</div>
		</div>
	</div>
