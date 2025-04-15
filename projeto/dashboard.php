<?php
require_once 'autoload.php';

Sessao::iniciar();

$nome = Sessao::get('usuario');
if (!$nome) {
    header('Location: index.php');
    exit();
}

$email = $_COOKIE['email_usuario'] ?? 'E-mail não salvo';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        a {
            color: #dc3545;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bem-vindo, <?php echo htmlspecialchars($nome); ?>!</h2>
        <p>Seu e-mail salvo no cookie é: <?php echo htmlspecialchars($email); ?></p>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>