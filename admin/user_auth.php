<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

session_start();


if (isset($_SESSION['nome_usuario'])) {
    $nome_usuario = $_SESSION['nome_usuario'];
}
if (isset($_SESSION['senha_usuario'])) {
    $senha_usuario = $_SESSION['senha_usuario'];
} else {
    
}
if (!(empty($nome_usuario)OR empty($senha_usuario))) {
    
    $sql = mysql_query("SELECT * FROM login WHERE nome = '" . mysql_real_escape_string($nome_usuario) . "'AND pass = '" . mysql_real_escape_string($senha_usuario) . "'", $con)or die(mysql_error());
    
    $conta = mysql_num_rows($sql);

    if ($conta >= 1) {
        if (($senha_usuario != mysql_result($sql, 0, "pass"))) {
            unset($_SESSION['nome_usuario']);
            unset($_SESSION['senha_usuario']);
            header("Location: index.php");
            
            exit;
        }
    } else {
        unset($_SESSION['nome_usuario']);
        unset($_SESSION['senha_usuario']);
        header("Location: index.php");
        exit;
    }
} else {
    
    header("Location: index.php");
}
?>