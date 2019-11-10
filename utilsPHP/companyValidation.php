<?php
session_start();
require_once "./utilsPHP/company.php";

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
        
        $company = new Company;
        $register = $company -> companyRegister($name, $cnpj, $street, $number, $complement, $cep, $county, $uf, $tel);
        if($register == true) {
            echo "<div class='success-validation'><span>Empresa cadastrada com sucesso!!</span></div>";
        }
    } else {
        echo "<div class='error-validation'><span>Preencha todos os campos!!</span></div>";
    }
}
?>