<?php
$sideAdminMenu ["dashboard"]=array("link"=>"","class"=>"fa-dashboard","name"=>"Panou de administrare","authorization" => 5);
$sideAdminMenu ["Programari"] = array(
	"link"=>"programari/toate-programarile",
	"class"=>"fa-calendar",
	"name"=>"Programari",
	"authorization" => 5
);
$sideAdminMenu ["Pachete"] = array(
	"link"=>"#",
	"class"=>"fa-th-large",
	"name"=>"Pachete Economice",
	"values"=>array(
		array("link"=>"#","class"=>"","name"=>"Cauta pachet"),
		array("link"=>"#","class"=>"","name"=>"Oferta personalizata")
	),
	"authorization" => 5
);

$sideAdminMenu ["Ulei"] = array(
	"link"=>"#",
	"class"=>"fa-cogs",
	"name"=>"Pachete Ulei",
	"values"=>array(
		array("link"=>"pachete/ulei","class"=>"","name"=>"Cauta pachet")
	),
	"authorization" => 5
);
$sideAdminMenu ["utilizatori"] = array(
	"link"=>"profil",
	"class"=>"fa-user",
	"name"=>"Utilizatori",
	"values"=>array(
		array("link"=>"users/all-users","class"=>"fa-user","name"=>"Toti utilizatorii"),
		array("link"=>"users/add-user","class"=>"fa-user","name"=>"Adauga utilizator")
	),
	"authorization" => 1
);
$sideAdminMenu ["nomenclatoare"] = array(
	"link"=>"nomenclatoare/masini",
	"class"=>"fa-th-list",
	"name"=>"Nomenclatoare",
	"values"=>array(
		array("link"=>"nomenclatoare/masini","class"=>"fa-th-list","name"=>"Modele masini"),
		array("link"=>"nomenclatoare/angajati","class"=>"fa-th-list","name"=>"Angajati"),
	),
	"authorization" => 5
);