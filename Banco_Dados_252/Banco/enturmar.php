<?php
include("conexao.php");
$con = conectar();
$pesq_aluno ="Select id_aluno,nome_aluno FROM aluno where cod_curso is null";
$resultado = mysqli_query($con,$pesq_aluno);
$pesq_curso ="Select id_curso,nome_curso FROM curso";
$resultado1 = mysqli_query($con,$pesq_curso);
?>
<meta charset="utf-8">
<h3>Enturmação de aluno</h3>
<form method= post action=confirma_enturmar.php>
<p>Nome aluno:
<select name="cod_aluno">
<option value= ' '>Escolha nome do Aluno</option>
<?php
while($linha= mysqli_fetch_array($resultado)){
echo "<option value= $linha[0]> $linha[1]</option>";
}
echo "</select>";
?>
<p>Nome curso:
<select name="cod_curso">
<option value= ' '>Escolha nome do curso</option>
<?php
while($linha= mysqli_fetch_array($resultado1)){
echo "<option value= $linha[0]> $linha[1]</option>";
}
echo "</select>";
echo "<p><input type= submit value= Enviar>";
echo "</form>";
?>