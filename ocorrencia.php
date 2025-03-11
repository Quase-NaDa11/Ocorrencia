<?php
include_once('conexao.php');

if (isset($_POST["submit"]) && isset($_POST["nome"])) {
    $name = htmlspecialchars($_POST["nome"]); // Evita ataques XSS
    $aula=$_POST['aula'];
    $situacao=$_POST['situacao'];
    $turma=$_POST['turma'];
    $nomeprof=$_POST['nome_prof'];
    $descricao=$_POST['descricao'];
    $encaminhamento=$_POST['encaminhamento'];
}

$envi= "INSERT INTO ocorrencia ('nome','aula','situacao','turma','descricao','encaminhamento') VALUES ($name,$aula,$situacao,$turma,$nomeprof,$descricao,$encaminhamento)";
?>
