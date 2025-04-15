<?php
// filepath: c:\xampp\htdocs\programacao\projeto\classes\Autenticador.php
class Autenticador {
    private $usuarios = [];

    public function __construct() {
        Sessao::iniciar();
        if (isset($_SESSION['usuarios'])) {
            $this->usuarios = $_SESSION['usuarios'];
        }
    }

    public function registrar(Usuario $usuario) {
        $email = $usuario->getEmail();
        if (isset($this->usuarios[$email])) {
            return 'Erro: E-mail já cadastrado.';
        }

        $this->usuarios[$email] = [
            'nome' => $usuario->getNome(),
            'senha' => $usuario->getSenha(),
        ];

        $_SESSION['usuarios'] = $this->usuarios;
        return 'Usuário cadastrado com sucesso!';
    }

    public function login($email, $senha, $lembrar) {
        if (isset($this->usuarios[$email])) {
            $usuario = $this->usuarios[$email];
            if (password_verify($senha, $usuario['senha'])) {
                Sessao::set('usuario', $usuario['nome']);
                if ($lembrar) {
                    setcookie('email_usuario', $email, time() + (7 * 24 * 60 * 60));
                }
                return true;
            }
        }
        return false;
    }
}
?>