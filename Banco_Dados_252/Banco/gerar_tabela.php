<?php
include("conexao.php");
$con =conectar();
$relatorio ="Select aluno.id_aluno,aluno.nome,curso.curso,curso.descricao from aluno 
JOIN curso 
On aluno.cod_curso= curso.id_curso ORDER by aluno.nome";
$resultado = mysqli_query($con,$relatorio);
$encontrado = mysqli_num_rows($resultado);
if ($encontrado < 1 ) {
    echo "<h1 align=center> Nenhum Dado Encontrado" ;
} else {
?>
<h1 align=center> RELATÓRIO DE ALUNOS </h1>
<table border =1 align=center> 
<tr><td>Id Aluno</td><td>Nome Aluno</td><td>Nome Curso</td><td>Descrição</td><tr>
<?php
while ($linha = mysqli_fetch_array($resultado)){
    echo "<tr><td>$linha[0]</td><td>$linha[1]</td><td>$linha[2]</td><td>$linha[3]</td></tr>";
}
}
?> 
</table>
<h1 align=center> <a href=index.html>VOLTAR</a> </h1> 