<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projeto";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Função para criar a tabela, se não existir
function criarTabela($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS aps (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        endereco VARCHAR(255) NOT NULL,
        logradouro VARCHAR(100),
        numero VARCHAR(10),
        bairro VARCHAR(100),
        cidade VARCHAR(100),
        estado VARCHAR(50),
        cep VARCHAR(20),
        celular VARCHAR(20),
        sexo VARCHAR(10),
        cpf VARCHAR(14),
        profissao VARCHAR(100)
    )";
    $conn->query($sql);
}

// Chamar a função para criar a tabela
criarTabela($conn);

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $celular = $_POST['celular'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $profissao = $_POST['profissao'];

    // Preparar a consulta SQL usando prepared statement
    $stmt = $conn->prepare("INSERT INTO aps (nome, email, endereco, logradouro, numero, bairro, cidade, estado, cep, celular, sexo, cpf, profissao)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $nome, $email, $endereco, $logradouro, $numero, $bairro, $cidade, $estado, $cep, $celular, $sexo, $cpf, $profissao);

    // Executar a consulta
    if ($stmt->execute()) {
        // Redirecionar para a página HTML após o sucesso
        header("Location: ../html/paginainicial.php");
        exit();
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    // Fechar a declaração
    $stmt->close();
}

// Fechar a conexão
$conn->close();
?>
