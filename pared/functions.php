<?php

function pears_jquery_cnd() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'pears_jquery_cnd');

add_action('add_meta_boxes', 'pears_add_meta_box');
add_action('save_post', 'pears_save_post');


function pears_add_meta_box() {

    add_meta_box('pears', 'Pears', 'pears_meta_box', 'post', 'normal', 'high');

}

function pears_meta_box($post) {

  	wp_nonce_field( plugin_basename( __FILE__ ), 'pears_noncename');

  	$html = get_post_meta($post->ID, 'html', true);
  	$css = get_post_meta($post->ID, 'css', true);

	echo '<p>These fields are for the HTML markup and CSS styles.  The post body can be used for notes.</p>';
	echo '<label for="html">HTML</label>';
  	echo '<p><textarea id="html" name="html" rows="20" cols="90" />' . $html . '</textarea></p>';
	echo '<label for="css">CSS</label>	';
  	echo '<p><textarea id="css" name="css" rows="20" cols="90" />' . $css . '</textarea></p>';

}

function pears_save_post($post_id) {

	// Ignore if doing an autosave
  	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	// Verify data came from pears meta box
  	if (! wp_verify_nonce( $_POST['pears_noncename'], plugin_basename( __FILE__ )))
		return;

	// Check user permissions
	if ( 'post' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ))
			return;
	} else {
		if (!current_user_can('edit_post', $post_id))
			return;
  	}

	$html_data = $_POST['html'];
	update_post_meta($post_id, 'html', $html_data);

	$css_data = $_POST['css'];
	update_post_meta($post_id, 'css', $css_data);
}