<?php include_once 'connect.php';?>
<?php include_once 'user_auth.php';?>

<?php
    $id = $_GET['id'];
	
    $query = ('SELECT * FROM portfolio');
    
    $result = mysql_query($query, $con);
    $row = array();
    while($row = mysql_fetch_array($result)){
    	$rows[] = $row;
    }
    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin - Lista de imagens</title>
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
            <a class="navbar-brand" style="margin-left: -108px;">Administrador</a>
            <a class="navbar-brand" href="admin.php">Início</a>
            <a class="navbar-brand" href="../index.php" >Ir para site</a>
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
	        	<ul>
		            <?php foreach ($rows as $row) {
		            ?>
               <li style="list-style-type:none">
		            <?php 
                      echo '<img width="50%" height="50%" src="../'.$row['img_arquivo'].'">
                      <a href="updateimagem.php?id='.$row['img_id'].'">Editar</a>
                      <a href="deleteimagem.php?id='.$row['img_id'].'">Excluir</a>
                      </li><br>
                      ';
                    }
                 ?>
	            </ul>
       		 </div>
        </div>
        
        <!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    </body>
</html>
