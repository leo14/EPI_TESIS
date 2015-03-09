-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2014 a las 15:14:54
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_consulta` text NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_telefono` varchar(255) NOT NULL,
  `con_fecha` datetime NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`con_id`, `con_consulta`, `con_email`, `con_telefono`, `con_fecha`) VALUES
(1, 'hggffhgfhf\r\ngjgjkhkj\r\nkjhkjhjk', 'khjkhk', 'gfgfhg', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

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
(29, 1, 1417740902, 1417742702, 0, '::1', 1, 1417740902, NULL, NULL),
(30, 1, 1418220892, 1418222692, 0, '::1', 1, 1418220892, NULL, NULL),
(31, 1, 1418229297, 1418231097, 0, '::1', 1, 1418229297, 1418229607, '::1'),
(32, 6, 1418249751, 1418251551, 0, '::1', 1, 1418249751, 1418249850, '::1'),
(33, 1, 1418249860, 1418251660, 0, '::1', 1, 1418249860, NULL, NULL),
(34, 1, 1418305603, 1418307403, 0, '::1', 1, 1418305603, NULL, NULL),
(35, 1, 1418655632, 1418657432, 0, '::1', 1, 1418655632, 1418656309, '::1'),
(36, 1, 1418656806, 1418658606, 0, '::1', 1, 1418656806, NULL, NULL),
(37, 1, 1418658911, 1418660711, 0, '::1', 1, 1418658911, NULL, NULL),
(38, 1, 1418786820, 1418788620, 0, '::1', 1, 1418786820, NULL, NULL),
(39, 1, 1418789332, 1418791132, 0, '::1', 1, 1418789332, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1418789332, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_titulo` varchar(255) NOT NULL,
  `no_subtitulo` varchar(255) NOT NULL,
  `no_cuerpo` text NOT NULL,
  `no_imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`no_id`, `no_titulo`, `no_subtitulo`, `no_cuerpo`, `no_imagen`) VALUES
(29, 'Un simulador matemático predice resultados de béisbol y futbol americano', 'COMPUTACIÓN', 'El razonamiento estratégico y la estadística empleada en la planificación de los partidos del béisbol y futbol americano fueron del interés de un grupo de científicos del Departamento de Computación en el Centro de Investigación y de Estudios Avanzados (Cinvestav), en México, al desarrollar un simulador basado en algoritmos matemáticos para predecir el desarrollo del partido.   \n\nEl doctor José Matías Alvarado Mentado, titular del proyecto, no es un aficionado a los deportes, pero le ha llamado la atención el uso de razonamiento estratégico empleado en el campo antes y durante un juego, por lo que desarrolló un simulador basado en algoritmos matemáticos.\n\n“Un juego de béisbol y el futbol americano puede analizarse desde un punto de vista matemático. Diseñamos un algoritmo que integra las reglas del juego, la probabilidad de ocurrencia de las jugadas conforme lo indican las estadísticas, las características de cada jugador por posición, y un módulo de estrategias que hace las veces de un manager, al tener la capacidad de tomar decisiones de acuerdo a la circunstancia del encuentro. \n\nLa programación utiliza la información que se incorpore al simulador, de tal manera que logre un juego lo más parecido a la realidad”, expone Matías Alvarado.   El algoritmo diseñado por los científicos del Cinvestav realiza las acciones de acuerdo con la información que previamente fue incorporada. Esto le permite simular un juego de donde sale victorioso el equipo con la mejor estrategia. “Los resultados que hemos obtenido se asemejan a los de un partido real, donde los equipos incorporan variables estratégicas”, apunta el titular del proyecto, quien pertenece al Sistema Nacional de Investigadores del Conacyt.  ', 'img_23831_thumb.jpg'),
(30, 'Posible cabezal lector para computadoras cuánticas', 'COMPUTACIÓN', 'Se podrían usar los centros nitrógeno-vacante de diamantes para construir componentes vitales destinados a las computadoras cuánticas. Sin embargo, hasta ahora no había sido posible leer de manera electrónica la información escrita ópticamente de tales sistemas.\n\nLos ordenadores de hoy día son binarios. Sus circuitos eléctricos, que pueden estar abiertos o cerrados, representan unos y ceros en bits binarios de información. En cambio, en las computadoras cuánticas los científicos esperan usar bits cuánticos, o "qubits". \n\nA diferencia de los ceros y unos binarios, se puede pensar en los qubits como flechas que representan la posición de un bit cuántico. La flecha podría representar un uno si apunta justo hacia arriba, o un cero si apunta justo hacia abajo, pero también podría representar cualquier otro número mediante las direcciones intermedias a las que apuntase. En física, a estas flechas se las llama estados cuánticos. Y para ciertos cálculos complejos, poder representar la información en muchos estados diferentes proporcionaría una gran ventaja sobre la computación binaria.', 'img_23857_thumb.jpg'),
(31, 'El avión solar emprenderá en marzo su primera vuelta al mundo', 'AERONÁUTICA', 'Se han necesitado doce años de cálculos, simulaciones, construcciones y pruebas para llegar al lanzamiento de la segunda versión del Solar Impulse, el único avión preparado para viajar alrededor del mundo con energía solar. \n\nEl reto es difícil: volar sin combustible, con un solo piloto y durante cinco días con sus noches sobre los océanos de un continente a otro.   “Cuando tuve la idea de este proyecto, los únicos aviones que podían volar así eran algunos prototipos de 4 metros y 50 gramos de carga. \n\nNecesitábamos tener la envergadura de un Jumbo y la masa de un coche: cada gramo es un peso para nosotros”, ha explicado en Madrid Bertrand Piccard, el promotor del proyecto y piloto de la nave.   El HB-SIB es el nombre de este avión solar monoplaza de fibra de carbono, que tiene una envergadura de 72 metros y un peso total de 2.300 kg, equivalente al de un coche. \n\nLos cuatro motores integrados, diez veces más ligeros que los convencionales, se alimentan por 17.000 células solares integradas en las alas. Durante el día, estas células también recargan las baterías de litio de 633 kg de peso, lo que permite al avión volar y tener una autonomía prácticamente ilimitada.', 'img_23885_thumb.jpg'),
(33, 'Revolucionario material convierte cualquier superficie en una pantalla táctil ', 'Una película flexible de plástico hecha de nanobrotes.', 'Unas películas transparentes con nanobrotes de carbono, unos tubos moleculares de carbono con apéndices en forma de bola, podrían convertir casi cualquier superficie, sea cual sea su forma, en un sensor de contacto.\nLas películas fueron desarrolladas por una start-up finlandesa, Canatu, y por ejemplo podrían utilizarse para agregar controles táctiles a consolas y cuadros de mando curvados en automóviles. Las películas son robustas y se pueden doblar varias veces alrededor de algo tan delgado como el cable de unos auriculares, así que podrían ser útiles para añadir botones a dispositivos flexibles.\nLas pantallas táctiles se fabrican normalmente superponiendo una lámina transparente de óxido de indio y estaño sobre una pantalla. Sin embargo, este material es frágil y no se puede utilizar en otra cosa que no sea una superficie plana. Desde hace tiempo una de las alternativas más prometedoras son los nanotubos de carbono individuales, ya que conducen muy bien la electricidad. Sin embargo, los nanotubos de carbono tienen un mal rendimiento en las pantallas táctiles debido a las malas conexiones eléctricas entre los distintos nanotubos. Los nanobrotes de carbono resultan mejores porque sus apéndices, similares a esferas, son particularmente eficaces a la hora de emitir electrones, lo que mejora las conexiones eléctricas.\nUn nanobrote está hecho de un tubo de átomos de carbono con un apéndice en forma de brote.\nCanatu está desarrollando 40 prototipos de producto. Recientemente, ha construido su primer equipo de fabricación a gran escala que puede producir suficiente película para cubrir cientos de miles de pantallas táctiles de teléfonos inteligentes cada mes. El próximo año la compañía planea instalar suficientes máquinas para abastecer a millones de smartphones.\nHasta ahora las películas con nanotubos de carbono han sido demasiado caras como para producirlas comercialmente. Los fundadores de Canatu, investigadores de la Universidad Aalto en Finlandia, mejoraron las conexiones eléctricas entre los nanotubos de carbono mediante la modificación de su forma y encontraron una forma de producir películas de nanobrotes a bajo coste.\nCrear películas de nanotubos de carbono de forma convencional es un proceso complejo que requiere costosas etapas de purificación que a veces pueden dañar los nanotubos. El enfoque de fabricación de Canatu empieza utilizando unos gases con carbono que se convierten directamente en nanobrotes y se depositan para crear una película transparente en un solo paso, sin necesidad de purificación.\nNo obstante, el material no es adecuado para uso en todas las aplicaciones. Por ejemplo, la conductividad no es lo suficientemente alta para pantallas de gran tamaño.\nSin embargo, las películas de nanobrotes se pueden estirar sobre una superficie, señala el vicepresidente de marketing y ventas, Erkki Soininena, y a veces más de un 200% sin perder demasiado rendimiento. La mayoría del resto de pantallas táctiles sólo se pueden estirar un pequeño porcentaje. El material se estira porque los nanobrotes de carbono son capaces de deslizarse unos sobre otros manteniendo al mismo tiempo un buen contacto eléctrico.', '306_DNCB_22.jpg'),
(36, 'Tatuajes a partir de una impresora 3D', 'Un estudio de diseño en París llamado Appropriate Audiences', 'La invención se llama Tatoué y es una cruza entre una impresora 3D Makerbot y la aguja utilizada por un tatuador -una máquina que ayuda a insertar la tinta en la piel usando una punta afilada.\n\nEl estudio adaptó un software de Autodesk para transformarlo en uno de diseño de tatuajes, que genere archivos digitales para ser descargados a la máquina. Así, los usuarios pueden insertar el miembro a tatuar a la impresora, que comenzará a dibujar el diseño en la piel. La aguja sirve para reemplazar la parte de la impresora que usualmente extraía el plástico derretido para transformarlo en objetos. Por otro lado, un sensor lee la superficie de la piel del usuario para que la aguja pueda responder a los cambios en la textura de la piel y las dimensiones del miembro.\n\nSegún la gente de Appropriate Audiences, la idea es brindar a los artistas una nueva herramienta que brinda muchísimas posibilidades. “Cualquier cosa que quieras puede ser diseñada en la computadora, y replicada en la piel. Estamos trabajado en desarrollar un software que sea más amigable con el usuario, en particular con los artistas del tatuaje.” La intención es que la maquina pueda llegar a más personas y se está trabajando en una versión que permita tatuar cualquier parte del cuerpo. Además los creadores aseguran que el dispositivo también tiene aplicaciones futuras para la medicina o la moda.\n', '306_EFDA_21.jpg'),
(37, 'Sorprendente material flexible podría otorgar sensibilidad a las prótesis ortopédicas', 'Investigadores de Corea del Sur y de Estados Unidos han desarrollado un polímero diseñado', 'Hay extremidades ortopédicas de alta tecnología cuyos dueños pueden controlar usando nervios, músculos o incluso el cerebro. Pero no existe forma de que el portador sepa si un objeto está abrasando o a punto de escaparse de su control.\r\n\r\nLos materiales que detectan el calor, la presión y la humedad podrían ayudar a cambiar esto al añadir capacidades sensitivas a la ortopedia. Un grupo de investigadores coreanos y estadounidenses ha desarrollado un polímero diseñado para imitar las capacidades elásticas y sensoriales de alta resolución de la piel verdadera.\r\n\r\nEl polímero está cuajado con densas redes de sensores hechos con oro y silicio ultrafinos. El silicio, que suele ser quebradizo, se configura en forma de serpentina que se puede estirar para permitir cierta flexibilidad. Los detalles del trabajo se han publicado en la revista Nature Communications.\r\n \r\nHace años que se desarrollan materiales elásticos sensitivos, pero este es el material más sensible aparecido hasta la fecha, con hasta 400 sensores por milímetro cuadrado.\r\n \r\n"Con estos sensores de alta resolución en todo el dedo, puedes dar la misma sensación táctil que transmitiría una mano normal al cerebro", explica uno de los participantes en la investigación Roozbeh Ghaffari, quien dirige el desarrollo de tecnologías avanzadas en MC10, una start-up de Cambridge, Massachusetts (EEUU), que desarrolla wearables basados en materiales flexibles cuajados de sensores.\r\n\r\nEs más, los investigadores han afinado los sensores para que tengan la flexibilidad adecuada dependiendo de su colocación en la mano. Usaron cámaras para capturar el movimiento y estudiar cómo se mueve y estira una mano de verdad y después aplicaron distintas formas de silicio a distintos puntos sobre la piel ortopédica para incorporar esa flexibilidad.\r\n \r\nPor último, en un esfuerzo por hacer que los materiales sean más realistas, han añadido una capa de actuadores que la calientan aproximadamente a la misma temperatura que la piel humana.\r\n \r\nEsta nueva piel inteligente solo resuelve uno de los retos de añadir la sensación a los dispositivos ortopédicos. El problema mayor es crear conexiones duraderas y robustas con el sistema nervioso humano para que el portador pueda "sentir" de verdad lo que detecta.\r\n\r\nEn una demostración burda de un interfaz de este tipo, el director del proyecto en la Universidad Nacional de Seúl (Corea del Sur), Dae-Hyeong Kim, conectó la piel inteligente con el cerebro de una rata y pudo medir las reacciones en el córtex sensitivo del animal ante estímulos sensoriales. Sin embargo, esto no demuestra que la rata sintiera calor, presión o humedad, ni hasta qué punto. "Para discernir las sensaciones exactas", afirma Kim, "tenemos que pasar a animales más grandes y ese será nuestro trabajo en el futuro".\r\n\r\nHay una brecha enorme entre lo que pueden hacer los materiales nuevos y lo que pueden transmitir las interfaces existentes realmente al cerebro humano, explica el profesor de ingeniería biomédica de la Universidad Case Western Reserve (EEUU), Dustin Tyler, experto en interfaces neuronales. "Esta demostración de concepto es interesante, pero queda mucho trabajo por hacer para demostrar la robustez y el rendimiento necesarios para traducir este dispositivo en manos ortopédicas prácticas", afirma.\r\n\r\nHace poco se probó la única interfaz capaz de devolver la sensación a un humano, cuando Tyler y sus colegas equiparon a un hombre de la zona de Cleveland (EEUU) que había perdido la mano con un sistema de estas características. El hombre controlaba la mano usando una interfaz muscular y unos 20 sensores sobre la mano ortopédica transmitían información sensorial a través del electrodo enganchado a un nervio en el muñón. Esto le permitía saber si había cogido algo blando, como una cereza, e impedir que aplastara la fruta.\r\n\r\n', '306_ANSZ_16.jpg'),
(38, 'Cierre Programa EPI 2014 y lanzamiento de su nueva convocatoria 2015', '11 y 12 de diciembre', 'La Dirección General de Investigación, Desarrollo e Innovación tiene el agrado de invitar al evento de cierre del Programa de Innovación para Estudiantes 2014 y al lanzamiento de su convocatoria 2015.\r\n\r\nEste evento se realizará este jueves 11 de diciembre en campus Concepción (auditorio de la Facultad de Ciencias Empresariales), desde las 11:00 horas. Y este viernes 12 de diciembre en campus Chillán (salón Andrés Bello, Centro de Extensión), desde las 11:00 horas.\r\n\r\nEn la oportunidad se hará entrega de los diplomas a los alumnos participantes y se presentarán las charlas de Diego Rodríguez, Gerente General de Consulting Design, empresa especialista en innovación por design thinking; y  Sergio Povea, joven emprendedor, CEO & Co Founder de Launch Card, aplicación móvil que facilita el networking; y  Emerson Marín, joven emprendedor serial, CEO & Founder de Lirmi, empresa desarrolladora de soluciones tecnológicas para escuelas y colegios', 'anuncios-facebook.png'),
(39, 'Programa EPI lanzó su nueva convocatoria 2015', 'En Chillán y Concepción se realizó el lanzamiento de la nueva convocatoria 2015', 'En Chillán y Concepción se realizó el lanzamiento de la nueva convocatoria 2015 del programa Estudiantes para la Innovación, EPI. Una iniciativa que se enmarca en el Convenio de Desempeño de Apoyo a la Innovación en Educación Superior (CDInES): “Explotación de Conocimientos e Innovación de Clase Mundial en Biomateriales y Eficiencia Energética para un Hábitat Sustentable”. Su principal objetivo es formar competencias innovadoras en alumnos de pre grado para que sean impulsores de proyectos de innovación vinculados con empresas e instituciones públicas. A la fecha ya han participado más de doscientos  alumnos de diversas carreras.\r\n \r\nEste evento se llevó a cabo este jueves 11 de diciembre en campus Concepción (auditorio de la Facultad de Ciencias Empresariales), y el viernes 12 de diciembre en campus Chillán (salón Andrés Bello, Centro de Extensión).\r\n \r\nEn la oportunidad se hizo entrega de los diplomas a los alumnos participantes y se presentaron las charlas de Diego Rodríguez, Gerente General de Consulting Design, empresa especialista en innovación por design thinking; y  Sergio Povea, joven emprendedor, CEO & Co Founder de Launch Card, aplicación móvil que facilita el networking.', 'DSC_5313.jpg');

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
