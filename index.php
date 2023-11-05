<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nome"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $logradouro = $_POST["logradouro"];
    $complemento = $_POST["complemento"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Você pode realizar qualquer processamento adicional aqui, como armazenar os dados em um banco de dados

    // Exibe uma mensagem de confirmação
    echo "O formulário foi enviado com sucesso! <br>";
    echo "Nome: " . $nome . "<br>";
    echo "RG: " . $rg . "<br>";
    echo "CPF: " . $cpf . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Logradouro: " . $logradouro . "<br>";
    echo "Complemento: " . $complemento . "<br>";
    echo "Número: " . $numero . "<br>";
    echo "Bairro: " . $bairro . "<br>";
    echo "CEP: " . $cep . "<br>";
    echo "Cidade: " . $cidade . "<br>";
    echo "Estado: " . $estado . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "E-mail: " . $email . "<br>";
    
    // Lembre-se de implementar a lógica de segurança e validação de dados adequada antes de armazená-los em um banco de dados.

} else {
    // Redireciona para o formulário se o método de requisição não for POST
    header("Location: seu_formulario.html");
    exit;
}
?>
