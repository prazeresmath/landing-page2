<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da memória!</title>
    <link rel="stylesheet" href="src/styles/reset.css">
    <link rel="stylesheet" href="src/styles/main.css">
</head>
<body>
<a href="<?php echo site_url('projects'); ?>" class="btn btn-redirect">Ir para Projects</a>
    <div class="container">
        <h2>JOGO DA MEMÓRIA</h2>
        <div class="game"></div>
        <button class="reset" onclick="window.location.reload()">RESET GAME</button>
    </div>
    

    <script src="<?php echo base_url('scripts/jogo-memoria.js'); ?>"></script>
</body>
</html>