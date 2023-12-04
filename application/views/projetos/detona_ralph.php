<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Detona Ralph</title>
</head>
<body>
<a href="<?php echo site_url('projects'); ?>" class="btn btn-redirect">Ir para Projects</a>
    
    <div class="container">
        <div class="menu">
            <div class="menu-time">
                <h2 style="color: red;">Time Left</h2>
                <h2 id="time-left">0</h2>
            </div>
            <div class="menu-score">
                <h2 style="color: red;">Your Score</h2>
                <h2 id="score">0</h2>
            </div>
            <div class="menu-lives"></div>
            <img src="<?php echo base_url('assets/images/player.png'); ?>" height="60px";/>
            <h2>x3</h2>
        </div>
        <div class="panel">
            <div class="panel-row">
                <div class="square enemy" id="1"></div>
                <div class="square" id="2"></div>
                <div class="square" id="3"></div>
            </div>
            <div class="panel-row">
                <div class="square" id="4"></div>
                <div class="square" id="5"></div>
                <div class="square" id="6"></div>
            </div>
            <div class="panel-row">
                <div class="square" id="7"></div>
                <div class="square" id="8"></div>
                <div class="square" id="9"></div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('scripts/engine.js'); ?>"></script>
</body>
</html>