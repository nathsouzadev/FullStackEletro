use fseletro;

create table pedidos (
	idpedidos int auto_increment,
    nome varchar(100) not null,
    endereco varchar(500) not null,
    telefone int,
    produto varchar(100),
    valor_unitario float,
    quantidade int,
    valor_total float,
    primary key(idpedidos)
    );

select * from pedidos;