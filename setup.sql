-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table booking_and_reservation_db.accounts
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middle_initial` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'admin',
  `enable2FA` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'true',
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT 'Active',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table booking_and_reservation_db.accounts: ~1 rows (approximately)
DELETE FROM `accounts`;
INSERT INTO `accounts` (`id`, `email`, `phone`, `password`, `firstname`, `middle_initial`, `lastname`, `account_no`, `address`, `profile`, `role`, `enable2FA`, `status`, `date`) VALUES
	(1, 'caballeroaldrin02@gmail.com', '099999999999', 'admin123', 'Johny Johny', 'E', 'Does What?', '576681987956493900885023', 'Lorem Ipsum Dolor sit amet', 'profile/profile_664d2e6c65a07_IwKZgSS3_400x400.jpg', 'admin', 'false', 'Active', '2024-04-23 09:24:56');

-- Dumping structure for table booking_and_reservation_db.restaurant_inventory
DROP TABLE IF EXISTS `restaurant_inventory`;
CREATE TABLE IF NOT EXISTS `restaurant_inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `max_item_qty` int DEFAULT NULL,
  `available` int DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table booking_and_reservation_db.restaurant_inventory: ~0 rows (approximately)
DELETE FROM `restaurant_inventory`;

-- Dumping structure for table booking_and_reservation_db.reviews
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `review` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `account_no` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `review_for` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table booking_and_reservation_db.reviews: ~0 rows (approximately)
DELETE FROM `reviews`;

-- Dumping structure for table booking_and_reservation_db.rooms
DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table booking_and_reservation_db.rooms: ~4 rows (approximately)
DELETE FROM `rooms`;
INSERT INTO `rooms` (`id`, `room`, `date`) VALUES
	(1, 'Teepee Kubo 1', '2024-05-21 10:46:50'),
	(2, 'Teepee Kubo 2', '2024-05-21 10:46:50'),
	(3, 'Teepee Kubo 3', '2024-05-21 10:47:14'),
	(4, 'Family Kubo', '2024-05-21 10:47:14');

-- Dumping structure for table booking_and_reservation_db.rooms_and_venues
DROP TABLE IF EXISTS `rooms_and_venues`;
CREATE TABLE IF NOT EXISTS `rooms_and_venues` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `room_venue_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `max_capacity` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table booking_and_reservation_db.rooms_and_venues: ~0 rows (approximately)
DELETE FROM `rooms_and_venues`;
INSERT INTO `rooms_and_venues` (`id`, `image`, `room_venue_type`, `status`, `max_capacity`, `price`, `date`) VALUES
	(1, 'uploads/upload_6630f7f6c6d20_W7X72.png', 'dfgdfgf', 'gfhgfhg', 546546, 546, '2024-04-30 13:53:58');

-- Dumping structure for table booking_and_reservation_db.room_inventory
DROP TABLE IF EXISTS `room_inventory`;
CREATE TABLE IF NOT EXISTS `room_inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
	`condition` VARCHAR(255) NULL DEFAULT NULL,
  `available` int DEFAULT NULL,
  `stock_out` int DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table booking_and_reservation_db.room_inventory: ~1 rows (approximately)
DELETE FROM `room_inventory`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
