<?php include_once 'connect.php';?>
<?php include_once 'user_auth.php';?>

    <?php

/* @var $user type */
$title = $_POST['img_title'];
$link  = $_POST['img_link'];

    
    if ($title != NULL && $link != NULL) { 
        
        if (!file_exists($_FILES['arquivo']['name'])) {		
			
			$pt_file =  'img/portfolio/fullsize'.$_FILES['arquivo']['name'];
			
			if ($pt_file != 'img/portfolio/fullsize'){	
				
				$destino =  '../img/portfolio/fullsize'.$_FILES['arquivo']['name'];				
				$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
				move_uploaded_file($arquivo_tmp, $destino);
				chmod ($destino, 0644);	
				
			}elseif($_POST['valor'] != NULL){
				
				//$arq = explode('../', $_POST['valor']);
				$pt_file = $_POST['valor'];	
			
				}
			}
    
        $insert = mysql_query("INSERT INTO `portfolio` (`img_id`, `img_title`, `img_link`, `img_arquivo`) VALUES (NULL, '" .$title. "', '" .$link. "', '" .$pt_file. "')", $con)or die(mysql_error());
        mysql_insert_id();
        
        if ($insert) {
            mysql_close($con); 
            echo "<script>if(window.confirm('Cadastrado com sucesso!')) { window.location='admin.php';} else { window.close () } </script>";
        }
    } else {
        echo "<script>if(window.confirm('Campo titulo ou link incorretos! \\ Tente novamente!')) { window.location='admin.php';} else { window.close () } </script>";
    }
