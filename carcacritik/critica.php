<!DOCTYPE html>
<?php
//Comeco da sessao.
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

                <title>Critica</title>
        </head>
<body>

        <div class="col-md-6 well">
                <h3 class="text-primary">Critica ou Pedido</h3>
                <hr style="border-top:1px dotted #ccc;"/>
                <!-- Link para redirecionar para a pagina de inicio -->
                <a href="home.php">Inicio clique aqui...</a>
                 <!-- Link para redirecionar para a pagina de login -->
                <a href="login.php">Já e um Membro? Login aqui...</a>
                <br style="clear:both;"/><br />
                <div class="col-md-6">
                        <!-- Comeco do formulario de critica -->
                        <form method="POST" action="save_critica.php">  
                                <div class="alert alert-info">Deixe sua Critica ou pedido de jogo aqui, para fazer isso, faça um login primeiro.</div>
                                <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" name="usuario" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                        <label>Jogo</label>
                                        <input type="text" name="jogo" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                        <label>Nota(1 a 5)</label>
                                        <input type="number" name="nota" min="1" max="5" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                        <label>Comentario</label>
                                        <input type="text" name="comentario" class="form-control" required="required"/>
                                </div>
                                <?php
                                        //checando se a session 'sucesso' esta estabelecida.
                                        if(ISSET($_SESSION['sucesso'])){
                                ?>
                                <!-- Mostrar mensagem de registrado com sucesso  -->
                                <div class="alert alert-sucesso"><?php echo $_SESSION['sucesso']?></div>
                                <?php
                                        //Desconfigurando a session 'sucesso' após exibir a mensagem.
                                        unset($_SESSION['sucesso']);
                                        } 
                                ?>
                                <div class="alert alert-erro"><?php if (isset($_SESSION['erro'])) {echo "<p style='color: red;'>".$_SESSION['erro']."</p>";unset($_SESSION['erro']); // Remove a mensagem da sessão após exibir
                                }
                                ?></div>
                                <button class="btn btn-primary btn-block" name="critica"><span class="glyphicon glyphicon-save"></span> Enviar</button>
                        </form>
                        <!-- Fim do formulario de critica -->
                </div>
                <br>
                <h4>Apos ser aprovado pelos moderadores sua critica sera colocada na pagina do jogo, no caso de pedidos de novos jogos, os mais pedidos serao colocados primeiro.<h4>
        </div>
</body>
</html>