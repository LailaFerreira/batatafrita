<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);


$localhost = "localhost";
$userbd = "root";
$password = "";
$con = @mysql_connect($localhost, $userbd, $password);
mysql_select_db("batatafrita");

$user = $_POST['user'];
$senha = md5($_POST['pass']);

$sql = mysql_query("SELECT * FROM login WHERE nome = '".mysql_real_escape_string($user)."' AND pass = '".mysql_real_escape_string($senha)."'",$con)or die (mysql_error());

$registro = mysql_num_rows($sql);

if($registro<1){
      echo "<script>if(window.confirm('Usuario ou Senha incorretos! \\ Tente novamente!')) { window.location='index.php';} else { window.close () } </script>";
        
}else{
    session_start();
    $_SESSION['nome_usuario']=$user;
    $_SESSION['senha_usuario']=$senha;
    header("Location: admin.php");
}
mysql_close($con);
?>