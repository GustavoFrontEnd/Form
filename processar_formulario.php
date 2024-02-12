<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Conectar ao banco de dados (substitua os valores conforme necessário)
    $conexao = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }

    // Inserir dados no banco de dados
    $sql = "INSERT INTO tabela_usuarios (email) VALUES ('$email')";

    if ($conexao->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

    // Fechar a conexão
    $conexao->close();
}
?>
