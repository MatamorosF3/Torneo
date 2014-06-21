
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2014 at 02:26 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

--
-- Database: `a8250648_torneo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Equipo`
--

CREATE TABLE `Equipo` (
  `IdEquipo` int(8) NOT NULL AUTO_INCREMENT,
  `NombreEquipo` text NOT NULL,
  `IdCapitan` int(8) NOT NULL,
  PRIMARY KEY (`IdEquipo`),
  UNIQUE KEY `IdCapitan` (`IdCapitan`)
) TYPE=MyISAM  AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Equipo`
--

INSERT INTO `Equipo` VALUES(1, 'Real Madrid', 11294320);
INSERT INTO `Equipo` VALUES(2, 'Manchester City', 10871401);
INSERT INTO `Equipo` VALUES(3, 'Liverpool', 10325493);
INSERT INTO `Equipo` VALUES(4, 'Barcelona', 10874569);

-- --------------------------------------------------------

--
-- Table structure for table `EquiposPorTorneos`
--

CREATE TABLE `EquiposPorTorneos` (
  `IdEquipo` int(8) NOT NULL,
  `IdTorneo` int(8) NOT NULL,
  UNIQUE KEY `IdEquipo` (`IdEquipo`,`IdTorneo`)
) TYPE=MyISAM;

--
-- Dumping data for table `EquiposPorTorneos`
--

INSERT INTO `EquiposPorTorneos` VALUES(1, 1);
INSERT INTO `EquiposPorTorneos` VALUES(1, 2);
INSERT INTO `EquiposPorTorneos` VALUES(1, 3);
INSERT INTO `EquiposPorTorneos` VALUES(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `FaltasPartidos`
--

CREATE TABLE `FaltasPartidos` (
  `IdPartido` int(8) NOT NULL,
  `IdEquipo` int(8) NOT NULL,
  `IdJugador` int(8) NOT NULL,
  `TipoFalta` text NOT NULL COMMENT 'Amarilla/Roja',
  `NumeroAmarrillas` int(4) NOT NULL
) TYPE=MyISAM;

--
-- Dumping data for table `FaltasPartidos`
--


-- --------------------------------------------------------

--
-- Table structure for table `GolesPartidos`
--

CREATE TABLE `GolesPartidos` (
  `IdPartido` int(8) NOT NULL,
  `IdEquipo` int(8) NOT NULL,
  `IdJugador` int(8) NOT NULL,
  `NumeroGoles` int(4) NOT NULL,
  KEY `IdPartido` (`IdPartido`)
) TYPE=MyISAM;

--
-- Dumping data for table `GolesPartidos`
--

INSERT INTO `GolesPartidos` VALUES(1, 1, 1, 1);
INSERT INTO `GolesPartidos` VALUES(1, 2, 2, 2);
INSERT INTO `GolesPartidos` VALUES(2, 3, 3, 3);
INSERT INTO `GolesPartidos` VALUES(2, 3, 6, 2);
INSERT INTO `GolesPartidos` VALUES(2, 4, 5, 3);
INSERT INTO `GolesPartidos` VALUES(2, 4, 11, 1);
INSERT INTO `GolesPartidos` VALUES(3, 4, 16, 4);
INSERT INTO `GolesPartidos` VALUES(3, 4, 17, 1);
INSERT INTO `GolesPartidos` VALUES(3, 1, 18, 4);
INSERT INTO `GolesPartidos` VALUES(3, 1, 22, 2);
INSERT INTO `GolesPartidos` VALUES(4, 3, 12, 3);
INSERT INTO `GolesPartidos` VALUES(4, 2, 19, 3);
INSERT INTO `GolesPartidos` VALUES(4, 2, 24, 2);
INSERT INTO `GolesPartidos` VALUES(5, 2, 13, 2);
INSERT INTO `GolesPartidos` VALUES(5, 2, 7, 2);
INSERT INTO `GolesPartidos` VALUES(5, 2, 2, 2);
INSERT INTO `GolesPartidos` VALUES(5, 4, 4, 2);
INSERT INTO `GolesPartidos` VALUES(6, 1, 10, 5);
INSERT INTO `GolesPartidos` VALUES(6, 1, 15, 4);
INSERT INTO `GolesPartidos` VALUES(6, 3, 20, 4);
INSERT INTO `GolesPartidos` VALUES(6, 3, 28, 2);
INSERT INTO `GolesPartidos` VALUES(6, 3, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Jugadores`
--

