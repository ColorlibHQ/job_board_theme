<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'job_board_preloader', 'job_board_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'job_board_header', 'job_board_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'job_board_footer', 'job_board_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'job_board_wrp_start', 'job_board_wrp_start_cb', 10 );
	add_action( 'job_board_wrp_end', 'job_board_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'job_board_blog_col_start', 'job_board_blog_col_start_cb', 10 );
	add_action( 'job_board_blog_col_end', 'job_board_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'job_board_blog_posts_thumb', 'job_board_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'job_board_blog_details_wrap_start', 'job_board_blog_details_wrap_start_cb', 10 );
	add_action( 'job_board_blog_details_wrap_end', 'job_board_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'job_board_blog_posts_title', 'job_board_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'job_board_blog_posts_meta', 'job_board_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'job_board_blog_posts_excerpt', 'job_board_blog_posts_excerpt_cb', 10 );
	// add_action( 'job_board_blog_posts_excerpt', 'job_board_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'job_board_blog_posts_info_link', 'job_board_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'job_board_blog_posts_content', 'job_board_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'job_board_blog_posts_share', 'job_board_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'job_board_blog_sidebar', 'job_board_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'job_board_blog_single_meta', 'job_board_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'job_board_page_content', 'job_board_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'job_board_fof', 'job_board_fof_cb', 10 );

	

?>