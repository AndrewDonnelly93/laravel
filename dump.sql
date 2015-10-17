-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "migrations" -------------------------------
CREATE TABLE `migrations` ( 
	`migration` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
	`batch` Int( 11 ) NOT NULL
 )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "password_resets" --------------------------
CREATE TABLE `password_resets` ( 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
	`token` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
 )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
	`password` VarChar( 60 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
	`remember_token` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL, 
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00', 
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	 PRIMARY KEY ( `id` )
, 
	CONSTRAINT `users_email_unique` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- Dump data of "migrations" -------------------------------
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2014_10_12_000000_create_users_table', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2014_10_12_100000_create_password_resets_table', '1' );
-- ---------------------------------------------------------


-- Dump data of "password_resets" --------------------------
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '1', 'Andrew', 'andrey.dubovtsev@gmail.com', '$2y$10$wFwG731yAHO58X/O5SoAeezOMCSFLw48.T.YlWjQ.RTk4/alaB70S', '5aIhQpfJ9yPqpkDUwmNd2rPTj8scmb2QpWnlyP2kGYHZkuauqmtUCqmDxMrL', '2015-10-15 17:44:24', '2015-10-17 12:43:29' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '3', 'Freddy', 'jeremy@gmail.com', '$2y$10$nGlxjy8OhTsJuwuEGQEgVudiFRfjdOSwH2r0KnJPcvRWN8xObVh76', NULL, '2015-10-17 12:38:53', '2015-10-17 12:50:54' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '4', 'Brian', 'borya54@mail.ru', '$2y$10$4Dmu2fqkkCHpvX5B1YUCduMIf74fqED5Cy5BZStvU5biL1XOOnWbu', NULL, '2015-10-17 12:42:21', '2015-10-17 12:47:39' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '5', 'Chris', 'christian@yahoo.com', '$2y$10$bGobcEe1GCv76AzwRi5BqeBdpxxv.fuWaTxPMQQfCyiPV.NKfS/tW', NULL, '2015-10-17 12:43:00', '2015-10-17 12:43:00' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '6', 'Alex', 'alex92@gmail.com', '$2y$10$Eu5Hx8NptGCm1xh89k9tr.4KuaU844rLG9I932riULf2AqhoReK4a', NULL, '2015-10-17 12:44:40', '2015-10-17 12:44:40' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '7', 'Troy', 'troy73@gmail.com', '$2y$10$1ZlAfqIV04bFqJc.BGo1yeuDi7k2ho1yTal3L4h0mja3da2NOpm3W', NULL, '2015-10-17 12:45:40', '2015-10-17 12:45:40' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '8', 'Mary-Jane', 'maryj@gmail.com', '$2y$10$ZrXGgeMLx61/x1oyD/e7WOnQq8QQxnn9yaktnLBXe/a9IpsZ1ChJu', NULL, '2015-10-17 12:46:13', '2015-10-17 12:46:13' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '9', 'brainmaster', 'brian-chris@mail.ru', '$2y$10$6uy4yU5cWl62ErU54kjQIuViTXpededgi1zJH/2tTFTcu5kIpvhTm', NULL, '2015-10-17 12:46:47', '2015-10-17 12:46:47' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '10', 'Leonardo', 'kleo@claus.com', '$2y$10$Ly5Nz3Em.PU75fSC0Npr6.ErQtJ.lec.GacvzsqZqNXKln2rxVq8i', NULL, '2015-10-17 12:48:39', '2015-10-17 12:54:01' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES ( '11', 'George', 'george67@yahoo.com', '$2y$10$r6t66CSUuUe8aP7bWE4Fqe8qT0KCjJn53hMJsFPBB1oKR3G686RLK', NULL, '2015-10-17 12:55:37', '2015-10-17 12:55:37' );
-- ---------------------------------------------------------


-- CREATE INDEX "password_resets_email_index" --------------
CREATE INDEX `password_resets_email_index` USING BTREE ON `password_resets`( `email` );
-- ---------------------------------------------------------


-- CREATE INDEX "password_resets_token_index" --------------
CREATE INDEX `password_resets_token_index` USING BTREE ON `password_resets`( `token` );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


