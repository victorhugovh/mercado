create database MercadinhoZe;
use mercadinhoze;

create table TB_Produto(
id_Produto int not null auto_increment,
nome varchar(50)not null,
validade date not null,
data_rec date not null,
qtd_estoque int not null, 
qtd_min_estoque int not null,
preco_uni float not null,
primary key (id_Produto));

create table TB_Vendidos(
id_vendidos int not null auto_increment,
valor float not null,
quantidade int not null,
fk_produto int not null,
fk_vendas int not null,
primary key(id_vendidos),
foreign key(fk_produto) references TB_Produto (id_Produto),
foreign key(fk_vendas) references TB_Vendas (id_vendas));

create table TB_Vendas(
id_vendas int not null auto_increment,
data_Venda date not null,
valor_total float not null,
primary key (id_vendas));

select * from TB_Produto;
select * from TB_Vendidos;
select * from TB_Vendas;

-- drop table tb_vendidos --;
-- drop table tb_produto --;
-- drop table tb_vendas --;

select * from TB_Vendas order by id_vendas desc;
insert into tb_vendas (data_Venda,valor_total) values (now(),0);
insert into TB_Vendidos (valor,quantidade,fk_produto,fk_vendas) values ('8.5','3','5','2');

desc TB_Vendidos;