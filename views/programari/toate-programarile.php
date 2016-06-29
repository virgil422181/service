<?php
$ore    = array(
	'8:30',
	'8:30',
	'8:45',
	'8:45',
	'9:00',
	'9:00',
	'10:30',
	'10:30',
	'10:45',
	'10:45',
	'11:00',
	'11:00',
	'12:00',
	'12:15',
	'12:30',
	'12:45',
	'13:00',
	'13:15',
	'13:30',
	'13:45',
	'14:30',
	'14:30',
	'14:45',
	'14:45',
	'15:00',
	'15:00',
	'15:15',
	'15:15',
	'15:30',
	'15:30'
);
$data   = (isset($data))? $data : date( "j.n.Y" );
$i      = 1;
$orange = " style='background-color: #FFF0CD' ";
$blue   = " style='background-color: #B6CFFF' ";
$programator ="<script> var toateModelele = $toateModelele;</script>";
$programator .="<script> var toateMotoarele = $toateMotoarele;</script>";
$programator .= "<table class='table table-striped table-bordered table-hover dataTables' id='programator'>
            <thead>
                <tr><th>Nr. Crt.</th>
                    <th style='width: 30px;'>Nr. Prog.</th>
                    <th>Ora</th>
                    <th>Consilier</th>
                    <th>Client</th>
                    <th>Telefon</th>
                    <th>Nr. Inmatr.</th>
                    <th>Solicitare client</th>
                    <th >Serie Sasiu</th>
                    <th>Tip auto</th>
                    <th>Motor</th>
                    <th>Km</th>
                    <th>Revenire</th>
                    <th>Actiuni</th>
                    <th>Client dificil</th>
                    <th>Piese</th>
                    <th>Mobilitate</th>
                    <th>Capacitate productiva</th>
                </tr>
            </thead>
            <tbody>";

foreach ( $ore as $rowProgramare ) {
	$programator .= "<tr class='odd gradeX' ";
	if ( $i < 7 || between( $i, 12, 17 ) || between( $i, 20, 27 ) ) {
		$programator .= $orange;
	} else {
		$programator .= $blue;
	}

	$programator .= ">";
	$programator .= "<td>$i</td>";
	$programator .= "<td align='center' ><a href='#' data-toggle='modal' data-target='#myModal' ";
	$programator .= "data-date='$data'";
	$programator .= "data-ora='$rowProgramare'";
	$programator .= " ><i class='fa fa-plus-square-o' aria-hidden='true' ></i></a></td>";
	$programator .= "<td>$rowProgramare</td>";
	$programator .= "<td></td>"; //consilier
	$programator .= "<td></td>"; //client
	$programator .= "<td></td>"; //telefon
	$programator .= "<td  width='30px'></td>"; // nr. inmatriculare
	$programator .= "<td></td>"; //solicitare client
	$programator .= "<td width='120px'></td>"; // serie sasiu
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "<td></td>";
	$programator .= "</tr>";
	$i ++;
}

$programator .= "</table>";
return "
<div class='row'>
    <div class=' col-sm-12 col-md-12 col-lg-12'>
        <div class='panel panel-default'>
            <div class='panel-heading' id='programatorHeading' class='col-sm-10 col-xs-12' >Programatorul din data de <a class='btn btn-default'id='programatorDate'>$data</a>
             <div id='datepicker' style='display: none;' ></div>
            </div>
			<form id='tabelProgramari' action='".WEB_ROOT."programari/toate-programarile' method='POST'>
				<input type='hidden' name='date' id='hiddenFieldID' value=''>
				<input type='hidden' name='submit-date' id='hiddenFieldID' value='1'>
			</form>
            <div class='panel-body'>
                <div class='col-xs-12'>
                $programator
                </div>
            </div>
        </div>
    </div>
</div>".include(SITE_ROOT.'views/programari/form.php');

