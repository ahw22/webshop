-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               8.0.30 - MySQL Community Server - GPL
-- Server Betriebssystem:        Win64
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

-- Exportiere Daten aus Tabelle shop.cartitems: ~2 rows (ungefähr)
REPLACE INTO `cartitems` (`id`, `uid`, `pid`, `quantity`) VALUES
	(1, 'u_67852137a9164', 1, 2),
	(4, 'u_67852137a9164', 6, 6);

-- Exportiere Daten aus Tabelle shop.products: ~8 rows (ungefähr)
REPLACE INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES
	(1, 'Aeron', 'High end office chair.', 'chair.jpg', 1499.99),
	(2, 'Height adjustable Desk', 'Motorized height adjustable desk.', 'desk.jpg', 459.99),
	(3, 'Desklamp', 'LED Desklamp with position arm.', 'desklamp.jpg', 35.99),
	(4, 'HDMI Cable 2m', 'Male to Male HDMI cable 2m', 'hdmicable.jpg', 24.99),
	(5, 'Mini-LED Monitor UHD+ 29\'\'', 'Mini-LED Gaming Monitor with 29\'\' screen diagonal.', 'monitor.webp', 289.99),
	(6, 'Gaming Mouse Wireless', 'High-end wireless Gaming mouse with 2 thumb buttons.', 'mouse.jpg', 89.99),
	(7, 'Northern lights Deskpad', 'Large Deskpad with a stylized northern light motif. ', 'mousepad.jpg', 39.99),
	(8, 'Pre-built Gaming PC', 'Pre-built Hight-end Gaming System with an ARC Battlemage A580, Ryzen 5900x3D, 2Tb M.2 SSD', 'pc.webp', 1230.99),
	(9, '4k 60fps Webcam', '4k 60 fps Webcam with image stabilization and internal microphone.', 'webcam.jpg', 99.99),
	(10, 'Split Columnar Keyboard', 'A split columnar style Keyboard with thumbclusters and tenting functionality.', 'keyboard.webp', 459.99);

-- Exportiere Daten aus Tabelle shop.users: ~0 rows (ungefähr)
REPLACE INTO `users` (`id`, `uid`, `username`, `email`, `password_hash`, `role`) VALUES
	(1, 'u_67852137a9164', 'admin', 'admin@admin.at', '$2y$10$HqFVdehfrpLKJ7kg.dnt9O6QNU01mG3v6Ju12gXTo9TjD5h0JRwQK', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
