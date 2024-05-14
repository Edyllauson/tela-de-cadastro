<?php
require_once('index.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = "127.0.0.1";
    $usuario = "root";
    $senha = "1404";
    $nomeBanco = "taylor";

    $conn = new mysqli($host, $usuario, $senha, $nomeBanco);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $devweb = $_POST['devweb'];
    $senioridade = $_POST['senioridade'];
    $tecnologias = implode(", ", $_POST['tecnologias']);
    $experiencia = $_POST['experiencia'];

    $sql = "INSERT INTO usuarios (nome, sobrenome, email, devweb, senioridade, tecnologias, experiencia) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nome, $sobrenome, $email, $devweb, $senioridade, $tecnologias, $experiencia);

    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
