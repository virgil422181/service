<?php$form = inputForm("id", "hidden", true, "", "",$modifyUser->id);$form .= inputForm("parola", "password", true, "Parola", "Nu ati introdus parola!");$form .= inputPassworConfrirmation("confirmaParola", true, "Confirma Parola", "PArolele nu corespund", "parola");return "    <div class='row'>        <div class=' col-sm-12 col-md-8 col-lg-6'>            <div class='panel panel-default'>                <div class='panel-heading'>Adauga o parola noua </div>                <div class='panel-body'>                <div class='col-xs-12'>                <form role='form' action='".WEB_ROOT."user/parola-noua' method='post' id='userForm'>                    $form                    <input type='submit' class='btn btn-primary' value='Salveaza' name='submit' >                </form>            </div>                </div>            </div>        </div>    </div>";