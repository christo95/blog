/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-09-13 15:32:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for assigned_roles
-- ----------------------------
DROP TABLE IF EXISTS `assigned_roles`;
CREATE TABLE `assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of assigned_roles
-- ----------------------------
INSERT INTO `assigned_roles` VALUES ('1', '1', '1', '2018-09-11 12:48:51', '2018-09-11 12:48:53');
INSERT INTO `assigned_roles` VALUES ('2', '1', '2', '2018-09-11 12:55:17', '2018-09-11 12:55:20');
INSERT INTO `assigned_roles` VALUES ('3', '2', '2', '2018-09-11 12:58:25', '2018-09-11 12:58:27');
INSERT INTO `assigned_roles` VALUES ('4', '3', '3', '2018-09-11 12:58:34', '2018-09-11 12:58:37');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tNombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tCorreo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tTelefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tMensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('40', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('41', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('42', '2018_09_04_163757_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('43', '2018_09_04_164927_add_phone_to_messages_table', '1');
INSERT INTO `migrations` VALUES ('44', '2018_09_10_203319_create_roles_table', '1');
INSERT INTO `migrations` VALUES ('45', '2018_09_11_173532_create_assigned_roles_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tCodNombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tNombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tDescripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_tcodnombre_unique` (`tCodNombre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrador', 'Administrador del Sitio', '2018-09-11 12:44:31', '2018-09-11 12:44:34');
INSERT INTO `roles` VALUES ('2', 'cliente', 'Cliente', 'Cliente o Comprador', '2018-09-11 12:44:37', '2018-09-11 12:44:39');
INSERT INTO `roles` VALUES ('3', 'estudiante', 'Estudiante', 'Estudiante del Sitio', '2018-09-11 12:44:42', '2018-09-11 12:44:45');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Christopher Cuellar', 'desarrollo@grupoweb.com.mx', '$2y$10$KxW1FRmvkgobT.3PnHLs4O7xj/K4keEiLKMYpenltOYK7WDg2Ksrq', 'jV0BRkmuhGJXp6mQqREo0NStGN3RBv22yzyZszhnCwzwApxmy85KdHW6Nj3y', '2018-09-11 17:39:46', '2018-09-11 18:14:00');
INSERT INTO `users` VALUES ('2', 'Diego Valdovinos', 'desarrolloweb@grupoweb.com.mx', '$2y$10$UZPVlko84HYkuyJOKoLiT.XGugIqIV6VAY/7brDGDJOd8tcQqcmTO', 'CIoEahk8QH7BEHkBBTBb6lEDlLESkTCk2Hac6FWDjkdsuHd4ZTXOqjsZEW8v', '2018-09-11 17:40:28', '2018-09-11 17:40:28');
INSERT INTO `users` VALUES ('3', 'Luis Alonso', 'soporte@grupoweb.com.mx', '$2y$10$Wel3pSAiHLmT6AmuQYG75uHJdD2HPN533qEtIDs6KcG4WHvJL6F6K', 's7fiHUG7MC83oNOfDFqVGsnjzLRkWIaMP8Y1kTI5SJRo5g7SwWNwDjXzi74f', '2018-09-11 17:41:07', '2018-09-11 17:41:07');
