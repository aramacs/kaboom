
<?php

class CadastrarContr
{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;


    public function __construct($uid, $senha, $confirmarSenha, $email)
    {

        $this->$uid = uid;
        $this->$senha = senha;
        $this->$confirmarSenha = confirmarSenha;
        $this->$email = email;
    }
}
