<?php
include 'crudCadastro.php';
$pesquisa = $_POST["palavra"];
switch ($pesquisa) {
 case 'tudo':
 $resultado = mostrarTutor();
 break;
 default:
 $resultado = mostrarTutorPesquisar($pesquisa);
 break;
}
if(mysqli_num_rows($resultado)<=0){
 echo 'Nenhum Tutor encontrado';
}
else{
 while($resultadoSeparado=mysqli_fetch_assoc($resultado)){
 echo "
 <tr>
 <td>$resultadoSeparado[nomeTutor]</td>
 <td>$resultadoSeparado[cpf_tutor]</td>
 
 <td><a class='btn btn-success'
href='editarcadastro.php?codigo=$resultadoSeparado[codigo]'>Editar</a></td>
 </tr>
 ";
 }
} ?>