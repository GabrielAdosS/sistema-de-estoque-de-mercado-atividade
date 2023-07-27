create database mercado;
use mercado;

create table estoquemercado(
codigoproduto int primary key auto_increment,
nomeproduto varchar(100) not null,
precocompra numeric(9,2) not null,
precovenda decimal(9,2) not null,
quantidadeproduto int not null,
datacompra date
);

create table vendamercado(
codigovenda int primary key auto_increment,
nomevenda varchar(100) not null,
datavenda date,
quantidadevenda int,
vendaestoque int,
foreign key(vendaestoque) references estoquemercado(codigoproduto)
);

create table usuario(
id int primary key auto_increment,
usuario varchar(100) not null,
senha varchar(100) not null
);


delimiter $
CREATE TRIGGER tgr_novavenda AFTER INSERT ON vendamercado
FOR EACH ROW
  BEGIN
    UPDATE estoquemercado SET 
    quantidadeproduto = quantidadeproduto - NEW.quantidadevenda
    WHERE codigoproduto = NEW.vendaestoque;
  END $
DELIMITER ;

/*insert into vendamercado (datavenda, quantidadevenda, vendaestoque) 
values('20230417', 2, 3);*/

delimiter $
    CREATE TRIGGER tgr_desfazervenda AFTER DELETE ON vendamercado
FOR EACH ROW
  BEGIN
    UPDATE estoquemercado SET 
    quantidadeproduto = quantidadeproduto + OLD.quantidadevenda
    WHERE codigoproduto = OLD.vendaestoque;
  END $
delimiter ;

 

/*drop trigger tgr_novavenda; apagando um trigger*/