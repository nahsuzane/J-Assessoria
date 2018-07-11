<?php
require_once 'conexao.php';
class Usuario extends DB{
  function login($cpf,$senha){
    $sql="select * from usuario where cpf='$cpf' and senha='$senha'";
    $stm = DB::prepare($sql);
    $stm->execute();
    $r = $stm->fetch();
    return json_encode($r);
  }

  public function listar(){
    $sql = "SELECT * from usuario";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }
}
 ?>
