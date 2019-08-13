<?php

/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap_fontawesome() {
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'fontawesome-css', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap_fontawesome' );



function theme_add_custom_js() {
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_custom_js' );


//Page Slug Body Class
function add_slug_body_class( $classes ) {

	global $post;

	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );


if ( ! function_exists( 'magimpact_entry_meta' ) ) :

	function magimpact_entry_meta() {
		if ( is_sticky() && is_home() && ! is_paged() )
			echo '<span class="featured-post">' . esc_html__( 'Sticky', 'twentythirteen' ) . '</span>';


		// Post author
		if ( 'post' == get_post_type() ) {
			printf( '<span>By <a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'twentythirteen' ), get_the_author() ) ),
				get_the_author()
			);
		}

		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list(__(', ', 'twentythirteen'));
		if ($categories_list) {
			echo '<span class="categories-links">' . $categories_list . '</span>';
		}



	}
endif;



if ( ! function_exists( 'magimpact_entry_tags' ) ) {

	function magimpact_entry_tags()
	{

		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list('', __(', ', 'twentythirteen'));
		if ($tag_list) {
			echo '<span class="tags-links">' . $tag_list . '</span>';
		}

	}

}


function addit_field($checkout){

	if ( apply_filters( 'woocommerce_enable_order_notes_field', get_option( 'woocommerce_enable_order_comments', 'yes' ) === 'yes' ) ) :

		if ( ! WC()->cart->needs_shipping() || wc_ship_to_billing_address_only() ) :

			echo "<h2>";
			printf(_e( 'Additional Information', 'woocommerce' ));
			echo "</h2>";

		endif;

		$field = $checkout->checkout_fields['order']['order_comments'];
		printf( woocommerce_form_field( 'order_comments', $field, $checkout->get_value( 'order_comments' ) ) );


	endif;

}

add_action('woocommerce_review_order_before_payment', 'addit_field', 10, 3);



function wc_custom_redirect_after_purchase() {
	global $wp;

	if ( is_checkout() && ! empty( $wp->query_vars['order-received'] ) ) {
		wp_redirect( '/thank-you/' );
		exit;
	}
}

add_action( 'template_redirect', 'wc_custom_redirect_after_purchase' );



function payeezy_gateway_icon( $icon, $id ) {
	if ( $id === 'payeezy' ) {
		$icon = str_replace("<br>", "", $icon);
		$icon = substr_replace($icon,"<span>",0,0);
		$icon = substr_replace($icon,"</span>",strlen($icon),0);
		return $icon;
		/*return '<img src="' . get_bloginfo('stylesheet_directory') . '/images/woocommerce-icons/cards.png" alt="Authorize.net" />';*/
	} else {
		return $icon;
	}
}

add_filter( 'woocommerce_gateway_icon', 'payeezy_gateway_icon', 10, 2 );




function woo_custom_breakpoint($px) {
	$px = '767px';
	return $px;
}

add_filter('woocommerce_style_smallscreen_breakpoint','woo_custom_breakpoint');



function mi_widgets_init() {

	register_sidebar( array(
		'name'          => 'Cart page widget',
		'id'            => 'cart_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'mi_widgets_init' );
