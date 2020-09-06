-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-02-2019 a las 21:00:26
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbpelis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `idactor` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`idactor`, `nombres`) VALUES
(4, 'ADAM SANDLER'),
(1, 'EUGENIO DERBEZ'),
(3, 'JIM CARREY'),
(2, 'LA ROCA'),
(5, 'ROBIN WILLIAMS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`) VALUES
(1, 'DORAMAS'),
(2, 'PELÍCULAS'),
(3, 'SERIES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `idpelicula` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `genero` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `frase` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(800) COLLATE latin1_spanish_ci NOT NULL,
  `route_img` varchar(80) COLLATE latin1_spanish_ci NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idcategoria` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idpelicula`, `nombre`, `genero`, `frase`, `descripcion`, `route_img`, `fecharegistro`, `idcategoria`) VALUES
(1, 'BUSCANDO A NEMO', 'ANIMADO', 'La increíble historia de un pescadito', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'nature.jpg', '2018-10-29 02:39:47', 1),
(2, 'ALPHA', 'AVENTURA', 'La increíble historia sobre el primer amigo del hombre', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'alpha.jpg', '2018-10-29 02:39:47', 1),
(3, 'TRAIN TO BUSAN', 'HORROR', 'Corre, corre, que tu mamá se deshace xd xd', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'city.jpg', '2018-10-29 02:39:47', 1),
(4, 'la ciudad y los perros', '', '', '', 'C:/xampp/htdocs/appPelis/view/frontend/img/uploads-img-cards/city.jpg', '2018-11-01 16:48:09', 2),
(9, '13 REASONS WHY', '', 'Son trece razones y tpu lo sabes xd', 'lorem lorem lorem lorem lorem lorem lorem lorej lorem lorem lorem lorem ,lore m lore m lorem lorem l orel lorem lore lore ,lorem ', 'foto-perfil8.png', '2018-11-03 04:21:57', 2),
(10, 'HOLA AMIGOS TENGO HAMBRE', '', 'Son trece razones y tú lo sabes xd :) ', 'que haces ', 'loginlogo.png', '2018-11-05 00:10:23', 2),
(11, 'EL VIRUS', '', 'Atrápame si puedes', 'Esta es la Historia del primer virus informático llamado Creeper que transmitía un mensaje que decía: Atrapame si puedes', 'virus.png', '2018-11-05 18:03:01', 2),
(12, 'HOLA AMIGOS HOW ARE YOU', '', '\"Neta que tengo hambre we\"', 'sdfasdfadsf', 'rene.jpg', '2018-11-05 18:11:08', 2),
(13, 'KAREN, LA PELÍCULA', '', 'este es un chiste', 'La historia de una bronca farandulera  del CC EL HUECO por facebook , donde se dicen todo y TODO !! :D', 'perfil-karen.jpg', '2018-11-05 18:30:44', 1),
(14, 'éRASE UNA VEZ', '', 'Son trece razones. Qué miedo', 'La increible historia de la Paren', 'perfil-karen5.jpg', '2018-11-05 18:36:31', 1),
(15, 'LA QUINTA - PISO 3 QUE RAYOS', '', 'La frase del año o los 6 chiflados|', 'lore m lorem lorem lorem lorem lorem lorem lreom relo lorem lorem lmreo l orem l orem loremr o,lomoermr loer mrel moemr', 'foto-perfil11.png', '2018-11-05 18:43:31', 2),
(16, 'ZOOTOPIA 3', '', 'El zorro y la coneja se casan lero lero :P', 'fsdkfpa', 'perfil-karen2.jpg', '2018-11-05 18:55:40', 1),
(17, 'ULTIMA PELICULA DE PRUEBA', '', 'OMG', 'hola hola hola hola', 'risameme.jpg', '2018-11-05 18:59:37', 1),
(18, 'ATAQUE A LOS TITANES 4', '', 'Si sobreviste igual morirás >:O', 'El muro Rosse y el muro Alejandria creo', 'vector-red.jpg', '2018-11-10 15:29:41', 1),
(19, 'LA MONGA', '', 'O te ries o mueres de risa', 'jajajaja es un chiste wey', 'foto-perfil8.png', '2018-11-10 15:50:30', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peli_actor`
--

CREATE TABLE `peli_actor` (
  `id_peli_actor` int(11) NOT NULL,
  `idpelicula` int(11) NOT NULL,
  `idactor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `peli_actor`
--

INSERT INTO `peli_actor` (`id_peli_actor`, `idpelicula`, `idactor`) VALUES
(1, 1, 1),
(2, 1, 5),
(3, 2, 2),
(4, 2, 3),
(5, 2, 4),
(6, 2, 5),
(8, 9, 1),
(9, 9, 2),
(10, 9, 3),
(16, 13, 1),
(17, 13, 2),
(18, 13, 3),
(19, 13, 4),
(20, 13, 5),
(25, 15, 3),
(26, 16, 1),
(27, 16, 5),
(31, 3, 1),
(32, 3, 3),
(33, 3, 2),
(40, 14, 4),
(41, 14, 1),
(42, 14, 3),
(43, 14, 2),
(44, 14, 5),
(45, 17, 5),
(49, 12, 1),
(50, 12, 2),
(51, 12, 5),
(52, 10, 2),
(53, 10, 5),
(56, 19, 1),
(60, 18, 3),
(61, 18, 2),
(62, 18, 5),
(63, 11, 1),
(64, 11, 3),
(65, 11, 2),
(66, 11, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `usuario` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `contrasenia` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL COMMENT '1:Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `usuario`, `contrasenia`, `email`, `tipo`) VALUES
(1, 'karenyomira', '123456', 'presleyromero11@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`idactor`),
  ADD UNIQUE KEY `nombres` (`nombres`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idpelicula`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Indices de la tabla `peli_actor`
--
ALTER TABLE `peli_actor`
  ADD PRIMARY KEY (`id_peli_actor`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `contrasenia` (`contrasenia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `idactor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idpelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `peli_actor`
--
ALTER TABLE `peli_actor`
  MODIFY `id_peli_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `pelicula_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
