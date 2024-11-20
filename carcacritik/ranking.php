<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ranking.css">
    <link rel="stylesheet" href="src/styles/styles.css">
    <link rel="stylesheet" href="src/styles/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style> @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Ranking de Jogos</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="logo"> <img src="src/images/logod.png" alt="Logo"></div>
        
        <ul id="nav_list">
            
            <li class="nav-item active">
                <a href="home.php#home">Início</a>
            </li>
            
            <li class="nav-item">
                <a href="home.php#games">Jogos</a>
            </li>

            <li class="nav-item">
                <a href="home.php#critick">Críticas</a>
            </li>
            
            <li class="nav-item">
                <a href="home.php#aboutus">Sobre Nós</a>
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
                    <a href="home.php#critick">Críticas</a>
                </li>
                
                <li class="nav-item">
                    <a href="home.php#aboutus">Sobre Nós</a>
                </li>
    
            </ul>

            <a href="login.php" class="btn-default">
                Fazer Login 
            </a>
        
        </div>
        <h1>Top 10 Jogos</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Posição</th>
                    <th>Jogo</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a class="btn-game" href="pag009.php">Minecraft (2009)</a></td>
                    <td>5.0</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a class="btn-game" href="pag010.php">Final Fantasy IV (1991)</a></td>
                    <td>4.8</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a class="btn-game" href="pag005.php">Spider-Man: Miles Morales (2020)</a></td>
                    <td>4.6</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a class="btn-game" href="pag011.php">Among Us (2018)</a></td>
                    <td>4.4</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><a class="btn-game" href="pag002.php">Valorant (2020)</a></td>
                    <td>4.2</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><a class="btn-game" href="pag008.php">Fortnite (2017)</a></td>
                    <td>3.9</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><a class="btn-game" href="pag007.php">Free Fire (2017)</a></td>
                    <td>3.7</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><a class="btn-game" href="pag004.php">Need for Speed Heat (2019)</a></td>
                    <td>3.6</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><a class="btn-game" href="pag003.php">Call of Duty: Mobile (2019)</a></td>
                    <td>3.5</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><a class="btn-game" href="pag006.php">Warface (2013)</a></td>
                    <td>3.4</td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <p>Ranking atualizado em Novembro de 2024</p>
    </footer>
</body>
</html>