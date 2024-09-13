-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2024 a las 06:16:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `burger`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `burger`
--

CREATE TABLE `burger` (
  `id_burger` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` double(5,2) NOT NULL,
  `img` varchar(30) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `burger`
--

INSERT INTO `burger` (`id_burger`, `nombre`, `descripcion`, `precio`, `img`, `url`) VALUES
(1, 'Hamburguesa Clásica', 'Clásica hamburguesa con una carne gruesa, bien sasonada y vegetales frescos.', 110.00, 'hamburguesa-1.jpeg', ''),
(2, 'Hamburguesa de pollo', 'Definida por una gruesa pieza de pollo, empanizada y muy jugosa.', 130.00, 'hamburguesa-2.jpeg', ''),
(3, 'Hamburguesa de lujo', 'Con un par de carnes, se define como una de las mejores opciones.', 170.00, 'hamburguesa-3.jpeg', ''),
(4, 'Hamburguesa con triple queso', 'Parmesano, gouda y americano hacen una perfecta combinación.', 140.00, 'hamburguesa-4.jpeg', ''),
(5, 'Hamburguesa con champiñones', 'Hamburguesa con los champiñones más frescos, para un extra de sabor.', 115.00, 'hamburguesa-5.jpeg', ''),
(6, 'Hamburguesa de pescado', 'Con un grueso filete de pescado, realza la frescura.', 120.00, 'hamburguesa-6.jpeg', ''),
(7, 'Hamburguesa Premium', 'La opción para los más exigentes, con los ingredientes de mejor calidad.', 200.00, 'hamburguesa-7.jpeg', ''),
(8, 'Hamburguesa Tex-Mex', 'Hamburguesa con un sazón mexicano.', 130.00, 'hamburguesa-8.jpeg', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`id_burger`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `burger`
--
ALTER TABLE `burger`
  MODIFY `id_burger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
