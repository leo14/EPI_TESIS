-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2014 a las 02:43:13
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `epi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `al_rut` varchar(15) NOT NULL,
  `al_nombre` varchar(100) NOT NULL,
  `al_carrera` varchar(100) NOT NULL,
  `al_email` varchar(30) NOT NULL,
  `al_telefono` varchar(25) NOT NULL,
  `al_comentario` varchar(100) NOT NULL,
  `al_clave` varchar(100) NOT NULL,
  `al_paterno` varchar(100) NOT NULL,
  `al_materno` varchar(100) NOT NULL,
  `al_campus` varchar(100) NOT NULL,
  `al_email2` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`al_rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`al_rut`, `al_nombre`, `al_carrera`, `al_email`, `al_telefono`, `al_comentario`, `al_clave`, `al_paterno`, `al_materno`, `al_campus`, `al_email2`) VALUES
('121231', 'saSAs', 'dsadasd', 'sadaS', '321321', 'DASDASD', 'AS', '0', '', '', ''),
('12321', 'leo', 'sadsad', 'dsafas', 'dsafsad', 'dsaf', 'sdaf', '0', '', '', ''),
('17641416-2', 'leonardo', 'ici', 'leo@hotmail.com', '7663213', 'nasdasd', '123', '0', '', '', ''),
('179122022', 'sa', 'informatica', 'dsads@hotma.com', '2342432', 'sdasdsa', '1234', 'carril', 'monsalvez', 'concepcion', ''),
('213213', 'leito', 'dsadas', 'dsfa@hotma.com', 'asdfdsaf', 'dsfas', 'dsf', '0', '', '', ''),
('3123123', 'dasdas', 'IECI', 'eqweqwe', 'sadasd', 'fsadfdsf', 'sdaf', '0', '', '', ''),
('qweqw', 'sdsfas', 'ici', 'ee2', 'wedqweq', 'wqeqwe', 'wqeq', '0', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authassignment`
--

INSERT INTO `cruge_authassignment` (`userid`, `bizrule`, `data`, `itemname`) VALUES
(4, NULL, 'N;', 'alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_alumno_admin', 0, '', NULL, 'N;'),
('action_alumno_create', 0, '', NULL, 'N;'),
('action_alumno_delete', 0, '', NULL, 'N;'),
('action_alumno_index', 0, '', NULL, 'N;'),
('action_alumno_update', 0, '', NULL, 'N;'),
('action_alumno_view', 0, '', NULL, 'N;'),
('action_noticia_admin', 0, '', NULL, 'N;'),
('action_noticia_create', 0, '', NULL, 'N;'),
('action_noticia_delete', 0, '', NULL, 'N;'),
('action_noticia_index', 0, '', NULL, 'N;'),
('action_noticia_update', 0, '', NULL, 'N;'),
('action_noticia_view', 0, '', NULL, 'N;'),
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('alumno', 2, '', '', 'N;'),
('controller_alumno', 0, '', NULL, 'N;'),
('controller_noticia', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, 'C:\\wamp\\www\\EPI\\EPI\\protected\\modules\\cruge\\views\\ui\\usermanagementupdate.php linea 114', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('alumno', 'action_noticia_view');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1414438308, 1414440108, 0, '::1', 1, 1414438308, 1414440056, '::1'),
(2, 1, 1414443939, 1414445739, 0, '::1', 1, 1414443939, 1414444095, '::1'),
(3, 1, 1415193076, 1415194876, 0, '::1', 1, 1415193076, 1415193702, '::1'),
(4, 4, 1415200520, 1415202320, 0, '::1', 1, 1415200520, 1415201036, '::1'),
(5, 1, 1415201041, 1415202841, 0, '::1', 1, 1415201041, 1415201094, '::1'),
(6, 4, 1415201120, 1415202920, 0, '::1', 1, 1415201120, 1415201146, '::1'),
(7, 1, 1415201156, 1415202956, 0, '::1', 2, 1415201420, NULL, NULL),
(8, 4, 1415201268, 1415203068, 0, '::1', 1, 1415201268, 1415201366, '::1'),
(9, 4, 1415201370, 1415203170, 0, '::1', 1, 1415201370, 1415201410, '::1'),
(10, 4, 1415278139, 1415279939, 0, '::1', 1, 1415278139, NULL, NULL),
(11, 4, 1415279946, 1415281746, 0, '127.0.0.1', 1, 1415279946, NULL, NULL),
(12, 4, 1415282040, 1415283840, 0, '::1', 1, 1415282040, NULL, NULL),
(13, 4, 1415283889, 1415285689, 0, '::1', 1, 1415283889, NULL, NULL),
(14, 4, 1415286116, 1415287916, 0, '::1', 1, 1415286116, 1415286122, '::1'),
(15, 1, 1415286132, 1415287932, 1, '::1', 1, 1415286132, NULL, NULL),
(16, 4, 1415716414, 1415718214, 0, '::1', 1, 1415716414, 1415716851, '::1'),
(17, 5, 1415716940, 1415718740, 0, '::1', 1, 1415716940, 1415717260, '::1'),
(18, 4, 1415717530, 1415719330, 0, '::1', 1, 1415717530, 1415717601, '::1'),
(19, 4, 1415717606, 1415719406, 1, '::1', 1, 1415717606, NULL, NULL),
(20, 4, 1417609018, 1417610818, 0, '::1', 1, 1417609018, 1417609272, '::1'),
(21, 4, 1417615631, 1417617431, 0, '::1', 1, 1417615631, 1417615638, '::1'),
(22, 6, 1417617250, 1417619050, 0, '::1', 1, 1417617250, NULL, NULL),
(23, 6, 1417704261, 1417706061, 0, '::1', 1, 1417704261, 1417704267, '::1'),
(24, 1, 1417704281, 1417706081, 0, '::1', 1, 1417704281, NULL, NULL),
(25, 1, 1417707051, 1417708851, 0, '::1', 1, 1417707051, NULL, NULL),
(26, 1, 1417709112, 1417710912, 0, '::1', 1, 1417709112, 1417709267, '::1'),
(27, 1, 1417712594, 1417714394, 0, '::1', 1, 1417712594, NULL, NULL),
(28, 1, 1417728953, 1417730753, 0, '::1', 1, 1417728953, NULL, NULL),
(29, 1, 1417740902, 1417742702, 0, '::1', 1, 1417740902, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 30, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1417740902, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0),
(4, 1415200361, 1415200361, 1417615631, '213213', 'dsfa@hotma.com', 'dsf', NULL, 1, 0, 0),
(5, 1415716843, 1415716843, 1415716940, '17641416-2', 'leo@hotmail.com', '123', NULL, 1, 0, 0),
(6, 1417617217, 1417617217, 1417704261, '179122022', 'dsads@hotma.com', '1234', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_titulo` varchar(100) NOT NULL,
  `no_subtitulo` varchar(100) NOT NULL,
  `no_cuerpo` varchar(5000) NOT NULL,
  `no_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`no_id`, `no_titulo`, `no_subtitulo`, `no_cuerpo`, `no_imagen`) VALUES
(22, 'KunCorporation » Auto Nuclear', 'Leo ', 'Nuestro diseño NO es tan futurista como el de Cadillac. Esto es para poder lograr un producto comercial ahora. Nuestro “Xion Nuclear Car” será vendido a los alemanes', 'Web-Auto-2.jpg'),
(26, 'Puertas sin polillas', 'sdfdsfasd', 'fadsfsadfsdaf', 'consejos-para-cuidar-las-puertas-de-madera1.jpg'),
(27, 'Concentrador solar para obtener energía de las ventanas sin impedir la visión a través de estas', 'INGENIERÍA', 'La creación reciente de un nuevo tipo de concentrador solar que cuando es empleado para recubrir una ventana con él captura energía solar sin evitar que la gente pueda ver con normalidad a través de la ventana, está despertando grandes expectativas.', 'img_23675_thumb.jpg'),
(28, 'Récord de aceleración en un automóvil eléctrico', 'INGENIERÍA', 'Los automóviles eléctricos han venido adoleciendo de una aceleración muy baja. A diferencia de un coche tradicional con motor de combustión interna que puede arrancar y alcanzar de inmediato una velocidad muy alta si se quiere, el auto eléctrico típico comienza a circular despacio', 'img_23453_thumb.jpg'),
(29, 'Un simulador matemático predice resultados de béisbol y futbol americano', 'COMPUTACIÓN', 'El razonamiento estratégico y la estadística empleada en la planificación de los partidos del béisbol y futbol americano fueron del interés de un grupo de científicos del Departamento de Computación en el Centro de Investigación y de Estudios Avanzados (Cinvestav), en México, al desarrollar un simulador basado en algoritmos matemáticos para predecir el desarrollo del partido.   El doctor José Matías Alvarado Mentado, titular del proyecto, no es un aficionado a los deportes, pero le ha llamado la atención el uso de razonamiento estratégico empleado en el campo antes y durante un juego, por lo que desarrolló un simulador basado en algoritmos matemáticos.   “Un juego de béisbol y el futbol americano puede analizarse desde un punto de vista matemático. Diseñamos un algoritmo que integra las reglas del juego, la probabilidad de ocurrencia de las jugadas conforme lo indican las estadísticas, las características de cada jugador por posición, y un módulo de estrategias que hace las veces de un manager, al tener la capacidad de tomar decisiones de acuerdo a la circunstancia del encuentro. La programación utiliza la información que se incorpore al simulador, de tal manera que logre un juego lo más parecido a la realidad”, expone Matías Alvarado.   El algoritmo diseñado por los científicos del Cinvestav realiza las acciones de acuerdo con la información que previamente fue incorporada. Esto le permite simular un juego de donde sale victorioso el equipo con la mejor estrategia. “Los resultados que hemos obtenido se asemejan a los de un partido real, donde los equipos incorporan variables estratégicas”, apunta el titular del proyecto, quien pertenece al Sistema Nacional de Investigadores del Conacyt.  ', 'img_23831_thumb.jpg'),
(30, 'Posible cabezal lector para computadoras cuánticas', 'COMPUTACIÓN', 'Se podrían usar los centros nitrógeno-vacante de diamantes para construir componentes vitales destinados a las computadoras cuánticas. Sin embargo, hasta ahora no había sido posible leer de manera electrónica la información escrita ópticamente de tales sistemas.   Los ordenadores de hoy día son binarios. Sus circuitos eléctricos, que pueden estar abiertos o cerrados, representan unos y ceros en bits binarios de información. En cambio, en las computadoras cuánticas los científicos esperan usar bits cuánticos, o "qubits". A diferencia de los ceros y unos binarios, se puede pensar en los qubits como flechas que representan la posición de un bit cuántico. La flecha podría representar un uno si apunta justo hacia arriba, o un cero si apunta justo hacia abajo, pero también podría representar cualquier otro número mediante las direcciones intermedias a las que apuntase. En física, a estas flechas se las llama estados cuánticos. Y para ciertos cálculos complejos, poder representar la información en muchos estados diferentes proporcionaría una gran ventaja sobre la computación binaria.', 'img_23857_thumb.jpg'),
(31, 'El avión solar emprenderá en marzo su primera vuelta al mundo', 'AERONÁUTICA', 'Se han necesitado doce años de cálculos, simulaciones, construcciones y pruebas para llegar al lanzamiento de la segunda versión del Solar Impulse, el único avión preparado para viajar alrededor del mundo con energía solar. El reto es difícil: volar sin combustible, con un solo piloto y durante cinco días con sus noches sobre los océanos de un continente a otro.   “Cuando tuve la idea de este proyecto, los únicos aviones que podían volar así eran algunos prototipos de 4 metros y 50 gramos de carga. Necesitábamos tener la envergadura de un Jumbo y la masa de un coche: cada gramo es un peso para nosotros”, ha explicado en Madrid Bertrand Piccard, el promotor del proyecto y piloto de la nave.   El HB-SIB es el nombre de este avión solar monoplaza de fibra de carbono, que tiene una envergadura de 72 metros y un peso total de 2.300 kg, equivalente al de un coche. Los cuatro motores integrados, diez veces más ligeros que los convencionales, se alimentan por 17.000 células solares integradas en las alas. Durante el día, estas células también recargan las baterías de litio de 633 kg de peso, lo que permite al avión volar y tener una autonomía prácticamente ilimitada.', 'img_23885_thumb.jpg');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
