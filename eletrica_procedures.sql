-- procedures adicionadas e funcionando
delimiter // 
 		 create procedure sp_add_servicos(arg_nomeservico varchar(60), arg_valor double(6,2))
 			 begin
 				insert into servicos (nomeservico, valor) values(arg_nomeservico, arg_valor);
 			 end //
 delimiter ;
 
delimiter //
	create procedure sp_add_funcionarios(arg_nome varchar(60), arg_endereco varchar(75), arg_cidade varchar(35),
arg_bairro varchar(35), arg_funcao varchar(45))
	begin
		insert into funcionarios (nome, endereco, cidade, bairro, funcao) values 
		(arg_nome, arg_endereco, arg_cidade, arg_bairro, arg_funcao);
	end //
delimiter ;

delimiter // 
 		 create procedure sp_add_veiculos(arg_placa varchar(9), arg_proprietario int(11), arg_modelo varchar(35), arg_ano year(4))
 			 begin
 				insert into veiculos (placa, proprietario, modelo, ano) values(arg_placa, arg_proprietario, arg_modelo, arg_ano);
 			 end //
 delimiter ;
 
delimiter //
	create procedure sp_add_entradaserv(arg_arranhoes varchar(100), arg_arranhoes_text varchar(100), arg_farois varchar(100), arg_farois_text varchar(100), arg_objetos varchar(100), arg_objetos_text varchar(100), arg_vidros varchar(100), arg_vidros_text varchar(100), arg_calibragem varchar(100), arg_calibragem_text varchar(100), arg_limpeza varchar(100), arg_limpeza_text varchar(100), arg_orcamento varchar(100), arg_descricao varchar(100), arg_valor varchar(100), arg_entrada varchar(100))
		begin
			insert into entrada_serv(arranhoes, arranhoes_text, farois, farois_text, objetos, objetos_text, vidros, vidros_text, calibragem, calibragem_text, limpeza, limpeza_text, orcamento, descricao, valor, entrada) values (arg_arranhoes, arg_arranhoes_text, arg_farois, arg_farois_text, arg_objetos, arg_objetos_text, arg_vidros, arg_vidros_text, arg_calibragem, arg_calibragem_text, arg_limpeza, arg_limpeza_text, arg_orcamento, arg_descricao, arg_valor, arg_entrada);
		end //
delimiter ;

delimiter //
	create procedure sp_all_clientes()
	begin
		select * from clientes;
	end //
delimiter ;
-- #####################################################################

delimiter //
	create procedure sp_login(arg_email varchar(50), arg_snhpwd varchar(64))
		begin
			select count(*) as existe from usuarios where nome=arg_email and senha=arg_snhpwd and ativo=1;
		end //
delimiter ;
-- criação de clientes
delimiter //
	create procedure sp_clientes(arg_nome varchar(50), arg_endereco varchar(75), 
		arg_cidade varchar(35), arg_fone1 varchar(15), arg_email varchar(50),
		arg_whatsapp boolean, arg_nascimento date, arg_bairro varchar(35), arg_cpf varchar(30))
		begin
			insert into clientes (nome, endereco, cidade, fone1, email, whatsapp, nascimento, bairro, cnpj_cpf) values (
				arg_nome, arg_endereco, arg_cidade, arg_fone1, arg_email, 
				arg_whatsapp, arg_nascimento, arg_bairro, arg_cpf);
		end //
delimiter ;
-- criação de produtos
delimiter //
	create procedure add_produtos(arg_nomeproduto varchar(60), arg_preco double(6,2),
				arg_estoque int, arg_descricao text)
		begin
			insert into produtos set nomeproduto=arg_produto, preco=arg_preco, 
				estoque=arg_estoque, descricao=arg_descicao;
		end //
delimiter ;

delimiter //
--	create procedure sp_add
delimiter ;

