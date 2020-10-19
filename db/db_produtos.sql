use fseletro;

create table produtos (
	id int auto_increment,
    categoria varchar(100),
    descricao varchar(500),
    preco float,
    preco_venda float,
    imagem varchar(150),
    primary key(id)
    );

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("geladeira", "Geladeira Frost Free Brastemp Side Inverse 540 litros", "/imagens/geladeira1.jpg", 6389.00, 5019.00);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("geladeira", "Geladeira Frost Free Brastemp Branca 375 litros", "/imagens/geladeira2.jpg", 2068.00, 1910.00);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("geladeira", "Geladeira Frost Free Consul Prata 340 litros", "/imagens/geladeira2.jpg", 2199.00, 2060.00);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("fogao", "Fogão 4 Bocas Consul Inox com Mesa de Vidro", "/imagens/fogao1.jpg", 1299.00, 1129.00);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("fogao", "Fogão de Piso 4 Bocas Atlas Mon", "/imagens/fogao2.jpg", 609.00, 519.00);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("microondas", "Micro-ondas Consul 32 Litros Inox 220V", "/imagens/microondas1.jpg", 580.00, 409.88);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("microondas", "Micro-ondas 25L Espelhado Philco 220V", "/imagens/microondas2.jpg", 508.70, 464.53);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("microondas", "Forno de Microondas Electrolux 20L Branco", "/imagens/microondas3.jpg", 459.90, 436.05);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("lava_louca", "Lava-Louça Electrolux Inox com 10 Serviços, 6 Programas de Lavagem e Painel Blue Touch", "/imagens/lava1.jpg", 3599.00, 2799.00);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("lava_louca", "Lava Louça Compacta 8 Serviços Branca 127V Brastemp", "/imagens/lava2.jpg", 1970.50, 1730.61);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("lava_roupa", "Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca", "/imagens/lavaroupa1.jpg", 1699.00, 1214.10);

insert into produtos (categoria, descricao, imagem, preco, preco_venda)
values("lava_roupa", "Lavadora de Roupas Philco Inverter 12kg", "/imagens/lavaroupa2.jpg", 2399.00, 2179.90);

select * from produtos;