 create database emailProject CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

 create TABLE usuario(
    id_usuario int not null auto_increment,
    nome varchar(50) null,
    email varchar(50) null,
    senha varchar(50) null,
    PRIMARY KEY (id_usuario) 
 )DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

 create TABLE contatos(
    id_contatos int not null auto_increment,
    nome VARCHAR(50) not null,
    email VARCHAR(50) not null,
    PRIMARY KEY (id_contato)
 )DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
