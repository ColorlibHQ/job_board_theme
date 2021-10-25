<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Job_Board
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */


?>

	<div id="f0f">
		<div class="container">
			<div class="row">
				<div class="f0f-content text-center col-md-12">
					<div class="fof-content-before">
						<?php 
							$errorText = esc_html__( 'Ooops 404 Error !', 'job_board' );
							if( job_board_opt( 'job_board_fof_titleone' ) ){
								$errorText = job_board_opt( 'job_board_fof_titleone' );
							}
							
							echo '<h1 class="h1">'.esc_html( $errorText ).'</h1>';

							// Wrong text block
							$wrongText = wp_kses_post( __( 'Either something went wrong or the page dosen&rsquo;t exist anymore.', 'job_board' ) );

							if( job_board_opt('job_board_fof_titletwo') ){
								$wrongText = job_board_opt('job_board_fof_titletwo');
							}

							$anchor = job_board_anchor_tag(
								array(
									'url' 	 => esc_url( site_url( '/' ) ),
									'text' 	 => esc_html__( 'Go To Home page', 'job_board' ),
									'class'	 => 'button-contactForm btn_1 boxed-btn'
								)
							);

							echo job_board_paragraph_tag(
								array(
									'text' 	 => esc_html( $wrongText )
								)
							);

							echo wp_kses_post( $anchor );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>