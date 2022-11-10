<?php
include('conexao.php');

if(isset($_POST['user']) || isset($_POST['senha'])) {

    if(strlen($_POST['user']) == 0) {
        echo "Insira seu usuário";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Insira sua senha";
    } else {

        $email2 = $mysqli->real_escape_string($_POST['user']);
        $senha2 = $mysqli->real_escape_string($_POST['senha']);

        $sql_code2 = "SELECT * FROM userlider WHERE user = '$email2' AND senha = '$senha2'";
        $mysql_query = $mysqli->query($sql_code2) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade2 = $mysql_query->num_rows;

        if($quantidade2 == 1) {
            
            $usuario2 = $mysql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario2['id'];
            $_SESSION['nome'] = $usuario2['nome'];

            header("Location: home.php");

        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }

    }

}
?>

<?php
include('conexao.php');

if(isset($_POST['user']) || isset($_POST['senha'])) {

    if(strlen($_POST['user']) == 0) {
        echo "Insira seu usuário";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Insira sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['user']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM useralunos WHERE user = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: home2.php");

        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }

    }

}
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" type="image/x-icon" href="./fotos/fig.png">
    <link rel="stylesheet" href="estilos/login.css">
    <title>Agendamento Escolar 206</title>
</head>
<body>
    
<section class="vh-100" style="background-color: #4B0082;">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-top: 40px;margin-left: 40px;">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./fotos/atividades.png" alt="imagemcarrosel" class="d-block" style="width:100%; height: 35em; border-radius: 1em">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="./fotos/atividades2.png" alt="imagemcarrosel" class="d-block" style="width:100%; height: 35em; border-radius: 1em">
      <div class="carousel-caption">
       
      </div> 
    </div>
    <div class="carousel-item">
      <img src="./fotos/atividades3.png" alt="imagemcarrosel" class="d-block" style="width:100%; height: 35em; border-radius: 1em">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>  
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="./fotos/fig.png" class="img-fluid" style="width: 100px;">
                    <span class="h1 fw-bold mb-0">Agendamento Escolar</span>
                  </div>

                  <h5 class="fw-normal pb-1" style="letter-spacing: 1px;"></h5>

                  <div id='msgError'></div>

                  <div class="form-outline mb-2" style="width: 100%;">
                    <label class="form-label" for="form2Example17">Usuário</label>
                    <input type="user" id="login" class="form-control form-control-lg" placeholder="insira seu usuário" name="user"/>
                  </div>
                  <div class="form-outline mb-1" style="width: 100%;">
                     <label class="form-label" for="form2Example27">Senha</label>
                    <input type="password" id="senha" class="form-control form-control-lg" placeholder="insira sua senha" name="senha"/>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                  </div>
                  <div class="pt-1 mb-5">
                  <button class="btn btn-secondary btn-block" type="submit" value="Entrar" style="width: 20%">Login</button></a>
                  </div>

                  <!-- <p class="text-muted small"><a href="#">Esqueci meu usuário</a></p> -->
                  <!-- <p class="mb-5 pb-lg-2 text-muted small"><a href="#">Esqueci minha senha</a></p> -->
                  <br><br><br><br>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
