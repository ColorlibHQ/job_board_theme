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
	$footer_text 	    = job_board_opt( 'job_board_footer_text' ) == '' ? 'Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br> picture placing drawing.' : job_board_opt( 'job_board_footer_text' );
	$brochure_url 	    = job_board_opt( 'job_board_footer_brochure_url' ) == '' ? '#' : job_board_opt( 'job_board_footer_brochure_url' );
	?>	

    <div class="download_brochure">
        <div class="container">
            <div class="bordered_1px">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_logo">
                            <?php echo job_board_theme_footer_logo();?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="download_btn">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>