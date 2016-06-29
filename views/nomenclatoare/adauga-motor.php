<?php
return "
<!-- Modal -->
<div class='modal fade' id='new-motor' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<form class='form-horizontal'>
			<div class='modal-header'>
				<h4 class='modal-title' id='myModalLabel'>Adauga un motor nou</h4>
			</div>
			<div class='modal-body'>
					<!-- Denumire client -->
					<div class='form-group'>
						<label for='client' class='col-sm-4 control-label'>Denumire client</label>
						<div class='col-sm-6'>
							<input type='text' class='form-control' id='client' placeholder='Nume si prenume client'>
						</div>
					</div>
					<!-- Telefon -->
					<div class='form-group'>
						<label for='telefon' class='col-sm-4 control-label'>Telefon</label>
						<div class='col-sm-6'>
							<input type='tel' name='telefon' id='telefon' class='form-control' placeholder='07-- --- ---' required>
						</div>
					</div>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Inchide</button>
				<button type='button' class='btn btn-default'>Salveaza ciorna</button>
				<button type='button' class='btn btn-success'>Programeaza</button>
			</div>
			</form>
		</div>
	</div>
</div>";