-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2015 a las 08:41:54
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ganadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arete` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raza_id` int(10) UNSIGNED NOT NULL,
  `fecha_de_compra` date NOT NULL,
  `arete_madre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `peso` decimal(11,3) NOT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `vivo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Disparadores `animales`
--
DELIMITER $$
CREATE TRIGGER `celonotificacion` AFTER INSERT ON `animales` FOR EACH ROW INSERT INTO notificacionescelo (animal_id, raza_id, tiempo) VALUES (NEW.id, NEW.raza_id, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carnes`
--

CREATE TABLE `carnes` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_de_muerte` date NOT NULL,
  `libras_de_aprovechamiento` decimal(11,3) NOT NULL,
  `animal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Disparadores `carnes`
--
DELIMITER $$
CREATE TRIGGER `cambiar_estado_a_muerto` AFTER INSERT ON `carnes` FOR EACH ROW UPDATE animales set vivo=0 WHERE id = NEW.animal_id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cambiar_estado_a_vivo` AFTER DELETE ON `carnes` FOR EACH ROW UPDATE animales set vivo=1 WHERE id = OLD.animal_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crecimientos`
--

CREATE TABLE `crecimientos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_de_registro` date NOT NULL,
  `peso_actual` decimal(11,3) NOT NULL,
  `animal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Disparadores `crecimientos`
--
DELIMITER $$
CREATE TRIGGER `actualizar_peso` AFTER INSERT ON `crecimientos` FOR EACH ROW UPDATE animales set peso=New.peso_actual WHERE id = NEW.animal_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destetes`
--

CREATE TABLE `destetes` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_de_destete` date NOT NULL,
  `animal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_13_154457_create_razas_table', 1),
('2015_11_13_162101_create_animales_table', 1),
('2015_11_14_162856_create_crecimientos_table', 1),
('2015_11_15_121715_create_destetes_table', 1),
('2015_11_15_150126_create_carnes_table', 1),
('2015_11_15_173903_create_preniars_table', 1),
('2015_11_16_013535_notificacionescelo', 2),
('2015_11_16_014758_notificacionescelo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacionescelo`
--

CREATE TABLE `notificacionescelo` (
  `id` int(10) UNSIGNED NOT NULL,
  `animal_id` int(10) UNSIGNED NOT NULL,
  `raza_id` int(10) UNSIGNED NOT NULL,
  `tiempo` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preniars`
--

CREATE TABLE `preniars` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_de_preniada` date NOT NULL,
  `animal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minutos_de_produccion_de_leche` int(11) NOT NULL,
  `dias_de_celo` int(11) NOT NULL,
  `semanas_de_gestacion` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`id`, `nombre`, `minutos_de_produccion_de_leche`, `dias_de_celo`, `semanas_de_gestacion`, `created_at`, `updated_at`) VALUES
(2, 'Vaca Jersey', 4, 1, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Cabra Saanen', 45, 2, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Vaca Suiza', 28, 5, 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Cerdo  Congo Santadereano', 0, 10, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Cerdo Curi', 0, 3, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Cerdo Carepalo', 0, 8, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Cabra Toggenburg', 8, 9, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Cabra Alpina', 10, 2, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Cerdo Zungo', 0, 2, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Cerdo Sampedreño', 0, 3, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Vaca Holstein', 3, 2, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Vaca Suiza', 5, 2, 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Cabra Toggenburg', 5, 2, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Cabra Alpina', 4, 2, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Oveja Manchega', 0, 2, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Oveja Merino', 0, 3, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Vaca Holstein', 5, 3, 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Vaca Suiza', 4, 1, 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Oveja Merino', 0, 4, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Cabra Saanen', 4, 3, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Cabra Saanen', 2, 3, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Vaca Jersey', 3, 4, 35, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Cerdo Sampedreño', 0, 3, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Vaca Holstein', 4, 2, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Vaca Holstein', 5, 3, 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Cerdo Carepalo', 0, 4, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Cerdo Sampedreño', 0, 12, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$sy4Q3mwRuWEmJhj6.jJsduC7cFV/vWMq/IOrVhNaupL7No1ZCm2N2', 'WgnnikDEVXRx8DtX7flwD6lyVoZjmPoc9eZzSwbYkcPoGRTdoW8gpeZbGTte', '0000-00-00 00:00:00', '2015-11-16 02:54:49'),
(2, 'admin1', 'admin1@admin1.com', '$2y$10$XTyH5zLXLZiqfI0gmGuRLuASqs37tQ6mP359r.3LzMuYxAzXuSpMO', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animales_raza_id_foreign` (`raza_id`);

--
-- Indices de la tabla `carnes`
--
ALTER TABLE `carnes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carnes_animal_id_foreign` (`animal_id`);

--
-- Indices de la tabla `crecimientos`
--
ALTER TABLE `crecimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crecimientos_animal_id_foreign` (`animal_id`);

--
-- Indices de la tabla `destetes`
--
ALTER TABLE `destetes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destetes_animal_id_foreign` (`animal_id`);

--
-- Indices de la tabla `notificacionescelo`
--
ALTER TABLE `notificacionescelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notificacionescelo_animal_id_foreign` (`animal_id`),
  ADD KEY `notificacionescelo_raza_id_foreign` (`raza_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `preniars`
--
ALTER TABLE `preniars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preniars_animal_id_foreign` (`animal_id`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `carnes`
--
ALTER TABLE `carnes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `crecimientos`
--
ALTER TABLE `crecimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `destetes`
--
ALTER TABLE `destetes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notificacionescelo`
--
ALTER TABLE `notificacionescelo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `preniars`
--
ALTER TABLE `preniars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animales`
--
ALTER TABLE `animales`
  ADD CONSTRAINT `animales_raza_id_foreign` FOREIGN KEY (`raza_id`) REFERENCES `razas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carnes`
--
ALTER TABLE `carnes`
  ADD CONSTRAINT `carnes_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `crecimientos`
--
ALTER TABLE `crecimientos`
  ADD CONSTRAINT `crecimientos_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `destetes`
--
ALTER TABLE `destetes`
  ADD CONSTRAINT `destetes_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificacionescelo`
--
ALTER TABLE `notificacionescelo`
  ADD CONSTRAINT `notificacionescelo_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacionescelo_raza_id_foreign` FOREIGN KEY (`raza_id`) REFERENCES `razas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `preniars`
--
ALTER TABLE `preniars`
  ADD CONSTRAINT `preniars_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
