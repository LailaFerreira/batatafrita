<?php include_once 'connect.php';?>
<?php include_once 'user_auth.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap Login Form</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <br>
     <nav class="navbar navbar-default" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top" style="margin-left: -108px;">Administrador</a>
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
         <ul>
            <li class="page-scroll" style="list-style-type:none; margin: 5px 0px 0px 15px;">
              <?php
                 echo "<a href=\"cadastro.php\">Cadastrar usuarios</a><br>";
                 echo "<a href=\"config.php\">Configurar informações tela inicial</a>";
              ?>
            </li>
        </ul>
    </div>
    <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>