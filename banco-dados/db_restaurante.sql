-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_restaurante
CREATE DATABASE IF NOT EXISTS `db_restaurante` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_restaurante`;

-- Copiando estrutura para view db_restaurante.niveis_acessos
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `niveis_acessos` (
	`id` INT(11) NOT NULL,
	`nome` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para view db_restaurante.tb_pratos
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `tb_pratos` (
	`id` INT(11) NOT NULL,
	`codigo` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nome` VARCHAR(80) NOT NULL COLLATE 'utf8mb4_general_ci',
	`categoria` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`descricao` VARCHAR(150) NOT NULL COLLATE 'utf8mb4_general_ci',
	`preco` FLOAT(6,2) NOT NULL,
	`calorias` INT(11) NOT NULL,
	`destaque` TINYINT(4) NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para view db_restaurante.tb_reserva
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `tb_reserva` (
	`id` INT(11) NOT NULL,
	`nome` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`telefone` VARCHAR(15) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
	`data_reserva` DATETIME NOT NULL,
	`mensagem` TEXT NOT NULL COLLATE 'utf8mb4_general_ci',
	`numero_pessoas` INT(11) NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para view db_restaurante.tb_sobre
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `tb_sobre` (
	`id` INT(11) NOT NULL,
	`titulo` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`texto` LONGTEXT NOT NULL COLLATE 'utf8mb4_general_ci',
	`foto` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view db_restaurante.tb_usuarios
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `tb_usuarios` (
	`id` INT(11) NOT NULL,
	`nome` VARCHAR(220) NOT NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(520) NOT NULL COLLATE 'utf8mb4_general_ci',
	`senha` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`situacoe_id` INT(11) NOT NULL,
	`niveis_acesso_id` INT(11) NOT NULL,
	`created` DATETIME NOT NULL,
	`modified` DATETIME NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para view db_restaurante.niveis_acessos
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `niveis_acessos`;
;

-- Copiando estrutura para view db_restaurante.tb_pratos
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `tb_pratos`;
;

-- Copiando estrutura para view db_restaurante.tb_reserva
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `tb_reserva`;
;

-- Copiando estrutura para view db_restaurante.tb_sobre
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `tb_sobre`;
;

-- Copiando estrutura para view db_restaurante.tb_usuarios
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `tb_usuarios`;
;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
