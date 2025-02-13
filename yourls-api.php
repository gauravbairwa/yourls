<?php



$api_actions = yourls_apply_filter( 'api_actions', $api_actions );

// Register API actions
foreach( (array) $api_actions as $_action => $_callback ) {
	yourls_add_filter( 'api_action_' . $_action, $_callback, 99 );		
}

// Try requested API method. Properly registered actions should return an array.
$return = yourls_apply_filter( 'api_action_' . $action, false );
if ( false === $return ) {
	$return = array(
		'errorCode' => '400',
		'message'   => 'Unknown or missing "action" parameter',
		'simple'    => 'Unknown or missing "action" parameter',
	);
}

if( isset( $_REQUEST['callback'] ) )
	$return['callback'] = $_REQUEST['callback'];
elseif ( isset( $_REQUEST['jsonp'] ) )
	$return['callback'] = $_REQUEST['jsonp'];

$format = ( isset( $_REQUEST['format'] ) ? $_REQUEST['format'] : 'xml' );

yourls_api_output( $format, $return );

die();
