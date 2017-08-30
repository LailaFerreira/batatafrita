<?php include_once 'connect.php'; ?>
<?php include_once 'user_auth.php';?>

<?php

$id = $_POST['img_id'];
$title  = $_POST['img_title'];
$link = $_POST['img_link'];


if ($title != NULL && $link != NULL ) {

if (!file_exists($_FILES['arquivo']['name'])) {   
      
      $pt_file =  'img/portfolio/fullsize/'.$_FILES['arquivo']['name'];
      
      if ($pt_file != 'img/portfolio/fullsize/'){	
				
		$destino =  '../img/portfolio/fullsize/'.$_FILES['arquivo']['name'];				
		$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
		move_uploaded_file($arquivo_tmp, $destino);
		chmod ($destino, 0644);	
      }elseif($_POST['valor'] != NULL){
        
        $pt_file = $_POST['valor']; 
      
        }
      }
        
    $update = mysql_query("UPDATE `portfolio` SET `img_title` = '$title', 
    											  `img_link` = '$link', 
    											  `img_arquivo` = '$pt_file' 
    											  WHERE `portfolio`.`img_id` = '$id'",$con) or die(mysql_error());
    mysql_insert_id();
    
    if ($update) {
        mysql_close($con); 
        echo "<script>if(window.confirm('Alteração concluída.')) { window.location='admin.php';} else { window.close () } </script>";
    }
} else {
    echo "<script>if(window.confirm('É preciso preencher o nome e o link da imagem.')) { window.location='updateimagem.php';} else { window.close () } </script>";
}
