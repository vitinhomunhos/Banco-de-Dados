<?php
function conectar(){
$ligacao = mysqli_connect("localhost","root","","empresa252");
return $ligacao;
}