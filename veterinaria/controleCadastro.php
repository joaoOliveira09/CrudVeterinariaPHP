<?php
include 'crudCadastro.php';
$opcao = $_POST["opcao"];
switch ($opcao) {
case 'Cadastrar':
cadastrarTutor($_POST["nomeTutor"], $_POST["cpf_tutor"]);
header("Location: cadastro.php");
break;
case 'Editar':
alterarTutor($_POST["codigo"], $_POST["nomeTutor"], $_POST["cpf_tutor"]);
header("Location: visualizarCadastro.php");
break;
case 'Excluir':
excluirTutor($_POST["codigo"]);
header("Location: visualizarCadastro.php");
break;
}
?>