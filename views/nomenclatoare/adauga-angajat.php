<?php 
return "
<!-- Modal -->
<div class='modal fade' id='new-angajat' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<form class='form-horizontal' method='post' action='".WEB_ROOT."nomenclatoare/angajati'>
			<div class='modal-header'>
				<h4 class='modal-title' id='myModalLabel'>Introduceti angajat nou</h4>
			</div>
			<div class='modal-body'>
                <!-- Prenume angajat -->
                <div class='form-group'>
                    <label for='client' class='col-sm-4 control-label'>Prenume</label>
                    <div class='col-sm-6'>
                        <input type='text' class='form-control' name='prenume' id='prenume' placeholder='Prenume'>
                    </div>
                </div>
                <!-- Nume angajat -->
                <div class='form-group'>
                    <label for='client' class='col-sm-4 control-label'>Nume</label>
                    <div class='col-sm-6'>
                        <input type='text' class='form-control' id='nume' name='nume' placeholder='Nume'>
                    </div>
                </div>
                <!-- Functie angajat -->
                <div class='form-group'>
                    <label for='client' class='col-sm-4 control-label'>Functie angajat</label>
                    <div class='col-sm-6'>
                        <input type='text' class='form-control' name='functie' id='functie' placeholder='Introduceti functia angajatului'>
                    </div>
                </div>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Inchide</button>
				<input class='btn btn-success' type='submit' value='Salveaza' name='submit' id='submit'>
			</div>
			<input type='hidden' id='submit-form' value='1'>
			</form>
		</div>
	</div>
</div>";