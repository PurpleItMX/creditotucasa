-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-11-2018 a las 08:05:14
-- Versión del servidor: 5.6.39-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cloud_rest`
--

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'matthew', 'mateo.vazquez@purpleit.com.mx', NULL, '$2y$10$bfnR3O0jsMTYA8o.jY8y2eV02BqBB.9rvvtRt73DR3DpNXEWE/IfW', 'RXjSqDwj5KuFUjaRtXnpq96dZlINkkpKvLZ4uDAts6ZwMwZpQht4nYiJZVo9', '2018-10-23 22:31:55', '2018-10-26 02:29:36'),
(2, 'Arcadio Poblete carriles', 'arcadio.poblete@purpleit.com.mx', NULL, '$2y$10$nbPII7mec8fKPLZhxlsOSO121CO01ZZs9ghGHqTcWSp/7uQTu2CU2', 'UuT8khdUzkzVE2Of1sbnGnvMZARk4uKwwmPO5rNF9svV4lkCQSY47WJ6rTMk', '2018-10-26 00:03:51', '2018-11-08 07:24:47'),
(3, 'mario carrillo leon', 'mario.carrillo@purpleit.com.mx', NULL, '$2y$10$NBT5QBHR4/OVS/ihCEM8s.xtcb4BNb6rGVt7ZzVUh0SuUmW/qcaE2', 'wSl7DqcOD3xtURArPfO04k2szmy0q7lFLLfS1vKLIPKVBrnWA2x6levF9trE', '2018-10-26 02:43:32', '2018-11-08 07:24:38'),
(4, 'pepe carriles de poblete', 'jose.carriles@purpleit.com.mx', NULL, '$2y$10$ZUfh6eMIAISwZ/NAbl1z..aoWc.sj2ThVquyjdgjZ0zwpTfrYY/Ua', 'ZJAsrS9JYBy4kIfSvFYpSjOoGyVz8nk8v5W8CgOUz4sEPvNPLNvtxkHjJd49', '2018-10-26 03:48:17', '2018-11-08 07:34:37'),
(5, 'Renato', 'rcapiteruchoc@gmail.com', NULL, '$2y$10$BTu4nmMr0YEObWc5AdIGZeYTVU245T8nxfgKxsYInPreyLa/5T.nS', '33tDknUdXyC66b17m0sSRFyGSOCTV1cmOoAfVTiwt3FOy8kzZUB8JPSjg97N', '2018-10-30 23:36:08', '2018-11-08 07:25:02'),
(6, 'mario martinez', 'mario.martinez@purpleit.com.mx', NULL, '$2y$10$M9Wd.C44aAIxyPiwzk.f6uAMjHhL9bG1ZV2ZQsaAxnlW2uREw9gIK', 'q6RIPRReW0', '2018-11-09 06:53:38', '2018-11-09 06:53:38'),
(7, 'Mario', 'themariomarvel@gmail.com', NULL, '$2y$10$HrqqGiHIJD240scVyOrsxeu1UEdnO2kUxU34RMlPgTgkW8P.Ji4IG', 'A5Cz1a8Zek', '2018-11-09 08:50:41', '2018-11-09 08:51:00'),
(9, 'Mario Martinez', 'correo', NULL, '$2y$10$5dRy7tFVUg2dYmBNP2tiLuH1Rod19lJc.uCtKLspgDrmOjn0B4w8y', 'm3aghaue3I', '2018-11-09 09:18:55', '2018-11-09 09:18:55'),
(10, 'Mario 3', 'correo de mario 3', NULL, '$2y$10$bYv1bK4YvZDSlikVnrax4ec8jcYAqVINxNXBbP9P0hWZXOZgOY.yq', 'fKqthfdkfi', '2018-11-09 09:23:33', '2018-11-09 09:23:33'),
(11, 'usuario nuevo', 'usuarionuevo@correo', NULL, '$2y$10$pkdWew1NouGx2L0ATuIOY.v31umx/0wXoiHakdam1BQrkke24u2Ue', 'tGUXkzZcfE', '2018-11-12 21:48:20', '2018-11-12 21:48:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
