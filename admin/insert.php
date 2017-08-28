<?php include_once 'connect.php';?>
<?php

$user  = $_POST['user'];
$email = $_POST['email'];
$regra = $_POST['regra'];
$senha = $_POST['pass'];
$chave = $_POST['gerarchave'];

if ($regra === $chave) {
    if ($user != NULL && $email != NULL && $senha != NULL) {

        $today = md5(date("d m y G:i:s T Y"));
            
        $insert = mysql_query("INSERT INTO `login`(`us_id`, `nome`, `email`, `pass`, `chave`)VALUES (NULL, '" .$user. "', '" .$email. "', '" . md5($senha) . "', '" . $today . "')",$con)or die(mysql_error());
        mysql_insert_id();
        
        if ($insert) {
            mysql_close($con); 
            echo "<script>if(window.confirm('Usuário cadastrado com sucesso!')) { window.location='admin.php';} else { window.close () } </script>";
        }
    } else {
        echo "<script>if(window.confirm('Campo Nome, E-mail ou Senha incorretos! \\ Tente novamente!')) { window.location='admin.php';} else { window.close () } </script>";
    }
} else {
    echo "<script>if(window.confirm('Campo Validador incorreto! \\ Tente novamente!')) { window.location='admin.php';} else { window.close () } </script>";
}
?>