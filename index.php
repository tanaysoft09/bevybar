<?php
	header("Access-Control-Allow-Origin: *");
	require_once 'MCAPI.class.php';
	ini_set("allow_url_fopen", 1); 
	$api = new MCAPI('a09aec1aba5b1ad64901c49b1e86beaa-us14');
	$email = $_GET['EMAIL'];
	$merge_vars = array();

	$api->listSubscribe( '0944a04936', $email , $merge_vars, 'html', false, false, false, true );
	if ($api->errorCode){
		echo $api->errorMessage; 
	} else {
		echo "Okay";
	}
?>
