<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/styles.css">
    <link rel="stylesheet" href="src/styles/header.css">
    <link rel="stylesheet" href="src/styles/home.css">
    <link rel="stylesheet" href="src/styles/games.css">
    <link rel="stylesheet" href="src/styles/criticas.css">
    <link rel="stylesheet" href="src/styles/pag011.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="src/javascript/script.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>CarcaCritick Among Us</title>
</head>
<body>
    <header>
    <nav id="navbar">
            <div class="logo"> <img src="src/images/logod.png"></div>
        
        <ul id="nav_list">
            
            <li class="nav-item active">
                <a href="home.php#home">Início</a>
            </li>
            
            <li class="nav-item">
                <a href="home.php#games">Jogos</a>
            </li>

            <li class="nav-item">
                <a href="home.php#critick">Criticas</a>
            </li>
            
            <li class="nav-item">
                <a href="home.php#abautus">Sobre Nós</a>
            </li>

        </ul>

        <a href=login.php class="btn-default"> 
            Fazer Login
        </a>
        

        <button id="mobile_btn">
            <i class="fa-solid fa-bars"></i>
        </button>

        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
            
                <li class="nav-item">
                    <a href="home.php#home">Início</a>
                </li>

                <li class="nav-item">
                    <a href="home.php#games">Jogos</a>
                </li>
                
                <li class="nav-item">
                    <a href="home.php#critick">Criticas</a>
                </li>
                
                <li class="nav-item">
                    <a href="home.php#abautus">Sobre Nós</a>
                </li>
    
            </ul>

            <a href="login.php" class="btn-default">
                Fazer Login 
            </a>

        </div>
        
    </header>

    <main id="content">

        <main id="cta">
            <h1 class="title">Among Us</h1>
            <p class="description">
                Among Us é um jogo multijogador online que conquistou o mundo com sua proposta simples, mas viciante. Desenvolvido pela InnerSloth, ele te coloca em uma nave espacial (ou em outros mapas) com outros jogadores, onde você precisa descobrir quem são os impostores entre a tripulação.
            <br> <br>Among Us, apesar de sua aparente simplicidade, tornou-se um fenômeno marcante na cultura gamer por diversos motivos que vão além de sua jogabilidade. Ele conquistou uma legião de fãs e deixou sua marca no mundo dos jogos.

            <br>
            </p>
            <br>
            
                <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/9pyYq9lpjls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                <!-- concertar o link do youtube -->
            
            <br>
            <h2 class="description">
                
             
                O jogo incentiva a interação social e a comunicação entre os jogadores. Seja debatendo em quem votar nas reuniões de emergência, elaborando estratégias em conjunto ou simplesmente conversando durante as partidas, Among Us promove a conexão entre as pessoas, criando laços e memórias compartilhadas.

            </h2>
            <br>
            <img src="https://s2.glbimg.com/rTIZO8Vyi5qP7HRhIEpYk4DhPbI=/940x523/e.glbimg.com/og/ed/f/original/2020/12/01/among_us.png" alt="among us" width="560" height="315">            <br>
            <p class="description">
                A atmosfera de suspense e a constante desconfiança entre os jogadores são elementos chave que tornam Among Us tão emocionante. A imprevisibilidade de cada partida, a tensão de ser um impostor tentando se disfarçar ou a busca por pistas para desvendar a identidade dos impostores, criam uma experiência viciante e cheia de adrenalina.

            </p>
            <br>
        </main>
</main>

</body>

</html>