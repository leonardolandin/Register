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
<?php
require_once "./utilsPHP/companyValidation.php";
?>
<body>
    <div class="company-container">
        <div class="signup">
            <div class="container-title">
                <span>Cadastrar Nova Empresa</span>
            </div>
            <form method="post">
                <div>
                    <div>
                        <label for="">Nome da Empresa: </label>
                        <input type="text" name="" id="">
                    </div>
                    <div>
                        <label for="">CNPJ: </label>
                        <input type="text" name="" id="">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Logradouro: </label>
                        <input type="text" name="" id="">
                    </div>
                    <div>
                        <label for="">Numero: </label>
                        <input type="text" name="" id="">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Complemento: </label>
                        <input type="text" name="" id="">
                    </div>
                    <div>
                        <label for="">CEP: </label>
                        <input type="text" name="" id="">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Municipio: </label>
                        <input type="text" name="" id="">
                    </div>
                    <div>
                        <label for="">UF: </label>
                        <input type="text" name="" id="">
                    </div>
                </div>
                <div>
                    <div>
                        <label for="">Telefone: </label>
                        <input type="text" name="" id="">
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