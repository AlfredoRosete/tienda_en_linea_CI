-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2018 a las 00:56:05
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catergoria_paquete`
--

CREATE TABLE `catergoria_paquete` (
  `id_cp` int(11) NOT NULL,
  `titulo_cp` varchar(50) NOT NULL,
  `descripcion_cp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catergoria_paquete`
--

INSERT INTO `catergoria_paquete` (`id_cp`, `titulo_cp`, `descripcion_cp`) VALUES
(7, 'Boda', 'Descripcion de la boda'),
(8, '15 años', 'des');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_seccion`
--

CREATE TABLE `detalle_seccion` (
  `id_ds` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `tipo_ds` varchar(50) NOT NULL,
  `elemento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_seccion`
--

INSERT INTO `detalle_seccion` (`id_ds`, `id_seccion`, `tipo_ds`, `elemento`) VALUES
(8, 4, 'Entrada', 'sopa'),
(9, 4, 'Entrada', 'arroz'),
(10, 4, 'Plato_fuete', 'milanesa'),
(11, 4, 'Plato_fuete', 'Consome'),
(12, 4, 'postre', 'arroz con leche'),
(13, 4, 'postre', 'fresas con crema'),
(14, 5, 'Entrada', '????'),
(15, 5, 'Entrada', 'p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `folio_factura` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_factura` varchar(500) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'administrador de proyectos'),
(3, 'usuario', 'colaborador para proyecto'),
(4, 'cliente-empresa', 'nombre del cliente o empresa que solicita el proyecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id_images` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `direction_images` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id` int(11) NOT NULL COMMENT 'id de usuario',
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `fecha_pedido` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id_paquete` int(11) NOT NULL,
  `nombre_paquete` varchar(50) NOT NULL,
  `tipo_paquete` varchar(50) NOT NULL,
  `id_cp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id_paquete`, `nombre_paquete`, `tipo_paquete`, `id_cp`) VALUES
(1, 'Mi boda Feliz', 'Basico', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_full`
--

CREATE TABLE `paquete_full` (
  `id_pqfull` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `precio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `codigo_producto` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `existencia_producto` int(11) NOT NULL,
  `cantidad_minima` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_product`, `codigo_producto`, `name`, `description`, `price`, `status`, `existencia_producto`, `cantidad_minima`) VALUES
(1, '123123', 'Habana', 'aosih', 265, '', 6777, 767),
(2, 'p0001', 'Habana', 'descripcoin', 12, '', 26, 12),
(4, 'p0002', 'vino', 'vino', 250, '', 30, 12),
(6, '123kans', 'aksd n', 'nosdo', 123, 'as', 12, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL,
  `nombre_de_seccion` varchar(50) NOT NULL,
  `tipo_seccion` varchar(50) NOT NULL,
  `id_cp` int(11) NOT NULL,
  `nivel_seccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `nombre_de_seccion`, `tipo_seccion`, `id_cp`, `nivel_seccion`) VALUES
(1, '0', '', 0, ''),
(2, '0', '', 0, ''),
(3, 'Comida basica para boda', 'Comida', 7, 'Entrada'),
(4, 'Comida premium para boda', 'Comida', 7, 'Premium'),
(5, 'Paquete de comida', 'Comida', 7, 'Estandar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1543879508, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(6, '127.0.0.1', 'emma@gmail.com', '$2y$08$vOFDqzCucWMggQSPJkZwfOZgrMiktT7tL6LHqahQ4wP0CvbN6FB9W', NULL, 'emma@gmail.com', NULL, NULL, NULL, NULL, 1543532029, 1543532554, 1, 'Emmanuel', 'Reyes Rosas', NULL, '+2721975753'),
(7, '127.0.0.1', 'jose.alfredo.rosete@gmail.com', '$2y$08$1GMe9VaIXW96qTc8d4EC8uU6IqVH8th8Qwlk3lfezwuNWo80EuQSy', NULL, 'jose.alfredo.rosete@gmail.com', NULL, NULL, NULL, NULL, 1543532145, NULL, 1, 'jose Alfredo', 'Rosete Mazahua', 'anskj', '+2721975753'),
(8, '127.0.0.1', 'juanito@gmail.com', '$2y$08$g3TPGlmnlU3K3z7SrzWXwug97mXCO2T.EFt6pdTVVPV.EXABWMUSK', NULL, 'juanito@gmail.com', NULL, NULL, NULL, NULL, 1543606014, 1543606052, 1, 'Juanito', 'juanito', NULL, '+2721975753');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(9, 6, 1),
(11, 7, 1),
(12, 8, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catergoria_paquete`
--
ALTER TABLE `catergoria_paquete`
  ADD PRIMARY KEY (`id_cp`);

--
-- Indices de la tabla `detalle_seccion`
--
ALTER TABLE `detalle_seccion`
  ADD PRIMARY KEY (`id_ds`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_images`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `paquete_full`
--
ALTER TABLE `paquete_full`
  ADD PRIMARY KEY (`id_pqfull`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catergoria_paquete`
--
ALTER TABLE `catergoria_paquete`
  MODIFY `id_cp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detalle_seccion`
--
ALTER TABLE `detalle_seccion`
  MODIFY `id_ds` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id_images` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
