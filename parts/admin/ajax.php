<?php
function getMapData(){
	$result = [];

	$id = get_page_data('contact')->ID;
	$result['icon'] = carbon_get_post_meta($id, 'marker-icon');
	$result['center'] = carbon_get_post_meta($id, 'center-map');
	$markers = carbon_get_post_meta($id, 'contacts-map');

	foreach ($markers as $marker){
		$result['markers'][] = $marker['marker-position'];
	}

	echo json_encode($result);
	wp_die();
}

add_action('wp_ajax_nopriv_map', 'getMapData' );
add_action('wp_ajax_map', 'getMapData' );
?>