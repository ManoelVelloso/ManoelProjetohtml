<button?php
include('conecta.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM dev1 WHERE id=$id";
    
}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <h2>Editar Usuário</h2>

    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required><br>
        <label for="sobrenome">sobrenome:</label>
        <input type="text" name="sobrenome" value="<?php echo $usuario['sobrenome']; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br>
        <label for="telefone">telefone:</label>
        <input type="text" name="telefone" value="<?php echo $usuario['telefone']; ?>" required><br>
        <button type="submit">Atualizar Usuário</button>
        <a href="index.html"><input type="button" value="Voltar"></a>
    </form>
</body>
</html>
