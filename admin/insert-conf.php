<?php include_once 'connect.php';?>
<?php

$title  = $_POST['conf_title'];
$menu1 = $_POST['conf_menu1'];
$menu2 = $_POST['conf_menu2'];
$menu3 = $_POST['conf_menu3'];
$hello = $_POST['conf_hello'];
$desc = $_POST['conf_desc'];
$back = $_POST['conf_background'];

if ($title != NULL && $menu1 != NULL ) {

    $today = md5(date("d m y G:i:s T Y"));
        
    $insert = mysql_query("INSERT INTO `config` (`conf_id`, `conf_menu1`, `conf_menu2`, `conf_menu3`, `conf_title`, `conf_background`, `conf_hello`, `conf_desc`, `conf_date`) VALUES (NULL, '" .$menu1. "', '" .$menu2. "', '" .$menu3. "', '" .$title. "', '" .$back. "', '" .$hello. "','" .$desc. "', CURRENT_TIMESTAMP)",$con)or die(mysql_error());
    mysql_insert_id();
    
    if ($insert) {
        mysql_close($con); 
        echo "<script>if(window.confirm('Configuração adicionada ao banco.')) { window.location='admin.php';} else { window.close () } </script>";
    }
} else {
    echo "<script>if(window.confirm('É preciso preencher todos os campos obrigatórios (título e um item de menu).')) { window.location='admin.php';} else { window.close () } </script>";
}
