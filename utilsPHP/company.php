<?php
require_once "./utilsPHP/database.php";

class Company {
    public function companyRegister($name, $cnpj, $street, $number, $complement, $cep, $county, $uf, $tel) {
        
        $query = "INSERT INTO empresas (nome_empresarial, cnpj, lougradouro, numero, complemento, cep, monicipio, uf, telefone) 
        VALUES ('$name', '$cnpj', '$street', '$number', '$complement', '$cep', '$county', '$uf', '$tel')";
        mysqli_query($connect, $query);
        mysqli_close($connect);
        return true;
    }
}
?>