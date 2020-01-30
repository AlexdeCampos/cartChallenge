-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jan-2020 às 04:53
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cartchallenge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `description`, `price`) VALUES
(1, '3000045587', 'Notebook Dell Inspiron 3583-u05p Pentium 4gb 500gb 15.6 Linux', 'APROVEITE AO MÁXIMO O SEU DIA COM O NOVO INSPIRON 15 3000 (3583).<br>Comprando a marca DELL você só tem vantagens! =)<br>Trabalhamos com FRETE GRÁTIS para TODO O BRASIL!<br>', 1499),
(2, '3000045588', 'Promoção! Notebook Dell Inspiron 5480 I7 16gb Hd Ssd Nvidia', 'INSPIRON 14 5000 (5480): PROJETADO PENSANDO EM VOCÊ.<br>Mais tela, menos bordas: assista a seus programas favoritos ou trabalhe em seus projetos em grande estilo com a tela de bordas finas.<br>Leveza e mobilidade: seja para se aventurar na cidade ou ao redor do mundo, o Inspiron 14 5000 tem o tamanho perfeito para você carregá-lo na bagagem de mão, na mochila ou na bolsa.<br>Beleza em qualquer ângulo: as tecnologias Dell Cinema combinadas com a tela IPS Full HD proporcionam uma experiência super', 4399),
(3, '3000045589', 'Monitor Dell Touchscreen Full Hd Led Ips 23,8 P2418ht <br>Preto', 'Produtividade ao seu alcance.<br>Trabalhe e interaja com seu conteúdo de maneira fácil e confortável com este monitorcom tampa frontal ultrafina e tela touchscreen com grande capacidade de resposta e tecnologia avançada de última geração In-Cell Touch: superfície antirreflexo que reduz os reflexos e impressões digitais. Conta com suporte articulado que alterna de um monitor de desktop padrão para uma orientação de toque com ângulo de 60° para baixo.<br>3 anos de Garantia limitada de hardware', 1639),
(4, '3000045590', 'Mochila Notebook <br>Dell Pro 15.6<br> Preta', 'A mochila Dell Pro é produzida com menor impacto ao ambiente, pois conta com a tecnologia Eco-friendly. O processo de tingimento da mochila respeita o meio ambiente, gerando 90% menos efluentes, 62% menos emissões de CO2 e usando 29% menos energia do que os processos tradicionais de tingimento.<br>Além disso, o forro de espuma EVA oferece resistência a impactos e é uma maneira leve de proteger seu notebook. Ela também é resistente à água, pois é revestida com um material feito de para-brisas rec', 169),
(5, '3000045591', 'Notebook Dell Inspiron 3583 Core I5 8gb 1tb Windows + Capa', 'Com o Inspiron 15 3000, você terá uma nova perspectiva sobre como um notebook poderá te ajudar, seja no trabalho, estudo ou entretenimento. Além de um design moderno e diferenciado, este modelo conta com uma tela de 15.6 polegadas em alta definição HD (1366 x 768) com antirreflexo, ótima para ambientes externos. Possui a 8ª Geração de Processadores Intel Core e placa gráfica integrada Intel® HD Graphics 620 para uma ótima experiência gráfica', 2799);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
