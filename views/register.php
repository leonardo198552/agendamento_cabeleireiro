<?php
require_once '../controllers/UsuarioController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (UsuarioController::registrar($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        echo "Cadastro realizado! Faça login.";
    } else {
        echo "Erro no cadastro.";
    }
}
?>

<form method="post">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Registrar</button>
</form>
