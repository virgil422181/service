<?php

include_once 'models/Modele.class.php';
$modele = new Modele($db);

if (isset($_POST['submit'])) {
    $marca= trim($_POST['marca']);
    $model= trim($_POST['model']);
    $cod= trim($_POST['cod']);

    if (empty($marca)) $errors[] = "Va rugam sa completati marca autovehicolului";
    if (empty($model)) $errors[] = "Va rugam sa completati modelul autovehicolului";
    if (empty($cod)) $cod = "-";

    if (empty($errors)) {
        $statement = $modele->createModel($marca,$model,$cod);
        if($statement) {
            $messages [] = "Modelul ".$marca." ".$model." a fost agaugat cu success!";
        } else {
            $errors [] = "Modelul ".$marca." ".$model." nu a putut fi adaugat in baza de date!";
        }
    }
}

if(!empty($errors)){
    $erori = "<div class='alert alert-danger' role='alert'>";
    foreach ($errors as $error) {
        $erori .="<p>".$error."</p>";
    }
    $erori .= "</div>";
} else { $erori = ""; };
if(!empty($messages)){
    $mesaje = "<div class='alert alert-success' role='alert'>";
    foreach ($messages as $message) {
        $mesaje .="<p>".$message."</p>";
    }
    $mesaje .= "</div>";
} else { $mesaje = ""; };

$toateModelele = $modele->getAllModele();

$template = include_once 'views/nomenclatoare/masini.php';
return $template;