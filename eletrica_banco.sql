create database eletrica character set=utf8;

use eletrica;

create table usuarios (
id int auto_increment,
nome varchar(30),
senha varchar(64),
ativo boolean default 0,
primary key(id),
unique (nome))engine=innodb charset=utf8;

insert into usuarios (nome, senha, ativo) values ("admin", sha(md5(sha("demo"))), 1);

create table configsystem(
empresa varchar(200),
endereco varchar(75),
bairro varchar(50),
cep varchar(10),
primary key(empresa))engine=innodb charset=utf8;

create table clientes(
id int auto_increment,
nome varchar(50),
endereco varchar(75),
cidade varchar(35),
bairro varchar(35), 
fone1 varchar(15),
email varchar(50),
whatsapp boolean default 0,
nascimento date,
primary key(id))engine=innodb charset=utf8;

create table funcionarios(
id int auto_increment,
nome varchar(60),
endereco varchar(75),
cidade varchar(35),
bairro varchar(35),
funcao varchar(45),
primary key(id))engine=innodb charset=utf8;

insert into funcionarios (nome) values ("Jeferson Oliveira Almeida"), ("Joelson Oliveira Almeida"), ("Robson Oliveira Almeida"), ("João Paulo Vasques de Almeida"), ("Junior Solza Rodrigues"), ("Jeferson Solza Solza"), ("Zaqueu Silva Santos"), ("Josiane Moraes de Moraes");

create table produtos(
id int auto_increment,
nomeproduto varchar(60),
preco double(6,2),
estoque int,
descrição text,
primary key(id))engine=innodb charset=utf8;

create table servicos(
id int auto_increment,
nomeservico varchar(60),
valor double(6,2),
primary key(id))engine=innodb charset=utf8;

create table movimento(
id int auto_increment,
primary key(id))engine=innodb charset=utf8;

create table movimento_caixa(
id int auto_increment,
tipomovimento enum("entrada", "saida"),
valor double(6,2),
dia datetime,
primary key(id))engine=innodb charset=utf8;

create table caixa(
id int auto_increment,
dia datetime,
valor double(6,2),
primary key(id))engine=innodb charset=utf8;

create table veiculos(
id int auto_increment,
placa varchar(9),
proprietario int,
modelo varchar(35),
ano year,
unique(placa),
primary key(id))engine=innodb charset=utf8;

create table entradas(
id int auto_increment,
diaentrada datetime,
veiculo int,
proprietario int,
mecanico int,
recebidopor int,
finalizado boolean,
datafinalizado date,
valor  double(6,2),
primary key(id))engine=innodb charset=utf8;

create table contas(
id int auto_increment,
nome varchar(40),
tipo enum("mensal", "esporadica"),
primary key(id))engine=innodb charset=utf8;

create table systemlog(
id bigint auto_increment,
acao text,
ocorrencia datetime,
primary key(id))engine=innodb charset=utf8;

create table modulos(
id int auto_increment,
modulo varchar(35),
primary key(id))engine=innodb;

insert into modulos (modulo) values ("entrada"), ("relatorios"), ("caixa");

create table permissoes(
id int auto_increment,
usuario int,
entrada boolean default 0,
relatorios boolean default 0,
caixa boolean default 0,
foreign key(usuario) references usuarios(id),
primary key(id))engine=innodb charset=utf8;
