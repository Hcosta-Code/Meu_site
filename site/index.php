<?php
// Configurações de hora local (Ceará)
date_default_timezone_set('America/Fortaleza');

// Simulando dados que viriam do banco de dados (ex: logs de acessos ou entregas)
$atividades = [
    ["hora" => "22:45", "status" => "Sucesso", "descricao" => "Deploy automatizado via Render executado."],
    ["hora" => "21:30", "status" => "Sucesso", "descricao" => "Conexão com o banco de dados MySQL estabelecida."],
    ["hora" => "19:15", "status" => "Aviso", "descricao" => "Tentativa de acesso não seguro (HTTPS) bloqueada."],
    ["hora" => "18:00", "status" => "Sucesso", "descricao" => "Container Apache iniciado com PHP 8.2."]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Noir | Meu Projeto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f0f11;
            color: #c5c6c7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .dashboard {
            width: 100%;
            max-width: 700px;
            background-color: #16171a;
            border: 1px solid #22252a;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
        }
        header {
            border-bottom: 1px solid #22252a;
            padding-bottom: 20px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        h1 {
            color: #4ed9ff;
            font-size: 1.5rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .time-badge {
            font-size: 0.85rem;
            color: #666;
            background-color: #0f0f11;
            padding: 6px 12px;
            border-radius: 4px;
            border: 1px solid #22252a;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        .stat-card {
            background-color: #1c1d22;
            padding: 20px;
            border-radius: 6px;
            border-left: 4px solid #4ed9ff;
        }
        .stat-card.env {
            border-left-color: #2e7d32;
        }
        .stat-card h3 {
            font-size: 0.8rem;
            text-transform: uppercase;
            color: #666;
            margin-bottom: 5px;
        }
        .stat-card p {
            font-size: 1.2rem;
            font-weight: bold;
            color: #fff;
        }
        h2 {
            font-size: 1.1rem;
            color: #fff;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .activity-list {
            list-style: none;
        }
        .activity-item {
            background-color: #1c1d22;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid transparent;
            transition: 0.2s;
        }
        .activity-item:hover {
            border-color: #22252a;
            background-color: #1f2126;
        }
        .activity-details {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .activity-desc {
            color: #e0e0e0;
            font-size: 0.95rem;
        }
        .activity-time {
            font-size: 0.8rem;
            color: #666;
        }
        .badge {
            font-size: 0.75rem;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
        }
        .badge.sucesso {
            background-color: rgba(46, 125, 50, 0.15);
            color: #81c784;
        }
        .badge.aviso {
            background-color: rgba(245, 124, 0, 0.15);
            color: #ffb74d;
        }
    </style>
</head>
<body>

    <div class="dashboard">
        <header>
            <div>
                <h1>Core_System v2.0</h1>
            </div>
            <div class="time-badge">
                🟢 Online | <?php echo date('d/m/Y'); ?>
            </div>
        </header>

        <section class="stats-grid">
            <div class="stat-card">
                <h3>Servidor Engine</h3>
                <p>Apache / PHP <?php echo phpversion(); ?></p>
            </div>
            <div class="stat-card env">
                <h3>Ambiente Atual</h3>
                <p><?php echo ($_SERVER['HTTP_HOST'] === 'localhost:8080' || $_SERVER['HTTP_HOST'] === '127.0.0.1:8080') ? 'Localhost (DEV)' : 'Render (PROD)'; ?></p>
            </div>
        </section>

        <section>
            <h2>Logs Recentes do Sistema</h2>
            <ul class="activity-list">
                <?php foreach ($atividades as $atividade): ?>
                    <li class="activity-item">
                        <div class="activity-details">
                            <span class="activity-desc"><?php echo $atividade['descricao']; ?></span>
                            <span class="activity-time">Hoje às <?php echo $atividade['hora']; ?></span>
                        </div>
                        <span class="badge <?php echo strtolower($atividade['status']) === 'sucesso' ? 'sucesso' : 'aviso'; ?>">
                            <?php echo $atividade['status']; ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>

</body>
</html>