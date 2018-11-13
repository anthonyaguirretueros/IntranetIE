/*
 Navicat Premium Data Transfer

 Source Server         : intranet
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : intranet

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 13/11/2018 12:01:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_acceso
-- ----------------------------
DROP TABLE IF EXISTS `tb_acceso`;
CREATE TABLE `tb_acceso`  (
  `id_menu` int(11) NULL DEFAULT NULL,
  `id_perfil` int(11) NULL DEFAULT NULL,
  UNIQUE INDEX `id_menu`(`id_menu`) USING BTREE,
  UNIQUE INDEX `id_perfil`(`id_perfil`) USING BTREE,
  CONSTRAINT `tb_acceso_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tb_acceso_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_alumno
-- ----------------------------
DROP TABLE IF EXISTS `tb_alumno`;
CREATE TABLE `tb_alumno`  (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cumpleanos` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grado` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nivel` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_alumno`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_alumno
-- ----------------------------
INSERT INTO `tb_alumno` VALUES (1, 'anthony', 'aguirre ', 'diciembre', '1', 'secundaria');
INSERT INTO `tb_alumno` VALUES (2, 'ads', 'dasda', 'dsf', 'asdasd', 'SECUNDARIA');
INSERT INTO `tb_alumno` VALUES (3, 'gg', 'agg', 'diciembre', '2', 'secundaria');
INSERT INTO `tb_alumno` VALUES (4, 'anibal', 'hinostroza', 'diciembre', '1', 'PRIMARIA');
INSERT INTO `tb_alumno` VALUES (5, 'carlos', 'laban ', 'asdas', 'adasd', 'adsa');
INSERT INTO `tb_alumno` VALUES (6, 'alejandro', 'blujme', 'diceimbre', 'adsa', '12e1');
INSERT INTO `tb_alumno` VALUES (7, 'nombre', 'apellido', 'cumpleaños ', 'grado', ' nivel');

-- ----------------------------
-- Table structure for tb_curso
-- ----------------------------
DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE `tb_curso`  (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_curso`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_curso
-- ----------------------------
INSERT INTO `tb_curso` VALUES (1, 'Aritmetica');
INSERT INTO `tb_curso` VALUES (2, 'Algebra');
INSERT INTO `tb_curso` VALUES (3, 'Geometria');
INSERT INTO `tb_curso` VALUES (4, 'trigonometria');
INSERT INTO `tb_curso` VALUES (5, 'Razonamiento Matemático');
INSERT INTO `tb_curso` VALUES (6, 'Lenguaje y comunicaciòn');
INSERT INTO `tb_curso` VALUES (7, 'Razonamiento Verbal');
INSERT INTO `tb_curso` VALUES (8, 'Fisica');
INSERT INTO `tb_curso` VALUES (9, 'Quimica');

-- ----------------------------
-- Table structure for tb_login
-- ----------------------------
DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login`  (
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nombres` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apellidos` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tipo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_login
-- ----------------------------
INSERT INTO `tb_login` VALUES ('administrador', NULL, NULL, NULL, '123');
INSERT INTO `tb_login` VALUES ('profesor', NULL, NULL, NULL, '123');

-- ----------------------------
-- Table structure for tb_menu
-- ----------------------------
DROP TABLE IF EXISTS `tb_menu`;
CREATE TABLE `tb_menu`  (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_perfil
-- ----------------------------
DROP TABLE IF EXISTS `tb_perfil`;
CREATE TABLE `tb_perfil`  (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_perfil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `estado` bit(1) NULL DEFAULT NULL,
  `id_perfil` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  INDEX `id_perfil`(`id_perfil`) USING BTREE,
  CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_documentos
-- ----------------------------
DROP TABLE IF EXISTS `tbl_documentos`;
CREATE TABLE `tbl_documentos`  (
  `id_documento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcion` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `tamanio` int(10) UNSIGNED NULL DEFAULT NULL,
  `tipo` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombre_archivo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_documento`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_documentos
-- ----------------------------
INSERT INTO `tbl_documentos` VALUES (12, 'LITERATURA', '*TAREA DE LITERATURA', 14517, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '7978.docx');

SET FOREIGN_KEY_CHECKS = 1;
