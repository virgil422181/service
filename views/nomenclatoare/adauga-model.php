<?php
return "
<!-- Modal -->
<div class='modal fade' id='new-model' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<form class='form-horizontal' method='post' action='".WEB_ROOT."nomenclatoare/masini'>
			<div class='modal-header'>
				<h4 class='modal-title' id='myModalLabel'>Autovehicul nou</h4>
			</div>
			<div class='modal-body'>
                <!-- Marca autovehicul -->
                <div class='form-group'>
                    <label for='marca' class='col-sm-4 control-label'>Marca</label>
                    <div class='col-sm-6'>
                        <input type='text' class='form-control' id='marca' name='marca' placeholder='Marca autovehicul'>
                    </div>
                </div>
                <!-- Denumire model-->
                <div class='form-group'>
                    <label for='model' class='col-sm-4 control-label'>Model: </label>
                    <div class='col-sm-6'>
                        <input type='text' class='form-control' id='model' name='model' placeholder='Model autovehicul'>
                    </div>
                </div>
                <!-- Cod model-->
                <div class='form-group'>
                    <label for='cod' class='col-sm-4 control-label'>Cod Model: </label>
                    <div class='col-sm-6'>
                        <input type='text' class='form-control' id='cod' name='cod' placeholder='Cod Model (Ex: 6Y)'>
                    </div>
                </div>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-default' data-dismiss='modal'>Inchide</button>
				<input class='btn btn-success' type='submit' value='Salveaza' name='submit' id='submit'>
			</div>
			</form>
		</div>
	</div>
</div>";