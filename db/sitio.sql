-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2022 a las 03:14:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `imagen`) VALUES
(21, 'Carbón Vegetal', '1661377408_carbon_vegetal.jpg'),
(22, 'Café', '1661377425_Cafe.jpg'),
(23, 'Granadilla', '1661377439_granadilla.jpg'),
(24, 'Maracuya', '1661377456_maracuya.jpeg'),
(25, 'Tomate de árbol', '1661377480_tomate_de_ arbol.jpg'),
(26, 'Limón Tahiti', '1661377505_limon_tahiti.jpeg'),
(27, 'Limón mandarina', '1661377545_limon_mandarina.jpg'),
(28, 'Piña', '1661377560_piña.jpg'),
(29, 'Tamarindo', '1661377598_tamarindo.jpg'),
(30, 'Batata', '1661377608_batata.jpg'),
(31, 'Aguacate', '1661377618_aguacate.jpg'),
(32, 'Banano', '1661377677_banano.jpg'),
(33, 'Mango', '1661377699_mango.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
