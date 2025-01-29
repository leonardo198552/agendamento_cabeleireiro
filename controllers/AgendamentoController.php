<?php
require_once '../config/database.php';

class AgendamentoController {
    public static function criarAgendamento($usuario_id, $data_hora, $servico) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO agendamentos (usuario_id, data_hora, servico) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $usuario_id, $data_hora, $servico);
        return $stmt->execute();
    }

    public static function listarAgendamentos() {
        global $conn;
        $result = $conn->query("SELECT * FROM agendamentos ORDER BY data_hora ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
