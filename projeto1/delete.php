<?php
include('conecta.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deletar o usuário do banco de dados
    $sql = "DELETE FROM dev1 WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário deletado com sucesso.";
    } else {
        echo "Erro ao deletar o usuário: " . $conn->error;
    }

    // Redireciona para a página inicial
    header("Location: index.html");
}
?>
