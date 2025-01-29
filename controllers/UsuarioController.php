<?php
require_once '../config/database.php';

class UsuarioController {
    public static function registrar($nome, $email, $senha) {
        global $conn;
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senhaHash);
        return $stmt->execute();
    }

    public static function login($email, $senha) {
        global $conn;
        $stmt = $conn->prepare("SELECT id, senha, tipo FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();
            if (password_verify($senha, $usuario['senha'])) {
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_tipo'] = $usuario['tipo'];
                return true;
            }
        }
        return false;
    }
}
?>
