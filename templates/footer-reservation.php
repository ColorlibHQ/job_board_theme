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

	$job_board_reservation_title     = !empty( job_board_opt( 'job_board_reservation_title' ) ) ? job_board_opt( 'job_board_reservation_title' ) : '';
	$job_board_reservation_sub_title = !empty( job_board_opt( 'job_board_reservation_sub_title' ) ) ? job_board_opt( 'job_board_reservation_sub_title' ) : '';
	$job_board_reservation_btn_text  = !empty( job_board_opt( 'job_board_reservation_btn_text' ) ) ? job_board_opt( 'job_board_reservation_btn_text' ) : '';
	$job_board_reservation_btn_url	  = !empty( job_board_opt( 'job_board_reservation_btn_url' ) ) ? job_board_opt( 'job_board_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $job_board_reservation_title )?></h3>
			<p><?php echo esc_html( $job_board_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $job_board_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $job_board_reservation_btn_text )?></a>
		</div>
	</div>