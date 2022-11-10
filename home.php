<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" type="image/x-icon" href="./fotos/fig.png">

    <title>Agendamento Escolar 206</title>
</head>
<body>
<nav class="navbar navbar-expand-md  navbar-dark justify-content-end" style="background-color: #8C52FF; font-family: Cairo">
  <div class="container-fluid">
    <a class="navbar-brand" href="./home.php">
    	<img src="./fotos/fig.png" style="width:65px;" class="rounded-pill">
    </a>
    <a href="./home.php">
    <span class="navbar-text text-end white2">
  		AGENDAMENTO ESCOLAR
  	</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--<div class="container-fluid">
     <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Pedrolindo">
        <button class="btn btn-primary" type="button">Procurar</button>
      </form>
    </div> -->
    <div class="collapse navbar-collapse nav justify-content-end" id="collapsibleNavbar" style="font-family: Cairo;">
      <div class="navbar-nav">
      <ul class="navbar-nav white">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Provas</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">AV1</a></li>
            <li><a class="dropdown-item" href="#">AV2</a></li>
            <li><a class="dropdown-item" href="#">AV3</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Horários</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./almoco.html">Almoço</a></li>
            <li><a class="dropdown-item" href="./horario.html">Horários De Aula</a></li>
          </ul>
        <li class="nav-item">
         <a class="nav-link white3" data-bs-toggle="tooltip" title="EM BREVE" href="#" style="cursor: no-drop;">Projetos</a>
        </li> 
      </ul>
       <ul class="navbar-nav white">
         <li class="nav-item">
          <a class="nav-link" href="logout.php" role="button"><i class="fa-regular fa-circle-user me-1"></i>Sair</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>

	<section>
		<div class="col-md" style="background-color:  #8C52FF; text-align:center; margin-top: 35px; color: white; font-family: Cairo;">
		<h1>Áreas de Estudo</h1>
	</div>
</section>
    <section>
  <div class="container mt-4">
    <div class="row">
    <div class="col text-center">
      <a href="./areasestudo/linguagens.html"><img src="./fotos/linguagens.png" class="img-fluid animate__animated animate__zoomIn "></a>
    </div>
		<div class="container mt-4">
		<div class="row">
		<div class="col text-center">
		<a href="./areasestudo/humanas.html"><img src="./fotos/humanas.png" class="img-fluid animate__animated animate__zoomIn"></a>
		</div>
    <div class="container mt-4">
    <div class="row">
		<div class="col text-center">
			<a href="./areasestudo/natureza.html"><img src="./fotos/natureza.png" class="img-fluid animate__animated animate__zoomIn"></a>
		</div>
  </div>
  </div>
   <div class="container mt-4 mb-5">
    <div class="row">
    <div class="col text-center">
      <a href="./areasestudo/basetecnica.html"><img src="./fotos/basetec.png" class="img-fluid animate__animated animate__zoomIn"></a>
    </div>
    

	</section>


<!--  Dropdown  de exemplo aq
<div class="container-fluid mt-3">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p>
</div> <br> -->

<!-- footer aq nao paga os comentários -->
<footer class="bg-secondary text-white text-center text-md-start">
  <!--container -->
  <div class="container p-4">
    <!--Linha-->
    <div class="row">
      <!--Coluna-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Agendamento Escolar 206</h5>

       <img class="img-fluid me-5" src="fotos/fig.png" alt="logo" style="width: 200px;"> 
      </div>
      <!--Coluna-->

      <!--Coluna-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 mt-5 espaco">
        <h5 class="text-uppercase">Quem Somos</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="criadores.html" class="text-white">Criadores</a>
          </li>
          <li>
            <a href="#!" class="text-white">Contato</a>
          </li>
          <li>
        </ul>
      </div>
      <!--Coluna-->

      <!--Coluna-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 mt-5">
        <h5 class="text-uppercase mb-0">Quem Somos</h5>

        <ul class="list-unstyled">
          <li>
            <a href="criadores.html" class="text-white">Criadores</a>
          </li>
          <li>
            <a href="#" class="text-white">Contato</a>
          </li>
      </div>
      <!--coluna-->
    </div>
    <!--linha-->
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Todos Os Direitos Reservados &copy;
    <a class="text-white" href="https://agendamentoescolar206.netlify.app/home.html">Agendamento Escolar 206</a>
  </div>
  
</footer>










<script>
// botaozinho do projeto
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script src="https://kit.fontawesome.com/d756c022d4.js" crossorigin="anonymous"></script>
</body>
</html>