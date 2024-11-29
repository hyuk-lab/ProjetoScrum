<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Scrum</title>
    <link rel="stylesheet" href="../css/styles.css">

    </div>
</head>

<body>

    <div class="form-container">
        <h1>Formulário de Cadastro</h1>
        <form action="../backend/database.php" method="POST">
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" required maxlength="11">
            </div>

            <div>
                <label for="cep">CEP</label>
                <input type="text" id="cep" name="cep" required maxlength="8">
            </div>

            <div>
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" required disabled>
            </div>

            <div>
                <label for="numero">Número</label>
                <input type="number" id="numero" name="numero" required>
            </div>

            <div>
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" name="bairro" required disabled>
            </div>

            <div>
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" required disabled>
            </div>

            <div>
                <label for="estado">Estado</label>
                <input id="estado" name="estado" required disabled>
            </div>
            
            <div>
                <label for="celular">Celular</label>
                <input type="tel" id="celular" name="celular" required>
            </div>

            <div>
                <label for="sexo">Sexo</label>
                <input id="sexo" name="sexo" required>
            </div>
            
            <div>
                <label for="profissao">Profissão</label>
                <input type="text" id="profissao" name="profissao" required>
            </div>
            <button type="submit">Enviar</button>



        </form>
    </div>


</body>

</html>