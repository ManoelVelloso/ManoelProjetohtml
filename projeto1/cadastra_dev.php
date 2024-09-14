<?php
    require("conecta.php");

    $nome = $_POST['nome'];
    $sobrenome =  $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $devweb = $_POST['devweb'];
    #$senioridade = $_POST['senioridade'];
    #$tecnologia = $_POST['tecnologia'];
    $experiencia = $_POST['experiencia'];

    $sql = "INSERT INTO dev1 (nome, sobrenome, email, telefone, devweb, senioridade, tecnologia, experiencia)
    VALUES ('$nome', '$sobrenome', '$telefone', '$email', '$devweb', 'senioridade', 'tecnologia', '$experiencia')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>