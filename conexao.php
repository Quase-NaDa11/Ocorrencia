<?php 
$user ="localhost";
$local="root";
$pass="";
$bd="ocorrencias";

$conn= new mysqli($user,$local,$pass,$bd);
if($conn->error){
    echo "conexao nao realizada com sucesso ";
}
else{
    echo "conexao realizada com sucesso";
}


?>