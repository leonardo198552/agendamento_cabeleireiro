<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Agendamento</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" placeholder="Digite seu usuário" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>

    <div class="dashboard-container">
        <div class="card">
            <h3>Agendamentos</h3>
            <p>Veja os horários agendados para o dia</p>
            <button><i class="fas fa-calendar-alt"></i> Visualizar</button>
        </div>
        <div class="card">
            <h3>Relatórios</h3>
            <p>Veja os relatórios de desempenho</p>
            <button><i class="fas fa-chart-line"></i> Visualizar</button>
        </div>
        <div class="card">
            <h3>Configurações</h3>
            <p>Alterar configurações do sistema</p>
            <button><i class="fas fa-cogs"></i> Configurar</button>
        </div>
    </div>

    <table class="schedule-table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Serviço</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>João Silva</td>
                <td>2025-02-01</td>
                <td>10:00</td>
                <td>Corte de cabelo</td>
            </tr>
            <tr>
                <td>Maria Oliveira</td>
                <td>2025-02-01</td>
                <td>11:00</td>
                <td>Manicure</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
