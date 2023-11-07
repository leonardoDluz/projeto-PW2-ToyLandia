-- DROP DATABASE IF EXISTS ToyLandia;

-- create schema if not exists ToyLandia;

use ToyLandia;

create table if not exists Usuario(
idUsuario int not null auto_increment,
nome varchar(180) not null,
email varchar(100) not null,
senha varchar(100) not null,
adm boolean not null,
primary key(idUsuario)
);

create table if not exists Categoria(
idCategoria int not null auto_increment,
nomeCategoria varchar(200) not null,
primary key(idCategoria)
);

create table if not exists MeioPagamento(
idMeioPagamento int not null auto_increment,
nomeMeioPagamento varchar(100) not null,
primary key(idMeioPagamento)
);

create table if not exists Produto(
idProduto int not null auto_increment,
idCategoria int not null,
titulo varchar(255) not null,
descricao varchar(150) not null,
preco decimal(8,2) not null,
estoque int not null,
PRIMARY KEY(idProduto),
constraint fk_produto_categoria
foreign key(idCategoria)
references Categoria(idCategoria)
);

create table if not exists Pedido(
idPedido int not null auto_increment,
fechado boolean not null,
endereco varchar(255) not null,
idUsuario int not null,
idProduto int not null,
idMeioPagamento int not null,
primary key(idPedido),
constraint fk_usuario_pedido
foreign key(idUsuario)
references Usuario(idUsuario),
constraint fk_produto_pedido
foreign key(idProduto)
references Produto(idProduto),
constraint fk_meiopag_pedido
foreign key(idMeioPagamento)
references MeioPagamento(idMeioPagamento)
);