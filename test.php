<?php

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

    echo "of";