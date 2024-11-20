<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/styles.css">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="src/javascript/script.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" 
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Carca Critick</title>
</head>
<body>
    
    <header>

        
        <nav id="navbar">
            <div class="logo"> <img src="src/images/logod.png"></div>
        
        <ul id="nav_list">
            
            <li class="nav-item active">
                <a href="#home">Início</a>
            </li>
            
            <li class="nav-item">
                <a href="#games">Jogos</a>
            </li>

            <li class="nav-item">
                <a href="#critick">Criticas</a>
            </li>
            
            <li class="nav-item">
                <a href="#abautus">Sobre Nós</a>
            </li>

        </ul>

        <a href=login.php class="btn-default"> 
            Fazer Login
        </a>
        
        <a href=logout.php class="btn-default"> 
            Fazer Logout
        </a>

        <button id="mobile_btn">
            <i class="fa-solid fa-bars"></i>
        </button>

        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
            
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>

                <li class="nav-item">
                    <a href="#games">Jogos</a>
                </li>
                
                <li class="nav-item">
                    <a href="#critick">Criticas</a>
                </li>
                
                <li class="nav-item">
                    <a href="#abautus">Sobre Nós</a>
                </li>
    
            </ul>

            <a href="login.php" class="btn-default">
                Fazer Login 
            </a>
        
            <a href=logout.php class="btn-default"> 
            Fazer Logout
            </a>
            
        </div>
       
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>
            <div id="shape"></div>
            <div id="cta">
                <h1 class="title">
                    A sua dose diária de games:
                    <span>notícias, reviews e muito mais.</span>
                </h1>

                <p class="description">
                    Junte-se a nós e compartilhe sua paixão pelos jogos.
                </p>

                <div id="cta_buttons">
                    <a href="critica.php" class="btn-default">
                        Fazer Critica
                    </a>

                    <a href="ranking.php" id="ranking_button">
                        <button class="btn-default">
                        <i class="fa-solid fa-trophy"></i>
                        &nbsp; 
                        </button>
                        Ver Ranking
                    </a>
                </div>

                <div class="social-media-buttons">
                    <a href="https://www.instagram.com/carcacritick/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://x.com/carcacritick?s=11">
                        <i class="fa-brands fa-x"></i>
                    </a>
                    <a href="https://www.facebook.com/share/156cqsxsep/">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>

            <div id="banner">
               <img src="src/images/imgtxt3.png">
            </div>
        </section>

        <section id="games">

            <h2 class="title2">Jogos</h2>
            <h3 class="subtitle2">Dos clássicos aos mais modernos, com um olhar CRITICK!</h3>

     
            <div class="container-pai">
            <div class="container1">
                <div class="card">
                    <img src="src/images/1.jpg" alt="valorant">
                    <div class="card-content">
                        <h2>ﾠValorantﾠﾠﾠﾠﾠﾠ</h2>
                        <p>Valorant é um jogo de tiro em primeira pessoa (FPS) multijogador gratuito, desenvolvido pela Riot Games.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag002.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>

                    </div>
                </div>
            </div>

            <div class="container2">
                <div class="card">
                    <img src="src/images/2.jpg" alt="callofduty">
                    <div class="card-content">
                        <h2>ﾠCall of Duty:ﾠﾠﾠMobile</h2>
                        <p>CODM é um dos jogos mais populares para dispositivos móveis, trazendo a emoção e a adrenalina.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag003.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                    </div>
                </div>
            </div>

            <div class="container3">
                <div class="card">
                    <img src="src/images/3.jpg" alt="needforspeed">
                    <div class="card-content">
                        <h2>ﾠNeed for Speed ﾠHeat</h2>
                        <p>NFSH é um jogo de corrida que te coloca no coração da ação, com corridas para ganhar dinheiro e reputação.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag004.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>

                    </div>
                </div>
            </div>

            <div class="container4">
                <div class="card">
                    <img src="src/images/4.jpg" alt="spiderman">
                    <div class="card-content">
                        <h2>ﾠSpider-Man: ﾠﾠﾠﾠMiles Morales</h2>
                        <p>Spider-Man: MM é um jogo que acompanha a jornada de Miles Morales como o novo Homem-Aranha de Nova York.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag005.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                    </div>
                </div>
            </div>

            <div class="container5">
                <div class="card">
                    <img src="src/images/5.jpg" alt="warface">
                    <div class="card-content">
                        <h2>ﾠWarfaceﾠﾠﾠﾠﾠﾠﾠ</h2>
                        <p>Warface é um jogo de tiro em primeira pessoa online gratuito, com foco em combates intensos em equipe.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag006.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>

                    </div>
                </div>
            </div>

            <div class="container6">
                <div class="card">
                    <img src="src/images/6.jpg" alt="freefire">
                    <div class="card-content">
                        <h2>ﾠFree fireﾠﾠﾠﾠﾠﾠﾠﾠﾠ</h2>
                        <p>Free Fire é um jogo mobile battle royale onde até 50 jogadores caem em uma ilha, e ser o último sobrevivente.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag007.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>

                    </div>
                </div>
            </div>

            <div class="container7">
                <div class="card">
                    <img src="src/images/7.jpg" alt="fortnite">
                    <div class="card-content">
                        <h2>ﾠFortniteﾠﾠﾠﾠﾠﾠﾠ</h2>
                        <p>Fortnite é um jogo online multiplataforma que oferece diversos modos de jogo.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag008.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>

                    </div>
                </div>
            </div>

            <div class="container8">
                <div class="card">
                    <img src="src/images/8.jpg" alt="minecraft">
                    <div class="card-content">
                        <h2>ﾠMinecraftﾠﾠﾠﾠﾠﾠﾠﾠﾠ</h2>
                        <p>Minecraft é um jogo sandbox de mundo aberto onde você pode construir tudo o que imaginar.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag009.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>

                    </div>
                </div>
            </div>

            <div class="container9">
                <div class="card">
                    <img src="src/images/9.jpg" alt="finalfantasyiv">
                    <div class="card-content">
                        <h2>ﾠFinal FantasyﾠﾠIVﾠﾠﾠ</h2>
                        <p>Final Fantasy IV é um RPG clássico que um cavaleiro negro embarca em uma jornada épica para salvar o mundo.</p>
                        <a href="#" class="button">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <a href="pag010.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>

                    </div>
                </div>
            </div>

            <div class="container10">
                <div class="card">
                    <img src="src/images/10.jpg" alt="Among us">
                    <div class="card-content">
                        <h2>ﾠAmong Usﾠﾠﾠﾠﾠﾠ</h2>
                        <p>Among Us é um jogo onde um grupo de tripulantes precisa completar tarefas em uma nave espacial.</p>
                        <a href="pag011.php">Veja mais <span class="material-symbols-outlined">arrow_right_alt</span></a>
                        <!--No codigo HTML a cima foi criado uma especie de link de naveção interna, para melhor experiênciado usuário-->
                    </div>
                </div>
            </div>
            </div>
    </main>
    
