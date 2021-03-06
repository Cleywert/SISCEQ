create database controle_equipamento;

create table equipamento
(
	num_serie varchar(30) NOT NULL,
	tipo varchar(50) NOT NULL,
	status int DEFAULT 0,
	condicao_entrada int NOT NULL,
	marca varchar(30) NOT NULL,
	modelo varchar(30) NOT NULL,
	descricao text,
	primary key(num_serie)
);

create table emprestimo
(
	protocolo char(9),
	federacao int,
	dt_prazo date,
	descricao text,
	dt_lotacao date,
	titulo_locador char(14),
	unipto varchar(30) NOT NULL,
	responsavel varchar(30) NOT NULL,
	primary key(protocolo),
	foreign key(titulo_locador) references usuario(titulo)
	ON UPDATE cascade ON DELETE set null
);

create table equipamento_emprestado
(
	protocolo char(9) DEFAULT NULL,
	num_serie varchar(30) DEFAULT NULL,
	titulo_receptor char(14) DEFAULT NULL,
	lot_status int,
	dt_devolucao date,
	primary key(protocolo,num_serie),
	foreign key(titulo_receptor) references usuario(titulo)
	ON UPDATE cascade ON DELETE set null,
	foreign key(protocolo) references emprestimo(protocolo),
	foreign key(num_serie) references equipamento(num_serie)
);

create table definitivo_interior
(
	def_num_serie varchar(30),
	unidade varchar(30) NOT NULL,
	responsavel varchar(50) NOT NULL,
	data date NOT NULL,
	descricao text,
	titulo_locador char(14),
	primary key(def_num_serie),
	foreign key(titulo_locador) references usuario(titulo),
);

create table usuario
(
	nome varchar(30),
	titulo char(14),
	senha varchar(100),
	nivel int,
	status int,
	primary key (titulo)
);