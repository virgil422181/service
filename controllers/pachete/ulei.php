<?php

include_once 'models/Pachete.class.php';
$pachete = new Pachete($db);

if (isset($_POST['submit'])){
	$model=$_POST['model'];
	$motor=$_POST['motor-auto'];
	$pacheteUlei = $pachete->getPacheteUlei($model,$motor);
} else {
	$modele = array(
		"1U" => "Octavia Tour 1U",
		"6Y" => "Fabia 6Y",
		"3U" => "Superb 3U",
		"5J" => "Fabia 5J",
		"1Z" => "Octavia 1Z",
		"54" => "Fabia Combi",
		"3T" => "Superb 2",
		"5L" => "Yeti"
	);
	$toateMotoarele = json_encode($pachete->getAllMotors());
}

$uleiView = include_once 'views/pachete/ulei.php';

return $uleiView;