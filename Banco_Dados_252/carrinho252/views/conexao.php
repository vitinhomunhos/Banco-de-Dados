<?php
    function conecta(){
        $ligacao = mysqli_connect("localhost","root","","carrinho252");
        return $ligacao;
    }