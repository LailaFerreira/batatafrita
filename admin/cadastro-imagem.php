<?php include_once 'connect.php';?>
<?php include_once 'user_auth.php';?>
<?php
    $query = ('SELECT * FROM config ');
    
    $result = mysql_query($query, $con);
    
    $row = mysql_fetch_array($result);
    
?>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Cadastro de imagens</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
</head>
<body>
		<br>
	     <nav class="navbar navbar-default" id="mainNav">
        <div class="container">
            <a class="navbar-brand" style="margin-left: -108px;">Administrador</a>
            <a class="navbar-brand" href="admin.php">Início</a>
        </div>
   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="navbar-nav navbar-right" style="list-style-type:none; margin: -33px 29px 0px 102px;">
            <li class="page-scroll navbar-right">
              <?php
                 echo "Olá ",$_SESSION['nome_usuario'],"<a href=\"sair.php\">. Sair</a>";
              ?>
            </li><br>
            </ul>
         </nav>
    </div>
<div class="container">
        <div class="row well col-lg-4">
        <form class="form col-md-12 center-block" enctype="multipart/form-data" action="insert-imagem.php" method="POST">
               
                 <input type="text" name="img_title" class="form-control" placeholder="Título imagem">
        	<br/>
                 <input type="text" name="img_link" class="form-control" placeholder="Link">
       		<br/>
             	 <input type="file" name="arquivo" class="form-control" placeholder="Ibagem">
        	<br/>
                
                <button class="btn btn-primary" type="submit">Cadastrar</button>            
            </form>
        </div>
            </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>