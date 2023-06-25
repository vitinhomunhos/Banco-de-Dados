<?php
if(!isset($_POST['acao'])){
$acao =1;
}else {
$acao =$_POST['acao'];
}
if($acao == 1){
	echo "Cadastro de Funcionario";
	echo "<form method=post action=?pagina=Cadastro_Funcionario>";
	echo "<p>Nome Funcionario:<input type=text name=func>";
	echo "<p>Data Nasc:<input type=date name=nasc>";
	echo "<p>Sexo:";
	echo "<p><input type=radio name=sexo value=M checked>Masculino";
	echo "<p><input type=radio name=sexo value=F checked>Feminino";
	echo "<p>Setor:<input type=text name=setor>";
	echo "<p>Municipio<input type=name name=mun>";
	echo "<input type= hidden name= acao value=2>";
	echo "<input type=submit value=Enviar>";
}else {
	include("conexao.php");
	$nome = $_POST['func'];
	$nasc = $_POST['nasc'];
	$sexo = $_POST['sexo'];
    $setor = $_POST['setor'];
	$mun = $_POST['mun'];
	$sql= "INSERT INTO 
	funcionario(nome_func,data_nasc,setor,sexo,municipio) VALUES
	('$nome','$nasc','$setor','$sexo','$mun')";
	$con = conectar();
	$insere=mysql_query($con,$sql);
	if ($INSERE){
    $acao = 1;
	header("Location:?pagina=cadastro_funcionario");
	}		
}