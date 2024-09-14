<?php
include('conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Atualizar usuário no banco de dados
    $sql = "UPDATE dev1 SET nome='$nome', sobrenome='$sobrenome', email='$email' telefone='$telefone', WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar o usuário: " . $conn->error;
    }

    // Redireciona para a página inicial
    header("Location: index.html");
}
?>
