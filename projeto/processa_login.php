<?php
require_once 'autoload.php';

Sessao::iniciar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $lembrar = isset($_POST['lembrar']);

    $autenticador = new Autenticador();
    if ($autenticador->login($email, $senha, $lembrar)) {
        header('Location: dashboard.php');
        exit();
    } else {
        echo 'E-mail ou senha inválidos.';
    }
}
?>