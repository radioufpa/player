<!DOCTYPE html>
<html lang="pt-br">

<!-- Desenvolvido por @LucasMauess para @RadioWebUFPA -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Player — Rádio Web UFPA</title>
    <meta name="description" content="Ouça agora a Rádio Web UFPA">
    <meta name="keywords" content="ouvir rádio ufpa, rádio ufpa online, ouvir rádio ufpa online, ouvir rádio web ufpa, ouvir rádio ufpa ao vivo, rádio web ufpa, rádio ufpa ao vivo">

    <link type="text/css" rel="stylesheet" href="jquery-ui-1.11.4.min.css">
    <link type="text/css" rel="stylesheet" href="main.css">
    <link type="text/css" rel="stylesheet" href="animation.css">

    <!-- Chrome / Opera / Firefox -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#428bca">
    <link rel="icon" type="image/png" sizes="192x192" href="icon.png">

    <!-- Safari -->
    <meta name="apple-mobile-web-app-title" content="Player — Rádio Web UFPA">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="167x167" href="apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Edge / IE -->
    <meta name="application-name" content="Player — Rádio Web UFPA">
    <meta name="msapplication-TileColor" content="#428bca"/>
    <meta name="msapplication-TileImage" content="ms-tile.png"/>
    <meta name="msapplication-square70x70logo" content="ms-smalltile.png">
    <meta name="msapplication-square150x150logo" content="ms-mediumtile.png">
    <meta name="msapplication-wide310x150logo" content="ms-widetile.png">
    <meta name="msapplication-square310x310logo" content="ms-largetile.png">

    <!-- Google+ / Schema.org -->
    <meta itemprop="name" content="Player — Rádio Web UFPA">
    <meta itemprop="description" content="Ouça agora a Rádio Web UFPA">
    <meta itemprop="image" content="share.png">
    <link rel="publisher" href="https://plus.google.com/101267451866566642680"/>

    <!-- Facebook / Open Graph -->
    <meta property="fb:admins" content="283746138360443">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Player — Rádio Web UFPA">
    <meta property="og:image" content="share.png">
    <meta property="og:description" content="Ouça agora a Rádio Web UFPA">
    <meta property="og:site_name" content="Rádio Web UFPA">
    <meta property="og:locale" content="pt_BR">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@radiowebufpa">
    <meta name="twitter:title" content="Player — Rádio Web UFPA">
    <meta name="twitter:description" content="Ouça agora a Rádio Web UFPA">
    <meta property="twitter:image:src" content="share.png">

    <script src="jquery-2.2.0.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="app.js"></script>
</head>

<body>

    <header>
        <a href="/player" id="logo"></a>
    </header>

    <audio id="player" autoplay>
        <source src="http://www2.radio.ufpa.br/aovivo" type="audio/mpeg">
        Seu navegador não suporta o elemento de áudio.
    </audio>

    <div id="radio-player">

        <div id="listen">
            <h2><span>NO AR</span><?php include '../_includes/noar_horario.php' ;?></h2> <!-- Horario -->
            <h1><?php include '../_includes/noar_programa.php' ;?></h1> <!-- Programa -->
        </div>

        <div id="play-box">
            <button id="play-btn" class="play"></button>
        </div>

        <div id="vol-box">
            <div id="slider-box">
                <div id="slider"></div>
            </div>
        </div>

        <div class="buttons">
            <!-- <a href="#" id="share">Compartilhar</a>
            <a href="#" id="schedule">Programação</a> -->
            <a href="http://radio.ufpa.br/player2" id="web">Transmissão 2</a>
        </div>

        <div id="live"></div>

    </div>

    <div id="animation" class="container">
        <div class="bar1 bars"></div>
        <div class="bar2 bars"></div>
        <div class="bar3 bars"></div>
        <div class="bar4 bars"></div>
        <div class="bar5 bars"></div>
        <div class="bar6 bars"></div>
        <div class="bar7 bars"></div>
        <div class="bar8 bars"></div>
        <div class="bar9 bars"></div>
        <div class="bar10 bars"></div>
        <div class="bar11 bars"></div>
        <div class="bar12 bars"></div>
        <div class="bar13 bars"></div>
        <div class="bar14 bars"></div>
        <div class="bar15 bars"></div>
        <div class="bar16 bars"></div>
        <div class="bar17 bars"></div>
        <div class="bar18 bars"></div>
        <div class="bar19 bars"></div>
        <div class="bar20 bars"></div>
    </div>

    <script src="animation.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-63961806-1', 'auto');
        ga('send', 'pageview');
    </script>

    </body>
</html>