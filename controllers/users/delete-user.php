<?php/*@var $user User */if (isset($_GET['id'])){    $id=$_GET['id'];    $user->deleteUser($id);    redirectTo (WEB_ROOT."users/all-users");} else {    redirectTo (WEB_ROOT."users/all-users");}