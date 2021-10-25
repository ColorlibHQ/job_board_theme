<?php 
/**
 * @Packge     : Job_Board
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook job_board_footer
         *
         * @Hooked  job_board_footer_area 
         *
         */

		do_action( 'job_board_footer' );

	wp_footer(); 
 ?>
</body>
</html>