<?php
require_once '../models/processo.php';

$obj = new Processo();
$op = $_POST['op'];

switch ($op) {
  case 1:
    $l = $obj->adicionarProcesso($_POST['usuario'],
                                $_POST['advogado'],
                                $_POST['caminho'],
                                $_POST['sts'],
                                $_POST['numero_processo'],
                                $_POST['autor'],
                                $_POST['reu'],
                                $_POST['vara'],
                                $_POST['municipio'],
                                $_POST['data_abertura'],
                                $_POST['estado']);

    echo $l;
    break;

  default:
    // code...
    break;
}
 ?>
