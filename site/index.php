<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto Local</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            text-align: center;
            border: 1px solid #333;
            max-width: 400px;
        }
        h1 {
            color: #00adb5;
            margin-bottom: 10px;
        }
        p {
            color: #999;
            font-size: 1.1em;
            line-height: 1.6;
        }
        .status {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background-color: #2e7d32;
            color: #fff;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Ambiente Online! 🚀</h1>
        <p>Se você está vendo esta página, o seu container Docker com Apache e PHP está funcionando perfeitamente fora do OneDrive.</p>
        
        <div class="status">
            <?php 
                echo "PHP Versão: " . phpversion(); 
            ?>
        </div>
    </div>

</body>
</html>