<?php
include("conexao.php");
$con = conectar();
$nomecurso = $_POST ['nome_curso'];
$descricao = $_POST ['descricao'];
$duracao = $_POST ['duracao'];
$inicio = $_POST ['inicio'];
$sql = "Insert into curso(nome_curso,descricao,duracao,inicio) value
('$nomecurso','$descricao','$duracao','$inicio');
$insere = mysqli_query($con,$sql);
If($insere) {
    $acao = 1;
    header("location:?pagina=cadastra_cursos.html");
    }
}