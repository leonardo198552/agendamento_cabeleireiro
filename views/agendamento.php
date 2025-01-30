<?php
require_once '../controllers/AgendamentoController.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (AgendamentoController::criarAgendamento($_SESSION['usuario_id'], $_POST['data_hora'], $_POST['servico'])) {
        echo "Agendamento realizado!";
    } else {
        echo "Erro ao agendar.";
    }
}
?>

<form method="post">
    <input type="datetime-local" name="data_hora" required>
    <select name="servico">
        <option value="Corte">Corte</option>
        <option value="Pintura">Pintura</option>
        <option value="Pintura">Barba</option>
        <option value="Pintura">Sombracelha</option>
    </select>
    <button type="submit">Agendar</button>
</form>

