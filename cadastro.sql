-- Utilizei o software XAMPP e através dele desenvolvi o banco de dados no MySQL
-- Versão do servidor: 10.4.27-MariaDB

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Banco de dados: `cadastro`

-- Estrutura da tabela `clientes`

CREATE TABLE `clientes` (
  `Id` int(999) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefone` int(12) NOT NULL,
  `CPF` int(12) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Genero` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Extraindo dados da tabela `clientes`
-- Criei uma tela de cadastro de clientes em html, fiz uma integração com php e em seguida conectei ao banco de dados, por isso já existem 17 resultados nessa extração

INSERT INTO `clientes` (`Id`, `Nome`, `Email`, `Telefone`, `CPF`, `DataNascimento`, `Genero`) VALUES
(1, 'Daniel Ruas', 'danielsruas@hotmail.com', 0, 0, '0000-00-00', 'Masculino'),
(2, 'Daniel Teste resp', 'danielsruas@hotmail.com', 2147483647, 628432183, '7198-08-05', 'mascluino'),
(3, 'Daniel Silva Ruas - Teste Final', 'danielsruas@hotmail.com', 2147483647, 2147483647, '1997-12-05', 'mascluino'),
(4, 'Daniel Silva Ruas - Teste Final', 'danielsruas@hotmail.com', 2147483647, 2147483647, '1997-12-05', 'mascluino'),
(5, 'Rosane Silva Ruas', 'rosaneruas@yahoo.com.br', 2147483647, 2147483647, '1958-07-30', 'mascluino'),
(6, 'Teste pra ver o comentario', 'hahaha123@uol.com.br', 123456, 9876, '2011-04-01', 'outro'),
(7, 'Teste pra ver o comentario', 'hahaha123@uol.com.br', 123456, 9876, '2011-04-01', 'outro'),
(8, 'Teste pra ver o comentario', 'hahaha123@uol.com.br', 123456, 9876, '2011-04-01', 'outro'),
(9, 'Teste pra ver o comentario', 'hahaha123@uol.com.br', 123456, 9876, '2011-04-01', 'outro'),
(10, 'Teste pra ver o comentario', 'hahaha123@uol.com.br', 123456, 9876, '2011-04-01', 'outro'),
(11, 'Teste pra ver o comentario', 'hahaha123@uol.com.br', 123456, 9876, '2011-04-01', 'outro'),
(14, 'Igor Castilho', 'igão1997@gmail.com', 123456789, 2145379854, '2001-01-01', 'mascluino'),
(15, 'Igor Castilho', 'igão1997@gmail.com', 123456789, 2145379854, '2001-01-01', 'mascluino'),
(16, 'Igor Castilho', 'igão1997@gmail.com', 123456789, 2145379854, '2001-01-01', 'mascluino'),
(17, 'Igor Castilho', 'igão1997@gmail.com', 123456789, 2145379854, '2001-01-01', 'mascluino');


-- Índices para tabela `clientes`

ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
