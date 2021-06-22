<?php

require_once './conect.php';
require_once './sqlQeries.php';

$method = $_SERVER['REQUEST_METHOD'];

$get = $_GET['route'];
$params = explode('/', $get);

$type = $params[0];
$id = $params[1];

// var_dump($type);
// автозагрузка классов
spl_autoload_register(function ($className) {
	$className = strtolower(str_replace("..", "", $className));
	require_once("$className.php");
});

$factory = new PageFactory;


try {

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$movie = $factory->getPage($type);

	switch ($method) {

		case 'GET':

			if (isset($id)) {
				$f = $movie->getPost($pdo, $id);
				echo "$f";
			} else {
				$f = $movie->getPosts($pdo);
				echo "$f";
			}
			break;

		case 'POST':
			$f = $movie->addPost($pdo, $_POST);
			break;

		case 'DELETE':
			$f = $movie->deletePost($pdo, $id);
			echo "$f";
			break;

		default:
			echo 'error';
			break;
	}
} catch (PDOException $e) {
	exit($e->getMessage());
}
