<?php

//add campo de endereco depois de criar a tabela
require_once 'config.php';
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $data_nascimento = $_POST["data_nascimento"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco_id"];


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
        $data_nascimento = $_POST["data_nascimento"];
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

        $resultado = $conn->query($sql);



        if($resultado == true) {
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível editar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;


    case 'excluir':

        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $resultado = $conn->query($sql);

        if($resultado == true) {
            print "<script>alert('Excluido com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

        break;
}
