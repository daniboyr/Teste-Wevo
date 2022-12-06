-- Expor um conjunto de Web APIS (REST/Json) utilizando ASP .NET ou NodeJS que possibilitem a manutenção do Cadastro de Usuários,
-- com base na tabela criada no exercício. Estas APIs deverão possibilitar a Consulta, Inclusão, Atualização e Exclusão dos dados (CRUD).

CREATE DATABASE cadastro;

CREATE TABLE clientes(
	ID INT,
	Nome VARCHAR(100),
   	Email VARCHAR(100),
    	CPF INT(11),
   	Telefone INT(11),
    	Sexo VARCHAR (50),
    	DataNascimento DATE
);

-- Adicionando dados na tabela 'clientes'
SELECT * FROM clientes;
-- Selecionando todas as colunas da tabela clientes
INSERT INTO clientes(ID, Nome, Email, CPF, Telefone, Sexo, DataNascimento)
VALUES
	(1, 'Ana'	, 	'ana123@gmail.com', '123456789', '55987987889', 'Feminino', '05/02/2001' 			),
    	(2, 'Bruno'	, 	'bruno_vargas@outlook.com', '123456789', '55987987889', 'Masculino', '10/05/1978'	),
   	(3, 'Carla'	, 	'carlinha1999@gmail.com', '123123123', '987123456', 'Feminino', '11/10/1995'	),
    	(4, 'Wevo'	, 	'wevosuportes@gmail.com', '6589742351', '10598874135', 'Feminino', '2012/01/01/'	);
    
-- Atualizando dados da tabela (UPDATE)
SELECT * FROM clientes;
UPDATE clientes
SET CPF = 10841023000182
WHERE ID = 4;

-- Deletando dados das colunas
SELECT * FROM clientes;
DELETE FROM clientes
WHERE ID = 2;

-- Exclusão da tabela clientes
DROP TABLE clientes;

-- Exclusão do banco de dados
DROP DATABASE cadastro;
