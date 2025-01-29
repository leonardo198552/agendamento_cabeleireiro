<?php
require_once '../controllers/UsuarioController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (UsuarioController::login($_POST['email'], $_POST['senha'])) {
        header("Location: dashboard.php");
    } else {
        echo "Email ou senha incorretos!";
    }
}
?>

<form method="post">
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>
