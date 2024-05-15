<?php
if(isset($_POST['submit'])){
    include_once('conexao.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $data_nasc = $_POST['data_nasc'];
   $cidade = $_POST['cidade'];

   $result = mysqli_query($con, "INSERT INTO usuarios(nome, email, telefone, data_n, cidade) values('$nome', '$email', '$telefone', '$data_nasc', '$cidade')");
}

echo "CADASTRADO COM SUCESSO(~^-^)~"
?>