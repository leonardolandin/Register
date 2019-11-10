<?php
session_start();
require_once "./utilsPHP/database.php";

if($_POST['login']) {
    $name = $_POST['companyName'];
    $cnpj = $_POST['cnpj'];
    $street = $_POST['rua'];
    $number = $_POST['numero'];
    $complement = $_POST['complemento'];
    $cep = $_POST['cep'];
    $county = $_POST['muni'];
    $uf = $_POST['uf'];
    $tel = $_POST['tel'];
    $userEmail = $_POST['emailRepresentante'];
    $userPassword = $_POST['senhaRepresentante'];
    
    if(!empty($name) and !empty($cnpj) and !empty($street) and !empty($number) and !empty($complement) and !empty($cep) 
    and !empty($county) and !empty($uf) and !empty($tel) and !empty($userEmail) and !empty($userPassword)) {
        $read = mysqli_query($connect, "SELECT * FROM empresas WHERE nome_empresarial = '$name' and cnpj = '$cnpj' and cep = '$cep'");
        if(mysqli_num_rows($read) == false) {
            $query = mysqli_query($connect, "INSERT INTO empresas (nome_empresarial, cnpj, lougradouro, numero, complemento, cep, monicipio, uf, telefone) 
            VALUES ('$name', '$cnpj', '$street', '$number', '$complement', '$cep', '$county', '$uf', '$tel')");

            if($query == true) {
                $idCompany = mysqli_query($connect, "SELECT * FROM empresas WHERE nome_empresarial = '$name' and cnpj = '$cnpj' and '$cep'");
                if($idCompany) {
                    while($result = mysqli_fetch_array($idCompany)) {
                        $id = $result["id_empresa"];
                    }
                }

                $queryPessoa = mysqli_query($connect, "INSERT INTO login (email, senha, empresa) VALUES ('$userEmail', '$userPassword', '$id')");

                if ($queryPessoa == true) {
                    echo "<div class='success-validation'><span>Empresa cadastrada com sucesso!!</span></div>";
                    mysqli_close($connect);
                }
            }
        } else {
            "<div class='error-validation'><span>Empresa já é cadastrada</span></div>";
        }
    } else {
        echo "<div class='error-validation'><span>Preencha todos os campos!!</span></div>";
    }
}
?>