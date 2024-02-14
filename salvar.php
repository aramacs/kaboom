<?php

//add campo de endereco depois de criar a tabela
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO users (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}')";

        $resultado = $conn->query($sql);
        break;

        if($resultado == true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'editar':

        break;

    case 'excluir':

        break;
}
