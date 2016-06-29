<?php

include_once 'models/Pachete.class.php';
$pachete = new Pachete($db);
include_once 'models/Modele.class.php';
$modele = new Modele($db);
include_once 'models/Programari.class.php';
$programari = new Programari($db);

if (isset($_POST['submit'])) {
	if ($_POST['submit'] == "Programeaza") {
		echo "Programeaza!";
	} elseif ($_POST['submit'] == "Ciorna") {
		echo "Salveaza!";
	} else {
		echo "nimic!";
	}
}

if($_POST['submit-date'] == 1) {
	$date = date_create_from_format('n/j/Y', $_POST['date']);
	$data = $date->format("j.n.Y");
}
$toateModelele = json_encode($pachete->getAllModeleDenumire());
$toateMotoarele = json_encode($pachete->getAllMotorsDenumire());

$pageData->addCss("https://code.google.com/p/eeplat-social-api/source/browse/trunk/WebContent/mobile/css/jquery.ui.datepicker.mobile.css?r=32");
$pageData->addCss(WEB_ROOT."css/programari.css");
$pageData->addJs(WEB_ROOT."js/programari.js");
$template = include_once 'views/programari/toate-programarile.php';
return $template;