-- automatico via script
-- TABELA CAIXA
-- insert into caixa (dia, valor) values (@dia, @valor);
delimiter // 
 		 create procedure sp_add_caixa(arg_dia datetime, arg_valor double(6,2))
 			 begin
 				insert into caixa (dia, valor) values(arg_dia, arg_valor);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_caixa( arg_id int(11))
 			 begin
 				delete from caixa where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_caixa( arg_id int(11))
 			 begin
 				select * from caixa where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_caixa(arg_id int(11), arg_dia datetime, arg_valor double(6,2))
 			 begin
 				update caixa set dia=arg_dia, valor=arg_valor where id=arg_id;
 			 end //
 delimiter ;
 
-- TABELA CLIENTES
-- insert into clientes (nome, endereco, cidade, bairro, fone1, email, whatsapp, nascimento) values (@nome, @endereco, @cidade, @bairro, @fone1, @email, @whatsapp, @nascimento);
delimiter //
 		 create procedure sp_add_clientes(arg_nome varchar(50), arg_endereco varchar(75), arg_cidade varchar(35), arg_bairro varchar(35), arg_fone1 varchar(15), arg_email varchar(50), arg_whatsapp tinyint(1), arg_nascimento date)
 			 begin
 				insert into clientes (nome, endereco, cidade, bairro, fone1, email, whatsapp, nascimento) values(arg_nome, arg_endereco, arg_cidade, arg_bairro, arg_fone1, arg_email, arg_whatsapp, arg_nascimento);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_clientes( arg_id int(11))
 			 begin
 				delete from clientes where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_clientes( arg_id int(11))
 			 begin
 				select * from clientes where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_clientes(arg_id int(11), arg_nome varchar(50), arg_endereco varchar(75), arg_cidade varchar(35), arg_bairro varchar(35), arg_fone1 varchar(15), arg_email varchar(50), arg_whatsapp tinyint(1), arg_nascimento date)
 			 begin
 				update clientes set nome=arg_nome, endereco=arg_endereco, cidade=arg_cidade, bairro=arg_bairro, fone1=arg_fone1, email=arg_email, whatsapp=arg_whatsapp, nascimento=arg_nascimento where id=arg_id;
 			 end //
 delimiter ;
 
-- TABLE CONFIGSYSTEM
-- insert into configsystem (endereco, bairro, cep) values (@endereco, @bairro, @cep);
delimiter // 
 		 create procedure sp_add_configsystem(arg_endereco varchar(75), arg_bairro varchar(50), arg_cep varchar(10))
 			 begin
 				insert into configsystem (endereco, bairro, cep) values(arg_endereco, arg_bairro, arg_cep);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_configsystem( arg_empresa varchar(200))
 			 begin
 				delete from configsystem where empresa=arg_empresa; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_configsystem( arg_empresa varchar(200))
 			 begin
 				select * from configsystem where empresa="arg_empresa"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_configsystem(arg_empresa varchar(200), arg_endereco varchar(75), arg_bairro varchar(50), arg_cep varchar(10))
 			 begin
 				update configsystem set endereco=arg_endereco, bairro=arg_bairro, cep=arg_cep where empresa=arg_empresa;
 			 end //
 delimiter ;

-- TABLES CONTAS
-- insert into contas (nome, tipo) values (@nome, @tipo);
delimiter // 
 		 create procedure sp_add_contas(arg_nome varchar(40), arg_tipo enum('mensal','esporadica'))
 			 begin
 				insert into contas (nome, tipo) values(arg_nome, arg_tipo);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_contas( arg_id int(11))
 			 begin
 				delete from contas where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_contas( arg_id int(11))
 			 begin
 				select * from contas where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_contas(arg_id int(11), arg_nome varchar(40), arg_tipo enum('mensal','esporadica'))
 			 begin
 				update contas set nome=arg_nome, tipo=arg_tipo where id=arg_id;
 			 end //
 delimiter ;

