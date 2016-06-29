<?php
include_once 'models/Angajati.class.php';
$angajat = new Angajat($db);

if (isset($_POST['submit'])) {
    $prenume= trim($_POST['prenume']);
    $nume= trim($_POST['nume']);
    $functie = trim($_POST['functie']);

    if (empty($prenume)) $errors[] = "Va rugam sa completati prenumele angajatului";
    if (empty($nume)) $errors[] = "Va rugam sa completati numele angajatului";
    if (empty($functie)) $errors[] = "Va rugam sa completati functia angajatului";

    if (empty($errors)) {
        $statement = $angajat->createAngajat($prenume,$nume,$functie);
        if($statement) {
            $messages [] = $prenume." ".$nume." a fost agaugat cu success!";
        } else {
            $errors [] = $prenume." ".$nume."nu a putut fi adaugat in baza de date!";
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

$totiAngajatii = $angajat->getAllAngajatii();
$template = include_once 'views/nomenclatoare/angajati.php';
return $template;