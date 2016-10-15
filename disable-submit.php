<?php
/*
Plugin Name: Gravity Forms - Disable Submit
Description: Disable the submit button on a form once pressed to avoid duplicate submissions.
Version: 2.0
Author: Lee Peterson
Author URI: http://www.rawlemurdy.com
*/
add_action("wp_enqueue_scripts", function(){
	wp_register_script(
		"ac-gf-disable-submit"
		,	plugins_url('disable-submit.js', __FILE__)
		, "jquery"
		, "0.2"
		, true
	);

	// Localize the script with new data
	;
	wp_localize_script('ac-gf-disable-submit', 'disable_submit', array(
		'processing_text' => apply_filters('ac_gf_disable_submit_processing_text', __( 'Submitting…' )),
	));

	wp_enqueue_script("ac-gf-disable-submit");
});
