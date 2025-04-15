<?php
session_start(); // Inicia a sessão 

// Faz a Verificação se o usuário já está logado
if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="processa_login.php"> 
        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <label>Lembrar-me</label><br>
        <input type="checkbox" name="lembrar" value="1"><br><br>

        <button type="submit">Acessar</button>
    </form>

    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p> 
</body>
</html>
