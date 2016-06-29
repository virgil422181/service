<?php
if (isset($pacheteUlei)){
    $view = "<table class='table table-striped table-bordered table-hover dataTables' id='pacheteUlei'>
                        <thead>
                            <tr>
                                <th>Nr. Crt</th>
                                <th>norma ulei</th>
                                <th>cant</th>
                                <th>pret unitar</th>
                                <th>filtru ulei</th>
                                <th>pret unitar</th>
                                <th>pret unitar cu discount</th>
                                <th>pret Aftermarket</th>
                                <th>surub</th>
                                <th>pret unitar</th>
                                <th>DISCOUNT</th>
                                <th>pret piese si materiale ( cu discount )</th>
                                <th>unit manopera</th>
                                <th>pret manopera</th>
                                <th>pret pachet (cu TVA)</th>
                                <th>pret promo OEM</th>
                                <th>pret promo AfterMarket </th>
                            </tr>
                        </thead>
                        <tbody>";
        $nr = 1;
        while ($p = $pacheteUlei->fetchObject()){
            $view .= "<tr class='odd gradeX'>";
            $view .= "<td>$nr</td>";
            $view .= "<td>".str_replace("...","",$p->norma_ulei)."</td>";
            $view .= "<td>$p->cantitale</td>";
            $view .= "<td>".number_format($p->pu_ulei,2)." lei</td>";
            $view .= "<td>$p->filtru_ulei</td>";
            $view .= "<td>".number_format($p->pu_filtru,2)." lei</td>";
            $view .= "<td>".number_format($p->pu_filtru_disc,2)." lei</td>";
            $view .= "<td>".number_format($p->p_filtru_after,2)." lei</td>";
            $view .= "<td>$p->surub</td>";
            $view .= "<td>".number_format($p->pu_surub,2)." lei</td>";
            $view .= "<td>$p->discount %</td>";
            $view .= "<td>".number_format($p->pret_total_cu_disc,2)." lei</td>";
            $view .= "<td>$p->u_man</td>";
            $view .= "<td>".number_format($p->p_man,2)." lei</td>";
            $view .= "<td>".number_format($p->p_pachet,2)." lei</td>";
            $view .= "<td>".number_format($p->p_promo,2)." lei</td>";
            $view .= "<td>".number_format($p->p_afertmarket,2)." lei</td>";
            $view .= "</tr>";
            $nr++;
        }
    $view .= "</tbody>
                    </table>";
    $view .= "<a href='".WEB_ROOT."pachete/ulei' class='btn btn-default'>Cauta din nou</a>";

} else {
    $view = "<form action='' method='post' class='form-inline'>";
    $view .="<script> var toateMotoarele = $toateMotoarele;</script>";
    $view .= dropDownForm("model","Alege model",$modele);
    $view .= "<div class='form-group'><input id='motor-auto' name='motor-auto' type='text' class='form-control' placeholder='Motor'></div>";
    $view .= "<button type='submit' name='submit' id='submit' class='btn btn-default'>Cauta</button>";
    $view .= "</form>";
}


return "
    <div class='row'>
        <div class=' col-sm-12 col-md-12 col-lg-12'>
            <div class='panel panel-default'>
                <div class='panel-heading'>Pachete Ulei</div>
                <div class='panel-body'>
                	<div class='col-xs-12'>
                	$view
            		</div>
            	</div>
            </div>
        </div>
    </div>";