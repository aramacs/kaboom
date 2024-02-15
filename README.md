## Descrição do projeto

Um gerenciador de clientes para o site do projeto kaboom. Utilizando em seu desenvolvimento PHP 7.4, MySQL e Bootstrap 5. 


### Instalação do projeto 

Para o desenvolvimento da aplicação utilizamos o Xampp que está disponível para todas as plataformas. Com isso, garantimos a integridade de setup. Utilizando os links abaixo, e possível instalar a versão compatível para a reprodução desse projeto. 

##### Linux 

<https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/7.4.33/xampp-linux-x64-7.4.33-0-installer.run/download>

##### MacOS 

<https://sourceforge.net/projects/xampp/files/XAMPP%20Mac%20OS%20X/7.4.33/xampp-osx-7.4.33-0-installer.dmg/download>

##### Windows 

<https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.33/xampp-windows-x64-7.4.33-0-VC15.zip/download>

###### Passo a Passo

Após a instalação é necessário clonar o projeto <https://github.com/carlosonrails/kaboom> dentro da pasta htdocs. Abaixo segue o caminho para realizar o clone em cada repositório. 

 - Linux
    `/opt/lampp/htdocs/`
 - MacOS 
    `/opt/lampp/htdocs/`
 - Windows 
    `C:\Xampp\htdocs`

##### Instrução para recriar db

'
CREATE DATABASE kaboomdb; 
CREATE TABLE enderecos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  rua VARCHAR(100) NOT NULL,
  numero VARCHAR(10) NOT NULL,
  cidade VARCHAR(100) NOT NULL,
  cep VARCHAR(8) NOT NULL
);

CREATE TABLE usuarios (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  data_nascimento DATE NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  rg VARCHAR(20) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  endereco_id INT,
  FOREIGN KEY (endereco_id) REFERENCES enderecos(id)
);'
Para acessar a aplicação ative o xampp e navegue até:

<http://localhost/kaboom>


