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
    <link rel="stylesheet" href="src/styles/pag009.css">
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
    <title>CarcaCritick Minecraft</title>
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
            <h1 class="title">Minecraft</h1>
            <p class="description">
                Minecraft é um jogo eletrônico tipo sandbox que te coloca em um mundo aberto gigante feito de blocos, onde você pode criar, explorar e sobreviver. É como um Lego digital infinito, onde a única limitação é sua imaginação!
            <br>Warface está disponível para PC, PlayStation 4, Xbox One e Nintendo Switch. Você pode baixá-lo gratuitamente nas respectivas lojas online de cada plataforma.
            <br>
            </p>
            <br>
            
                <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/MmB9b5njVbA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                <!-- concertar o link do youtube -->
            
            <br>
            <h2 class="description">
                
                <br><br>
                Minecraft Java Edition: A versão original para PC, com suporte a mods e uma comunidade ativa de criadores de conteúdo.
                Minecraft Bedrock Edition: Uma versão multiplataforma disponível para consoles, dispositivos móveis e Windows 10, com foco na jogabilidade online e na compatibilidade entre diferentes dispositivos.
                <br>
            </h2>
            <br>
            <img src="https://www.minecraft.net/content/dam/games/minecraft/key-art/Minecraft-Deluxe-PC_Featured-Image-0_570x321.jpg" alt="Personagens Call of Duty" width="560" height="315">            <br>
            <p class="description">
                Minecraft é um jogo atemporal que cativa jogadores de todas as idades por sua liberdade criativa,  possibilidades infinitas e capacidade de estimular a imaginação. É um jogo que pode ser jogado de diversas maneiras, seja construindo, explorando, sobrevivendo ou simplesmente relaxando e se divertindo com os amigos.

            </p>
            <br>
        </main>
</main>

</body>

</html>