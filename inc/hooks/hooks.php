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
	add_action( 'marian_preloader', 'marian_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'marian_header', 'marian_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'marian_footer', 'marian_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'marian_wrp_start', 'marian_wrp_start_cb', 10 );
	add_action( 'marian_wrp_end', 'marian_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'marian_blog_col_start', 'marian_blog_col_start_cb', 10 );
	add_action( 'marian_blog_col_end', 'marian_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'marian_blog_posts_thumb', 'marian_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'marian_blog_details_wrap_start', 'marian_blog_details_wrap_start_cb', 10 );
	add_action( 'marian_blog_details_wrap_end', 'marian_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'marian_blog_posts_title', 'marian_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'marian_blog_posts_meta', 'marian_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'marian_blog_posts_excerpt', 'marian_blog_posts_excerpt_cb', 10 );
	// add_action( 'marian_blog_posts_excerpt', 'marian_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'marian_blog_posts_info_link', 'marian_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'marian_blog_posts_content', 'marian_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'marian_blog_posts_share', 'marian_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'marian_blog_sidebar', 'marian_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'marian_blog_single_meta', 'marian_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'marian_page_content', 'marian_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'marian_fof', 'marian_fof_cb', 10 );

	

?>