CREATE TABLE `Jugadores` (
  `Id Jugador` int(8) NOT NULL AUTO_INCREMENT,
  `Id Equipo` int(8) NOT NULL,
  `Id Torneo` int(8) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Correo` varchar(25) NOT NULL,
  `Telefono` text NOT NULL,
  `Fecha Nacimineto` date NOT NULL,
  `Cuenta` varchar(8) NOT NULL,
  PRIMARY KEY (`Id Jugador`)
) TYPE=MyISAM  AUTO_INCREMENT=29 ;

--
-- Dumping data for table `Jugadores`
--

INSERT INTO `Jugadores` VALUES(1, 1, 1, 'Claudio Castellanos', 'prueba_@gmail.com', '93146559', '1991-01-01', '11294320');
INSERT INTO `Jugadores` VALUES(2, 2, 1, 'Javier Espinal', 'prueba_@gmail.com', '97401938', '1991-01-01', '11190979');
INSERT INTO `Jugadores` VALUES(3, 3, 1, 'Jafet Baquedano', 'prueba_@gmail.com', '93878258', '1991-01-01', '10851131');
INSERT INTO `Jugadores` VALUES(4, 4, 1, 'Marco Flores', 'prueba_@gmail.com', '97525789', '1991-01-01', '11304670');
INSERT INTO `Jugadores` VALUES(5, 4, 1, 'Fernando Pineda', 'prueba_@gmail.com', '97433796', '1991-01-01', '10565707');
INSERT INTO `Jugadores` VALUES(6, 3, 1, 'Ricardo Zacapa', 'prueba_@gmail.com', '92079436', '1991-01-01', '10275306');
INSERT INTO `Jugadores` VALUES(7, 2, 1, 'Jose Landa', 'prueba_@gmail.com', '99808941', '1991-01-01', '11092871');
INSERT INTO `Jugadores` VALUES(8, 1, 1, 'Luis Cordoba', 'prueba_@gmail.com', '99773031', '1991-01-01', '10937063');
INSERT INTO `Jugadores` VALUES(9, 2, 1, 'Armando Pineda', 'prueba_@gmail.com', '98817305', '1991-01-01', '10151455');
INSERT INTO `Jugadores` VALUES(10, 1, 1, 'Barner Rodriguez', 'prueba_@gmail.com', '95885065', '1991-01-01', '10792097');
INSERT INTO `Jugadores` VALUES(11, 4, 1, 'Max Baires', 'prueba_@gmail.com', '97079046', '1991-01-01', '11126457');
INSERT INTO `Jugadores` VALUES(12, 3, 1, 'Carlos Calderon', 'prueba_@gmail.com', '96113083', '1991-01-01', '11326647');
INSERT INTO `Jugadores` VALUES(13, 2, 1, 'Erwin Boquin', 'prueba_@gmail.com', '95287384', '1991-01-01', '10672181');
INSERT INTO `Jugadores` VALUES(14, 3, 1, 'Miguel Calderon', 'prueba_@gmail.com', '97911992', '1991-01-01', '10315583');
INSERT INTO `Jugadores` VALUES(15, 1, 1, 'Oscar Aguirre', 'prueba_@gmail.com', '94226139', '1991-01-01', '11092339');
INSERT INTO `Jugadores` VALUES(16, 4, 1, 'Gerrardo Midence', 'prueba_@gmail.com', '93104625', '1991-01-01', '10626370');
INSERT INTO `Jugadores` VALUES(17, 4, 1, 'Angel Hernandez', 'prueba_@gmail.com', '91870606', '1991-01-01', '10794150');
INSERT INTO `Jugadores` VALUES(18, 1, 1, 'Martin Pastora', 'prueba_@gmail.com', '92244786', '1991-01-01', '11216665');
INSERT INTO `Jugadores` VALUES(19, 2, 1, 'Mario Portillo', 'prueba_@gmail.com', '99919052', '1991-01-01', '10871401');
INSERT INTO `Jugadores` VALUES(20, 3, 1, 'Denis Lardizabal', 'prueba_@gmail.com', '95798983', '1991-01-01', '10607529');
INSERT INTO `Jugadores` VALUES(21, 3, 1, 'Manuel Gomez', 'prueba_@gmail.com', '98343787', '1991-01-01', '10325493');
INSERT INTO `Jugadores` VALUES(22, 1, 1, 'Rodolfo Fonseca', 'prueba_@gmail.com', '98382144', '1991-01-01', '10217690');
INSERT INTO `Jugadores` VALUES(23, 4, 1, 'Anselmo Jaramillo', 'prueba_@gmail.com', '95602112', '1991-01-01', '10912500');
INSERT INTO `Jugadores` VALUES(24, 2, 1, 'Roberto Figueroa', 'prueba_@gmail.com', '91112929', '1991-01-01', '10230371');
INSERT INTO `Jugadores` VALUES(25, 2, 1, 'Juan Perez', 'prueba_@gmail.com', '92795964', '1991-01-01', '10675767');
INSERT INTO `Jugadores` VALUES(26, 1, 1, 'Swammy Antunez', 'prueba_@gmail.com', '93645883', '1991-01-01', '10478855');
INSERT INTO `Jugadores` VALUES(27, 4, 1, 'Edgar Hernandez', 'prueba_@gmail.com', '96651362', '1991-01-01', '10770741');
INSERT INTO `Jugadores` VALUES(28, 3, 1, 'Luis Benda?a', 'prueba_@gmail.com', '94219058', '1991-01-01', '10669444');

-- --------------------------------------------------------

--
-- Table structure for table `Partidos`
--

CREATE TABLE `Partidos` (
  `IdPartido` int(8) NOT NULL AUTO_INCREMENT,
  `IdEquipoA` int(8) NOT NULL,
  `IdEquipoB` int(8) NOT NULL,
  `FechaPartido` date NOT NULL,
  `Lugar` text NOT NULL,
  `Jornada` int(4) NOT NULL,
  `GolesA` int(4) NOT NULL,
  `GolesB` int(4) NOT NULL,
  PRIMARY KEY (`IdPartido`),
  UNIQUE KEY `IdEquipoA` (`IdEquipoA`,`IdEquipoB`)
) TYPE=MyISAM  AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Partidos`
--

INSERT INTO `Partidos` VALUES(1, 1, 2, '0000-00-00', 'Canchita ', 1, 1, 2);
INSERT INTO `Partidos` VALUES(2, 3, 4, '0000-00-00', 'Canchita ', 1, 2, 4);
INSERT INTO `Partidos` VALUES(3, 4, 1, '0000-00-00', 'Canchita ', 1, 5, 6);
INSERT INTO `Partidos` VALUES(4, 3, 2, '0000-00-00', 'Canchita ', 2, 3, 5);
INSERT INTO `Partidos` VALUES(5, 2, 4, '0000-00-00', 'Canchita ', 2, 6, 2);
INSERT INTO `Partidos` VALUES(6, 1, 3, '0000-00-00', 'Canchita ', 2, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `Torneo`
--

CREATE TABLE `Torneo` (
  `IdTorneo` int(8) NOT NULL AUTO_INCREMENT,
  `Nombre` text NOT NULL,
  `FechaLimiteInscripcion` date NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaLimiteCambios` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `Rama` text NOT NULL,
  PRIMARY KEY (`IdTorneo`)
) TYPE=MyISAM  AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Torneo`
--

INSERT INTO `Torneo` VALUES(1, 'Emprendedores', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Masculina');

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE `Usuarios` (
  `IdUsuario` int(8) NOT NULL,
  `Usuario` text NOT NULL,
  `Contraseña` text NOT NULL,
  `NombreUsuario` text NOT NULL,
  `ApellidoUsuario` text NOT NULL,
  `CuentaUsuario` text NOT NULL,
  `CorreoUsuario` text NOT NULL,
  `TelefonoUsuario` text NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `EsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) TYPE=MyISAM;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` VALUES(1, 'usuario1', '12345', 'Jafet', 'Baquedano', '11063983', 'ba@hotmail.com', '98745867', '0000-00-00', 0);
INSERT INTO `Usuarios` VALUES(2, 'usuario2', '12345', 'Alexis', 'Sanchez', '11030195', 'A_san@gmail.com', '35647859', '0000-00-00', 1);
INSERT INTO `Usuarios` VALUES(3, 'usuario3', '12345', 'Raul', 'Gonzalez', '10715105', 'R_G@unitec.edu', '87958485', '0000-00-00', 0);
