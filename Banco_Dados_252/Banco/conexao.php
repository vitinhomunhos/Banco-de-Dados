<?php
function conectar(){
$ligacao = mysqli_connect("localhost","root","","escola");
return $ligacao;
}
?>