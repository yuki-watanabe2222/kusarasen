-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'user'
-- 
-- ---

DROP TABLE IF EXISTS `user`;
		
CREATE TABLE `user` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `user_email` VARCHAR(200) NOT NULL DEFAULT 'NULL',
  `user_password` VARCHAR(30) NOT NULL DEFAULT 'NULL',
  `deliver_hour` INTEGER NOT NULL DEFAULT 0,
  `alert` INTEGER NULL DEFAULT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'food'
-- 
-- ---

DROP TABLE IF EXISTS `food`;
		
CREATE TABLE `food` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `user_id` INTEGER NULL DEFAULT NULL,
  `category_id` INTEGER NULL DEFAULT NULL,
  `food_name` VARCHAR(30) NOT NULL DEFAULT 'NULL',
  `deadline` INTEGER NOT NULL DEFAULT 0,
  `alert` INTEGER NULL DEFAULT NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'category'
-- 
-- ---

DROP TABLE IF EXISTS `category`;
		
CREATE TABLE `category` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `user_id` INTEGER NULL DEFAULT NULL,
  `category_name` VARCHAR(30) NOT NULL DEFAULT 'NULL',
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys 
-- ---


-- ---
-- Table Properties
-- ---

-- ALTER TABLE `user` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `food` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `category` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `user` (`id`,`user_screen_name`,`user_password`,`user_email`,`deliver_hour`,`alert`,`created_at`,`updated_at`) VALUES
-- ('','','','','','','','');
-- INSERT INTO `food` (`id`,`user_id`,`category_id`,`food_name`,`deadline`,`alert`,`created_at`,`updated_at`) VALUES
-- ('','','','','','','','');
-- INSERT INTO `category` (`id`,`user_id`,`category_name`,`created_at`,`updated_at`) VALUES
-- ('','','','','');