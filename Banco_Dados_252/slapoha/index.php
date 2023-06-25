<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width", initial-scale="1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
  <a class= "navbar-brand" href="Fala meu nobre"><img src="img/banco.jpg"> Banco de Dados 252</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ConteudoMenu" aria-controls="ConteudoMenu" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class= "collapse navbar-collapse d-lg-flex justify-content-start" id="ConteudoMenu">
   <ul class="navbar-nav" >
   <li class= "nav-item mr-5 h5">
    <a class= "nav-link" href="?pagina=home">Home <span class="sr-only"></span></a>
   </li>
   <li class="nav-item dropdown mr-5 h5">
      <a class= "nav-link dropdown-toggle" href="fds" id = "NavBarDrop"
      role="button" data-toggle="dropdown" aria-haspopup="true"
      ari-expanded ="false">| Relacionamento 1 - N </a>
      <div class= "dropdown-menu bg-info" aria-labelledby="NavBarDrop">
       <a class= "dropdown-item h5" href="?pagina=cadastro_funcionario"> Cadastro de Funcionários</A>
	   <a class= "dropdown-item h5" href="#"> Cadastro de Veículos</A>
	   <a class= "dropdown-item h5" href="#"> Funcionario/Veiculo - 1 para N</A>
      <div>
   </li>
   </ul>
  </div>
 </nav>
   <?php
		if(!isset($_GET['pagina'])){
		include ("views/home.php");
		} Else {
			$pagina = $_GET['pagina'];
			switch($pagina){
				case 'cadastro_funcionario':
				include("views/cadastro_funcionario.php");
				break;
				default:include ("views/home.php");
		}}
		
?>
</body>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
