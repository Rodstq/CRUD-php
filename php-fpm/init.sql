use mvcdocker;

create table tb_person(
    id int not null primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null unique
);

INSERT INTO tb_person (nome, email) VALUES ('ze bila', 'zebila@gmail.com');