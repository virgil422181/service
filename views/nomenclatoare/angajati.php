<?php
$i=1;
$table = "<table class='table table-striped table-bordered table-hover dataTables' id='allAngajati'>";
$table .= "<thead>";
$table .= "<tr>";
$table .= "<td>Nr. Crt</td>";
$table .= "<td>Nume angajat</td>";
$table .= "<td>Functie</td>";
$table .= "</tr>";
$table .= "</thead>";
$table .= "<tbody>";
if (!empty($totiAngajatii) && is_array($totiAngajatii)){
    foreach ($totiAngajatii as $angajat) {
        $table .= "<tr>";
        $table .= "<td>$i</td>";
        $table .= "<td>".$angajat['prenume']." ".$angajat['nume']."</td>";
        $table .= "<td>".$angajat['functie']."</td>";
        $table .= "</tr>";
        $i++;
    }
}
$table .= "</tbody>";
$table .= "</table>";
$modalNewAngajat = include('views/nomenclatoare/adauga-angajat.php');
return "
<div class='row'>
    <div class='col-lg-12'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <div class='row'>
                    <div class='col-sm-6'><h4>Toti angajatii</h4></div>
                    <div class='col-sm-6'>
                        <a class='btn btn-default' href='#' role='button' style='float:right' data-toggle='modal' data-target='#new-angajat'>Adauga angajat</a>
                    </div>
                </div>
            </div>
            <div class='panel-body'>
                <div id='messages'>
                    $erori
                    $mesaje
                </div>
                <div class='dataTable_wrapper'>
                $table
                </div>
            </div>
        </div>
    </div>
</div>
$modalNewAngajat
";