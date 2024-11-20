<?php
// Verificando se o arquivo do banco de dados existe. Se não, ele é criado vazio.
if (!is_file('db/db_users.sqlite3')) {
    file_put_contents('db/db_users.sqlite3', null);
}
// Conectando ao banco de dados
$conn = new PDO('sqlite:db/db_users.sqlite3');
// Configurando os atributos da conexão
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Consulta para criar a tabela de users no banco de dados, se ela ainda não existir.
$query = "CREATE TABLE IF NOT EXISTS users(user_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, usuario TEXT, senha TEXT)";
// Executando a consulta para criar a tabela de usuários
$conn->exec($query);
// Consulta para criar a tabela critica no banco de dados, se ela ainda não existir.
$queryCritica = "CREATE TABLE IF NOT EXISTS critica(usuario TEXT NOT NULL, jogo TEXT NOT NULL, nota INTEGER NOT NULL CHECK (nota >= 1 AND nota <= 5), comentario TEXT NOT NULL, FOREIGN KEY (usuario) REFERENCES users(usuario) ON DELETE CASCADE ON UPDATE CASCADE)";
// Executando a consulta para criar a tabela de críticas
$conn->exec($queryCritica);
?>