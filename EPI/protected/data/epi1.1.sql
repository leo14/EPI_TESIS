-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2014 a las 19:33:11
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
  PRIMARY KEY (`al_rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1414438308, 1414440108, 0, '::1', 1, 1414438308, 1414440056, '::1'),
(2, 1, 1414443939, 1414445739, 0, '::1', 1, 1414443939, 1414444095, '::1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1414443940, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_titulo` varchar(100) NOT NULL,
  `no_subtitulo` varchar(100) NOT NULL,
  `no_cuerpo` varchar(5000) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`no_id`, `no_titulo`, `no_subtitulo`, `no_cuerpo`) VALUES
(1, 'Conozca la revolucionaria tecnología de BABYBE', 'Dispositivo une a madre con bebé prematuro', 'Gracias a esta innovadora técnica, desde ahora los bebés prematuros que se encuentren dentro de la incubadora podrán recibir, en tiempo real, señales de la madre, como el latido de su corazón, respiración y voz, a través de una conexión inalámbrica que recoge dichos impulsos y los lleva hasta el colchón donde se encuentra el recién nacido.  Un salto cualitativo enorme es el que ofrece BABYBE en el delicado vínculo que existe entre madre e hijo prematuro. Hasta antes del desarrollo de este innovador invento nacional, la única opción que tenían las progenitoras de estos pequeños bebés, era que a estos los sacaran de la incubadora para llevarlos a los brazos de sus madres por algunas horas al día, con todos los riesgos infecciosos y de otro tipo que conlleva el procedimiento para el recién nacido.'),
(2, 'DICTUC entrega claves para innovar en la empresa', 'Seminario Taller destacó carácter colaborativo que identifica a la innovación', 'Con una lúdica actividad en equipo, basada en la construcción de una estructura en base a fideos y marshmallow, entre otros elementos, se inició el Seminario Taller “La Innovación ha muerto. Larga vida a la innovación” que dictó Aukan Gestión de la Innovación DICTUC el pasado jueves 23 de octubre en el Centro de Innovación UC.  El evento, al cual asistieron diversos representantes de empresas, se organizó en torno a una serie de aprendizajes, el primero de los cuales correspondió al importante rol que cumple el prototipado en el desarrollo de un emprendimiento e innovación, particularmente enfatizando la necesaria práctica de juego y error. En este marco se inscribió precisamente la competencia inicial.'),
(3, 'México y BID impulsan la innovación en energía sustentable', 'Se financiarán proyectos para la I+D de tecnologías en el sector de energía', 'El Fondo CONACYT-SENER de Sustentabilidad Energética (FSE) y el Programa IDEAS del Banco Interamericano de Desarrollo (BID) anuncian el lanzamiento de la Convocatoria 2014 para el financiamiento de proyectos innovadores de energía en México y la región de América Latina y el Caribe.  La convocatoria FSE-IDEAS representa un hito en la historia de la ciencia, tecnología e innovación energética en México, América Latina y el Caribe. Su importancia radica en el financiamiento de proyectos para la investigación y desarrollo de novedosas tecnologías en el sector de energía con potencial para beneficiar a toda la región.  En esta ocasión, se busca apoyar propuestas en la categoría de consorcios liderados por una institución mexicana de educación superior o centro de identificación en asociación con países de la región, además de propuestas en el sector de energía innovadoras en la categoría individual provenientes de cualquier otro país miembro prestatario del BID.  Los ganadores de esta edición tendrán la oportunidad de ser premiados en la categoría de Consorcios y propuestas individuales ya que se aportaran recursos de hasta US$200,000 a proyectos de investigación y desarrollo tecnológico, con el objetivo de promover la integración e innovación en tecnologías de alto impacto en el sector energético en America Latina y el Caribe. Las solicitudes deberán recibirse antes del 15 de enero de 2015.'),
(4, 'Reservar hora al médico con un simple mensaje de texto', 'Hora Salud, destacado emprendimiento nacional', 'Gracias a esta innovadora plataforma, que ha sido probada con éxito como piloto en dos comunas de Santiago, atrás van a ir quedando las eternas esperas para tomar horas en los consultorios del país. Con Hora Salud basta el envío de un SMS por celular al establecimiento médico, y la hora queda agendada en la atención primaria.  Como cercanos testigos del eterno problema que viven miles de personas para tomar hora en los consultorios, los encargados de Hora Salud, vieron que podían aportar al país mediante una plataforma que solucionara este endémico mal. Como cuenta a Innovación.cl Jocelyn Durán, directora general de este emprendimiento, junto con aportar en esta materia en particular, además, queremos educar a la gente en materia de salud.  El funcionamiento de Hora Salud es bastante simple para el usuario. Durán explica que la persona debe enviar un SMS a Hora Salud, con su RUT y la especialidad que necesita ser atendida. “Por ejemplo, si busca que lo atienda un médico general, pone la sigla MG. Después, Hora Salud, revisa la disponibilidad del consultorio y las características como pacientes y le responde con dos opciones de hora. Generalmente, ofrecen dos opciones, una en la mañana y otra en la tarde, para que escojan según sus propias disponibilidades. Y después el usuario debe responder cuál de las dos horas prefiere, con lo que la hora queda reservada”.');

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
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