</section>  

<main>   
  <section id="critick">

    <img src="src/images/ff66 (1).png" id="critick_chat" alt=""><!-- Imagem da página de criticas -->

    <div id="critick_content">
    
        <h2 class="title2">Criticas e avaliações</h2>
        <h3 class="subtitle2">Com um olhar CRITICK!</h3>

<div id="feedbacks">
    <div class="feedback">
        <img src="src/images/perfil1.png" class="feedback-avatar" alt="">
        
        <div class="feedback-content">
           <p>
            Zé de ferro - 
            <span>
                <i class="fa-solid fa-star meu-icon"></i> <!-- Aqui foi utilizado um guia chamado de "meu-icon" para diferênciar um "fa-solid" dos demais -->
                <i class="fa-solid fa-star meu-icon"></i> 
            </span>
           </p>
           <p>
            Free Fire - "Cara, jogo ta muito lixo! Parei de comprar calça lá, 
            pq tava deixando de comprar na vida real, agora tenho calça na vida real rsrsrs".
           </p>
        </div>
    </div>
</div>

<div id="feedbacks">
    <div class="feedback">
        <img src="src/images/Design sem nome (11).png" class="feedback-avatar" alt="">
        
        <div class="feedback-content">
           <p>
            Lolly Pumpy - 
            <span>
                <i class="fa-solid fa-star meu-icon"></i>
                <i class="fa-solid fa-star meu-icon"></i>
                <i class="fa-solid fa-star meu-icon"></i>
                <i class="fa-solid fa-star meu-icon"></i>
                <i class="fa-solid fa-star meu-icon"></i>  
            </span>
           </p>
           <p>
            Fortnite - "A nova atualização está 10/10, o que ta quebrando é a 
            quantidade de GB a cada atualização, mas de resto jogo ótimo!".
           </p>
        </div>
    </div>
</div>

    <button class="btn-default">
        Ver mais avaliações
    </button>

    </div>
    </section>
</main>


<main>   
    <section id="abautus">
  
      <img src="src/images/Untitled design(3).png" id="logo_chat" alt="">
      <div id="critick_content">     
          <h2 class="title2">Sobre nós</h2> 
          <br>
          <br>
          <p>
            Nosso grupo formado por cinco integrantes, sendo eles: Caio, David, Ezequiel, Ingridid e Isabela, 
            os fundadores do Carca Critick. Nossa jornada começou quando decidimos desenvolver um site de avaliação de jogos com o objetivo 
            de facilitar ao usuário a busca pelo jogo ideal.
          </p>
          <br>
          <p>
          Imagine um mundo onde encontrar o jogo perfeito é fácil e divertido. Na Carca Critick, esse mundo é uma realidade. 
          Feito para te ajudar a economizar tempo e dinheiro, oferecendo reviews honestos e imparciais. Com o Carca Critick, 
          você terá acesso a um universo de informações sobre os últimos lançamentos, jogos indie e clássicos atemporais.
          </p>
      </div>
    </section>
</main>  


    <footer>
      <img src="src/images/footerhd.png" alt="">
      <div id="footer_items">
        <span id="copyright">
            &copy 2024 Carca Critick Group
        </span>
        
        <div class="social-media-buttons">
            <a href="https://www.instagram.com/carcacritick/">
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="https://x.com/carcacritick?s=11">
                <i class="fa-brands fa-x"></i>
            </a>
            <a href="https://www.facebook.com/share/156cqsxsep/">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </div>
        
      </div>
   </footer>


</body>
</html>
<!-- alt barra -->