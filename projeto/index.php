<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Login</title>
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
            width: 100%;
            max-width: 350px;
            text-align: center;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilo do container do checkbox */
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 0;
        }

        /* Mudar a posição da label "Lembrar e-mail" para a esquerda */
        .checkbox-container label {
            font-weight: bold;
            margin-left: 0;
            margin-right: 10px;  /* Adicionando um pequeno espaço entre a caixa e o texto */
            font-size: 14px; /* Mantendo o tamanho do texto consistente */
            display: inline-block;
            width: 100%;
        }

        .checkbox-container input {
            margin-right: 10px; /* Distância entre a caixa e o texto */
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="processa_login.php">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <!-- Alteração do botão "Lembrar e-mail" -->
            <div class="checkbox-container">
                <label for="lembrar">Lembrar e-mail</label>
                <input type="checkbox" id="lembrar" name="lembrar">
            </div>

            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
    </div>
</body>
</html>