-- TABLE ENTRADAS
insert into entradas (diaentrada, veiculo, proprietario, mecanico, recebidopor, finalizado, datafinalizado, valor) values (@diaentrada, @veiculo, @proprietario, @mecanico, @recebidopor, @finalizado, @datafinalizado, @valor);<br/>delimiter // 
 		 create procedure sp_add_entradas(arg_diaentrada datetime, arg_veiculo int(11), arg_proprietario int(11), arg_mecanico int(11), arg_recebidopor int(11), arg_finalizado tinyint(1), arg_datafinalizado date, arg_valor double(6,2))
 			 begin
 				insert into entradas (diaentrada, veiculo, proprietario, mecanico, recebidopor, finalizado, datafinalizado, valor) values(arg_diaentrada, arg_veiculo, arg_proprietario, arg_mecanico, arg_recebidopor, arg_finalizado, arg_datafinalizado, arg_valor);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_entradas( arg_id int(11))
 			 begin
 				delete from entradas where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_entradas( arg_id int(11))
 			 begin
 				select * from entradas where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_entradas(arg_id int(11), arg_diaentrada datetime, arg_veiculo int(11), arg_proprietario int(11), arg_mecanico int(11), arg_recebidopor int(11), arg_finalizado tinyint(1), arg_datafinalizado date, arg_valor double(6,2))
 			 begin
 				update entradas set diaentrada=arg_diaentrada, veiculo=arg_veiculo, proprietario=arg_proprietario, mecanico=arg_mecanico, recebidopor=arg_recebidopor, finalizado=arg_finalizado, datafinalizado=arg_datafinalizado, valor=arg_valor where id=arg_id;
 			 end //
 delimiter ;

-- TABELA MECANICOS
-- insert into mecanicos (nome, endereco, cidade, bairro) values (@nome, @endereco, @cidade, @bairro);
delimiter // 
 		 create procedure sp_add_mecanicos(arg_nome varchar(60), arg_endereco varchar(75), arg_cidade varchar(35), arg_bairro varchar(35))
 			 begin
 				insert into mecanicos (nome, endereco, cidade, bairro) values(arg_nome, arg_endereco, arg_cidade, arg_bairro);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_mecanicos( arg_id int(11))
 			 begin
 				delete from mecanicos where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_mecanicos( arg_id int(11))
 			 begin
 				select * from mecanicos where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_mecanicos(arg_id int(11), arg_nome varchar(60), arg_endereco varchar(75), arg_cidade varchar(35), arg_bairro varchar(35))
 			 begin
 				update mecanicos set nome=arg_nome, endereco=arg_endereco, cidade=arg_cidade, bairro=arg_bairro where id=arg_id;
 			 end //
 delimiter ;

-- TABELA movimento
-- insert into movimento () values ();
delimiter // 
 		 create procedure sp_add_movimento()
 			 begin
 				insert into movimento () values();
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_movimento( arg_id int(11))
 			 begin
 				delete from movimento where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_movimento( arg_id int(11))
 			 begin
 				select * from movimento where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_movimento(arg_id int(11), )
 			 begin
 				update movimento set  where id=arg_id;
 			 end //
 delimiter ;


-- movimento_caixa
insert into movimento_caixa (tipomovimento, valor, dia) values (@tipomovimento, @valor, @dia);
delimiter // 
 		 create procedure sp_add_movimento_caixa(arg_tipomovimento enum('entrada','saida'), arg_valor double(6,2), arg_dia datetime)
 			 begin
 				insert into movimento_caixa (tipomovimento, valor, dia) values(arg_tipomovimento, arg_valor, arg_dia);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_movimento_caixa( arg_id int(11))
 			 begin
 				delete from movimento_caixa where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_movimento_caixa( arg_id int(11))
 			 begin
 				select * from movimento_caixa where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_movimento_caixa(arg_id int(11), arg_tipomovimento enum('entrada','saida'), arg_valor double(6,2), arg_dia datetime)
 			 begin
 				update movimento_caixa set tipomovimento=arg_tipomovimento, valor=arg_valor, dia=arg_dia where id=arg_id;
 			 end //
 delimiter ;


