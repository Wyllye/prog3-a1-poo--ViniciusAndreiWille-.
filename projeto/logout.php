<?php
require_once 'autoload.php';

Sessao::iniciar();
Sessao::destruir();
setcookie('email_usuario', '', time() - 3600);

header('Location: index.php');
exit();
?>