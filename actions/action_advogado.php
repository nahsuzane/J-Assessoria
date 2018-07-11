<?php
require_once '../models/advogado.php';

$obj = new Advogado();
switch ($_POST['op']) {
  case 1:
    $r = $obj->login($_POST['num_oab'],$_POST['senha']);
    echo $r;
    break;

  default:
    // code...
    break;
}
 ?>
