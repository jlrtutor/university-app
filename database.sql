-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla university.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  KEY `Índice 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla university.courses: ~2 rows (aproximadamente)
DELETE FROM `courses`;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` (`id`, `name`) VALUES
	(11, '2019/2020'),
	(12, '2018/2019');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Volcando estructura para tabla university.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `genre` enum('male','female') NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `dni` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `cp` varchar(24) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla university.students: ~3 rows (aproximadamente)
DELETE FROM `students`;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`id`, `name`, `surname`, `birthdate`, `genre`, `email`, `created_at`, `updated_at`, `deleted_at`, `dni`, `address`, `cp`, `town`, `province`, `telephone`, `delete`) VALUES
	(1, 'Juan Luis', 'Ramírez Tutor', '1975-03-29', 'male', 'juanluis.ramirez.tutor@gmail.com', '2019-02-02 18:08:24', '2019-04-06 18:53:49', NULL, '28678675K', 'Avda. de La Palmera, 5, 2º4', '41005', 'Sevilla', 'Sevilla', '667543456,653525657', 0),
	(14, 'Carlos', 'Vázquez', '1979-12-23', 'male', 'carlos.granados.v@gmail.com', '2019-02-23 22:24:42', '2019-02-25 23:17:52', NULL, '28654090K', 'Avda. de Hytasa, 132, 2ºizq', '41100', 'Sevilla', 'Sevilla', '654565182', 0),
	(16, 'Alejandra', 'García Roldán', '1979-07-28', 'female', 'alejandragroldan@gmail.com', '2019-02-25 23:52:28', NULL, NULL, '28975565K', 'Avda. de La Palmera 12', '41008', 'Sevilla', 'Sevilla', '672151029', 0);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- Volcando estructura para tabla university.students_courses
CREATE TABLE IF NOT EXISTS `students_courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL DEFAULT '0',
  `course_id` int(10) unsigned NOT NULL DEFAULT '0',
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`student_id`,`course_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla university.students_courses: ~2 rows (aproximadamente)
DELETE FROM `students_courses`;
/*!40000 ALTER TABLE `students_courses` DISABLE KEYS */;
INSERT INTO `students_courses` (`id`, `student_id`, `course_id`, `date_of_creation`, `level`) VALUES
	(14, 1, 11, '2019-02-23 19:27:11', 2),
	(7, 1, 12, '2019-02-23 13:10:28', 1),
	(17, 14, 12, '2019-02-23 22:26:09', 1),
	(18, 16, 12, '2019-02-27 08:42:50', 1);
/*!40000 ALTER TABLE `students_courses` ENABLE KEYS */;

