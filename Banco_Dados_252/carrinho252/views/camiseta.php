<br><H1>CAMISETAS<H1><br>
<?php
include("conexao.php");
$con = conecta();
$consulta = "Select * From produto where categ_prod = 1";
$pesquisa = mysqli_query($con,$consulta);
    echo "<table border=1 aling=center>";
    echo "<tr>";
	while ($linha = mysqli_fetch_array($pesquisa)){
        echo "<td align= center><img src=produtos/$linha[7]>";
		echo "<p> $linha[3]";
        echo "<p> $linha[4]";
        echo "<p>R$ ",number_format($linha[5],2,',','.');
        echo "<p><a href=?pagina=carrinho&acao=add&id=$linha[0]>COMPRAR";
        echo "</td>";
    }
?>