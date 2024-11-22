<?php
session_start();
include "./../App/configuracao.php";
include "./../App/autoload.php";
/*
$db = new Database;
<<<<<<< HEAD

$id = 2;
$db->query("DELETE FROM posts WHERE id = :id");
=======
$db->query("SELECT * FROM posts");
foreach($db->resultados() as $post){
    echo $post->titulo .' | '. $post->texto.'<br>';
}

//consultar um valor no banco
$db->query("SELECT * FROM posts ORDER BY id DESC");
$db->resultado();
echo $db->resultado()->titulo;

//deletar informação do banco
$id = 6;
$db- >query("DELETE FROM posts WHERE id = :id");
>>>>>>> 0d483adf6356bda3c80c88613bf84608badd6b44
$db->bind(":id",$id);

$db->executa();
echo '<hr> Total Resultados: '.$db->totalResultados();

//atualizar o banco
date_default_timezone_set('America/Cuiaba');
$id = 2;
$usuarioId = 12;
$titulo = 'Titulo Editado';
$texto = 'Texto editado';
$criadoEm = date('Y-m-d H:i:s');

$db->query("UPDATE posts SET usuario_id= :usuario_id, titulo= :titulo, texto=:texto, criado_em=:criadoEm WHERE id=:id");

$db->bind(':id',$id);
$db->bind(':usuario_id',$usuarioId);
$db->bind(':titulo',$titulo);
$db->bind(':texto',$texto);
$db->bind(':criadoEm',$criadoEm);

$db->executa();
<<<<<<< HEAD
echo '<hr>Total resultados: '.$db->totalResultados(); 

/*
$usuarioId = 10;
$titulo = "3º  vespertino";
$texto = "O terceiro vespertino está conversando muito";
=======
//echo '<hr>Total resultados: '.$db->totalResultados(); 

//inserir dados no banco
$usuarioId = 8;
$titulo = "Linguagem de Programação";
$texto = "Teste de algoritmos";
>>>>>>> 0d483adf6356bda3c80c88613bf84608badd6b44

$db->query("INSERT INTO posts (usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

$db->bind(":usuario_id",$usuarioId);
$db->bind(":titulo",$titulo);
$db->bind("texto",$texto);

$db->executa();

echo '<hr>Total Resultados: '.$db->totalResuldados();
echo '<hr>Último ID: '.$db->ultimoIdInserido();

*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
</head>
<body>
    <?php
    include "../App/Views/header.php";
    $rotas = new Rota();
   // $rotas->url();
    include "../App/Views/footer.php";
    ?>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.js"></script>
    <script src="<?=URL?>/public/js/query.js"></script>
</body>
</html>