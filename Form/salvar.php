<?php> 
$nome = htmlspecialchars($_GET['nome']);
$cpf = htmlspecialchars($_GET['cpf']);
$telefone = htmlspecialchars($_GET['telefone']);
$email = htmlspecialchars($_GET['email']);
$cep = htmlspecialchars($_GET['cep']);

$host = "localhost";
$user = "id20391011_sandero2015";
$pass = "";
$dbname = "id20391011_cliente";
$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno(). ": " .mysql_error(). "<BR>");
    //myesqli_select_db($connection,$dbname);

    $query = "INSERT INTO `cliente`(`nome`,`email`,`profissao`,`cep`,`telefone`, `cpf`) VALUES ('".$nome."' , '".$email."','".$profissao."','".$cep."','".$telefone."','".$cpf."')";

    echo $query;
    mysqli_query ($connection, $query) or die ('Erro ao Salvar');
    
    echo "</br>";

?> 
