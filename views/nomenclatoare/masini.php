<?php
$i = 1;
$table = "<table class='table table-striped table-bordered table-hover dataTablesPages' id='allAngajati'>";
$table .= "<thead>";
$table .= "<tr>";
$table .= "<td>Nr. Crt</td>";
$table .= "<td>Marca</td>";
$table .= "<td>Model</td>";
$table .= "<td>Cod</td>";
$table .= "</tr>";
$table .= "</thead>";
$table .= "<tbody>";
if (!empty($toateModelele) && is_array($toateModelele)){
    foreach ($toateModelele as $modelAuto) {
        $table .= "<tr>";
        $table .= "<td>$i</td>";
        $table .= "<td>".$modelAuto['marca']."</td>";
        $table .= "<td>".$modelAuto['model']."</td>";
        $table .= "<td>".$modelAuto['cod']."</td>";
        $table .= "</tr>";
        $i++;
    }
}
$table .= "</tbody>";
$table .= "<tfoot>";
$table .= "</tfoot>";
$table .= "</table>";
$adaugaModel = include('views/nomenclatoare/adauga-model.php');

return "
<div class='row'>
    <div class='col-lg-12'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <div class='row'>
                    <div class='col-sm-8'><h4>Toate modelele de autovehicole</h4></div>
                    <div class='col-sm-4''>
                        <a class='btn btn-default' href='#' role='button' style='float:right' data-toggle='modal' data-target='#new-model' >Adauga Model</a>
                    </div>
                </div>
            </div>
            <div class='panel-body'>
                <div class='dataTable_wrapper'>
                $table
                </div>
            </div>
        </div>
    </div>
</div>
$adaugaModel
";