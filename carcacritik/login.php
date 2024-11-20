<!DOCTYPE html>
<?php
//Comeco da sessao
session_start();
?>
<html lang="pt-br">
        <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="css/style_clr.css"/>

                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="src/javascript/script.js"></script>

                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
                <style>@import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');</style>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script src="https://unpkg.com/scrollreveal"></script>

                <title>Login</title>
        </head>
<body>
        <div class="col-md-6 well">
                <h3 class="text-primary">Login e Registro</h3>
                <hr style="border-top:1px dotted #ccc;"/>
                <!-- Link para redirecionar para a pagina de inicio -->
                <a href="home.php">Inicio clique aqui...</a>
                <!-- Link para redirecionar para a pagina de login-->
                <a href="index.php">Não e um Membro ainda? se Registre aqui...</a>
                <br style="clear:both;"/><br />
                <div class="col-md-6">
                        <!-- Comeco do Formulario de Login -->
                        <form method="POST" action="login_query.php">  
                                <div class="alert alert-info">Login</div>
                                <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" name="usuario" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                        <label>Senha</label>
                                        <input type="password" name="senha" class="form-control" required="required"/>
                                </div>
                                <?php
                                        //checando se a sessao 'error' esta estabelecida. Error session se a menssagem if the 'Username' and 'Password' is not valid.
                                        if(ISSET($_SESSION['error'])){
                                ?>
                                <!-- Mostrar menssagem Login error -->
                                        <div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
                                <?php
                                        //Desconfigurando a sessao 'error' após exibir a mensagem.
                                        unset($_SESSION['error']);
                                        }
                                ?>
                                <button class="btn btn-primary btn-block" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                        </form>
                        <!-- Fim do Formulario de Login  -->
                </div>
        </div>
</body>
</html>