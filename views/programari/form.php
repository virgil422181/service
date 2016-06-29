<?php
return "
<!-- Modal -->
<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<form class='form-horizontal' method='post' action='".WEB_ROOT."programari/toate-programarile'>
			<div class='modal-header'>
				<h4 class='modal-title' id='myModalLabel'>Programare</h4>
			</div>
			<div class='modal-body'>
			        <div id='hidden-field'></div>
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
					<!-- Numar Inmatriculare -->
					<div class='form-group'>
						<label for='nrInmatriculare' class='col-sm-4 control-label'>Numar Inmatriculare</label>
						<div class='col-sm-6'>
							<input type='text' class='form-control' id='nrInmatriculare' placeholder='PH00XXX'>
						</div>
					</div>
					<!-- Solicitare client -->
					<div class='form-group'>
						<label for='solicitareClient' class='col-sm-4 control-label'>Solicitare client</label>
						<div class='col-sm-6'>
							<input type='text' class='form-control' id='solicitareClient' placeholder='Solicitare Client'>
						</div>
					</div>
					<!-- Serie Sasiu -->
					<div class='form-group'>
						<label for='serieSasiu' class='col-sm-4 control-label'>Serie Sasiu: </label>
						<div class='col-sm-6'>
							<input type='text' class='form-control' id='serieSasiu' placeholder='Serie Sasiu'>
						</div>
					</div>
					<!-- Tip auto -->
					<div class='form-group'>
						<label for='model-auto' class='col-sm-4 control-label'>Model auto: </label>
						<div class='col-sm-6'>
							<input type='text' class='form-control' id='model-auto' name='model-auto' placeholder='Model Auto'>
						</div>
					</div>
					<!-- Motor -->
					<div class='form-group'>
						<label for='motor-auto' class='col-sm-4 control-label'>Motor: </label>
						<div class='col-sm-6'>
							<input type='text' class='form-control' id='motor-auto' name='motor-auto' placeholder='Motor'>
						</div>
					</div>
					<!-- Km -->
					<div class='form-group'>
						<label for='km' class='col-sm-4 control-label'>KM: </label>
						<div class='col-sm-6'>
							<input type='number' class='form-control' id='km' placeholder='Kilometri'>
						</div>
					</div>
					<!--Mecanic -->
					<div class='form-group'>
						<label for='motor' class='col-sm-4 control-label'>Mecanic</label>
						<div class='col-sm-6'>
							<select class='form-control'>
								<option>Nedefinit</option>
								<option>Nicolae Tacu</option>
								<option>Marius Zamfirache</option>
								<option>Cristian Stanciu</option>
								<option>Catalin Samoila</option>
							</select>
						</div>
					</div>
					<!-- Ore alocate -->
					<div class='form-group'>
						<label for='km' class='col-sm-4 control-label'>Unitati alocate: </label>
						<div class='col-sm-6'>
							<input type='number' step='0.01' class='form-control' id='ore' placeholder='1 ora = 1.00 (2 zecimale)'>
						</div>
					</div>
					<!-- Revenire -->
					<div class='form-group'>
					<label for='revenire' class='col-sm-4 control-label'>Revenire: </label>
					<div class='col-sm-6'>
						<label class='radio-inline'>
							<input type='radio' name='revenire' id='revenire-da' value='da'> Da
						</label>
						<label class='radio-inline'>
							<input type='radio' name='revenire' id='revenire-nu' value='nu'> Nu
						</label>
					</div>
				</div>
					<!-- Mobilitate -->
					<div class='form-group'>
						<label for='revenire' class='col-sm-4 control-label'>Mobilitate: </label>
						<div class='col-sm-6'>
							<label class='radio-inline'>
								<input type='radio' name='mobilitate' id='mobilitate-da' value='da'> Da
							</label>
							<label class='radio-inline'>
								<input type='radio' name='mobilitate' id='mobilitate-nu' value='nu'> Nu
							</label>
						</div>
					</div>


			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Inchide</button>
				<input class='btn btn-default' type='submit' value='Ciorna' name='submit' id='submit'>
				<input class='btn btn-success' type='submit' value='Programeaza' name='submit' id='submit'>
			</div>
			</form>
		</div>
	</div>
</div>";