-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-10-2022 a las 01:18:20
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fruver`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_Cate` int NOT NULL AUTO_INCREMENT,
  `cate_Nombre` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_Cate`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_Cate`, `cate_Nombre`) VALUES
(1, 'frutas'),
(2, 'mecato'),
(3, 'verduras'),
(4, 'hogar'),
(5, 'licores'),
(6, 'granos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

DROP TABLE IF EXISTS `detalle_factura`;
CREATE TABLE IF NOT EXISTS `detalle_factura` (
  `id_detFactura` int NOT NULL AUTO_INCREMENT,
  `detFactura_ValorIVA` float NOT NULL,
  `detFactura_SubValor` float NOT NULL,
  `detFactura_Propina` float NOT NULL,
  `detFactura_Domicilio` float NOT NULL,
  `detFactura_Descuento` float NOT NULL,
  `detFactura_ValorTotal` float NOT NULL,
  `id_IVA2` int NOT NULL,
  `id_Venta2` int NOT NULL,
  PRIMARY KEY (`id_detFactura`),
  KEY `fk_iva` (`id_IVA2`),
  KEY `fk_venta` (`id_Venta2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

DROP TABLE IF EXISTS `detalle_pedido`;
CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `id_detPedido` int NOT NULL,
  `detPedido_valorIVA` float NOT NULL,
  `detPedido_subValor` float NOT NULL,
  `detPedido_valorTotal` float NOT NULL,
  `id_IVA3` int NOT NULL,
  PRIMARY KEY (`id_detPedido`),
  KEY `fk_iva2` (`id_IVA3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `id_fact` int NOT NULL,
  `fact_numero` bigint NOT NULL,
  `fact_fecha` date NOT NULL,
  `fact_caja` int NOT NULL,
  `id_detFactura2` int NOT NULL,
  `id_usuario2` int NOT NULL,
  PRIMARY KEY (`id_fact`),
  KEY `fk_detFactura` (`id_detFactura2`),
  KEY `fk_usuario` (`id_usuario2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id_inventario` int NOT NULL AUTO_INCREMENT,
  `inventario_stockInicial` int NOT NULL,
  `inventario_cantidad` int NOT NULL,
  `inventario_stockFinal` int NOT NULL,
  `inventario_fechaRegistro` date NOT NULL,
  `id_detPedido2` int NOT NULL,
  `id_prod2` int NOT NULL,
  `id_mov2` int NOT NULL,
  PRIMARY KEY (`id_inventario`),
  KEY `fk_detPedido` (`id_detPedido2`),
  KEY `fk_producto` (`id_prod2`),
  KEY `fk_movimiento` (`id_mov2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iva`
--

DROP TABLE IF EXISTS `iva`;
CREATE TABLE IF NOT EXISTS `iva` (
  `id_IVA` int NOT NULL AUTO_INCREMENT,
  `IVA_TasaIVA` float NOT NULL,
  PRIMARY KEY (`id_IVA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

DROP TABLE IF EXISTS `medida`;
CREATE TABLE IF NOT EXISTS `medida` (
  `id_Medida` int NOT NULL AUTO_INCREMENT,
  `medida_Nombre` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_Medida`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`id_Medida`, `medida_Nombre`) VALUES
(1, 'GRAMOS'),
(2, 'LITROS'),
(3, 'LIBRAS'),
(4, 'UNIDADES'),
(5, 'DECENA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
CREATE TABLE IF NOT EXISTS `movimiento` (
  `id_Mov` int NOT NULL AUTO_INCREMENT,
  `mov_Descripcion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_Mov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_ped` int NOT NULL AUTO_INCREMENT,
  `id_provee3` int NOT NULL,
  `id_detPedido3` int NOT NULL,
  PRIMARY KEY (`id_ped`),
  KEY `fk_proveedor2` (`id_provee3`),
  KEY `fk_detPedido2` (`id_detPedido3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id_Prod` int NOT NULL AUTO_INCREMENT,
  `producto_Nombre` varchar(40) DEFAULT NULL,
  `producto_FechaVencimiento` date DEFAULT NULL,
  `producto_Referencia` bigint DEFAULT NULL,
  `producto_Ubicacion` varchar(40) DEFAULT NULL,
  `producto_Marca` varchar(40) DEFAULT NULL,
  `producto_ValorCompra` float DEFAULT NULL,
  `producto_ValorVenta` float DEFAULT NULL,
  `id_Medida2` int DEFAULT NULL,
  `id_Cate2` int DEFAULT NULL,
  PRIMARY KEY (`id_Prod`),
  KEY `fk_idMedida` (`id_Medida2`),
  KEY `fk_idCate` (`id_Cate2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_Proveedor` int NOT NULL AUTO_INCREMENT,
  `proveedor_NIT` int DEFAULT NULL,
  `proveedor_Nombre` varchar(40) DEFAULT NULL,
  `proveedor_Direccion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_Proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `rol_Nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol_Nombre`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `tipoDoc_usuario` varchar(30) DEFAULT NULL,
  `identificacion_usuario` varchar(20) DEFAULT NULL,
  `nombre_usuario` varchar(40) DEFAULT NULL,
  `apellido_usuario` varchar(40) DEFAULT NULL,
  `correo_usuario` varchar(40) DEFAULT NULL,
  `telefono_usuario` varchar(15) DEFAULT NULL,
  `direccion_usuario` varchar(40) DEFAULT NULL,
  `contraseña_usuario` varchar(100) DEFAULT NULL,
  `estatus` int NOT NULL DEFAULT '0',
  `rol_id` int NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_rol` (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `tipoDoc_usuario`, `identificacion_usuario`, `nombre_usuario`, `apellido_usuario`, `correo_usuario`, `telefono_usuario`, `direccion_usuario`, `contraseña_usuario`, `estatus`, `rol_id`) VALUES
(1, 'cedula de ciudadania', '1005024789', 'camila', 'pacheco', 'camila@gmail.com', '378293', 'hewjk', '1234', 1, 1),
(2, 'cedula de ciudadania', '1005024788', 'maria', 'duarte', 'maria@gmail.com', '3718943', 'djfewv', '1234', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` int NOT NULL AUTO_INCREMENT,
  `venta_CantidadProducto` int DEFAULT NULL,
  `venta_ValorBruto` float DEFAULT NULL,
  `venta_PorcentajeDescuento` float DEFAULT NULL,
  `venta_Descuento` float DEFAULT NULL,
  `venta_Subtotal` float DEFAULT NULL,
  `venta_ValorNeto` float DEFAULT NULL,
  `id_prod3` int DEFAULT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `fk_productos` (`id_prod3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `fk_iva` FOREIGN KEY (`id_IVA2`) REFERENCES `iva` (`id_IVA`),
  ADD CONSTRAINT `fk_venta` FOREIGN KEY (`id_Venta2`) REFERENCES `venta` (`id_venta`);

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `fk_iva2` FOREIGN KEY (`id_IVA3`) REFERENCES `iva` (`id_IVA`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_detFactura` FOREIGN KEY (`id_detFactura2`) REFERENCES `detalle_factura` (`id_detFactura`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario2`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_detPedido` FOREIGN KEY (`id_detPedido2`) REFERENCES `detalle_pedido` (`id_detPedido`),
  ADD CONSTRAINT `fk_movimiento` FOREIGN KEY (`id_mov2`) REFERENCES `movimiento` (`id_Mov`),
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`id_prod2`) REFERENCES `producto` (`id_Prod`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_detPedido2` FOREIGN KEY (`id_detPedido3`) REFERENCES `detalle_pedido` (`id_detPedido`),
  ADD CONSTRAINT `fk_proveedor2` FOREIGN KEY (`id_provee3`) REFERENCES `proveedor` (`id_Proveedor`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_idCate` FOREIGN KEY (`id_Cate2`) REFERENCES `categoria` (`id_Cate`),
  ADD CONSTRAINT `fk_idMedida` FOREIGN KEY (`id_Medida2`) REFERENCES `medida` (`id_Medida`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_productos` FOREIGN KEY (`id_prod3`) REFERENCES `producto` (`id_Prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
