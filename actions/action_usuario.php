<?php
require_once '../models/usuario.php';

$obj = new Usuario();
switch ($_POST['op']) {
  case 1:
    $r = $obj->login($_POST['cpf'],$_POST['senha']);
    echo $r;
    break;

  default:
    // code...
    break;
}
 ?>
