<?php
include("conexao.php");
$ligacao =conectar();
$cod_aluno = $_POST['cod_aluno'];
$cod_curso = $_POST['cod_curso'];
$sql ="UPDATE aluno set cod_curso ='$cod_curso' where id_aluno ='$cod_aluno'";
$alterar = mysqli_query($ligacao,$sql);
if($alterar){
    header("location:enturmar.php");
}