<?php include_once 'connect.php'; ?>
<?php include_once 'user_auth.php';?>

<?php

$id = $_POST['img_id'];
$title  = $_POST['img_title'];
$link = $_POST['img_link'];



        
    $delete = mysql_query("DELETE FROM `portfolio` WHERE `portfolio`.`img_id` = '$id'",$con) or die(mysql_error());
    mysql_insert_id();
    
    if ($delete) {
        mysql_close($con); 
        echo "<script>if(window.confirm('Exclusao feita com sucesso.')) { window.location='admin.php';} else { window.close () } </script>";
    } else {
    echo "<script>if(window.confirm('Algo de errado não deu certo ;( ')) { window.location='updateimagem.php';} else { window.close () } </script>";
}
