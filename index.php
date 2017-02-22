<?php
	header("Access-Control-Allow-Origin: *");
	require_once 'MCAPI.class.php';
	ini_set("allow_url_fopen", 1); 
	$api = new MCAPI('b1261034d8f6b76fbf695070e1eff578-us12');
	$email = $_GET['EMAIL'];
	$merge_vars = array();

	$api->listSubscribe( 'f1335c7ace', $email , $merge_vars, 'html', false, false, false, true );
	if ($api->errorCode){
		echo $api->errorMessage; 
	} else {
		echo "Okay";
	}
?>
