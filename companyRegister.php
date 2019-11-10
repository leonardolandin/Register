<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <link rel="stylesheet" type="text/css" href="./style/company.css">
    <title>Cadastrar Empresa</title>
</head>
<body>
    <div class="company-container">
        <?php
            require_once "./utilsPHP/companyValidation.php";
        ?>
        <div class="signup">
            <div class="container-title">
                <span>Cadastrar Nova Empresa</span>
            </div>
            <form method="post">
                <div>
                    <div>
                        <label for="">Nome da Empresa: </label>
                        <input type="text" name="companyName" id="" placeholder="Digite o nome da empresa" maxlength="100">
                    </div>
                    <div>
                        <label for="">CNPJ: </label>
                        <input type="text" name="cnpj" id="" placeholder="Digite o CNPJ da empresa" maxlength="20">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Logradouro: </label>
                        <input type="text" name="rua" id="" placeholder="Digite o logradouro da empresa" maxlength="150">
                    </div>
                    <div>
                        <label for="">Numero: </label>
                        <input type="tel" name="numero" id="" placeholder="Digite o numero da empresa" maxlength="10">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Complemento: </label>
                        <input type="text" name="complemento" id="" placeholder="Digite o complemento da empresa" maxlength="50">
                    </div>
                    <div>
                        <label for="">CEP: </label>
                        <input type="tel" name="cep" id="" placeholder="Digite o CEP da empresa" maxlength="10">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Municipio: </label>
                        <input type="text" name="muni" id="" placeholder="Digite o municipio da empresa" maxlength="100">
                    </div>
                    <div>
                        <label for="">UF: </label>
                        <input type="text" name="uf" id="" placeholder="Digite o UF da empresa" maxlength="2">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Telefone: </label>
                        <input type="tel" name="tel" id="" placeholder="Digite o telefone da empresa" maxlength="80">
                    </div>
                </div>
                <div>
                    <div style="margin-top: 40px;">
                        <span style="margin-bottom: 10px; font-size: 25px; font-weight: bold;">Representante</span>
                        <label for="">E-mail: </label>
                        <input type="email" name="emailRepresentante" id="" style="margin-bottom: 10px;" placeholder="Digite o email do representante" maxlength="130">
                        <label for="">Senha: </label>
                        <input type="password" name="senhaRepresentante" id="" placeholder="Digite a senha do representante" maxlength="80">
                    </div>
                </div>
                <div class="cadastrar">
                    <input type="submit" name="login" id="Cadastrar" class="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>