<!--Biblioteca de banco de dados!-->
<?php

  session_start();

  //Variavel
  $user = "root";
  $pass = "";
  $db = "pizzaria"; //banco de dados
  $host = "localhost"; //servidor local

  //Executar uma ação ou dar um erro
  try {

    $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Habilitar os erros, se alguma coisa der errado no meio da aplicação
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  } catch (PDOException $e) {  //erro no sistema

    print "Erro: " . $e->getMessage() . "<br/>";
    die();

  }

?>