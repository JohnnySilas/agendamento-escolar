<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="./fotos/fig.png">

    <title>Agendamento Escolar 206</title>

<!-- historia -->
<?php
 include("conexao.php");

  if(isset($_GET['deletar'])){

    $id = intval($_GET['deletar']);
    $sql_query = $mysqli->query("SELECT * FROM historia WHERE id = '$id'") or die($mysqli->error);
    $arquivo1 = $sql_query->fetch_assoc();

    if(unlink($arquivo1['path'])) {
      $deu_certo = $mysqli->query("DELETE FROM historia WHERE id = '$id'") or die($mysqli->error);
    }

  }


 function enviarArquivo($name, $tmp_name){

   include("conexao.php");

   $pasta = "uploads/";
   $nomeDoArquivo = $name;
   $novoNomeDoArquivo = uniqid();
   $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
  
   if($extensao != 'rar' && $extensao != 'zip')
     die("Tipo de arquivo não aceito!");
  
     $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

     $deu_certo = move_uploaded_file($tmp_name, $path);
     if ($deu_certo) { 
       $mysqli->query("INSERT INTO historia (nome, path) VALUES('$nomeDoArquivo', '$path')") or die($mysqli->error);
       return true;
 }   else
       return false;

 }

 if(isset($_FILES['historia'])) {
   $arquivos = $_FILES['historia'];
   $tudo_certo = true;
   foreach($arquivos['name'] as $historia => $arq){
    $deu_certo = enviarArquivo($arquivos['name'][$historia], $arquivos["tmp_name"][$historia]);
    if(!$deu_certo)
         $tudo_certo = false;
   }

 }

 $sql_query = $mysqli->query("SELECT * FROM historia") or die($mysqli->error);

?>

<!-- historia2 -->
<?php
include("conexao.php");

 if(isset($_GET['deletarr'])){

   $id = intval($_GET['deletarr']);
   $mysql_query = $mysqli->query("SELECT * FROM historia2 WHERE id = '$id'") or die($mysqli->error);
   $arquivo = $mysql_query->fetch_assoc();

   if(unlink($arquivo['path'])) {
     $deu_certo = $mysqli->query("DELETE FROM historia2 WHERE id = '$id'") or die($mysqli->error);
   }

 }


function enviarArquivos($name, $tmp_name){

  include("conexao.php");

  $pasta = "uploads/";
  $nomeDoArquivo = $name;
  $novoNomeDoArquivo = uniqid();
  $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
  
  if($extensao != 'rar' && $extensao != 'zip')
    die("Tipo de arquivo não aceito!");
  
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($tmp_name, $path);
    if ($deu_certo) { 
      $mysqli->query("INSERT INTO historia2 (nome, path) VALUES('$nomeDoArquivo', '$path')") or die($mysqli->error);
      return true;
}   else
      return false;

}

if(isset($_FILES['historia2'])) {
  $arquivos = $_FILES['historia2'];
  $tudo_certo = true;
  foreach($arquivos['name'] as $historia2 => $arq){
   $deu_certo = enviarArquivos($arquivos['name'][$historia2], $arquivos["tmp_name"][$historia2]);
   if(!$deu_certo)
        $tudo_certo = false;
  }

}

$mysql_query = $mysqli->query("SELECT * FROM historia2") or die($mysqli->error);

?>

</head>
<body>
<nav class="navbar navbar-expand-md  navbar-dark justify-content-end" style="background-color: #6D412A; font-family: Cairo">
  <div class="container-fluid">
    <a class="navbar-brand" href="../home.php">
    	<img src="../fotos/fig.png" style="width:65px;" class="rounded-pill">
    </a>
    <a href="../home.php">
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
            <li><a class="dropdown-item" href="../almoco.html">Almoço</a></li>
            <li><a class="dropdown-item" href="../horario.html">Horários De Aula</a></li>
          </ul>
        <li class="nav-item">
         <a class="nav-link white3" data-bs-toggle="tooltip" title="EM BREVE" href="#" style="cursor: no-drop;">Projetos</a>
        </li> 
      </ul>
    </div>
  </div>

</nav>

	<section>
		<div class="col-md"style="background-color: #6D412A; text-align:center; margin-top: 35px; color: white; font-family: Cairo;">
		<h1>História</h1>
	</div>
</section>

<section>
  <div class="container">
<div class="container-fluid" style="background-color:#6D412A; margin-top: 25px; color: white;">
  <h2>ATIVIDADES</h2>
</div>
<div class="list-group" style="border-bottom: 1px solid black; border-top: 1px  solid black;">
  <a href="#" class="list-group-item list-group-item-action">A MESOPOTÂMIA</a>
  <a href="#" class="list-group-item list-group-item-action">EXPANSÃO MARITIMA</a>
  <a href="#" class="list-group-item list-group-item-action">O EGITO ANTIVO</a>
</div>
<div class="container-fluid" style="background-color:#6D412A; margin-top: 25px; color: white;">
  <h2>ASSUNTOS MINISTRADOS</h2>
</div>
<div class="list-group" style="border-bottom:1px solid black; border-top:1px  solid black">
  <a href="#" class="list-group-item list-group-item-action">A MESOPOTÂMIA</a>
  <a href="#" class="list-group-item list-group-item-action">EXPANSÃO MARITIMA</a>
  <a href="#" class="list-group-item list-group-item-action">O EGITO ANTIVO</a>
</div>
<div class="container-fluid" style="background-color:#6D412A; margin-top: 25px; color: white;">
  <h2>PDF'S</h2>
</div>
<div class="list-group" style="border-bottom: 1px solid black; border-top: 1px  solid black;">
<table>
  <tbody>
  <?php
  while($arquivo1 = $sql_query->fetch_assoc()){
  ?>
  <tr>
  <td><a href="<?php echo $arquivo1['path'];?>" class="list-group-item list-group-item-action"><?php echo $arquivo1['nome'];?></a></td>
  <td class="list-group-item list-group-item-action"><a href="historia.php?deletar=<?php echo $arquivo1['id']; ?>">Deletar</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<div class="mt-0" style="width: 145px;">
  <form method="post" enctype="multipart/form-data">
  <label for="formFile" class="form-label"></label>
  <input class="form-control" multiple type="file" id="formFile" name="historia[]">
  <input class="mt-2" type="submit" name="upload" value="Enviar">
</div>
</form>
<div class="container-fluid" style="background-color:#6D412A; margin-top: 25px; color: white;">
  <h2>SLIDES</h2>
</div>
<div class="list-group" style="border-bottom: 1px solid black; border-top: 1px  solid black;">
<table>
  <tbody>
  <?php
  while($arquivo = $mysql_query->fetch_assoc()){
  ?>
  <tr>
  <td><a href="<?php echo $arquivo['path'];?>" class="list-group-item list-group-item-action"><?php echo $arquivo['nome'];?></a></td>
  <td class="list-group-item list-group-item-action"><a href="historia.php?deletarr=<?php echo $arquivo['id']; ?>">Deletar</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<div class="mt-0" style="width: 145px;">
  <form method="post" enctype="multipart/form-data">
  <label for="formFile" class="form-label"></label>
  <input class="form-control" multiple type="file" id="formFile" name="historia2[]">
  <input class="mt-2" type="submit" name="upload" value="Enviar">
</div>
</form>
</div> <br><br><br><br><br><br><br><br><br><br>
</section>


<script>
// botaozinho do projeto
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>


</body>
</html>
