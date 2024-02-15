<?php

//add campo de endereco depois de criar a tabela
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $data_nascimento = $_POST["data_nascimento"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];


        $sql = "INSERT INTO usuarios (nome, senha, data_nascimento, cpf, rg, telefone,endereco) VALUES ('{$nome}','{$senha}'),'{$data_nascimento}','{$cpf}','{$rg}','{$telefone}','{$endereco}')";

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
        $nome = $_POST["nome"];
        $data_nascimento = $_POST["datat_nascimento"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $telefone = $_POST["telefone"];
        break;
        $sql = "UPDATE usuarios SET
                      nome='{$nome}',
                      senha='{$senha}',
                      data_nasc ='{$data_nascimento}',
                      cpf='{$cpf}',
                      rg='{$rg}',
                      telefone='{$telefone}'
                      WHERE
                      id=".$_REQUEST["id"];



        if($resultado == true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;


    case 'excluir':

        break;
}
