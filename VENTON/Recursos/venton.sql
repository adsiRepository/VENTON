-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2014 a las 23:37:11
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `venton`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `Cod` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Cantidad` int(255) DEFAULT NULL,
  `Costo` decimal(10,0) DEFAULT NULL,
  `Precio` decimal(10,0) DEFAULT NULL,
  `Proveedor` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Cod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`Cod`, `Descripcion`, `Cantidad`, `Costo`, `Precio`, `Proveedor`) VALUES
('221', 'manteca x lb', 600, 465, 700, '8000'),
('654', 'papa x kg', 400, 200, 400, '5443'),
('667', 'Shampoo--Isabel x 600ml', 43, 3562, 5500, '0'),
('345', 'Aceite--Girasol x lt', 43, 4200, 5600, '180600'),
('664', 'Arroz--Roa x lb', 150, 756, 1200, '113400');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canasta`
--

DROP TABLE IF EXISTS `canasta`;
CREATE TABLE IF NOT EXISTS `canasta` (
  `codigo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(255) NOT NULL,
  `vlrund` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `usuario_resp` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `cod_cliente` varchar(45) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `codcliente` int(255) NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nip` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `domicilio` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `sistemapago` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuenta` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombrecontacto` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefonocontacto` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `relacion` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`codcliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codcliente`, `nombre`, `nip`, `domicilio`, `ciudad`, `telefono`, `email`, `fecha`, `observaciones`, `sistemapago`, `cuenta`, `nombrecontacto`, `telefonocontacto`, `relacion`) VALUES
(1, 'Perros La Calle Ancha', '31284488', 'calle 34 24a02', 'Cali', ' 4382528', 'teresita@gmail.com', '2014-09-01', 'venta de perros, hamburguesas, gaseosas; mÃºsica, buen ambiente, rica comida, excelente atenciÃ³n.', 'Credito', '77-2358-254', 'Miguel Angel GonzÃ¡lez', '3148377177', 'Esposo'),
(2, 'Miguel Eduardo Gonzalez', '1107057722', 'Cll 40 15-61', 'Cali', ' 8888888-3183693535', 'miguelgonz@hotmail.com', '2014-09-24', 'Estudiante SENA', 'Contado', '7782582-5', 'Leidy Paola Gonzalez', '8897462', 'Hermana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `codempleado` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fecharegistro` date DEFAULT NULL,
  `nomempleado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dircliente` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudadcliente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telcliente` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emailcliente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `opcionsexo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `desclient` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrato` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto` varchar(400) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`codempleado`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codempleado`, `fecharegistro`, `nomempleado`, `cedula`, `dircliente`, `ciudadcliente`, `telcliente`, `emailcliente`, `opcionsexo`, `desclient`, `contrato`, `clave`, `tipo`, `foto`) VALUES
('1', '2014-09-20', 'Miguel Gonzalez', '1107057722', 'Calle 6 34-40', 'Cali', '2147483647', 'miguelon_91@misena.e', 'M', 'Estudiante Sena', 'fijo', '1234', 'administrador', 'foto miguel.jpg'),
('2', '2014-09-16', 'Christian David Lope', '1143927200', 'Calle 57 N12a-18', 'Cali - Valle', '2147483647', 'corpse1989@hotmail.c', 'M', 'Propietario de vento', 'indefinido', 'corpsegrinder', 'administrador', ''),
('3', '2014-09-16', 'Oscar Eduardo Lopez', '1143927300', 'cra 78 - 90', 'Bogota', '2147483647', 'oso@hotmail.com', 'M', 'Ninguna', 'a prueba', '12345', 'Empleado', ''),
('4', '2014-09-16', 'Katherine Morales', '1144135151', 'transversal 123', 'Cali - Valle', '2147483647', 'ktmf16@hotmail.com', 'F', '', 'indefinido', 'KATHERINE', 'Empleado', ''),
('5', '2014-09-24', 'Jose Antonio Arango', '14620894', 'SENA BretaÃ±a', 'Cali', '7755321', 'joarhu@misena.edu.co', 'M', 'DiseÃ±ador Grafico', 'Indefinido', '14620894', 'administrador', ''),
('6', '2014-09-25', 'Alexander Quembauer', '16928072', 'Cra 1000 65-18', 'Cali', '  4444444', 'elkaiser@hotmail.com', 'M', 'Desarrollador Senior', 'Indefinido', '16928072', 'administrador', ''),
('7', '2014-09-18', 'Aura Patricia Manqui', '66856109', 'cra 9988', 'Liverpool', '2147483647', 'pato@misena', 'F', 'empleada del mes', 'indefinido', 'pato', 'vendedor', ''),
('8', '2014-09-24', 'Angie Daniela Pabon', '1107099088', 'av siempre viva 12-78', 'Cali', '5567439', 'angiepab@hotmail.com', 'F', 'La Chiky', 'Indefinido', '1107099088', 'administrador', 'foto angie.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` int(50) NOT NULL,
  `image` mediumblob NOT NULL,
  `description` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int(255) NOT NULL,
  `nip` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `observaciones` varchar(250) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sistemapago` varchar(15) DEFAULT NULL,
  `monto` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nip`, `nombre`, `direccion`, `ciudad`, `telefono`, `observaciones`, `email`, `sistemapago`, `monto`) VALUES
(57, '453645321-7', 'Postobon', 'Cra 8 26-40', 'Cali', '5567490', 'Bebidas Gaseosas ', 'ptbn88@ptbn.com', 'Contado', 0),
(779, '77865590-8', 'Muebles Hurtado', 'av 8N 25-40', 'nbfgnfgb', '8856479', 'Distribuidor de Muebles para el Hogar ', 'hurt_mader@hotmail.com', 'Credito', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `consecutivo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `codcliente` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_cliente` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sistemapago` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `plazo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `frecuenciacobro` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lista_compra` varchar(700) COLLATE utf8_spanish_ci DEFAULT NULL,
  `total_venta` decimal(65,0) DEFAULT NULL,
  PRIMARY KEY (`consecutivo`),
  KEY `consecutivo` (`consecutivo`),
  KEY `id_cliente` (`id_cliente`),
  KEY `consecutivo_2` (`consecutivo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`consecutivo`, `fecha`, `usuario`, `codcliente`, `nombre`, `id_cliente`, `direccion`, `telefono`, `sistemapago`, `plazo`, `frecuenciacobro`, `lista_compra`, `total_venta`) VALUES
('1', '2014-09-25', 'Rosa', 'VENTA PART', 'Miguel Eduardo Gonzalez', '1107057722', 'Clle 34 24a02', '4382528', 'Contado', '', 'semanal', 'Cod. Producto: 221, Cant: 5, -Total: $3500 / Cod. Producto: 654, Cant: 3, -Total: $1200 / Cod. Producto: 345, Cant: 1, -Total: $5600', 10300),
('2', '2014-09-25', 'Miguel', 'VENTA PART', 'Humberto', '88888888', '77077777070', '88888888', 'Credito', '2014-11-30', 'semanal', 'Cod: 221 - Cant: 16 - Total: $11200 \n / Cod: 654 - Cant: 7 - Total: $2800 \n / Cod: 667 - Cant: 2 - Total: $11000 \n / Cod: 664 - Cant: 20 - Total: $24000 \n', 49000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