-- produtos
-- insert into produtos (nomeproduto, preco, estoque, descrição) values (@nomeproduto, @preco, @estoque, @descrição);
delimiter // 
 		 create procedure sp_add_produtos(arg_nomeproduto varchar(60), arg_codprod int, arg_preco double(6,2), arg_estoque int(11), arg_descrição text)
 			 begin
 				insert into produtos (nomeproduto, codprod, preco, estoque, descrição) values(arg_nomeproduto, arg_codprod, arg_preco, arg_estoque, arg_descrição);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_produtos( arg_id int(11))
 			 begin
 				delete from produtos where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_produtos( arg_id int(11))
 			 begin
 				select * from produtos where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_produtos(arg_id int(11), arg_nomeproduto varchar(60), arg_preco double(6,2), arg_estoque int(11), arg_descrição text)
 			 begin
 				update produtos set nomeproduto=arg_nomeproduto, preco=arg_preco, estoque=arg_estoque, descrição=arg_descrição where id=arg_id;
 			 end //
 delimiter ;


-- servicos
insert into servicos (nomeservico, valor) values (@nomeservico, @valor);
delimiter // 
 		 create procedure sp_add_servicos(arg_nomeservico varchar(60), arg_valor double(6,2))
 			 begin
 				insert into servicos (nomeservico, valor) values(arg_nomeservico, arg_valor);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_servicos( arg_id int(11))
 			 begin
 				delete from servicos where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_servicos( arg_id int(11))
 			 begin
 				select * from servicos where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_servicos(arg_id int(11), arg_nomeservico varchar(60), arg_valor double(6,2))
 			 begin
 				update servicos set nomeservico=arg_nomeservico, valor=arg_valor where id=arg_id;
 			 end //
 delimiter ;


-- systemlog
insert into systemlog (acao, ocorrencia) values (@acao, @ocorrencia);
delimiter // 
 		 create procedure sp_add_systemlog(arg_acao text, arg_ocorrencia datetime)
 			 begin
 				insert into systemlog (acao, ocorrencia) values(arg_acao, arg_ocorrencia);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_systemlog( arg_id bigint(20))
 			 begin
 				delete from systemlog where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_systemlog( arg_id bigint(20))
 			 begin
 				select * from systemlog where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_systemlog(arg_id bigint(20), arg_acao text, arg_ocorrencia datetime)
 			 begin
 				update systemlog set acao=arg_acao, ocorrencia=arg_ocorrencia where id=arg_id;
 			 end //
 delimiter ;


-- usuarios
insert into usuarios (nome, senha, ativo) values (@nome, @senha, @ativo);
delimiter // 
 		 create procedure sp_add_usuarios(arg_nome varchar(30), arg_senha varchar(64), arg_ativo tinyint(1))
 			 begin
 				insert into usuarios (nome, senha, ativo) values(arg_nome, arg_senha, arg_ativo);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_usuarios( arg_id int(11))
 			 begin
 				delete from usuarios where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_usuarios( arg_id int(11))
 			 begin
 				select * from usuarios where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_usuarios(arg_id int(11), arg_nome varchar(30), arg_senha varchar(64), arg_ativo tinyint(1))
 			 begin
 				update usuarios set nome=arg_nome, senha=arg_senha, ativo=arg_ativo where id=arg_id;
 			 end //
 delimiter ;


-- veiculos
insert into veiculos (placa, proprietario, modelo, ano) values (@placa, @proprietario, @modelo, @ano);
delimiter // 
 		 create procedure sp_add_veiculos(arg_placa varchar(9), arg_proprietario int(11), arg_modelo varchar(35), arg_ano year(4))
 			 begin
 				insert into veiculos (placa, proprietario, modelo, ano) values(arg_placa, arg_proprietario, arg_modelo, arg_ano);
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_del_veiculos( arg_id int(11))
 			 begin
 				delete from veiculos where id=arg_id; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_sel_veiculos( arg_id int(11))
 			 begin
 				select * from veiculos where id="arg_id"; 
 			 end //
 delimiter ;

delimiter // 
 		 create procedure sp_up_veiculos(arg_id int(11), arg_placa varchar(9), arg_proprietario int(11), arg_modelo varchar(35), arg_ano year(4))
 			 begin
 				update veiculos set placa=arg_placa, proprietario=arg_proprietario, modelo=arg_modelo, ano=arg_ano where id=arg_id;
 			 end //
 delimiter ;
 
 delimiter //
	create procedure sp_authuser()
 delimiter ;
