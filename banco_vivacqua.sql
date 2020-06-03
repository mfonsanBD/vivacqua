-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela vivacqua.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `idBlog` int(11) NOT NULL AUTO_INCREMENT,
  `tituloBlog` varchar(100) NOT NULL,
  `textoBlog` text NOT NULL,
  `dataBlog` datetime NOT NULL,
  `fotoBlog` varchar(36) NOT NULL,
  PRIMARY KEY (`idBlog`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.blog: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.caracteristicas
CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `idCaracteristicas` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCaracteristicas` varchar(45) NOT NULL,
  PRIMARY KEY (`idCaracteristicas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.caracteristicas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `caracteristicas` DISABLE KEYS */;
INSERT INTO `caracteristicas` (`idCaracteristicas`, `nomeCaracteristicas`) VALUES
	(1, 'Churrasqueira'),
	(2, 'Piscina');
/*!40000 ALTER TABLE `caracteristicas` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.cidade
CREATE TABLE IF NOT EXISTS `cidade` (
  `idCidade` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCidade` varchar(100) NOT NULL,
  `fotoCidade` varchar(36) NOT NULL DEFAULT 'padrao.jpg',
  `slugCidade` varchar(100) NOT NULL,
  PRIMARY KEY (`idCidade`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.cidade: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
INSERT INTO `cidade` (`idCidade`, `nomeCidade`, `fotoCidade`, `slugCidade`) VALUES
	(15, 'Armação dos Búzios', '9bf31c7ff062936a96d3c8bd1f8f2ff3.jpg', 'armacao-dos-buzios'),
	(16, 'Cabo Frio', 'c74d97b01eae257e44aa9d5bade97baf.jpg', 'cabo-frio'),
	(17, 'Arraial do Cabo', '70efdf2ec9b086079795c442636b55fb.jpg', 'arraial-do-cabo'),
	(18, 'Barra de São João', '6f4922f45568161a8cdf4ad2299f6d23.jpg', 'barra-de-sao-joao');
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idComentarios` int(11) NOT NULL AUTO_INCREMENT,
  `tituloComentarios` varchar(100) NOT NULL,
  `textoComentarios` varchar(500) NOT NULL,
  `nomeClienteComentarios` varchar(100) NOT NULL,
  `fotoClienteComentarios` varchar(36) NOT NULL,
  PRIMARY KEY (`idComentarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.comentarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.corretor
CREATE TABLE IF NOT EXISTS `corretor` (
  `idCorretor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCorretor` varchar(100) NOT NULL,
  `sexoCorretor` char(1) NOT NULL,
  `fotoCorretor` varchar(36) NOT NULL,
  `telefoneCorretor` varchar(16) NOT NULL,
  `cidadeId` int(11) NOT NULL,
  PRIMARY KEY (`idCorretor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.corretor: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `corretor` DISABLE KEYS */;
/*!40000 ALTER TABLE `corretor` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.destaque
CREATE TABLE IF NOT EXISTS `destaque` (
  `idDestaque` int(11) NOT NULL AUTO_INCREMENT,
  `propriedadeId` int(11) NOT NULL,
  PRIMARY KEY (`idDestaque`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.destaque: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `destaque` DISABLE KEYS */;
/*!40000 ALTER TABLE `destaque` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `idGaleria` int(11) NOT NULL AUTO_INCREMENT,
  `imageGaleria` varchar(36) NOT NULL,
  `nomeGaleria` varchar(100) NOT NULL,
  `propriedadeId` int(11) NOT NULL,
  PRIMARY KEY (`idGaleria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.galeria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.interesse
CREATE TABLE IF NOT EXISTS `interesse` (
  `idInteresse` int(11) NOT NULL AUTO_INCREMENT,
  `nomeInteresse` varchar(45) NOT NULL,
  PRIMARY KEY (`idInteresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.interesse: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `interesse` DISABLE KEYS */;
/*!40000 ALTER TABLE `interesse` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.pagina
CREATE TABLE IF NOT EXISTS `pagina` (
  `idPagina` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(150) NOT NULL,
  `visitas` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`idPagina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.pagina: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pagina` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagina` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.propriedade
CREATE TABLE IF NOT EXISTS `propriedade` (
  `idPropriedade` int(11) NOT NULL AUTO_INCREMENT,
  `nomePropriedade` varchar(150) NOT NULL,
  `descricaoPropriedade` text NOT NULL,
  `valorPropriedade` float NOT NULL,
  `condominio` tinyint(1) DEFAULT NULL,
  `valorCondominio` float DEFAULT NULL,
  `quartoPropriedade` int(11) NOT NULL,
  `banheiroPropriedade` int(11) NOT NULL,
  `garagemPropriedade` int(11) NOT NULL,
  `suitesPropriedade` int(11) NOT NULL,
  `areaConstruida` int(11) NOT NULL,
  `areaDoTerreno` int(11) NOT NULL,
  `interesseId` int(11) NOT NULL,
  `caracteristicasId` int(11) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `logradouroPropriedade` varchar(150) NOT NULL,
  `numeroPropriedade` int(11) NOT NULL,
  `complementoPropriedade` varchar(150) NOT NULL,
  `bairroPropriedade` varchar(150) NOT NULL,
  `cidadeId` int(11) NOT NULL,
  `estadoPropriedade` varchar(150) NOT NULL,
  `paisPropriedade` varchar(150) NOT NULL,
  `cepPropriedade` varchar(11) NOT NULL,
  `corretorId` int(11) NOT NULL,
  PRIMARY KEY (`idPropriedade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.propriedade: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `propriedade` DISABLE KEYS */;
/*!40000 ALTER TABLE `propriedade` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.servico
CREATE TABLE IF NOT EXISTS `servico` (
  `idServico` int(11) NOT NULL AUTO_INCREMENT,
  `nomeServico` varchar(100) NOT NULL,
  `fotoServico` varchar(36) NOT NULL,
  PRIMARY KEY (`idServico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.servico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;

-- Copiando estrutura para tabela vivacqua.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(100) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(32) NOT NULL,
  `fotoUsuario` varchar(36) NOT NULL,
  `hash` varchar(32) DEFAULT NULL,
  `codigo` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela vivacqua.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
