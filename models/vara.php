<?php
require_once 'conexao.php';

class Vara extends DB {
  public function listar(){
    $sql = "SELECT * from vara";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }
}
 ?>
