-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 13:45:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_psq02`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion_nomina`
--

CREATE TABLE `liquidacion_nomina` (
  `documento` int(11) NOT NULL,
  `nombres` varchar(40) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `salario` float NOT NULL,
  `dias_laborados` int(11) NOT NULL,
  `sueldo_basico` float NOT NULL,
  `transporte` float NOT NULL,
  `Nextra_dia` int(11) NOT NULL,
  `Nextra_noche` int(11) NOT NULL,
  `Nextra_dia_fest` int(11) NOT NULL,
  `Nextra_noche_fest` int(11) NOT NULL,
  `total_extras` int(11) NOT NULL,
  `otros_devengados` float NOT NULL,
  `total_devengado` float NOT NULL,
  `eps` float NOT NULL,
  `pension` float NOT NULL,
  `fondo_solid` float NOT NULL,
  `otros_deducidos` float NOT NULL,
  `total_deducidos` float NOT NULL,
  `neto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liquidacion_nomina`
--

INSERT INTO `liquidacion_nomina` (`documento`, `nombres`, `apellidos`, `cargo`, `salario`, `dias_laborados`, `sueldo_basico`, `transporte`, `Nextra_dia`, `Nextra_noche`, `Nextra_dia_fest`, `Nextra_noche_fest`, `total_extras`, `otros_devengados`, `total_devengado`, `eps`, `pension`, `fondo_solid`, `otros_deducidos`, `total_deducidos`, `neto`) VALUES
(456982, 'David', 'Coronado', 'Administrador', 3000000, 17, 1700000, 0, 0, 0, 0, 0, 0, 120000, 1820000, 68000, 68000, 0, 0, 136000, 0),
(785236, 'Francisco', 'Bedoya', 'Ingeniero de Sistemas', 1500000, 30, 1500000, 102854, 0, 8, 0, 5, 165625, 0, 1768480, 55885, 55885, 0, 0, 111771, 0),
(856243, 'Andrea ', 'Jimenez', 'Contadora', 1500000, 30, 1500000, 102854, 3, 0, 0, 5, 101562, 100000, 1804420, 55885, 55885, 0, 0, 111771, 0),
(1423695, 'Carlos Eduardo', 'Sanchez Riaño', 'Auxiliar de Nómina', 1000000, 20, 666666, 68569, 5, 0, 0, 0, 26041, 0, 761277, 23923, 23923, 0, 40000, 87847, 0),
(1478963, 'Horaacio', 'Martínez', 'Auxiliar Contable', 1000000, 30, 1000000, 102854, 0, 0, 0, 0, 0, 0, 1102850, 35885, 35885, 0, 0, 71771, 0),
(11405678, 'Pedro', 'Rojas Vanegas', 'Vigilante', 877803, 30, 877803, 102854, 0, 2, 0, 0, 12801, 0, 993458, 30997, 30997, 0, 0, 61995, 0),
(39718478, 'Liria', 'Isaza', 'Vendedora', 900000, 30, 900000, 102854, 0, 0, 0, 0, 0, 0, 1002850, 31885, 31885, 0, 0, 63771, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion_prestaciones`
--

CREATE TABLE `liquidacion_prestaciones` (
  `id` int(11) NOT NULL,
  `fecha_Inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `salario` float NOT NULL,
  `dias` int(11) NOT NULL,
  `cesantias` float NOT NULL,
  `intereses_cesantias` float NOT NULL,
  `prima_uno` float NOT NULL,
  `prima_dos` float NOT NULL,
  `vacaciones` float NOT NULL,
  `total_liquidacion` int(11) NOT NULL,
  `Otro` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liquidacion_prestaciones`
--

INSERT INTO `liquidacion_prestaciones` (`id`, `fecha_Inicio`, `fecha_final`, `salario`, `dias`, `cesantias`, `intereses_cesantias`, `prima_uno`, `prima_dos`, `vacaciones`, `total_liquidacion`, `Otro`) VALUES
(160, '2020-01-01', '2020-01-23', 2000000, 22, 122222, 896, 122222, 0, 61111, 428673, 0),
(2045, '2020-08-24', '2020-12-31', 1500000, 129, 537500, 23113, 0, 537500, 268750, 829363, 0),
(2122, '2020-07-09', '2020-11-30', 900000, 144, 360000, 17280, 0, 360000, 180000, 557280, 0),
(2736, '2020-07-01', '2020-10-30', 2000000, 121, 672222, 27113, 0, 672222, 336111, 1035446, 0),
(2971, '2020-01-01', '2020-07-31', 2000000, 211, 1172220, 82446, 1000000, 172222, 586111, 3840779, 0),
(3236, '2020-04-01', '2020-08-30', 877803, 152, 370628, 18778, 221889, 148739, 185314, 1018498, 0),
(3692, '2020-01-01', '2020-06-30', 2000000, 180, 1000000, 60000, 1000000, 0, 500000, 3560000, 0),
(4332, '2020-01-01', '2020-04-30', 1000000, 120, 333333, 13333, 333333, 0, 166667, 1179999, 0),
(6699, '2020-01-01', '2020-07-01', 1400000, 181, 703889, 42468, 700000, 3889, 351944, 2498301, 0),
(6953, '2020-01-01', '2020-02-29', 2000000, 59, 327778, 6446, 327778, 0, 163889, 1153669, 0),
(7401, '2020-01-01', '2020-01-31', 2000000, 30, 166667, 1667, 166667, 0, 83333, 585001, 0),
(7590, '2020-01-01', '2020-06-30', 900000, 180, 450000, 27000, 450000, 0, 225000, 1602000, 0),
(7810, '2020-01-01', '2020-03-31', 2000000, 90, 500000, 15000, 500000, 0, 250000, 1765000, 0),
(8806, '2020-01-01', '2020-07-01', 2000000, 181, 1005560, 60669, 1000000, 5556, 502778, 3569003, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parafiscales`
--

CREATE TABLE `parafiscales` (
  `id` int(11) NOT NULL,
  `sueldo_base` float NOT NULL,
  `sena` float NOT NULL,
  `icbf` float NOT NULL,
  `caja` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parafiscales`
--

INSERT INTO `parafiscales` (`id`, `sueldo_base`, `sena`, `icbf`, `caja`, `total`) VALUES
(1725, 1200000, 24000, 36000, 48000, 108000),
(2920, 1500000, 30000, 45000, 60000, 135000),
(4864, 1500000, 30000, 45000, 60000, 135000),
(5268, 1100000, 22000, 33000, 44000, 99000),
(5479, 900000, 18000, 27000, 36000, 81000),
(7389, 1200000, 24000, 36000, 48000, 108000),
(8319, 877803, 17556, 26334, 35112, 79002),
(9807, 1100000, 22000, 33000, 44000, 99000),
(9993, 2100000, 42000, 63000, 84000, 189000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(4, 'incap2020', '$2y$10$g324XZcg/7oMVcYJmc7rgODX3mdeCLBTHzg6wf9QUBsuSCPN.w1Yu', 'incap@incap.com'),
(5, 'Jose45', '$2y$10$jbpQANkQFF8d2UD6SYO.5OA19a0R3ODReCiUJXCmcKbuOjrqTJF6e', 'jose@gmail.com'),
(6, 'Pedro55', '$2y$10$CEo7tSeehRJlrI7Xe4Vaa.aKjyN2eTnU504Fvam6HVX3PMYYbaTqK', 'pedro@gmail.com'),
(7, 'Jose95', '$2y$10$quIfzLl3MbV/R/5AaRI3murxzV9pL3nRaK33R.UXvPyck2Of3JWs2', 'jose@hotmail.com'),
(8, 'Isabel97', '$2y$10$UJQmvwZAMuUXhLE9tt0KpeLFHAXSnDHGWkUamHOrqU7HOBsTiS3Ey', 'isabel@outlook.com'),
(9, 'Daniela', '$2y$10$3b1H3Mgd1747Kggcbn4U3uGB8qKr.qpJMmg2RxMHX19EBCiTRY0r6', 'daniela@gmail.com'),
(10, 'carlos', '$2y$10$VugUW8cnHXM8fYt5YTQymOjAM0gfp8fV1gVHrdlvReO0bszQRg3s2', 'carlos@gmail.com'),
(11, 'CamilaRobledo', '$2y$10$swrAMm9ucDydd/tbVkDrCuR0JMc9eFUUoYKEnV.xF.D7ZCdP.Vygm', 'camila@gmail.com'),
(12, 'SandraBernal', '$2y$10$DXJEIEeKWMbi6PqLjKfEVOVJFQvEGlnmhzTymqrkxPsG6xyjDmLBG', 'sandra@outlook.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `liquidacion_nomina`
--
ALTER TABLE `liquidacion_nomina`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `liquidacion_prestaciones`
--
ALTER TABLE `liquidacion_prestaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parafiscales`
--
ALTER TABLE `parafiscales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
