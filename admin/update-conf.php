<?php include_once 'connect.php'; ?>
<?php include_once 'user_auth.php';?>

<?php

$conf_id = $_POST['conf_id'];
$title  = $_POST['conf_title']; 
$menu1 = $_POST['conf_menu1'];
$menu2 = $_POST['conf_menu2'];
$menu3 = $_POST['conf_menu3'];
$hello = $_POST['conf_hello'];
$desc = $_POST['conf_desc'];

if ($title != NULL && $menu1 != NULL ) {


 if (!file_exists($_FILES['arquivo']['name'])) {   
      
      $pt_file =  'img/'.$_FILES['arquivo']['name'];
      
      if ($pt_file != 'img/'){  
        
        $destino =  '../img/'.$_FILES['arquivo']['name'];       
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        move_uploaded_file($arquivo_tmp, $destino);
        chmod ($destino, 0644); 
        
      }elseif($_POST['valor'] != NULL){
        
        $pt_file = $_POST['valor']; 
      
        }
      }
    

    $today = md5(date("d m y G:i:s T Y"));
        
    $update = mysql_query("UPDATE `config` SET `conf_menu1` = '$menu1', 
                                               `conf_menu2` = '$menu2',
                                               `conf_menu3` = '$menu3', 
                                               `conf_title` = '$title', 
                                               `conf_background` = '$pt_file',
                                               `conf_hello` = '$hello', 
                                               `conf_desc` = '$desc'
                                               WHERE `config`.`conf_id` = '$conf_id'",$con) or die(mysql_error());
    mysql_insert_id();
    
    if ($update) {
        mysql_close($con); 
        echo "<script>if(window.confirm('Alteração concluída.')) { window.location='admin.php';} else { window.close () } </script>";
    }
} else {
    echo "<script>if(window.confirm('É preciso preencher todos os campos obrigatórios (título e um item de menu).')) { window.location='admin.php';} else { window.close () } </script>";
}