-- Volcando estructura para tabla university.students_subjects
CREATE TABLE IF NOT EXISTS `students_subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL DEFAULT '0',
  `subject_id` int(10) unsigned NOT NULL DEFAULT '0',
  `course_id` int(10) unsigned NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `calification` decimal(10,2) unsigned DEFAULT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=607 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla university.students_subjects: ~16 rows (aproximadamente)
DELETE FROM `students_subjects`;
/*!40000 ALTER TABLE `students_subjects` DISABLE KEYS */;
INSERT INTO `students_subjects` (`id`, `student_id`, `subject_id`, `course_id`, `level`, `calification`, `date_of_creation`) VALUES
	(578, 1, 1, 7, 1, 6.90, '2019-02-25 21:58:10'),
	(579, 1, 2, 7, 1, 6.70, '2019-02-25 21:58:10'),
	(580, 1, 3, 7, 1, 9.95, '2019-02-25 21:58:10'),
	(581, 1, 4, 7, 1, 7.50, '2019-02-25 21:58:10'),
	(582, 1, 5, 7, 1, 8.40, '2019-02-25 21:58:10'),
	(583, 1, 6, 7, 1, 5.67, '2019-02-25 21:58:10'),
	(584, 1, 7, 7, 1, 7.10, '2019-02-25 21:58:10'),
	(585, 1, 8, 7, 1, 9.05, '2019-02-25 21:58:10'),
	(586, 1, 9, 7, 1, 8.45, '2019-02-25 21:58:10'),
	(587, 1, 10, 7, 1, 10.00, '2019-02-25 21:58:10'),
	(596, 14, 1, 17, 1, 4.00, '2019-02-27 08:44:56'),
	(597, 14, 2, 17, 1, 2.30, '2019-02-27 08:44:56'),
	(598, 14, 3, 17, 1, 6.00, '2019-02-27 08:44:56'),
	(599, 14, 4, 17, 1, 4.15, '2019-02-27 08:44:57'),
	(600, 14, 5, 17, 1, 6.00, '2019-02-27 08:44:57'),
	(605, 16, 1, 18, 1, 6.75, '2019-03-31 19:47:56'),
	(606, 16, 2, 18, 1, 3.00, '2019-03-31 19:47:56');
/*!40000 ALTER TABLE `students_subjects` ENABLE KEYS */;

-- Volcando estructura para tabla university.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(50) NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '0',
  `course` tinyint(1) NOT NULL DEFAULT '0',
  `semester` tinyint(1) NOT NULL DEFAULT '0',
  `credits` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla university.subjects: ~37 rows (aproximadamente)
DELETE FROM `subjects`;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` (`id`, `name`, `code`, `type`, `course`, `semester`, `credits`, `active`, `delete`) VALUES
	(1, 'Fundamentos físicos de la informática', '71011013', 'FORMACIÓN BÁSICA', 1, 1, 6, 1, 0),
	(2, 'Fundamentos matemáticos de la informática', '7101102-', 'FORMACIÓN BÁSICA', 1, 1, 6, 1, 0),
	(3, 'Fundamentos de sistemas digitales', '71901014', 'FORMACIÓN BÁSICA', 1, 1, 6, 1, 0),
	(4, 'Fundamentos de programación', '71901020', 'FORMACIÓN BÁSICA', 1, 1, 6, 1, 0),
	(5, 'Lógica y estructuras discretas', '71901037', 'FORMACIÓN BÁSICA', 1, 1, 6, 1, 0),
	(6, 'Estrategias de programación y estructuras de datos', '71901043', 'FORMACIÓN BÁSICA', 1, 2, 6, 1, 0),
	(7, 'Estadística (Ing.Informática/Ing.TI)', '7190105-', 'FORMACIÓN BÁSICA', 1, 2, 6, 1, 0),
	(8, 'Ingeniería de computadores', '71901066', 'FORMACIÓN BÁSICA', 1, 2, 6, 1, 0),
	(9, 'Programación orientada a objetos', '71901072', 'FORMACIÓN BÁSICA', 1, 2, 6, 1, 0),
	(10, 'Autómatas, gramáticas y lenguajes', '71901089', 'OBLIGATORIAS', 1, 2, 6, 1, 0),
	(11, 'Redes de computadores', '71012030', 'OBLIGATORIAS', 2, 1, 6, 1, 0),
	(12, 'Programación y estructuras de datos avanzadas', '71902019', 'OBLIGATORIAS', 2, 1, 6, 1, 0),
	(13, 'Ingeniería de computadores II', '71902025', 'OBLIGATORIAS', 2, 1, 6, 1, 0),
	(14, 'Gestión de empesas informáticas', '71902031', 'FORMACIÓN BÁSICA', 2, 1, 6, 1, 0),
	(15, 'Sistemas operativos', '71902048', 'OBLIGATORIAS', 2, 1, 6, 1, 0),
	(16, 'Ingeniería de computadores III', '71012018', 'OBLIGATORIAS', 2, 2, 6, 1, 0),
	(17, 'Teoría de los lenguajes de programación', '71012024', 'OBLIGATORIAS', 2, 2, 6, 1, 0),
	(18, 'Fundamentos de inteligencia artificial', '71902060', 'OBLIGATORIAS', 2, 2, 6, 1, 0),
	(19, 'Introducción a la ingeniería del software', '71902077', 'OBLIGATORIAS', 2, 2, 6, 1, 0),
	(20, 'Bases de datos', '71902083', 'OBLIGATORIAS', 2, 2, 6, 1, 0),
	(21, 'Bases de datos', '71902083', 'OBLIGATORIAS', 2, 2, 6, 1, 0),
	(22, 'Diseño y administración de sistemas operativos', '71013012', 'OBLIGATORIAS', 3, 1, 6, 1, 0),
	(23, 'Sistemas distribuidos', '71013029', 'OBLIGATORIAS', 3, 1, 6, 1, 0),
	(24, 'Diseño del software', '71013035', 'OBLIGATORIAS', 3, 1, 6, 1, 0),
	(25, 'Sistemas de bases de datos', '71013041', 'OBLIGATORIAS', 3, 1, 6, 1, 0),
	(26, 'Procesadores del lenguaje I', '71013130', 'OBLIGATORIAS', 3, 1, 6, 1, 0),
	(27, 'Alimentación de equipos informáticos', '68024093', 'OPTATIVAS', 3, 2, 6, 1, 0),
	(28, 'Sistemas en tiempo real (I.Informática)', '71013058', 'OBLIGATORIAS', 3, 2, 6, 1, 0),
	(29, 'Ingeniería de sistemas', '71013064', 'OPTATIVAS', 3, 2, 6, 1, 0),
	(30, 'Informática gráfica', '71013070', 'OPTATIVAS', 3, 2, 6, 1, 0),
	(31, 'Fundamentos de robótica', '71013087', 'OPTATIVAS', 3, 2, 6, 1, 0),
	(32, 'Tratamiento digital de señales', '71013101', 'OPTATIVAS', 3, 2, 6, 1, 0),
	(33, 'Procesadores del lenguaje II', '71013118', 'OBLIGATORIAS', 3, 2, 6, 1, 0),
	(34, 'Seguridad', '71013124', 'OBLIGATORIAS', 3, 2, 6, 1, 0),
	(35, 'Pruebas de software', '71013147', 'OPTATIVAS', 3, 2, 6, 1, 0),
	(36, 'Usabilidad y accesibilidad', '71023105', 'OPTATIVAS', 3, 2, 6, 1, 0),
	(37, 'Arquitecturas y protocolos TPC/IP', '71023111', 'OPTATIVAS', 3, 2, 6, 1, 0);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;

-- Volcando estructura para tabla university.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla university.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `date_of_creation`, `comments`) VALUES
	(1, 'Admin', 'University', 'root@root.com', 'vppa1glcBKnhg', '2019-02-06 21:18:15', 'Juan Luis Ramírez Tutor</br>\r\n<strong>FullStack PHP Developer</strong></br>\r\n<small>Programming since 1997</small>');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
