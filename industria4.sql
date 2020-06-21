/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : industria4

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 20/06/2020 22:53:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbcategorias
-- ----------------------------
DROP TABLE IF EXISTS `tbcategorias`;
CREATE TABLE `tbcategorias`  (
  `idCategorias` int(11) NOT NULL,
  `nomeCategoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idCategorias`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbcategorias
-- ----------------------------
INSERT INTO `tbcategorias` VALUES (10, 'Gestor Executivo');
INSERT INTO `tbcategorias` VALUES (11, 'Gestor Operacional');
INSERT INTO `tbcategorias` VALUES (20, 'Confecção de artigos do vestuário e acessórios');
INSERT INTO `tbcategorias` VALUES (21, 'Fabricação de produtos alimentícios');
INSERT INTO `tbcategorias` VALUES (22, 'Fabricação de bebidas');
INSERT INTO `tbcategorias` VALUES (23, 'Fabricação de produtos têxteis');
INSERT INTO `tbcategorias` VALUES (24, 'Fabricação de produtos de madeira');
INSERT INTO `tbcategorias` VALUES (25, 'Fabricação de celulose, papel e produtos de papel');
INSERT INTO `tbcategorias` VALUES (26, 'Fabricação de produtos derivados do petróleo');
INSERT INTO `tbcategorias` VALUES (27, 'Fabricação de biocombustíveis');
INSERT INTO `tbcategorias` VALUES (28, 'Fabricação de produtos químicos');
INSERT INTO `tbcategorias` VALUES (29, 'Fabricação de produtos farmoquímicos e farmacêuticos');
INSERT INTO `tbcategorias` VALUES (30, 'Fabricação de produtos de borracha e de material plástico');
INSERT INTO `tbcategorias` VALUES (31, 'Fabricação de produtos de minerais não metálicos');
INSERT INTO `tbcategorias` VALUES (32, 'Fabricação de produtos de metal, exceto máquinas e equipamentos');
INSERT INTO `tbcategorias` VALUES (33, 'Fabricação de equipamentos de informática, produtos eletrônicos e ópticos');
INSERT INTO `tbcategorias` VALUES (34, 'Fabricação de máquinas, aparelhos e materiais elétricos');
INSERT INTO `tbcategorias` VALUES (35, 'Fabricação de máquinas, aparelhos e materiais elétricos');
INSERT INTO `tbcategorias` VALUES (36, 'Fabricação de veículos automotores, reboques e carrocerias');
INSERT INTO `tbcategorias` VALUES (37, 'Fabricação de outros equipamentos de transporte, exceto veículos automotores');
INSERT INTO `tbcategorias` VALUES (38, 'Fabricação de móveis');
INSERT INTO `tbcategorias` VALUES (39, 'Fabricação de produtos diversos');
INSERT INTO `tbcategorias` VALUES (40, 'Manutenção, reparação e instalação de máquinas e equipamentos');
INSERT INTO `tbcategorias` VALUES (41, 'Metalurgia');
INSERT INTO `tbcategorias` VALUES (50, 'Entre 101 á 499 funcionários');
INSERT INTO `tbcategorias` VALUES (51, 'Acima 500 funcionários');
INSERT INTO `tbcategorias` VALUES (60, 'Entre R$ 6 milhões a R$ 20 milhões');
INSERT INTO `tbcategorias` VALUES (61, 'Acima de R$ 20 milhões');

-- ----------------------------
-- Table structure for tbempresas
-- ----------------------------
DROP TABLE IF EXISTS `tbempresas`;
CREATE TABLE `tbempresas`  (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `emailEmpresa` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `fkgestorEmpresa` int(11) NULL DEFAULT NULL,
  `fksegEmpresa` int(11) NULL DEFAULT NULL,
  `fkqtdeFuncEmpresa` int(11) NULL DEFAULT NULL,
  `fkfatEmpresa` int(11) NULL DEFAULT NULL,
  `dtCadEmpresa` datetime(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`idEmpresa`) USING BTREE,
  INDEX `fkgestorEmpresa`(`fkgestorEmpresa`) USING BTREE,
  INDEX `fksegEmpresa`(`fksegEmpresa`) USING BTREE,
  INDEX `fkQtdeFunc`(`fkqtdeFuncEmpresa`) USING BTREE,
  INDEX `fkfatEmpresa`(`fkfatEmpresa`) USING BTREE,
  CONSTRAINT `fkQtdeFunc` FOREIGN KEY (`fkqtdeFuncEmpresa`) REFERENCES `tbcategorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkfatEmpresa` FOREIGN KEY (`fkfatEmpresa`) REFERENCES `tbcategorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkgestorEmpresa` FOREIGN KEY (`fkgestorEmpresa`) REFERENCES `tbcategorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fksegEmpresa` FOREIGN KEY (`fksegEmpresa`) REFERENCES `tbcategorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbempresas
-- ----------------------------
INSERT INTO `tbempresas` VALUES (1, 'teste', 'teste@test.com', 10, 20, 50, 60, '2020-06-20 21:25:50.000000');
INSERT INTO `tbempresas` VALUES (2, 'teste', 'teste@test.com', 10, 20, 50, 60, '2020-06-20 21:26:10.000000');
INSERT INTO `tbempresas` VALUES (3, 'teste', 'teste@test.com', 10, 20, 50, 60, '2020-06-20 21:26:15.000000');
INSERT INTO `tbempresas` VALUES (4, 'teste', 'teste@test.com', 10, 20, 50, 60, '2020-06-20 21:28:19.000000');
INSERT INTO `tbempresas` VALUES (5, 'teste', 'teste@test.com', 10, 20, 50, 60, '2020-06-20 21:28:34.000000');
INSERT INTO `tbempresas` VALUES (6, 'teste', 'teste@test.com', 10, 20, 50, 60, '2020-06-20 21:28:59.000000');
INSERT INTO `tbempresas` VALUES (7, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:29:13.000000');
INSERT INTO `tbempresas` VALUES (8, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:31:46.000000');
INSERT INTO `tbempresas` VALUES (9, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:34:00.000000');
INSERT INTO `tbempresas` VALUES (10, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:35:25.000000');
INSERT INTO `tbempresas` VALUES (11, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:37:48.000000');
INSERT INTO `tbempresas` VALUES (12, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:38:56.000000');
INSERT INTO `tbempresas` VALUES (13, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:39:11.000000');
INSERT INTO `tbempresas` VALUES (14, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:39:21.000000');
INSERT INTO `tbempresas` VALUES (15, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:41:10.000000');
INSERT INTO `tbempresas` VALUES (16, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:45:54.000000');
INSERT INTO `tbempresas` VALUES (17, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:47:54.000000');
INSERT INTO `tbempresas` VALUES (18, 'teste', 'tres@teas', 10, 20, 50, 60, '2020-06-20 21:47:54.000000');
INSERT INTO `tbempresas` VALUES (19, 'asdasd', 'asd1@asd', 10, 20, 50, 60, '2020-06-20 22:14:06.000000');
INSERT INTO `tbempresas` VALUES (20, 'asdasd', 'asd1@asd', 10, 20, 50, 60, '2020-06-20 22:18:45.000000');
INSERT INTO `tbempresas` VALUES (21, 'asdasd', 'asd1@asd', 10, 20, 50, 60, '2020-06-20 22:19:54.000000');
INSERT INTO `tbempresas` VALUES (22, 'asdasd', 'asd1@asd', 10, 20, 50, 60, '2020-06-20 22:20:55.000000');
INSERT INTO `tbempresas` VALUES (23, 'asdasd', 'asd1@asd', 10, 20, 50, 60, '2020-06-20 22:21:03.000000');
INSERT INTO `tbempresas` VALUES (24, 'asdasd', 'asd1@asd', 10, 20, 50, 60, '2020-06-20 22:21:13.000000');
INSERT INTO `tbempresas` VALUES (25, 'tesadas', '12asdas@sdas.com', 11, 20, 51, 61, '2020-06-20 22:23:53.000000');
INSERT INTO `tbempresas` VALUES (26, 'teste', 'teste2te@tesc.c', 10, 20, 50, 60, '2020-06-20 22:42:46.000000');

-- ----------------------------
-- Table structure for tbperguntas
-- ----------------------------
DROP TABLE IF EXISTS `tbperguntas`;
CREATE TABLE `tbperguntas`  (
  `idPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(85) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `etapaPergunta` int(1) NOT NULL,
  `seqPergunta` int(1) NOT NULL,
  `valorPergunta` int(3) NOT NULL,
  PRIMARY KEY (`idPergunta`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbperguntas
-- ----------------------------
INSERT INTO `tbperguntas` VALUES (1, 'Processamento de dados', 1, 1, 0);
INSERT INTO `tbperguntas` VALUES (2, 'Armazenamento de dados por documentação', 1, 2, 25);
INSERT INTO `tbperguntas` VALUES (3, 'Análise de dados por processo de monitoramento\n\n', 1, 3, 50);
INSERT INTO `tbperguntas` VALUES (4, 'Avaliação para processo de planejamento controle\n\n', 1, 4, 75);
INSERT INTO `tbperguntas` VALUES (5, 'Planejamento e controle automático do processo', 1, 5, 100);
INSERT INTO `tbperguntas` VALUES (6, 'Sem comunicação', 2, 1, 0);
INSERT INTO `tbperguntas` VALUES (7, 'Interfaces de barramento de campo', 2, 2, 25);
INSERT INTO `tbperguntas` VALUES (8, 'Industriais conectadas a ethernet', 2, 3, 50);
INSERT INTO `tbperguntas` VALUES (9, 'Máquinas com a Internet', 2, 4, 75);
INSERT INTO `tbperguntas` VALUES (10, 'Serviços WEB e máquinas com sofwares M2M', 2, 5, 100);
INSERT INTO `tbperguntas` VALUES (11, 'Nenhuma rede na produção com outras unidades de negócios', 3, 1, 0);
INSERT INTO `tbperguntas` VALUES (12, 'Troca de informações via correio e telefone', 3, 2, 25);
INSERT INTO `tbperguntas` VALUES (13, 'Portais baseados na Internet com compartilhamento de dados', 3, 3, 50);
INSERT INTO `tbperguntas` VALUES (14, 'Formatos de dados uniformes e servidores de dados inter-divisionalmente ligados', 3, 4, 75);
INSERT INTO `tbperguntas` VALUES (15, 'Soluções de TI interdivisionais e totalmente em rede', 3, 5, 100);
INSERT INTO `tbperguntas` VALUES (16, 'Troca de informações via correio e telefone', 4, 1, 0);
INSERT INTO `tbperguntas` VALUES (17, 'Servidores de dados centrais em produção', 4, 2, 25);
INSERT INTO `tbperguntas` VALUES (18, 'Portais baseados na Internet com compartilhamento de dados', 4, 3, 50);
INSERT INTO `tbperguntas` VALUES (19, 'Troca automatizada de informações\n\n', 4, 4, 75);
INSERT INTO `tbperguntas` VALUES (20, 'Fornecedores e clientes são totalmente integrados ao design do processo', 4, 5, 100);
INSERT INTO `tbperguntas` VALUES (21, 'Sistema de produção rígida e pequena proporção de peças idênticas', 5, 1, 0);
INSERT INTO `tbperguntas` VALUES (22, 'Uso de sistema de produção flexível e peças idênticas', 5, 2, 25);
INSERT INTO `tbperguntas` VALUES (23, 'Sistema de produção flexível e projetos modulares para os produtos', 5, 3, 50);
INSERT INTO `tbperguntas` VALUES (24, 'Produção flexível orientada por componentes de produtos modulares dentro da empresa', 5, 4, 75);
INSERT INTO `tbperguntas` VALUES (25, 'Produção modular orientada por componentes em redes de valor agregado', 5, 5, 100);
INSERT INTO `tbperguntas` VALUES (26, 'Nenhuma troca de informações entre usuário e máquina', 6, 1, 0);
INSERT INTO `tbperguntas` VALUES (27, 'Uso de interfaces de usuário locais', 6, 2, 25);
INSERT INTO `tbperguntas` VALUES (28, 'Monitoramento, controle de produção centralizado e descentralizado', 6, 3, 50);
INSERT INTO `tbperguntas` VALUES (29, 'Uso de interfaces móveis', 6, 4, 75);
INSERT INTO `tbperguntas` VALUES (30, 'Realidade aumentada e assistida', 6, 5, 100);

-- ----------------------------
-- Table structure for tbrespostas
-- ----------------------------
DROP TABLE IF EXISTS `tbrespostas`;
CREATE TABLE `tbrespostas`  (
  `idResposta` int(11) NOT NULL AUTO_INCREMENT,
  `fkIdPergunta1` int(11) NULL DEFAULT NULL,
  `fkIdPergunta2` int(11) NULL DEFAULT NULL,
  `fkIdPergunta3` int(11) NULL DEFAULT NULL,
  `fkIdPergunta4` int(11) NULL DEFAULT NULL,
  `fkIdPergunta5` int(11) NULL DEFAULT NULL,
  `fkIdPergunta6` int(11) NULL DEFAULT NULL,
  `fkIdEmpresa` int(11) NULL DEFAULT NULL,
  `dtResposta` timestamp(6) NOT NULL ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`idResposta`) USING BTREE,
  INDEX `fkPergunta`(`fkIdPergunta1`) USING BTREE,
  INDEX `fkEmpresa`(`fkIdEmpresa`) USING BTREE,
  CONSTRAINT `fkEmpresa` FOREIGN KEY (`fkIdEmpresa`) REFERENCES `tbempresas` (`idEmpresa`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fkPergunta` FOREIGN KEY (`fkIdPergunta1`) REFERENCES `tbperguntas` (`idPergunta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbrespostas
-- ----------------------------
INSERT INTO `tbrespostas` VALUES (1, 3, 8, 13, 18, 23, 27, 25, '2020-06-20 22:41:40.000000');
INSERT INTO `tbrespostas` VALUES (2, 2, 8, 14, 20, 21, 28, 26, '2020-06-20 22:43:11.000000');

SET FOREIGN_KEY_CHECKS = 1;
