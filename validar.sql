-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2024 a las 05:25:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `validar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`ID`, `usuario`, `password`) VALUES
(1, 'marcoemeritus99@gmail.com', 'Beatfusion99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `descripcion` varchar(850) NOT NULL,
  `colaboracion` varchar(30) NOT NULL,
  `redes` varchar(100) NOT NULL,
  `instrumento` varchar(60) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `link_s` varchar(800) NOT NULL,
  `link_y` varchar(800) NOT NULL,
  `link_a` varchar(800) NOT NULL,
  `link_d` varchar(800) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `nombre`, `genero`, `descripcion`, `colaboracion`, `redes`, `instrumento`, `ciudad`, `link_s`, `link_y`, `link_a`, `link_d`, `correo`, `password`, `activo`) VALUES
(13, 'Marco Meratuz', 'Rock', 'Soy Marco Meratuz, un músico autodidacta originario de Guadalajara, Jalisco, México, con una pasión ardiente por la guitarra y una visión única del arte sonoro. Tengo 24 años y yo mismo compongo, grabo mezclo y produzco mis temas musicales, he estado forjando mi camino en el mundo de la música con dedicación y entusiasmo incansables. Mi música es una fusión exquisita y nostálgica de estilos, centrada principalmente en el rock melódico retro alternativo lo-fi. Me sumerjo en un viaje emocional a través de acordes evocadores y melodías cautivadoras que resuenan en el corazón de quienes me escuchan. Cada nota que compongo son cuidadosamente tejidas para transmitir mi visión artística y mi experiencia de vida única como joven músico mexicano.', 'Indie', '@marco.meratuz', 'Guitarra electrica', 'Guadalajara Jalisco', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/artist/3SHGq8FkNDQXt1tr8auLSi?utm_source=generator\" width=\"100%\" height=\"352\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\" loading=\"lazy\"></iframe>', '', '', '', 'marcomeratuz@gmail.com', '123456', 1),
(14, 'Volumen Vocho', 'Rock', 'Somos una banda tapatía que busca hacer música chingona, expresando a pulso nuestros sentimientos en cada canción, en cada nota.', 'Funk', '@volumenvocho', 'Banda multi-instrumentista', 'Guadalajara Jalisco', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/artist/5qA4vZZcDJnz5zwwDpSCmQ?utm_source=generator\" width=\"100%\" height=\"352\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\" loading=\"lazy\"></iframe>', '', '', '', 'volumenvocho@gmail.com', '123456', 1),
(15, 'Palmasur', 'Lofi', 'Palmasur fue creado en 2017 por José Ma. Rodríguez (Chema R) en Puebla Pue, México. Palmasur es un proyecto de Lofi centrado en representar la cultura Mexicana, en 2020 creó para el equipo de Spotify México la Playlist editorial (Lofi Mexa ‘Palmasur Takeover’), artista musicalizador de los Tiktok Awards Mexico 2022, participó en festivales como SXSW en Austin Tx, y es mencionado por la revista Bil', 'Regional Mexicano', '@palmasur_lofi', 'Piano / Teclado', 'Ciudad de Mexico', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/artist/3H1jLGJzOPn3WbEv6fvJ3M?utm_source=generator\" width=\"100%\" height=\"352\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\" loading=\"lazy\"></iframe>', '', '', '', 'palmasur@gmail.com', 'Palmasur00', 1),
(16, 'Distortion head', 'Thrash, Groove y Speed Metal', 'Banda de thrash, groove y speed metal, originaria de Guadalajara, Jalisco, México.  Aldo Filippini - Guitarra/Voz Lorenzo Pérez - Guitarra/Coros Carlos Pérez - Bajo Daniel Pérez - Batería', 'Indie', '@distortion.head', 'Banda multi-instrumentista', 'Monterrey', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/artist/1HXrmK2MSzNRNimRkRqvET?utm_source=generator\" width=\"100%\" height=\"352\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\" loading=\"lazy\"></iframe>', '', '', '', 'distortionhead@gmail.com', 'Distorhead00', 1),
(18, 'Bohemios del Metro', 'Indie Rock Pop Alternativo y Sonidos Fusion en Español', 'banda mexicana e independiente, catalogada como un grupo de Indie Rock Pop Alternativo y Sonidos Fusión en Español, cuyo propósito es evocar diversas emociones y sensaciones en cada persona que se cruza con su música. Se distingue por generar experiencias únicas con sus letras honestas y conscientes, abrazadas por armónicas texturas vívidas y atmósferas envolventes que proyecta esta propuesta.', 'Rock', '@bohemiosdelmetro.mx', 'Banda multi-instrumentista', 'Queretaro', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/artist/5Lcmmt7w5MNhx4tHBzqYYX?utm_source=generator\" width=\"100%\" height=\"352\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\" loading=\"lazy\"></iframe>', '', '', '', 'bohemiosdelmetro@gmail.com', '123456789', 1),
(19, 'Leonel Cotuli', 'Rock Alternativo', 'Leonel Cotuli es Guitarrista, Cantante y Productor con 20 Años de Carrera y ha publicado 7 Álbumes. El músico argentino de Rock alternativo llega a Sudáfrica, Europa y Latinoamérica.', 'Funk', '@leonel.cotuliargen', 'Guitarra y voz', 'Buenos Aires Argentina', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/artist/2OtCilQEPb24RRvK6EpXAW?utm_source=generator\" width=\"100%\" height=\"352\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\" loading=\"lazy\"></iframe>', '', '', '', 'leonel@outlook.com', 'cuantascopasten', 1),
(21, 'RavenN', 'Banda de Heavy Metal ', 'RavenN, banda de Metal proveniente de la ciudad de Guadalajara, fundada en 2021 por su guitarrista, vocalista, productor y compositor Álvaro Santana, expresa en sus composiciones una obra de protesta social contemporánea. Su música fusiona la sonoridad del Metal Rock Americano con la peculiar composición melódica de lenguaje latino, lo cual representa una propuesta innovadora al genero Metal Rock Nacional...', 'Punk', '@ravenn_music', 'Banda multi-instrumentista', 'Guadalajara Jalisco Mexico', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/artist/4IE3FXmj4uAr8nnvx8QfDQ?utm_source=generator\" width=\"100%\" height=\"352\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\" loading=\"lazy\"></iframe>', '', '', '', 'raven@gmail.com', '123456', 1),
(42, 'Dani zz', 'Electronica', 'Soy un musico de prueba', 'Electronica', 'no tengo', 'Mezcladora / Tornamesa', 'Tlaquepaque', 'no tengo', '', '', '', 'danizaragoza133@gmail.com', '1234', 1),
(43, 'Prueba', 'Rock', 'Soy un musico de prueba', 'Rock', 'no tengo', 'Banda multi-instrumentista', 'Tlaquepaque', 'no tengo', '', '', '', 'danizaragoza122@gmail.com', '1234', 1),
(44, 'Prueba 2 ', 'Electronica', 'Soy un musico de prueba2', 'Lofi', 'no tengo', 'Mezcladora / Tornamesa', 'Tlaquepaque', 'no tengo', '', '', '', 'danizaragoza144@gmail.com', '1234', 1),
(45, 'Prueba 3', 'Rock', 'Soy un musico de prueba3', 'Metal', 'no tengo', 'Bajo', 'Tlaquepaque', 'no tengo', '', '', '', 'danizaragoza155@gmail.com', '1234', 1),
(46, 'Prueba 4', 'Regional Mexicano', 'Soy un musico de prueba4', 'Regional Mexicano', 'no tengo', 'Flauta', 'Tlaquepaque', 'no tengo', '', '', '', 'danizaragoza166@gmail.com', '1234', 1),
(48, 'Prueba Final', 'Regional Mexicano', 'Soy un musico de prueba final', 'Musica Clasica', 'no tengo', 'Banda multi-instrumentista', 'Tlaquepaque', 'NO TENGO_s', 'NO TENGO_y', 'NO TENGO_a', 'NO TENGO_d', 'nose@gmail.com', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
