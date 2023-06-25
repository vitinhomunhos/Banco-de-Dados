<?php
include("conexao.php");
$matricula = $_POST['matricula'];
$nome = $_POST['aluno'];
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$mae = $_POST['mae'];
$pai = $_POST['pai'];
$con = conectar();
$sql = "Insert into 
aluno(matricula,nome,data_nasc,sexo,nome_mae,nome_pai) 
value
('$matricula','$nome','$nascimento','$sexo','$mae','$pai')"
;
$insere = mysqli_query($con,$sql);
if($insere){
 header("Location:cadastro_aluno.html");
}
?>