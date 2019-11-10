create database print_if; 
use print_if; 
/*Tabela de tipo de usuario*/
create table tipo_usuario(
	id_tipo integer auto_increment primary key not null, 
    nome varchar(60) not null
);	

/*Tabela de usuarios*/
create table usuario(
	id_usuario integer auto_increment primary key not null, 
    matricula varchar(60) not null, 
    senha varchar(60) not null, 
    confirmar_senha varchar(60) not null,
    data_cadastro date not null, 
    id_tipo integer,
    foreign key (id_tipo) references tipo_usuario(id_tipo)
);

/*Tabela do turno*/
create table turno(
	id_turno integer auto_increment primary key not null, 
    nome varchar(60) not null  
);

/*Tabela da turma*/
create table turma (
	id_turma integer auto_increment primary key not null, 
    nome varchar(60) not null, 
	id_turno integer, 
    foreign key (id_turno) references turno(id_turno)
);

/*Tabela tipo de atividade*/
create table tipo_atividade(
	id_tipo integer auto_increment primary key not null, 
    nome varchar(60)
);

/*Tabela status*/
create table status_impressao(
	id_status integer auto_increment primary key not null, 
    nome varchar(60)
);

/*Tabela de impressao*/
create table impressao(
	id_impressao integer auto_increment primary key not null, 
    quantidade integer not null,
    lado varchar(60), 
    id_usuario integer, 
	foreign key (id_usuario) references usuario(id_usuario), 
    id_tipo integer,
    foreign key (id_tipo) references tipo_atividade(id_tipo),
    id_status integer,
    foreign key (id_status) references status_impressao(id_status),
	data_necessita date not null,
    data_impressao date not null,
	arquivo Varbinary(Max) not null Essa parte eu fiquei com duvida 
); 

insert into turno(quantidade, lado, id_usuario, id_tipo, id_status, data_necessita, data_impressao, arquivo) 
values(10, '$lado', '$id_usuario', '$id_tipo', 'id_status','$data_necessita', '$data_impressao', '$arquivo'); 

/*Como inserir usuario 
OBS:  A senha tem que ser criptografada*/
insert into usuario(nome, email, matricula, senha, comfirmar_senha, id_tipo, data_cadastro)
values('Maria', 'maria@ifrn.edu.br', '2018109504030', '12345456', '12345456', '1', NOW()); 

insert into turno(nome) values('Vespertino'); 

insert into turma(nome, id_turno) values('Vespertino', '1');/*no lugar do 1 coloca o id_turno*/ 

insert into status_impressao(nome) values('Solicitado');

insert into tipo_atividade(nome) values('Avaliação');  


/*OBS:  A parte de sql que utiliza select ainda não fiz, estou com dificuldade, mas vai dar certo!*/

