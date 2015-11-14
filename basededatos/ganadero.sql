-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2015 a las 04:09:25
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
  `parir_id` int(11) NOT NULL,
  `preniada_id` int(11) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `peso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `arete`, `raza_id`, `fecha_de_compra`, `parir_id`, `preniada_id`, `fecha_de_nacimiento`, `peso`, `sexo`, `created_at`, `updated_at`) VALUES
(1, 'qwe', '123k', 1, '0000-00-00', 0, 0, '2015-11-02', '123kg', 'Hembra', '2015-11-14 01:32:27', '2015-11-14 01:32:27'),
(2, 'Quimera', '1232k', 1, '0000-00-00', 0, 0, '2015-11-10', '12kg', 'Hembra', '2015-11-14 01:34:10', '2015-11-14 01:34:10'),
(3, 'wqwq', 'qwwq', 1, '0000-00-00', 0, 0, '2015-11-04', 'qw', 'Hembra', '2015-11-14 02:35:05', '2015-11-14 02:35:05'),
(4, 'wqwqqwwq', 'qwwqwqwqwq', 1, '2015-11-04', 0, 0, '2015-11-04', 'qw', 'Hembra', '2015-11-14 02:36:53', '2015-11-14 02:36:53'),
(5, 'wqwq', 'wqqwwq', 1, '2015-11-16', 0, 0, '2015-11-04', 'qwwq', 'Macho', '2015-11-14 02:37:21', '2015-11-14 02:37:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carnes`
--

CREATE TABLE `carnes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destetes`
--

CREATE TABLE `destetes` (
  `id` int(10) UNSIGNED NOT NULL,
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
('2015_11_13_124311_create_nacimientos_table', 1),
('2015_11_13_124333_create_destetes_table', 1),
('2015_11_13_124344_create_carnes_table', 1),
('2015_11_13_154457_create_razas_table', 1),
('2015_11_13_162101_create_animales_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacimientos`
--

CREATE TABLE `nacimientos` (
  `id` int(10) UNSIGNED NOT NULL,
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
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minutos_de_produccion_de_leche` int(11) NOT NULL,
  `meses_de_celo` int(11) NOT NULL,
  `meses_de_gestacion` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`id`, `nombre`, `minutos_de_produccion_de_leche`, `meses_de_celo`, `meses_de_gestacion`, `created_at`, `updated_at`) VALUES
(1, 'Gato', 123, 2, 12, '2015-11-14 01:31:59', '2015-11-14 01:31:59'),
(2, '3223', 123123, 123321, 123321, '2015-11-14 01:46:19', '2015-11-14 01:46:19'),
(3, '21123231', 321321, 123123, 2147483647, '2015-11-14 01:46:31', '2015-11-14 01:46:31'),
(4, '123213423123142', 421413413, 13441413, 2147483647, '2015-11-14 01:46:40', '2015-11-14 01:46:40'),
(5, '412142142', 412142421, 421124124, 2147483647, '2015-11-14 01:46:49', '2015-11-14 01:46:49');

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destetes`
--
ALTER TABLE `destetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nacimientos`
--
ALTER TABLE `nacimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `carnes`
--
ALTER TABLE `carnes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `destetes`
--
ALTER TABLE `destetes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `nacimientos`
--
ALTER TABLE `nacimientos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animales`
--
ALTER TABLE `animales`
  ADD CONSTRAINT `animales_raza_id_foreign` FOREIGN KEY (`raza_id`) REFERENCES `razas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
