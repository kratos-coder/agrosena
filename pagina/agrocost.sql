-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2019 a las 18:18:56
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agrocost`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(58) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(68) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_usuario` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `nombre_usuario`, `email`, `clave`, `tipo_usuario`) VALUES
(1, 'yeimer david', 'yeimer', 'cf7754204@gmail.com', 'yeimer', 'Administra'),
(2, 'gggfgfg', 'yeimer', 'danieldelahozreales7@gmail.com', '$2y$10$cP92b.yUqqmfQA9LvHhKF.wyUxvu06PfRD8wr.sjpC.Fxhs1781gq', 'Administra'),
(3, 'david', 'david', 'ydpaez58@misena.edu.co', '$2y$10$z/fNTrW7tT7g7YKzMG8De.GGTjOGtUz/Yic9b.JnzPbv6vDrZWCpy', 'Administra'),
(4, 'yeimer', 'yeimer', 'ydpaez58@misena.edu.co', '$2y$10$.RR7PFTjaclhF1CZiIU8KOmVHSMeJ0f14qCQi6kM87AbkFpJ0mbpS', 'Aprendiz'),
(5, 'ffdfdfd', 'yeimer', 'danieldelahozreales7@gmail.com', '$2y$10$/1SxKb8SOk1WmuboQaAe3.xqcl7gRqqKymAZp3zqwRwbkkmMWXa1y', 'Administra'),
(6, 'omar', 'yeimer', 'danieldelahozreales7@gmail.com', '$2y$10$s4Ho2vm.2sLkZIKSXTubMOVdQLawG4BOCnoxYg1mD8O8vwlAY4E2W', 'Instructor'),
(7, 'hola', 'hola', 'hola@hola.com.co', '$2y$10$gx.o7DKhIFBDpnhxLk67suMuZB8a4MVgMIGdl7CLfKS0Ut.FZcEd6', 'Administra'),
(8, 'ye', 'ye', 'cf7754204@gmail.com', '$2y$10$Pv3WPBQzAxks12Cu6Gx5VuNlPxOidjIh9MzmTJXOpKvbklftyQ3Em', 'Administra'),
(9, 'ddd', 'yeimer', 'cf7754204@gmail.com', '$2y$10$V3A1IHLQdiUwH3TN6.BoNOpynMS7g3JjOL.r4Y8KwTsxiR6sfTySe', 'Administra'),
(10, 'david', 'yeimer', 'yeimer@misena.edu.co', '$2y$10$0c0rqJP6ZnCELfb10mK9VOFpahXIN2GF.3MbpCQ.RzXhl8x8fkSem', 'Instructor'),
(11, 'jose', 'jose', 'jose@jose.com', '$2y$10$VEatL1khAcN9Wj7jmdd1s.urz./Da2MugHALgo4Gabiff65Gn47E6', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
