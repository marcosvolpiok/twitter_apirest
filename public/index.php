<?php
require '../vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;
$app = new Slim\App();


function conectar(){
	$consumerKey    = 'pWMXjGEYJ1SUR1lH9LfGuyupR';
	$consumerSecret = 'PlwvsQaqqdPwn43BB0UI1E7oy8GWNUoBOCQNz33EYcZHkIZqh2';
	$access_token     = '1016774446336692224-71OZCDlzoDmli4ZD38IiOifYAHZR8G';
	$access_token_secret    = 'qdn8df5V8ybhwVDcurQvs492KY7Ux2Yfqn43vD7iT3lMa';

	$conexion = new TwitterOAuth($consumerKey, $consumerSecret, $access_token, $access_token_secret);
	return $conexion;
}


$app->get('/tweets/{username}', function ($request, $response, $args) {
	try{
		$conexion=conectar();
		$tweet = $conexion->get("statuses/user_timeline", ["screen_name" => $args["username"], "count" => "10"]);

		if($conexion->getLastHttpCode()!=200){
			$response = $response->withStatus($conexion->getLastHttpCode());
			$response = $response->withHeader('Content-Type', 'text/json');
			$response->write('{"error":{"message":'.$tweet->errors[0]->message.'}}');
			return $response;
		}
	} catch(Exception $e){
		$response = $response->withStatus(500);
		$response->write('{"error":{"message":'.$e.'}}');
		return $response;
	}


	foreach($tweet as $key => $t){
		$arrTwetts[$key]["created_at"]=$t->created_at;
		$arrTwetts[$key]["text"]=$t->text;

		if($t->in_reply_to_user_id){
			$arrTwetts[$key]["in_reply"]["id"]=$t->in_reply_to_user_id;
			$arrTwetts[$key]["in_reply"]["name"]=$t->in_reply_to_screen_name;
		}
	}

	$response = $response->withJson($arrTwetts);
    return $response;
});


$app->run();