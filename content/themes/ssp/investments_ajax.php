<?php
/**
 * Investments AJAX
 *
 * Contans responses for AJAX request.
 *
 * @link ttps://github.com/sdco-partners/south-street-partners
 *
 * @package SSP
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  require_once('../../../wordpress/wp-load.php');

  $errors = array();
  $data = array();

  // define which post to query
  if ( empty( $_POST['prop'] ) ) {
  	$num = 0;
  } else {
  	$num = $_POST['prop'];
  }
  // use index to query db
  try {
	  $investment = new WP_Query( 
	  	array (
		    'post_type' => 'properties',
		    'posts_per_page' => 1,
		    'offset' => $num,
		    'order' => 'ASC',
		    'offset'
	  	)
		);

	  $data['message'] = 'Request Success';
	  $data['props'] = $investment;	

  } catch ( Exception $e ) {
  	$data['message'] = "Request failed";
  	$data['exceptions'] = $e->getMessage();

  }

  // return data to page
  echo json_encode($data);
  wp_reset_query();

?>