<?php
require_once 'conexao.php';

class Processo extends DB{
  public function adicionarProcesso($usuario,
                                    $advogado,
                                    $caminho,
                                    $sts,
                                    $numero_processo,
                                    $autor,
                                    $reu,
                                    $vara,
                                    $municipio,
                                    $data_abertura,
                                    $estado){
    $sql = "INSERT INTO `processo`(`usuario`,
                                  `advogado`,
                                  `caminho`,
                                  `sts`,
                                  `numero_processo`,
                                  `autor`,
                                  `reu`,
                                  `vara_id`,
                                  `municipio`,
                                  `data_abertura`,
                                  `estado`) VALUES ($usuario,
                                                    $advogado,
                                                    '$caminho',
                                                    $sts,
                                                    '$numero_processo',
                                                    '$autor',
                                                    '$reu',
                                                    $vara,
                                                    '$municipio',
                                                    '$data_abertura',
                                                    '$estado');";
    $stm = DB::prepare($sql);
    return $stm->execute();
  }
}
 ?>
