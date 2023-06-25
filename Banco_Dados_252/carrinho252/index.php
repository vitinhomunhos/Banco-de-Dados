<?php
session_start();
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width", initial-scale="1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style>
.tam{
	font-size:18px;
	font-weight: bold;
}
</style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-info" 
 fixed-top">
  <a class= "navbar-brand h5" href="#"  >AMHSports</a>
  
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ConteudoMenu" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class= "collapse navbar-collapse d-lg-flex justify-content-end" id="ConteudoMenu" >
   <ul class="navbar-nav"  >
   <li class= "nav-item mr-2 ml-3 ">
    <a class= "nav-link tam" href="?pagina=home">HOME <span class="sr-only"></span></a>
   </li>
   
   <li class="nav-item dropdown mr-2 ">
      <a class= "nav-link dropdown-toggle tam" href="#" 
	  id = "NavBarDrop" role="button" data-toggle="dropdown" aria-haspopup="true"
      ari-expanded ="false">PRODUTOS </a>
      <div class= "dropdown-menu navbar-ligth bg-info" 
	  aria-labelledby="NavBarDrop">
        <a class= "dropdown-item tam " href="?pagina=camiseta">CAMISETAS</A>
	    <a class= "dropdown-item tam" href="#"> XXXXXXX</A>
	   <a class= "dropdown-item tam" href="#"> XXXXXXX</A>
	   <a class= "dropdown-item tam" href="#"> XXXXXXX</A>
      <div>
   </li>
   <li class= "nav-item mr-2 ml-3 ">
    <a class= "nav-link tam" href="#">CARRINHO <span class="sr-only"></span></a>
   </li>
  </ul>
  </div>
 </nav>
   <?php
		if(!isset($_GET['pagina'])){
		include ("views/home.php");
		} else {
		  $pagina = $_GET['pagina'];
		  switch ($pagina) {
		  case "home":
          include ("views/home.php");
          break;
	      case "camiseta":
          include ("views/camiseta.php");
          break;
		  default:
		  include ("views/home.php");
		}}
?>
</body>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
