INSERT INTO cozinheiro (nome, email, senha, faixa_preco, avaliacao, endereco, categoria) values 
("artur", "artur@email.com", "123artur", 5, 4, "minha casa mano", "italiana"),
("jullia", "jullia@email.com", "123jullia", 4, 5, "casa dela mano", "doces"),
("maria", "maria@email.com", "123maria", 2, 3, "agudo", "brigadeiro");

INSERT INTO cliente (nome, email, senha, endereco) values 
("lulu", "lulu@email.com", "123lulu", "ctism"),
("pedro", "pedro@email.com", "123pedro", "vila"),
("jonathan", "jonathan@email.com", "123jonathan", "casa do cara");

INSERT INTO prato (nome, preco, descricao, cozinheiro_id) values 
("massa", 20, "massa boa", 1),
("bolo", 15, "bolo muito bom", 2),
("brigadeiro", 10, "brigas", 3);
