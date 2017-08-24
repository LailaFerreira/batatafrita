<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

session_start();

$localhost = "localhost";
$userbd = "root";
$password = "";
$con = @mysql_connect($localhost, $userbd, $password);
mysql_select_db("batatafrita");

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


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tela inicial</title>
</head>
<body>

    <div>
        <br>
        <form action="insert.php" method="POST">
        <label>Nome:</label><input type="text" name="user" value="" />
        <br>
        <label>Email:</label><input type="text" name="email" value=""/>
        <br>
        <label>Senha:</label><input type="password" name="pass" value=""/>
        <br>
        
        <?php

            $regra = (date("s") / date ("m"));
            echo '['. $regra . ']<br>';
            echo '<label>Validador:<br></label><input type="text" name="regra" value=""/>';
        ?>
        <input type="hidden" name="gerarchave" value="<?php echo $regra; ?>"><br>
        <button type="submit">Cadastrar</button>
        </form>
        
        <?php
            echo "<a href=\"sair.php\">Sair</a>";
        ?>
    </div>
</body>
</html>