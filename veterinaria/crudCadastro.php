<?php
 include 'conexaodb.php';
 function cadastrarTutor($nomeTutor, $cpf_tutor){
 connect();
 query("INSERT INTO cadastro (nomeTutor, cpf_tutor)
VALUES ('$nomeTutor', '$cpf_tutor')");
 close();
}
function mostrarTutor(){
connect();
 $resultado = query("SELECT * FROM cadastro");
 close();
 return $resultado;
}
function buscarTutor($codigo){
connect();
 $resultado = query("SELECT * FROM cadastro WHERE codigo=$codigo");
 close();
 return $resultado;
}
function alterarTutor($codigo, $nomeTutor, $cpf_tutor){
 connect();
 query("UPDATE cadastro SET nomeTutor='$nomeTutor', cpf_tutor='$cpf_tutor' WHERE codigo=$codigo");
 close();
 }
 function excluirTutor($codigo){
 connect();
 query("DELETE FROM cadastro WHERE codigo=$codigo");
 close();
 }

function mostrarTutorPesquisar($pesquisa){
connect();
$resultado = query("SELECT * FROM cadastro WHERE nomeTutor LIKE '%$pesquisa%'
 OR cpf_tutor LIKE '%$pesquisa%'");
close();
return $resultado;
}


 ?>