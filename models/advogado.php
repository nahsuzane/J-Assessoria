<?php
require_once 'conexao.php';

class Advogado extends DB {
  public function listar(){
    $sql = "SELECT * from advogado";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }
  function login($num_oab,$senha){
    $sql="select * from usuario where num_oab='$num_oab' and senha='$senha'";
    $stm = DB::prepare($sql);
    $stm->execute();
    $r = $stm->fetch();
    return json_encode($r);
  }
}
 ?>
