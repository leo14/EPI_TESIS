-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-01-2015 a las 14:50:39
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
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_semestre` varchar(10) NOT NULL,
  `act_campus` varchar(20) NOT NULL,
  `act_nombre` varchar(255) NOT NULL,
  `act_fecha` varchar(255) NOT NULL,
  `act_horaInicio` varchar(20) NOT NULL,
  `act_horaFin` varchar(20) NOT NULL,
  `act_lugar` varchar(255) DEFAULT NULL,
  `act_descripcion` text,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`act_id`, `con_semestre`, `act_campus`, `act_nombre`, `act_fecha`, `act_horaInicio`, `act_horaFin`, `act_lugar`, `act_descripcion`) VALUES
(3, '2015-1', 'Chillan', 'Taller 1', '2014-12-26', '15:20', '16:40', 'Auditorio', 'Se realizaran actividades de focus group'),
(4, '2015-1', 'Concepción', 'Taller 2', '2015-01-16', '12:30', '01:40', 'Auditorio Face', 'Llevar a la practica la teoría aprendida en los talleres anteriores'),
(5, '2015-2', 'Concepción', 'Taller 2015-2', '2015-01-16', '12:30', '01:40', 'Auditorio Face', 'Llevar a la practica la teoría aprendida en los talleres anteriores');

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
  `al_estado` varchar(255) DEFAULT NULL,
  `con_semestre` varchar(10) NOT NULL,
  PRIMARY KEY (`al_rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`al_rut`, `al_nombre`, `al_carrera`, `al_email`, `al_telefono`, `al_comentario`, `al_clave`, `al_paterno`, `al_materno`, `al_campus`, `al_email2`, `al_estado`, `con_semestre`) VALUES
('11.111.111-1', 'Samuel', 'Ingeniería Civil en Informática', 'samuel_03061991@hotmail.com', '76421049', 'terminar mi tesis', 'SamuelCarril2015-2', 'Carril', 'Monsalvez', 'Concepción', '', 'Rechazado', '2015-2'),
('12.305.014-2', 'Claudio', 'Comercial', 'cinzunza@ubiobio.cl', '324224354', 'Me gusta', 'ClaudioInzunza2015-1', 'Inzunza', 'Villena', 'Chillán', 'dor@dk.cl', 'Aceptado', '2015-1'),
('17.912.202-2', 'Samuel', 'Ingeniería Civil en Informática', 'scarril@alumnos.ubiobio.cl', '76421049', 'generar un tesis innovadora', 'SamuelCarril2015-2', 'Carril', 'Monsalvez', 'Concepción', '', 'Aceptado', '2015-2'),
('9.640.184-1', 'Carlos', 'hjgjhg', 'dfgfh@gyyugu.com', '34354434', 'fdfgdfdgfd', '', 'Peres', 'ggfghf', 'fdgdgf', '', 'Rechazado', '2015-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnoproyecto`
--

CREATE TABLE IF NOT EXISTS `alumnoproyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `al_rut` varchar(15) NOT NULL,
  `pro_idProyecto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `alumnoproyecto`
--

INSERT INTO `alumnoproyecto` (`id`, `al_rut`, `pro_idProyecto`) VALUES
(1, '12.305.014-2', 3),
(6, '17.912.202-2', 5),
(7, '17.912.202-2', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreracampus`
--

CREATE TABLE IF NOT EXISTS `carreracampus` (
  `ca_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_carrera` varchar(255) NOT NULL,
  `ca_campus` varchar(255) NOT NULL,
  PRIMARY KEY (`ca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `carreracampus`
--

INSERT INTO `carreracampus` (`ca_id`, `ca_carrera`, `ca_campus`) VALUES
(1, 'Programa de Bachillerato en Ciencias', 'Concepción'),
(2, 'Arquitectura', 'Concepción'),
(3, 'Contador Público y Auditor', 'Concepción'),
(4, 'Diseño Industrial', 'Concepción'),
(5, 'Ingeniería Civil', 'Concepción'),
(6, 'Ingeniería Civil Eléctrica', 'Concepción'),
(7, 'Ingeniería Civil en Automatización', 'Concepción'),
(8, 'Ingeniería Civil en Industrias de la Madera', 'Concepción'),
(9, 'Ingeniería Civil en Informática', 'Concepción'),
(10, 'Ingeniería Civil Industrial', 'Concepción'),
(11, 'Ingeniería Civil Química', 'Concepción'),
(12, 'Ingeniería Comercial', 'Concepción'),
(13, 'Ingeniería de Ejecución en Computación e Informática', 'Concepción'),
(14, 'Ingeniería de Ejecución en Electrónica', 'Concepción'),
(15, 'Ingeniería de Ejecución en Electricidad', 'Concepción'),
(16, 'Ingeniería de Ejecución en Mecánica', 'Concepción'),
(17, 'Ingeniería en Construcción', 'Concepción'),
(18, 'Ingeniería Estadística', 'Concepción'),
(19, 'Trabajo Social', 'Concepción'),
(20, 'Ingeniería Civil Mecánica', 'Concepción'),
(21, 'Programa de Bachillerato en Ciencias', 'Chillán'),
(22, 'Contador Público y Auditor', 'Chillán'),
(23, 'Diseño Gráfico', 'Chillán'),
(24, 'Enfermería', 'Chillán'),
(25, 'Fonoaudiología', 'Chillán'),
(26, 'Ingeniería Civil en Informática', 'Chillán'),
(27, 'Ingeniería Comercial', 'Chillán'),
(28, 'Ingeniería en Alimentos', 'Chillán'),
(29, 'Ingeniería en Recursos Naturales', 'Chillán'),
(30, 'Nutrición y Dietética', 'Chillán'),
(31, 'Pedagogía en Castellano y Comunicación', 'Chillán'),
(32, 'Pedagogía en Ciencias Naturales con mención Biología, Física o Química', 'Chillán'),
(33, 'Pedagogía en Educación Física', 'Chillán'),
(34, 'Pedagogía en Educación General Básica', 'Chillán'),
(35, 'Pedagogía en Educación Matemática', 'Chillán'),
(36, 'Pedagogía en Educación Parvularia', 'Chillán'),
(37, 'Pedagogía en Historia y Geografía', 'Chillán'),
(38, 'Pedagogía en Inglés', 'Chillán'),
(39, 'Psicología', 'Chillán'),
(40, 'Trabajo Social', 'Chillán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartagantt`
--

CREATE TABLE IF NOT EXISTS `cartagantt` (
  `pro_idProyecto` int(11) NOT NULL,
  `cg_inicio1` date DEFAULT NULL,
  `cg_fin1` date DEFAULT NULL,
  `cg_inicio2` date DEFAULT NULL,
  `cg_fin2` date DEFAULT NULL,
  `cg_inicio3` date DEFAULT NULL,
  `cg_fin3` date DEFAULT NULL,
  `cg_inicio4` date DEFAULT NULL,
  `cg_fin4` date DEFAULT NULL,
  `cg_inicio5` date DEFAULT NULL,
  `cg_fin5` date DEFAULT NULL,
  PRIMARY KEY (`pro_idProyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cartagantt`
--

INSERT INTO `cartagantt` (`pro_idProyecto`, `cg_inicio1`, `cg_fin1`, `cg_inicio2`, `cg_fin2`, `cg_inicio3`, `cg_fin3`, `cg_inicio4`, `cg_fin4`, `cg_inicio5`, `cg_fin5`) VALUES
(5, '2015-03-01', '2015-05-11', '2015-04-26', '2015-05-03', '2015-03-25', '2015-04-30', '2015-01-23', '2015-06-26', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_id` int(11) NOT NULL,
  `co_texto` text NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`co_id`, `cu_id`, `co_texto`) VALUES
(1, 2, 'saasss'),
(2, 2, 'saasss'),
(3, 2, 'saasss'),
(4, 2, 'hola'),
(5, 2, 'hola'),
(6, 2, 'hola'),
(7, 2, 'hola'),
(8, 2, 'hola'),
(9, 2, 'hola'),
(10, 2, 'hola'),
(11, 2, 'hola'),
(12, 2, 'LOBO'),
(13, 1, 'PRIMER CURSO'),
(14, 1, 'PRIMER CURSO'),
(15, 1, 'PRIMER CURSO'),
(16, 2, 'hjhjkjhkj\r\nnmn,m\r\n\r\n123'),
(17, 2, 'hjhjkjhkj\r\nnmn,m\r\n\r\n123'),
(18, 2, 'hjhjkjhkj\r\nnmn,m\r\n\r\n123'),
(19, 2, 'hjhjkjhkj\r\nnmn,m\r\n\r\n123'),
(20, 2, 'link a video');

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
  `con_estado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`con_id`, `con_consulta`, `con_email`, `con_telefono`, `con_fecha`, `con_estado`) VALUES
(3, 'Como me inscribo?', 'leocontr@alumnos.ubiobio.cl', '8908098', '2014-12-20 04:47:23', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultainterna`
--

CREATE TABLE IF NOT EXISTS `consultainterna` (
  `coni_id` int(11) NOT NULL AUTO_INCREMENT,
  `coni_consulta` text NOT NULL,
  `coni_telefono` varchar(255) NOT NULL,
  `coni_email` varchar(255) NOT NULL,
  `coni_fecha` datetime NOT NULL,
  `coni_estado` int(1) NOT NULL DEFAULT '0',
  `coni_respuesta` text,
  `coni_fechaRespuesta` datetime DEFAULT NULL,
  PRIMARY KEY (`coni_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `consultainterna`
--

INSERT INTO `consultainterna` (`coni_id`, `coni_consulta`, `coni_telefono`, `coni_email`, `coni_fecha`, `coni_estado`, `coni_respuesta`, `coni_fechaRespuesta`) VALUES
(6, 'Como está la inscripción?', '76421049', 'scarril@alumnos.ubiobio.cl', '2014-12-30 18:39:11', 0, NULL, NULL),
(12, 'hjjhkjhkhhk', '3232', 'dfgfh@gyyugu.com', '2015-01-20 00:00:00', 1, 'si, eso es', '2015-01-21 18:50:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE IF NOT EXISTS `convocatoria` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_semestre` varchar(10) NOT NULL,
  `con_inicio` date NOT NULL,
  `con_fin` date NOT NULL,
  `con_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Volcado de datos para la tabla `convocatoria`
--

INSERT INTO `convocatoria` (`con_id`, `con_semestre`, `con_inicio`, `con_fin`, `con_estado`) VALUES
(123, '2015-2', '2015-01-14', '2015-01-15', 0),
(124, '2015-1', '2015-01-23', '2015-01-31', 0),
(125, '2015-2', '2015-03-02', '2015-03-27', 1);

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
(24, NULL, 'N;', 'evaluador'),
(25, NULL, 'N;', 'alumno'),
(26, NULL, 'N;', 'evaluador'),
(27, NULL, 'N;', 'alumno'),
(29, NULL, 'N;', 'alumno'),
(30, NULL, 'N;', 'alumno');

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
('action_actividades_admin', 0, '', NULL, 'N;'),
('action_actividades_create', 0, '', NULL, 'N;'),
('action_actividades_delete', 0, '', NULL, 'N;'),
('action_actividades_index', 0, '', NULL, 'N;'),
('action_actividades_update', 0, '', NULL, 'N;'),
('action_actividades_view', 0, '', NULL, 'N;'),
('action_alumnoproyecto_admin', 0, '', NULL, 'N;'),
('action_alumnoproyecto_create', 0, '', NULL, 'N;'),
('action_alumnoproyecto_delete', 0, '', NULL, 'N;'),
('action_alumnoproyecto_index', 0, '', NULL, 'N;'),
('action_alumnoproyecto_obtenerrut', 0, '', NULL, 'N;'),
('action_alumnoproyecto_update', 0, '', NULL, 'N;'),
('action_alumnoproyecto_view', 0, '', NULL, 'N;'),
('action_alumno_admin', 0, '', NULL, 'N;'),
('action_alumno_create', 0, '', NULL, 'N;'),
('action_alumno_delete', 0, '', NULL, 'N;'),
('action_alumno_index', 0, '', NULL, 'N;'),
('action_alumno_update', 0, '', NULL, 'N;'),
('action_alumno_view', 0, '', NULL, 'N;'),
('action_consultainterna_admin', 0, '', NULL, 'N;'),
('action_consultainterna_create', 0, '', NULL, 'N;'),
('action_consultainterna_delete', 0, '', NULL, 'N;'),
('action_consultainterna_index', 0, '', NULL, 'N;'),
('action_consultainterna_update', 0, '', NULL, 'N;'),
('action_consultainterna_view', 0, '', NULL, 'N;'),
('action_consulta_admin', 0, '', NULL, 'N;'),
('action_consulta_create', 0, '', NULL, 'N;'),
('action_consulta_delete', 0, '', NULL, 'N;'),
('action_consulta_exito', 0, '', NULL, 'N;'),
('action_consulta_index', 0, '', NULL, 'N;'),
('action_consulta_update', 0, '', NULL, 'N;'),
('action_consulta_view', 0, '', NULL, 'N;'),
('action_encuestaactividad_admin', 0, '', NULL, 'N;'),
('action_encuestaactividad_create', 0, '', NULL, 'N;'),
('action_encuestaactividad_delete', 0, '', NULL, 'N;'),
('action_encuestaactividad_index', 0, '', NULL, 'N;'),
('action_encuestaactividad_obteneractividades', 0, '', NULL, 'N;'),
('action_encuestaactividad_update', 0, '', NULL, 'N;'),
('action_encuestaactividad_view', 0, '', NULL, 'N;'),
('action_estadopostulacion_admin', 0, '', NULL, 'N;'),
('action_estadopostulacion_create', 0, '', NULL, 'N;'),
('action_estadopostulacion_delete', 0, '', NULL, 'N;'),
('action_estadopostulacion_index', 0, '', NULL, 'N;'),
('action_estadopostulacion_update', 0, '', NULL, 'N;'),
('action_estadopostulacion_view', 0, '', NULL, 'N;'),
('action_evaluadores_admin', 0, '', NULL, 'N;'),
('action_evaluadores_create', 0, '', NULL, 'N;'),
('action_evaluadores_delete', 0, '', NULL, 'N;'),
('action_evaluadores_index', 0, '', NULL, 'N;'),
('action_evaluadores_update', 0, '', NULL, 'N;'),
('action_evaluadores_view', 0, '', NULL, 'N;'),
('action_noticia_admin', 0, '', NULL, 'N;'),
('action_noticia_create', 0, '', NULL, 'N;'),
('action_noticia_delete', 0, '', NULL, 'N;'),
('action_noticia_index', 0, '', NULL, 'N;'),
('action_noticia_update', 0, '', NULL, 'N;'),
('action_noticia_view', 0, '', NULL, 'N;'),
('action_proyectoevaluador_admin', 0, '', NULL, 'N;'),
('action_proyectoevaluador_create', 0, '', NULL, 'N;'),
('action_proyectoevaluador_delete', 0, '', NULL, 'N;'),
('action_proyectoevaluador_index', 0, '', NULL, 'N;'),
('action_proyectoevaluador_update', 0, '', NULL, 'N;'),
('action_proyectoevaluador_view', 0, '', NULL, 'N;'),
('action_proyecto_admin', 0, '', NULL, 'N;'),
('action_proyecto_create', 0, '', NULL, 'N;'),
('action_proyecto_delete', 0, '', NULL, 'N;'),
('action_proyecto_index', 0, '', NULL, 'N;'),
('action_proyecto_pdf', 0, '', NULL, 'N;'),
('action_proyecto_update', 0, '', NULL, 'N;'),
('action_proyecto_view', 0, '', NULL, 'N;'),
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_subirarchivos_index', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('alumno', 2, '', '', 'N;'),
('controller_actividades', 0, '', NULL, 'N;'),
('controller_alumno', 0, '', NULL, 'N;'),
('controller_alumnoproyecto', 0, '', NULL, 'N;'),
('controller_consulta', 0, '', NULL, 'N;'),
('controller_consultainterna', 0, '', NULL, 'N;'),
('controller_encuestaactividad', 0, '', NULL, 'N;'),
('controller_estadopostulacion', 0, '', NULL, 'N;'),
('controller_evaluadores', 0, '', NULL, 'N;'),
('controller_noticia', 0, '', NULL, 'N;'),
('controller_proyecto', 0, '', NULL, 'N;'),
('controller_proyectoevaluador', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;'),
('controller_subirarchivos', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, 'C:\\wamp\\www\\EPI\\EPI\\protected\\modules\\cruge\\views\\ui\\usermanagementupdate.php linea 114', NULL, 'N;'),
('evaluador', 2, '', '', 'N;');

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
('alumno', 'action_noticia_view'),
('evaluador', 'action_proyecto_admin');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=361 ;

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
(39, 1, 1418789332, 1418791132, 0, '::1', 1, 1418789332, NULL, NULL),
(40, 1, 1418830708, 1418832508, 0, '::1', 1, 1418830708, NULL, NULL),
(41, 1, 1418837220, 1418839020, 0, '::1', 1, 1418837220, NULL, NULL),
(42, 1, 1418863631, 1418865431, 0, '::1', 1, 1418863631, 1418864316, '::1'),
(43, 1, 1418864365, 1418866165, 0, '::1', 1, 1418864365, NULL, NULL),
(44, 1, 1418866198, 1418867998, 0, '::1', 1, 1418866198, 1418867339, '::1'),
(45, 1, 1419029929, 1419031729, 0, '::1', 1, 1419029929, 1419030628, '::1'),
(46, 1, 1419034722, 1419036522, 0, '::1', 1, 1419034722, 1419034815, '::1'),
(47, 1, 1419044088, 1419045888, 0, '::1', 1, 1419044088, 1419045323, '::1'),
(48, 1, 1419285813, 1419287613, 0, '::1', 1, 1419285813, 1419286129, '::1'),
(49, 1, 1419286134, 1419287934, 0, '::1', 1, 1419286134, 1419286141, '::1'),
(50, 1, 1419286146, 1419287946, 0, '::1', 1, 1419286146, 1419286154, '::1'),
(51, 1, 1419286437, 1419288237, 0, '::1', 1, 1419286437, NULL, NULL),
(52, 1, 1419290068, 1419291868, 0, '::1', 1, 1419290068, NULL, NULL),
(53, 1, 1419292175, 1419293975, 0, '::1', 1, 1419292175, 1419292352, '::1'),
(54, 11, 1419292404, 1419294204, 0, '::1', 1, 1419292404, 1419292469, '::1'),
(55, 1, 1419292488, 1419294288, 0, '::1', 1, 1419292488, 1419292937, '::1'),
(56, 1, 1419294386, 1419296186, 0, '::1', 1, 1419294386, 1419294450, '::1'),
(57, 14, 1419294477, 1419296277, 0, '::1', 1, 1419294477, 1419294648, '::1'),
(58, 14, 1419299736, 1419301536, 0, '::1', 1, 1419299736, NULL, NULL),
(59, 14, 1419301580, 1419303380, 0, '::1', 1, 1419301580, NULL, NULL),
(60, 14, 1419304128, 1419305928, 0, '::1', 1, 1419304128, 1419304171, '::1'),
(61, 1, 1419304186, 1419305986, 0, '::1', 1, 1419304186, 1419304580, '::1'),
(62, 14, 1419304587, 1419306387, 0, '::1', 1, 1419304587, NULL, NULL),
(63, 1, 1419307540, 1419309340, 0, '::1', 1, 1419307540, 1419307926, '::1'),
(64, 1, 1419395004, 1419396804, 0, '::1', 1, 1419395004, 1419395060, '::1'),
(65, 14, 1419433496, 1419435296, 0, '::1', 1, 1419433496, 1419434077, '::1'),
(66, 14, 1419434117, 1419435917, 0, '::1', 1, 1419434117, 1419434587, '::1'),
(67, 1, 1419434596, 1419436396, 0, '::1', 1, 1419434596, 1419434858, '::1'),
(68, 14, 1419434864, 1419436664, 0, '::1', 1, 1419434864, 1419436406, '::1'),
(69, 1, 1419436413, 1419438213, 0, '::1', 1, 1419436413, NULL, NULL),
(70, 1, 1419439013, 1419440813, 0, '::1', 1, 1419439013, 1419440529, '::1'),
(71, 14, 1419440539, 1419442339, 0, '::1', 1, 1419440539, 1419440822, '::1'),
(72, 1, 1419440831, 1419442631, 0, '::1', 1, 1419440831, 1419440956, '::1'),
(73, 14, 1419440962, 1419442762, 0, '::1', 1, 1419440962, NULL, NULL),
(74, 1, 1419442783, 1419444583, 0, '::1', 1, 1419442783, 1419444252, '::1'),
(75, 14, 1419444258, 1419446058, 0, '::1', 1, 1419444258, 1419444443, '::1'),
(76, 1, 1419444449, 1419446249, 0, '::1', 1, 1419444449, 1419444539, '::1'),
(77, 14, 1419444547, 1419446347, 0, '::1', 1, 1419444547, 1419444573, '::1'),
(78, 1, 1419444580, 1419446380, 0, '::1', 1, 1419444580, 1419444613, '::1'),
(79, 14, 1419444628, 1419446428, 0, '::1', 1, 1419444628, 1419445353, '::1'),
(80, 1, 1419445359, 1419447159, 0, '::1', 1, 1419445359, 1419446074, '::1'),
(81, 1, 1419446088, 1419447888, 1, '::1', 1, 1419446088, NULL, NULL),
(82, 14, 1419448219, 1419450019, 0, '::1', 1, 1419448219, 1419448223, '::1'),
(83, 1, 1419448275, 1419450075, 0, '::1', 1, 1419448275, NULL, NULL),
(84, 1, 1419450650, 1419452450, 0, '::1', 1, 1419450650, NULL, NULL),
(85, 14, 1419453220, 1419455020, 1, '::1', 1, 1419453220, NULL, NULL),
(86, 1, 1419453273, 1419455073, 0, '::1', 1, 1419453273, NULL, NULL),
(87, 1, 1419455417, 1419457217, 0, '::1', 1, 1419455417, 1419456172, '::1'),
(88, 14, 1419456314, 1419458114, 0, '::1', 1, 1419456314, 1419456691, '::1'),
(89, 1, 1419456715, 1419458515, 0, '::1', 1, 1419456715, 1419458489, '::1'),
(90, 14, 1419458495, 1419460295, 0, '::1', 1, 1419458495, 1419459231, '::1'),
(91, 1, 1419459371, 1419461171, 0, '::1', 1, 1419459371, NULL, NULL),
(92, 1, 1419462003, 1419463803, 0, '::1', 1, 1419462003, NULL, NULL),
(93, 1, 1419463953, 1419465753, 0, '::1', 1, 1419463953, NULL, NULL),
(94, 1, 1419465799, 1419467599, 0, '::1', 1, 1419465799, NULL, NULL),
(95, 1, 1419467613, 1419469413, 0, '::1', 1, 1419467613, NULL, NULL),
(96, 1, 1419469557, 1419471357, 0, '::1', 1, 1419469557, 1419470113, '::1'),
(97, 14, 1419470118, 1419471918, 0, '::1', 1, 1419470118, 1419471067, '::1'),
(98, 14, 1419471071, 1419472871, 0, '::1', 1, 1419471071, 1419471225, '::1'),
(99, 11, 1419471230, 1419473030, 0, '::1', 1, 1419471230, 1419471318, '::1'),
(100, 15, 1419471430, 1419473230, 0, '::1', 1, 1419471430, 1419471476, '::1'),
(101, 14, 1419471481, 1419473281, 0, '::1', 1, 1419471481, 1419472453, '::1'),
(102, 1, 1419472458, 1419474258, 0, '::1', 1, 1419472458, NULL, NULL),
(103, 1, 1419474812, 1419476612, 0, '::1', 1, 1419474812, 1419476358, '::1'),
(104, 1, 1419476362, 1419478162, 0, '::1', 1, 1419476362, 1419476967, '::1'),
(105, 14, 1419476974, 1419478774, 0, '::1', 1, 1419476974, NULL, NULL),
(106, 16, 1419479452, 1419481252, 0, '::1', 1, 1419479452, 1419481115, '::1'),
(107, 14, 1419481120, 1419482920, 0, '::1', 1, 1419481120, 1419481131, '::1'),
(108, 14, 1419481134, 1419482934, 0, '::1', 1, 1419481134, 1419481803, '::1'),
(109, 16, 1419481809, 1419483609, 0, '::1', 1, 1419481809, NULL, NULL),
(110, 16, 1419486992, 1419488792, 0, '::1', 1, 1419486992, 1419487401, '::1'),
(111, 1, 1419487409, 1419489209, 0, '::1', 1, 1419487409, NULL, NULL),
(112, 1, 1419521306, 1419523106, 0, '::1', 1, 1419521306, NULL, NULL),
(113, 1, 1419523127, 1419524927, 0, '::1', 1, 1419523127, NULL, NULL),
(114, 1, 1419524971, 1419526771, 0, '::1', 1, 1419524971, NULL, NULL),
(115, 1, 1419527148, 1419528948, 0, '::1', 1, 1419527148, NULL, NULL),
(116, 1, 1419529206, 1419531006, 0, '::1', 1, 1419529206, NULL, NULL),
(117, 1, 1419531079, 1419532879, 0, '::1', 1, 1419531079, NULL, NULL),
(118, 1, 1419534023, 1419535823, 0, '::1', 1, 1419534023, NULL, NULL),
(119, 1, 1419535890, 1419537690, 0, '::1', 1, 1419535890, NULL, NULL),
(120, 1, 1419537756, 1419539556, 0, '::1', 1, 1419537756, NULL, NULL),
(121, 1, 1419539717, 1419541517, 0, '::1', 1, 1419539717, NULL, NULL),
(122, 1, 1419541541, 1419543341, 0, '::1', 1, 1419541541, NULL, NULL),
(123, 1, 1419543368, 1419545168, 0, '::1', 1, 1419543368, NULL, NULL),
(124, 1, 1419545191, 1419546991, 0, '::1', 1, 1419545191, NULL, NULL),
(125, 1, 1419550850, 1419552650, 0, '::1', 1, 1419550850, NULL, NULL),
(126, 1, 1419553906, 1419555706, 0, '::1', 1, 1419553906, NULL, NULL),
(127, 1, 1419608904, 1419610704, 0, '::1', 1, 1419608904, 1419610486, '::1'),
(128, 16, 1419610493, 1419612293, 0, '::1', 1, 1419610493, NULL, NULL),
(129, 1, 1419616040, 1419617840, 0, '::1', 1, 1419616040, NULL, NULL),
(130, 1, 1419617873, 1419619673, 0, '::1', 1, 1419617873, NULL, NULL),
(131, 1, 1419623845, 1419625645, 0, '::1', 1, 1419623845, NULL, NULL),
(132, 1, 1419626124, 1419627924, 0, '::1', 1, 1419626124, 1419627628, '::1'),
(133, 16, 1419627644, 1419629444, 0, '::1', 1, 1419627644, 1419627958, '::1'),
(134, 1, 1419627964, 1419629764, 0, '::1', 1, 1419627964, 1419628089, '::1'),
(135, 16, 1419628095, 1419629895, 0, '::1', 1, 1419628095, NULL, NULL),
(136, 14, 1419629918, 1419631718, 0, '::1', 1, 1419629918, NULL, NULL),
(137, 14, 1419632078, 1419633878, 0, '::1', 3, 1419632299, NULL, NULL),
(138, 16, 1419634417, 1419636217, 0, '::1', 1, 1419634417, NULL, NULL),
(139, 16, 1419637088, 1419638888, 0, '::1', 1, 1419637088, 1419637318, '::1'),
(140, 14, 1419637323, 1419639123, 0, '::1', 1, 1419637323, 1419637353, '::1'),
(141, 14, 1419637380, 1419639180, 0, '::1', 1, 1419637380, 1419637890, '::1'),
(142, 16, 1419637895, 1419639695, 0, '::1', 1, 1419637895, 1419637905, '::1'),
(143, 14, 1419637910, 1419639710, 0, '::1', 1, 1419637910, 1419638049, '::1'),
(144, 16, 1419638055, 1419639855, 0, '::1', 2, 1419638500, NULL, NULL),
(145, 16, 1419642851, 1419644651, 0, '::1', 1, 1419642851, NULL, NULL),
(146, 16, 1419644685, 1419646485, 0, '::1', 1, 1419644685, 1419644906, '::1'),
(147, 16, 1419654648, 1419656448, 0, '::1', 1, 1419654648, NULL, NULL),
(148, 16, 1419656561, 1419658361, 0, '::1', 1, 1419656561, NULL, NULL),
(149, 16, 1419658390, 1419660190, 0, '::1', 1, 1419658390, NULL, NULL),
(150, 16, 1419660270, 1419662070, 0, '::1', 1, 1419660270, NULL, NULL),
(151, 16, 1419662129, 1419663929, 0, '::1', 1, 1419662129, NULL, NULL),
(152, 16, 1419664807, 1419666607, 0, '::1', 1, 1419664807, NULL, NULL),
(153, 16, 1419666711, 1419668511, 0, '::1', 1, 1419666711, NULL, NULL),
(154, 16, 1419686780, 1419688580, 0, '::1', 1, 1419686780, NULL, NULL),
(155, 16, 1419688618, 1419690418, 0, '::1', 1, 1419688618, NULL, NULL),
(156, 16, 1419690644, 1419692444, 0, '::1', 1, 1419690644, NULL, NULL),
(157, 16, 1419692735, 1419694535, 0, '::1', 1, 1419692735, NULL, NULL),
(158, 16, 1419694639, 1419696439, 0, '::1', 1, 1419694639, NULL, NULL),
(159, 16, 1419696525, 1419698325, 0, '::1', 1, 1419696525, 1419696605, '::1'),
(160, 1, 1419696641, 1419698441, 0, '::1', 1, 1419696641, 1419697124, '::1'),
(161, 16, 1419697129, 1419698929, 0, '::1', 1, 1419697129, 1419697907, '::1'),
(162, 1, 1419697946, 1419699746, 0, '::1', 1, 1419697946, 1419699375, '::1'),
(163, 16, 1419699380, 1419701180, 0, '::1', 1, 1419699380, 1419700016, '::1'),
(164, 1, 1419700021, 1419701821, 0, '::1', 1, 1419700021, 1419700151, '::1'),
(165, 16, 1419700157, 1419701957, 0, '::1', 1, 1419700157, 1419700426, '::1'),
(166, 14, 1419700432, 1419702232, 0, '::1', 1, 1419700432, 1419700829, '::1'),
(167, 1, 1419700836, 1419702636, 0, '::1', 1, 1419700836, NULL, NULL),
(168, 1, 1419702643, 1419704443, 0, '::1', 1, 1419702643, NULL, NULL),
(169, 1, 1419706263, 1419708063, 0, '::1', 1, 1419706263, 1419707994, '::1'),
(170, 1, 1419709475, 1419711275, 0, '::1', 1, 1419709475, 1419709584, '::1'),
(171, 16, 1419709590, 1419711390, 0, '::1', 1, 1419709590, 1419709700, '::1'),
(172, 16, 1419751054, 1419752854, 0, '::1', 1, 1419751054, NULL, NULL),
(173, 1, 1419782374, 1419784174, 0, '::1', 1, 1419782374, 1419783868, '::1'),
(174, 16, 1419783909, 1419785709, 0, '::1', 1, 1419783909, NULL, NULL),
(175, 16, 1419785899, 1419787699, 0, '::1', 1, 1419785899, 1419787314, '::1'),
(176, 1, 1419787321, 1419789121, 0, '::1', 1, 1419787321, NULL, NULL),
(177, 1, 1419789164, 1419790964, 0, '::1', 1, 1419789164, NULL, NULL),
(178, 1, 1419791183, 1419792983, 0, '::1', 1, 1419791183, NULL, NULL),
(179, 1, 1419796420, 1419798220, 0, '::1', 1, 1419796420, 1419797545, '::1'),
(180, 16, 1419797566, 1419799366, 0, '::1', 1, 1419797566, NULL, NULL),
(181, 16, 1419852767, 1419854567, 0, '::1', 1, 1419852767, NULL, NULL),
(182, 16, 1419854783, 1419856583, 0, '::1', 1, 1419854783, NULL, NULL),
(183, 1, 1419867345, 1419869145, 0, '::1', 1, 1419867345, NULL, NULL),
(184, 1, 1419874667, 1419876467, 0, '::1', 1, 1419874667, NULL, NULL),
(185, 1, 1419894098, 1419895898, 0, '::1', 3, 1419894101, NULL, NULL),
(186, 1, 1419897546, 1419899346, 0, '::1', 1, 1419897546, NULL, NULL),
(187, 1, 1419899573, 1419901373, 0, '::1', 3, 1419901174, 1419901327, '::1'),
(188, 1, 1419902277, 1419904077, 0, '::1', 1, 1419902277, NULL, NULL),
(189, 1, 1419904163, 1419905963, 0, '::1', 1, 1419904163, NULL, NULL),
(190, 1, 1419906030, 1419907830, 0, '::1', 1, 1419906030, NULL, NULL),
(191, 1, 1419914046, 1419915846, 0, '::1', 1, 1419914046, 1419915638, '::1'),
(192, 1, 1419915801, 1419917601, 0, '::1', 1, 1419915801, 1419915835, '::1'),
(193, 1, 1419915867, 1419917667, 0, '::1', 1, 1419915867, NULL, NULL),
(194, 1, 1419917717, 1419919517, 0, '::1', 1, 1419917717, NULL, NULL),
(195, 1, 1419919575, 1419921375, 1, '::1', 1, 1419919575, NULL, NULL),
(196, 1, 1419948849, 1419950649, 0, '::1', 1, 1419948849, 1419948901, '::1'),
(197, 16, 1419948907, 1419950707, 0, '::1', 1, 1419948907, 1419949280, '::1'),
(198, 1, 1419949287, 1419951087, 0, '::1', 1, 1419949287, 1419949368, '::1'),
(199, 16, 1419949376, 1419951176, 0, '::1', 1, 1419949376, NULL, NULL),
(200, 16, 1419951259, 1419953059, 0, '::1', 1, 1419951259, NULL, NULL),
(201, 16, 1419953118, 1419954918, 0, '::1', 1, 1419953118, NULL, NULL),
(202, 16, 1419954940, 1419956740, 1, '::1', 2, 1419954952, NULL, NULL),
(203, 1, 1419961476, 1419963276, 0, '127.0.0.1', 1, 1419961476, 1419961664, '127.0.0.1'),
(204, 16, 1419963422, 1419965222, 0, '127.0.0.1', 1, 1419963422, 1419963429, '127.0.0.1'),
(205, 16, 1419963919, 1419965719, 0, '127.0.0.1', 1, 1419963919, 1419963924, '127.0.0.1'),
(206, 16, 1419964680, 1419966480, 0, '127.0.0.1', 1, 1419964680, NULL, NULL),
(207, 16, 1419966553, 1419968353, 0, '127.0.0.1', 1, 1419966553, NULL, NULL),
(208, 16, 1419968490, 1419970290, 0, '127.0.0.1', 1, 1419968490, 1419968936, '127.0.0.1'),
(209, 1, 1420042642, 1420044442, 0, '127.0.0.1', 1, 1420042642, NULL, NULL),
(210, 1, 1420044467, 1420046267, 0, '127.0.0.1', 1, 1420044467, 1420044942, '127.0.0.1'),
(211, 16, 1420044947, 1420046747, 0, '127.0.0.1', 1, 1420044947, 1420044970, '127.0.0.1'),
(212, 1, 1420044975, 1420046775, 0, '127.0.0.1', 1, 1420044975, 1420044993, '127.0.0.1'),
(213, 16, 1420044997, 1420046797, 0, '127.0.0.1', 1, 1420044997, 1420045063, '127.0.0.1'),
(214, 1, 1420045068, 1420046868, 0, '127.0.0.1', 1, 1420045068, NULL, NULL),
(215, 1, 1420047118, 1420048918, 1, '127.0.0.1', 1, 1420047118, NULL, NULL),
(216, 1, 1420398577, 1420400377, 0, '127.0.0.1', 1, 1420398577, 1420399629, '127.0.0.1'),
(217, 16, 1420399636, 1420401436, 0, '127.0.0.1', 1, 1420399636, 1420399653, '127.0.0.1'),
(218, 1, 1420399660, 1420401460, 1, '127.0.0.1', 1, 1420399660, NULL, NULL),
(219, 1, 1420563376, 1420565176, 0, '127.0.0.1', 1, 1420563376, 1420563473, '127.0.0.1'),
(220, 16, 1420563479, 1420565279, 0, '127.0.0.1', 1, 1420563479, 1420563518, '127.0.0.1'),
(221, 1, 1420563523, 1420565323, 0, '127.0.0.1', 1, 1420563523, NULL, NULL),
(222, 1, 1420565545, 1420567345, 0, '127.0.0.1', 1, 1420565545, NULL, NULL),
(223, 1, 1420570919, 1420572719, 0, '127.0.0.1', 1, 1420570919, NULL, NULL),
(224, 1, 1420573088, 1420574888, 0, '127.0.0.1', 2, 1420574062, NULL, NULL),
(225, 1, 1420574917, 1420576717, 0, '127.0.0.1', 2, 1420576418, NULL, NULL),
(226, 1, 1420576749, 1420578549, 0, '127.0.0.1', 2, 1420577050, NULL, NULL),
(227, 1, 1420578567, 1420580367, 0, '127.0.0.1', 1, 1420578567, NULL, NULL),
(228, 1, 1420580450, 1420582250, 0, '127.0.0.1', 1, 1420580450, NULL, NULL),
(229, 1, 1420582290, 1420584090, 0, '127.0.0.1', 1, 1420582290, NULL, NULL),
(230, 1, 1420642264, 1420644064, 0, '127.0.0.1', 1, 1420642264, NULL, NULL),
(231, 1, 1420644081, 1420645881, 0, '127.0.0.1', 1, 1420644081, NULL, NULL),
(232, 1, 1420646606, 1420648406, 0, '127.0.0.1', 1, 1420646606, NULL, NULL),
(233, 1, 1420649370, 1420651170, 1, '127.0.0.1', 1, 1420649370, NULL, NULL),
(234, 1, 1420660781, 1420662581, 0, '127.0.0.1', 1, 1420660781, 1420661933, '127.0.0.1'),
(235, 1, 1420661978, 1420663778, 0, '127.0.0.1', 1, 1420661978, 1420662010, '127.0.0.1'),
(236, 19, 1420662050, 1420663850, 0, '127.0.0.1', 1, 1420662050, 1420662059, '127.0.0.1'),
(237, 1, 1420662122, 1420663922, 0, '127.0.0.1', 1, 1420662122, 1420663090, '127.0.0.1'),
(238, 1, 1420663118, 1420664918, 0, '127.0.0.1', 1, 1420663118, NULL, NULL),
(239, 1, 1420665060, 1420666860, 0, '127.0.0.1', 1, 1420665060, NULL, NULL),
(240, 1, 1420666931, 1420668731, 0, '127.0.0.1', 1, 1420666931, NULL, NULL),
(241, 1, 1420669568, 1420671368, 0, '127.0.0.1', 1, 1420669568, NULL, NULL),
(242, 1, 1420671559, 1420673359, 0, '127.0.0.1', 1, 1420671559, 1420671813, '127.0.0.1'),
(243, 24, 1420671819, 1420673619, 0, '127.0.0.1', 1, 1420671819, 1420671823, '127.0.0.1'),
(244, 1, 1420672396, 1420674196, 0, '127.0.0.1', 1, 1420672396, 1420673738, '127.0.0.1'),
(245, 1, 1420673781, 1420685781, 0, '127.0.0.1', 1, 1420673781, 1420673813, '127.0.0.1'),
(246, 24, 1420673820, 1420685820, 0, '127.0.0.1', 1, 1420673820, 1420673840, '127.0.0.1'),
(247, 1, 1420673845, 1420685845, 0, '127.0.0.1', 1, 1420673845, 1420681423, '127.0.0.1'),
(248, 1, 1420681428, 1420693428, 0, '127.0.0.1', 1, 1420681428, NULL, NULL),
(249, 1, 1420730507, 1420742507, 0, '127.0.0.1', 1, 1420730507, 1420730694, '127.0.0.1'),
(250, 25, 1420730710, 1420742710, 0, '127.0.0.1', 1, 1420730710, 1420731114, '127.0.0.1'),
(251, 1, 1420731123, 1420743123, 0, '127.0.0.1', 1, 1420731123, 1420733209, '127.0.0.1'),
(252, 26, 1420733224, 1420745224, 0, '127.0.0.1', 1, 1420733224, 1420733594, '127.0.0.1'),
(253, 16, 1420733600, 1420745600, 0, '127.0.0.1', 1, 1420733600, 1420733606, '127.0.0.1'),
(254, 26, 1420733614, 1420745614, 0, '127.0.0.1', 1, 1420733614, 1420733709, '127.0.0.1'),
(255, 1, 1420733715, 1420745715, 0, '127.0.0.1', 1, 1420733715, 1420733731, '127.0.0.1'),
(256, 26, 1420733738, 1420745738, 0, '127.0.0.1', 1, 1420733738, 1420734625, '127.0.0.1'),
(257, 24, 1420734633, 1420746633, 0, '127.0.0.1', 1, 1420734633, 1420734852, '127.0.0.1'),
(258, 24, 1420734859, 1420746859, 0, '127.0.0.1', 1, 1420734859, 1420735291, '127.0.0.1'),
(259, 24, 1420735298, 1420747298, 0, '127.0.0.1', 1, 1420735298, 1420735888, '127.0.0.1'),
(260, 1, 1420735895, 1420747895, 0, '127.0.0.1', 1, 1420735895, 1420735903, '127.0.0.1'),
(261, 26, 1420735912, 1420747912, 0, '127.0.0.1', 1, 1420735912, 1420735920, '127.0.0.1'),
(262, 24, 1420735926, 1420747926, 0, '127.0.0.1', 1, 1420735926, 1420736532, '127.0.0.1'),
(263, 26, 1420736538, 1420748538, 0, '127.0.0.1', 1, 1420736538, 1420736544, '127.0.0.1'),
(264, 24, 1420736550, 1420748550, 0, '127.0.0.1', 1, 1420736550, 1420736617, '127.0.0.1'),
(265, 26, 1420736625, 1420748625, 0, '127.0.0.1', 1, 1420736625, 1420741227, '127.0.0.1'),
(266, 1, 1420741233, 1420753233, 0, '127.0.0.1', 1, 1420741233, 1420741319, '127.0.0.1'),
(267, 26, 1420741330, 1420753330, 0, '127.0.0.1', 1, 1420741330, 1420741563, '127.0.0.1'),
(268, 1, 1420741585, 1420753585, 0, '127.0.0.1', 1, 1420741585, 1420742644, '127.0.0.1'),
(269, 26, 1420742687, 1420754687, 0, '127.0.0.1', 1, 1420742687, 1420742923, '127.0.0.1'),
(270, 1, 1420742933, 1420754933, 0, '127.0.0.1', 1, 1420742933, 1420743334, '127.0.0.1'),
(271, 1, 1420743340, 1420755340, 0, '127.0.0.1', 1, 1420743340, 1420743382, '127.0.0.1'),
(272, 26, 1420743390, 1420755390, 0, '127.0.0.1', 1, 1420743390, 1420751175, '127.0.0.1'),
(273, 1, 1420751180, 1420763180, 0, '127.0.0.1', 1, 1420751180, 1420751220, '127.0.0.1'),
(274, 1, 1420751236, 1420763236, 0, '127.0.0.1', 1, 1420751236, 1420751253, '127.0.0.1'),
(275, 24, 1420751261, 1420763261, 0, '127.0.0.1', 1, 1420751261, 1420751287, '127.0.0.1'),
(276, 1, 1420751292, 1420763292, 1, '127.0.0.1', 1, 1420751292, NULL, NULL),
(277, 1, 1420813326, 1420825326, 0, '127.0.0.1', 1, 1420813326, 1420813580, '127.0.0.1'),
(278, 24, 1420813589, 1420825589, 0, '127.0.0.1', 1, 1420813589, 1420813606, '127.0.0.1'),
(279, 26, 1420813614, 1420825614, 0, '127.0.0.1', 1, 1420813614, 1420814309, '127.0.0.1'),
(280, 1, 1420814319, 1420826319, 0, '127.0.0.1', 1, 1420814319, 1420818795, '127.0.0.1'),
(281, 1, 1420818802, 1420830802, 0, '127.0.0.1', 1, 1420818802, 1420819006, '127.0.0.1'),
(282, 24, 1420819013, 1420831013, 0, '127.0.0.1', 1, 1420819013, 1420819174, '127.0.0.1'),
(283, 1, 1420819210, 1420831210, 0, '127.0.0.1', 1, 1420819210, 1420819372, '127.0.0.1'),
(284, 1, 1420819382, 1420831382, 0, '127.0.0.1', 1, 1420819382, 1420819426, '127.0.0.1'),
(285, 24, 1420819435, 1420831435, 0, '127.0.0.1', 1, 1420819435, 1420819908, '127.0.0.1'),
(286, 1, 1420819914, 1420831914, 0, '127.0.0.1', 1, 1420819914, 1420819994, '127.0.0.1'),
(287, 1, 1420819999, 1420831999, 0, '127.0.0.1', 1, 1420819999, 1420820154, '127.0.0.1'),
(288, 16, 1420820193, 1420832193, 0, '127.0.0.1', 1, 1420820193, 1420823155, '127.0.0.1'),
(289, 24, 1420823161, 1420835161, 0, '127.0.0.1', 1, 1420823161, 1420823174, '127.0.0.1'),
(290, 1, 1420823179, 1420835179, 0, '127.0.0.1', 1, 1420823179, 1420823194, '127.0.0.1'),
(291, 26, 1420823201, 1420835201, 0, '127.0.0.1', 1, 1420823201, 1420823277, '127.0.0.1'),
(292, 16, 1420823283, 1420835283, 0, '127.0.0.1', 1, 1420823283, 1420823344, '127.0.0.1'),
(293, 16, 1420823355, 1420835355, 0, '127.0.0.1', 1, 1420823355, 1420823370, '127.0.0.1'),
(294, 1, 1420823379, 1420835379, 0, '127.0.0.1', 1, 1420823379, 1420823474, '127.0.0.1'),
(295, 16, 1420823479, 1420835479, 0, '127.0.0.1', 1, 1420823479, 1420823512, '127.0.0.1'),
(296, 1, 1420823517, 1420835517, 0, '127.0.0.1', 1, 1420823517, 1420823558, '127.0.0.1'),
(297, 16, 1420823562, 1420835562, 0, '127.0.0.1', 1, 1420823562, 1420823598, '127.0.0.1'),
(298, 1, 1420823607, 1420835607, 0, '127.0.0.1', 1, 1420823607, 1420828076, '127.0.0.1'),
(299, 24, 1420828081, 1420840081, 1, '127.0.0.1', 1, 1420828081, NULL, NULL),
(300, 1, 1420855785, 1420867785, 0, '::1', 1, 1420855785, 1420856236, '::1'),
(301, 1, 1420856251, 1420868251, 0, '::1', 1, 1420856251, 1420856307, '::1'),
(302, 24, 1420856374, 1420868374, 0, '::1', 1, 1420856374, 1420856537, '::1'),
(303, 1, 1420856542, 1420868542, 0, '::1', 1, 1420856542, 1420856913, '::1'),
(304, 16, 1420856918, 1420868918, 1, '::1', 1, 1420856918, NULL, NULL),
(305, 16, 1421152034, 1421164034, 1, '::1', 1, 1421152034, NULL, NULL),
(306, 1, 1421173373, 1421185373, 0, '::1', 1, 1421173373, 1421173393, '::1'),
(307, 16, 1421173417, 1421185417, 0, '::1', 1, 1421173417, NULL, NULL),
(308, 16, 1421190584, 1421202584, 1, '::1', 1, 1421190584, NULL, NULL),
(309, 24, 1421276455, 1421288455, 0, '::1', 1, 1421276455, 1421277148, '::1'),
(310, 16, 1421277587, 1421289587, 0, '::1', 1, 1421277587, NULL, NULL),
(311, 16, 1421289648, 1421301648, 0, '::1', 1, 1421289648, NULL, NULL),
(312, 1, 1421328726, 1421340726, 0, '::1', 1, 1421328726, 1421330789, '::1'),
(313, 25, 1421330820, 1421342820, 0, '::1', 1, 1421330820, 1421330859, '::1'),
(314, 1, 1421330866, 1421342866, 0, '::1', 1, 1421330866, 1421331097, '::1'),
(315, 16, 1421331105, 1421343105, 0, '::1', 1, 1421331105, 1421331136, '::1'),
(316, 16, 1421331141, 1421343141, 0, '::1', 1, 1421331141, 1421331537, '::1'),
(317, 1, 1421331779, 1421343779, 0, '::1', 1, 1421331779, 1421333689, '::1'),
(318, 16, 1421333705, 1421345705, 0, '::1', 1, 1421333705, 1421333846, '::1'),
(319, 1, 1421333916, 1421345916, 0, '::1', 1, 1421333916, 1421337645, '::1'),
(320, 25, 1421337676, 1421349676, 0, '::1', 1, 1421337676, 1421337760, '::1'),
(321, 1, 1421337766, 1421349766, 0, '::1', 1, 1421337766, NULL, NULL),
(322, 1, 1421349837, 1421361837, 0, '::1', 2, 1421349944, NULL, NULL),
(323, 1, 1421376959, 1421388959, 0, '::1', 1, 1421376959, 1421378185, '::1'),
(324, 16, 1421378196, 1421390196, 1, '::1', 1, 1421378196, NULL, NULL),
(325, 1, 1421803670, 1421815670, 0, '::1', 1, 1421803670, NULL, NULL),
(326, 1, 1421816507, 1421828507, 0, '::1', 1, 1421816507, NULL, NULL),
(327, 1, 1421850376, 1421862376, 0, '::1', 1, 1421850376, 1421853967, '::1'),
(328, 1, 1421854312, 1421866312, 0, '::1', 1, 1421854312, NULL, NULL),
(329, 1, 1421866551, 1421878551, 0, '::1', 2, 1421867040, 1421874692, '::1'),
(330, 16, 1421874699, 1421886699, 0, '::1', 1, 1421874699, 1421874838, '::1'),
(331, 16, 1421874843, 1421886843, 0, '::1', 1, 1421874843, 1421875750, '::1'),
(332, 1, 1421875755, 1421887755, 0, '::1', 1, 1421875755, 1421875909, '::1'),
(333, 16, 1421875915, 1421887915, 0, '::1', 1, 1421875915, 1421885352, '::1'),
(334, 1, 1421885359, 1421897359, 0, '::1', 1, 1421885359, 1421885736, '::1'),
(335, 16, 1421885744, 1421897744, 0, '::1', 1, 1421885744, 1421886122, '::1'),
(336, 1, 1421886127, 1421898127, 0, '::1', 1, 1421886127, 1421895216, '::1'),
(337, 16, 1421895224, 1421907224, 0, '::1', 1, 1421895224, 1421898340, '::1'),
(338, 1, 1421898345, 1421910345, 0, '::1', 1, 1421898345, 1421900003, '::1'),
(339, 16, 1421900009, 1421912009, 0, '::1', 1, 1421900009, 1421901685, '::1'),
(340, 16, 1421901879, 1421913879, 1, '::1', 1, 1421901879, NULL, NULL),
(341, 16, 1421978983, 1421990983, 0, '127.0.0.1', 1, 1421978983, 1421979233, '127.0.0.1'),
(342, 1, 1421979242, 1421991242, 0, '127.0.0.1', 1, 1421979242, 1421979501, '127.0.0.1'),
(343, 1, 1421979526, 1421991526, 0, '127.0.0.1', 1, 1421979526, 1421980002, '127.0.0.1'),
(344, 1, 1421980126, 1421992126, 0, '127.0.0.1', 1, 1421980126, NULL, NULL),
(345, 1, 1422033235, 1422045235, 0, '127.0.0.1', 1, 1422033235, NULL, NULL),
(346, 1, 1422058675, 1422070675, 0, '127.0.0.1', 2, 1422066372, 1422066570, '127.0.0.1'),
(347, 1, 1422068889, 1422080889, 0, '127.0.0.1', 1, 1422068889, NULL, NULL),
(348, 1, 1422110464, 1422122464, 0, '::1', 1, 1422110464, NULL, NULL),
(349, 1, 1422127803, 1422139803, 0, '::1', 2, 1422127852, NULL, NULL),
(350, 1, 1422287070, 1422299070, 0, '::1', 1, 1422287070, 1422288498, '::1'),
(351, 1, 1422289458, 1422301458, 0, '::1', 1, 1422289458, 1422289915, '::1'),
(352, 16, 1422289986, 1422301986, 0, '::1', 1, 1422289986, 1422290483, '::1'),
(353, 1, 1422290488, 1422302488, 0, '::1', 1, 1422290488, 1422290764, '::1'),
(354, 1, 1422290862, 1422302862, 0, '::1', 1, 1422290862, NULL, NULL),
(355, 1, 1422323362, 1422335362, 0, '::1', 1, 1422323362, 1422323474, '::1'),
(356, 16, 1422323485, 1422335485, 0, '::1', 1, 1422323485, 1422323535, '::1'),
(357, 1, 1422474952, 1422486952, 0, '::1', 1, 1422474952, NULL, NULL),
(358, 1, 1422494368, 1422506368, 0, '::1', 1, 1422494368, 1422495625, '::1'),
(359, 1, 1422495710, 1422507710, 0, '::1', 1, 1422495710, 1422496577, '::1'),
(360, 29, 1422496604, 1422508604, 0, '::1', 1, 1422496604, NULL, NULL);

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
(1, 'default', NULL, 200, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1422495710, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(24, 1420667699, 1420667699, 1421276455, '17.641.416-2', 'a@u.cl', '123456', NULL, 1, 0, 0),
(25, 1420730678, 1420730678, 1421337676, '12.305.014-2', 'clau@ubiobio.cl', 'ClaudioInzunza2015-1', NULL, 1, 0, 0),
(26, 1420731540, 1420731540, 1420823201, '8.973.027-9', 'jua@live.com', '123456', NULL, 1, 0, 0),
(27, 1421854045, 1421854045, NULL, '9.640.184-1', 'dfgfh@gyyugu.com', '112212', NULL, 1, 0, 0),
(29, 1422475657, 1422475657, 1422496604, '17.912.202-2', 'scarril@alumnos.ubiobio.cl', 'SamuelCarril2015-2', NULL, 1, 0, 0),
(30, 1422495692, 1422495692, NULL, '11.111.111-1', 'samuel_03061991@hotmail.com', 'SamuelCarril2015-2', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `cu_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_nombre` varchar(255) NOT NULL,
  `cu_creador` varchar(255) NOT NULL,
  `cu_foto` varchar(255) NOT NULL,
  `cu_info` text NOT NULL,
  `con_semestre` varchar(10) NOT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cu_id`, `cu_nombre`, `cu_creador`, `cu_foto`, `cu_info`, `con_semestre`) VALUES
(1, 'C++, Short and Sweet, Part 1', 'Jeremy Siek', '139298_a6e9_3.jpg', 'This course is for beginners who want to get started writing programs in C++, taught by Jeremy Siek, a professor at the University of Colorado. No prior knowledge of C++ is assumed. The course is based on the excellent textbook Accelerated C++ by Andrew Koenig and Barbara E. Moo. Like the textbook, the course quickly dives into problem solving and making use of the C++ standard library, including strings, vectors, and lists. The emphasis is on teaching you the parts of C++ that you will most likely need in your day-to-day programming. This course is Part 1 of a planned two-part sequence. Part 1 covers the first seven chapters of Accelerated C++, in particular, Chapters 0 through 6. The course consists of six videos of 50-60 minutes each.\n\nPart 2 of the course, forthcoming, will cover the second half of Accelerated C++, including how to write your own classes and generic functions1.', '2015-2'),
(2, 'C++, Short and Sweet, Part 2', 'Jeremy Siek', '139298_a6e9_3.jpg', 'This course is for beginners who want to get started writing programs in C++, taught by Jeremy Siek, a professor at the University of Colorado. No prior knowledge of C++ is assumed. The course is based on the excellent textbook Accelerated C++ by Andrew Koenig and Barbara E. Moo. Like the textbook, the course quickly dives into problem solving and making use of the C++ standard library, including strings, vectors, and lists. The emphasis is on teaching you the parts of C++ that you will most likely need in your day-to-day programming. This course is Part 1 of a planned two-part sequence. Part 1 covers the first seven chapters of Accelerated C++, in particular, Chapters 0 through 6. The course consists of six videos of 50-60 minutes each.\r\n\r\nPart 2 of the course, forthcoming, will cover the second half of Accelerated C++, including how to write your own classes and generic functions.', '2015-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_id` int(11) NOT NULL,
  `doc_fecha` date NOT NULL,
  `doc_nombre` varchar(255) NOT NULL,
  `doc_tipo` varchar(255) NOT NULL,
  `doc_link` varchar(255) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`doc_id`, `cu_id`, `doc_fecha`, `doc_nombre`, `doc_tipo`, `doc_link`) VALUES
(6, 2, '2015-01-14', 'Documento en pdf', 'PDF', 'Guia-Organigramas.pdf'),
(7, 2, '2015-01-16', 'Documento de word', 'DOC', '10_14.docx'),
(9, 2, '2015-01-01', 'Video musical 1', 'video', '<iframe width="854" height="510" src="//www.youtube.com/embed/1HAngC4bFlI" frameborder="0" allowfullscreen></iframe>'),
(11, 2, '2015-01-16', 'Video musical4', 'video', '<iframe width="854" height="510" src="//www.youtube.com/embed/dZ49_ZFFY88" frameborder="0" allowfullscreen></iframe>'),
(12, 2, '2015-01-23', 'yii', 'video', '<iframe width="854" height="510" src="//www.youtube.com/embed/E8vf4IdwNBc" frameborder="0" allowfullscreen></iframe>'),
(13, 2, '2015-01-23', 'asasasa', 'PDF', 'bmi-14-12-03.pdf'),
(14, 2, '2015-01-08', 'sfd', 'video', '<iframe width="854" height="510" src="//www.youtube.com/embed/Vph9BKB3l98" frameborder="0" allowfullscreen></iframe>'),
(15, 2, '2015-01-17', 'Edo caroe', 'video', '<iframe width="854" height="510" src="//www.youtube.com/embed/aqA2038VUK8" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestaactividad`
--

CREATE TABLE IF NOT EXISTS `encuestaactividad` (
  `en_id` int(11) NOT NULL AUTO_INCREMENT,
  `al_rut` varchar(15) NOT NULL,
  `en_convocatoria` varchar(10) NOT NULL,
  `act_id` int(11) NOT NULL,
  `en_tipo` varchar(10) NOT NULL,
  `en_pregunta1` varchar(255) NOT NULL,
  `en_pregunta2` varchar(255) NOT NULL,
  `en_pregunta3` varchar(255) NOT NULL,
  `en_pregunta4` varchar(255) NOT NULL,
  `en_comentario` text,
  `en_estado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`en_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Volcado de datos para la tabla `encuestaactividad`
--

INSERT INTO `encuestaactividad` (`en_id`, `al_rut`, `en_convocatoria`, `act_id`, `en_tipo`, `en_pregunta1`, `en_pregunta2`, `en_pregunta3`, `en_pregunta4`, `en_comentario`, `en_estado`) VALUES
(4, '17.912.202-2', '2015-1', 3, 'Taller', 'Ni acuerdo ni desacuerdo', 'De acuerdo', 'De acuerdo', 'De acuerdo', '', 1),
(8, '17.912.202-2', '2015-1', 3, 'Asignatura', 'Ni acuerdo ni desacuerdo', 'fsdf', 'dasfdf', 'dfgf', '', 0),
(40, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(41, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(42, '11.111.111-1', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(43, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(44, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(45, '11.111.111-1', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(46, '17.912.202-2', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(47, '232312', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(48, '11.111.111-1', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(49, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(50, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(51, '11.111.111-1', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(52, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(53, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(54, '11.111.111-1', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(55, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(56, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(57, '11.111.111-1', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(58, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(59, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(60, '11.111.111-1', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(61, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(62, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(63, '11.111.111-1', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(64, '17.912.202-2', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(65, '232312', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(66, '11.111.111-1', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(67, '17.912.202-2', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(68, '232312', '2015-1', 3, 'Taller', '', '', '', '', NULL, 0),
(69, '11.111.111-1', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(70, '17.912.202-2', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(71, '232312', '2015-1', 3, 'Asignatura', '', '', '', '', NULL, 0),
(72, '11.111.111-1', '2015-1', 4, 'Taller', '', '', '', '', NULL, 0),
(73, '17.912.202-2', '2015-1', 4, 'Taller', 'Ni acuerdo ni desacuerdo', 'Ni acuerdo ni desacuerdo', 'Ni acuerdo ni desacuerdo', 'En desacuerdo', 'la conteste', 1),
(74, '232312', '2015-1', 4, 'Taller', '', '', '', '', NULL, 0),
(75, '12.305.014-2', '2015-1', 4, 'Taller', 'De acuerdo', 'Ni acuerdo ni desacuerdo', 'En desacuerdo', 'De acuerdo', 'asdasdasd', 1),
(77, '232312', '2015-1', 4, 'Taller', '', '', '', '', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopostulacion`
--

CREATE TABLE IF NOT EXISTS `estadopostulacion` (
  `pro_idProyecto` int(15) NOT NULL,
  `espos_inscripcion` varchar(255) DEFAULT NULL,
  `espos_informeInnovacion` varchar(255) DEFAULT NULL,
  `espos_anexo2` varchar(255) DEFAULT NULL,
  `espos_cartaEmpresa` varchar(255) DEFAULT NULL,
  `espos_prehallasgo` varchar(255) DEFAULT NULL,
  `espos_copiaCarnet` varchar(255) DEFAULT NULL,
  `espos_alumnoRegular` varchar(255) DEFAULT NULL,
  `espos_curriculum` varchar(255) DEFAULT NULL,
  `espos_informeFinal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pro_idProyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadopostulacion`
--

INSERT INTO `estadopostulacion` (`pro_idProyecto`, `espos_inscripcion`, `espos_informeInnovacion`, `espos_anexo2`, `espos_cartaEmpresa`, `espos_prehallasgo`, `espos_copiaCarnet`, `espos_alumnoRegular`, `espos_curriculum`, `espos_informeFinal`) VALUES
(3, '1', NULL, NULL, NULL, NULL, NULL, 'certificado de nacimiento.pdf', NULL, NULL),
(5, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluadores`
--

CREATE TABLE IF NOT EXISTS `evaluadores` (
  `ev_rut` varchar(15) NOT NULL,
  `ev_email` varchar(30) NOT NULL,
  `ev_nombre` varchar(255) NOT NULL,
  `ev_clave` varchar(100) NOT NULL,
  `ev_estado` varchar(8) NOT NULL DEFAULT 'Activo',
  PRIMARY KEY (`ev_rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evaluadores`
--

INSERT INTO `evaluadores` (`ev_rut`, `ev_email`, `ev_nombre`, `ev_clave`, `ev_estado`) VALUES
('17.641.416-2', 'a@u.cl', 'asfas', '123456', 'Activo'),
('8.973.027-9', 'jua@live.com', 'Alberto Riquelme', '123456', 'Activo');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE IF NOT EXISTS `objetivos` (
  `pro_idProyecto` int(11) NOT NULL,
  `ob_objetivo1` text NOT NULL,
  `ob_objetivo2` text,
  `ob_objetivo3` text,
  `ob_objetivo4` text,
  `ob_objetivo5` text,
  `ob_resultado1` text,
  `ob_resultado2` text,
  `ob_resultado3` text,
  `ob_resultado4` text,
  `ob_resultado5` text,
  `ob_actividades1` text,
  `ob_actividades2` text,
  `ob_actividades3` text,
  `ob_actividades4` text,
  `ob_actividades5` text,
  PRIMARY KEY (`pro_idProyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`pro_idProyecto`, `ob_objetivo1`, `ob_objetivo2`, `ob_objetivo3`, `ob_objetivo4`, `ob_objetivo5`, `ob_resultado1`, `ob_resultado2`, `ob_resultado3`, `ob_resultado4`, `ob_resultado5`, `ob_actividades1`, `ob_actividades2`, `ob_actividades3`, `ob_actividades4`, `ob_actividades5`) VALUES
(5, 'sacar un 7', '', 'dasd', 'sadasd', 'sadas', 'un 7', '', 'asdas', 'dasdasd', 'dasd', 'estudiar', '', 'dasd', 'sadasdsa', 'asdasd'),
(11, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'hacer especificaciones', '', '', '', '', 'lista de especificaciones', '', '', '', '', 'pensar\r\nescribir\r\nredactar\r\n', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `pro_idProyecto` int(11) NOT NULL AUTO_INCREMENT,
  `pro_titulo` varchar(255) NOT NULL,
  `pro_duracion` int(2) NOT NULL,
  `pro_ambito` varchar(255) NOT NULL,
  `pro_emNombre` varchar(255) NOT NULL,
  `pro_emContacto` varchar(255) NOT NULL,
  `pro_emTelefono` varchar(255) NOT NULL,
  `emEmail` varchar(255) NOT NULL,
  `pro_profeNombre` varchar(255) NOT NULL,
  `pro_profeEmail` varchar(255) NOT NULL,
  `pro_profeTelefono` varchar(255) NOT NULL,
  `pro_dirEscuela` varchar(255) NOT NULL,
  `pro_vBEscuela` varchar(255) NOT NULL,
  `pro_aporteValorado` int(11) NOT NULL,
  `pro_aportePecuniario` int(11) NOT NULL,
  `pro_resumenEjecutivo` text NOT NULL,
  `pro_descripcionEmpresa` text NOT NULL,
  `pro_definicionProblema` text NOT NULL,
  `pro_solucionPropuesta` text NOT NULL,
  `pro_estadoArte` text NOT NULL,
  `pro_objetivoGeneral` text NOT NULL,
  `pro_metodologia` text NOT NULL,
  PRIMARY KEY (`pro_idProyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`pro_idProyecto`, `pro_titulo`, `pro_duracion`, `pro_ambito`, `pro_emNombre`, `pro_emContacto`, `pro_emTelefono`, `emEmail`, `pro_profeNombre`, `pro_profeEmail`, `pro_profeTelefono`, `pro_dirEscuela`, `pro_vBEscuela`, `pro_aporteValorado`, `pro_aportePecuniario`, `pro_resumenEjecutivo`, `pro_descripcionEmpresa`, `pro_definicionProblema`, `pro_solucionPropuesta`, `pro_estadoArte`, `pro_objetivoGeneral`, `pro_metodologia`) VALUES
(3, 'Nuevo sistema de alimentación', 6, 'Nutrición', 'Laura María', 'Francisco Castro', '534535345', 'fran@live.com', 'Claudio Barrra', 'clau@ubiobio.cl', '4353453', 'Nutrición y dietética', 'SI', 79000, 15000, 'Este es un proyecto', 'Es una empresa dedicada a fabricar', 'Actualmente no se tiene una manera de poder', 'Se plantea construir un sistema', 'No se han encontrado', 'Construir un sistema', 'Investigar y luego desarrollar'),
(5, 'Análisis de mercado', 6, 'Comercial', 'Darca SA', 'Luis Quintero', '238746823', 'lui@chi.cl', 'Claudio Acuña', 'cla@ien.ck', '234234', 'Comercial', 'SI', 50000, 0, 'Este es un proyecto que realiza un análisis Describir brevemente a la empresa que patrocina el proyecto: su historia, rubro, misión y visión, productos y/o servicios, clientes, posición competitiva, ubicación, etc. (Máximo una página).', 'Es una empresa dedicada a comprar artefactos Describir brevemente a la empresa que patrocina el proyecto: su historia, rubro, misión y visión, productos y/o servicios, clientes, posición competitiva, ubicación, etc. (Máximo una página).', 'Existen muchos problemas para poder identificar el crecimiento del mercado', 'Crear un sistema automatizado que determine el crecimiento del mercado', 'No existen proyectos similares Describir brevemente a la empresa que patrocina el proyecto: su historia, rubro, misión y visión, productos y/o servicios, clientes, posición competitiva, ubicación, etc. (Máximo una página).', 'Construir un sistema que determine el crecimiento Describir brevemente a la empresa que patrocina el proyecto: su historia, rubro, misión y visión, productos y/o servicios, clientes, posición competitiva, ubicación, etc. (Máximo una página).', 'Investigar la situación actual y determinar las causas'),
(7, 'dasd', 0, 'sad', 'asd', 'asd', '12345678', 'sadasd@fdsfds.cl', 'dasd', 'sada@dsadsa.com', '12345678', 'dsad', 'asdas', 313, 123, 'sdasdasddddddddddddddddddddddddddddddddddddddsasasaasasssssssssssssssssssssssssssssssssssssss', 'sdasdasddddddddddddddddddddddddddddddddddddddsasasaasasssssssssssssssssssssssssssssssssssssss', 'sdasdasddddddddddddddddddddddddddddddddddddddsasasaasasssssssssssssssssssssssssssssssssssssss', 'sdasdasddddddddddddddddddddddddddddddddddddddsasasaasasssssssssssssssssssssssssssssssssssssss', 'sdasdasddddddddddddddddddddddddddddddddddddddsasasaasasssssssssssssssssssssssssssssssssssssss', 'sdasdasddddddddddddddddddddddddddddddddddddddsasasaasasssssssssssssssssssssssssssssssssssssss', 'sdasdasddddddddddddddddddddddddddddddddddddddsasasaasasssssssssssssssssssssssssssssssssssssss'),
(8, 'Proyecto lunar', 0, 'jhb', 'hbj', 'hjbjb', '12345678', 'sadasd@fdsfds.cl', 'hjkkkjh', 'sada@dsadsa.com', '12345678', 'ugyuguy', 'gyugugyu', 2323, 232, 'jkkjhkjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjkkkkkkk kkkkkkk kkkkkkkkkkkkkkkkkk kkkkkk kkkkkkkkkkkkkkkkkkkkkk', 'jkkjhkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'jkkjhkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjkkkkkkkkkkkkkkkkkkkk kkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'jkkjhkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkk', 'jkkjhkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjkkkkkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'jkkjhkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkkk', 'jkkjhkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkk'),
(13, 'Solar', 0, 'yuguyuygguy', 'guyguyguy', 'yguyuguygyu', '12345678', 'sadasd@fdsfds.cl', 'guyguyguyggy', 'sada@dsadsa.com', '12345678', 'asd', 'gyugugyu', 2323, 21312, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectoevaluador`
--

CREATE TABLE IF NOT EXISTS `proyectoevaluador` (
  `pre_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_idProyecto` int(11) NOT NULL,
  `ev_rut` varchar(15) NOT NULL,
  `pre_nota` int(2) DEFAULT NULL,
  `pre_comentario` text,
  `pre_estadoPostulacion` varchar(50) DEFAULT NULL,
  `pre_estadoEvaluacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `proyectoevaluador`
--

INSERT INTO `proyectoevaluador` (`pre_id`, `pro_idProyecto`, `ev_rut`, `pre_nota`, `pre_comentario`, `pre_estadoPostulacion`, `pre_estadoEvaluacion`) VALUES
(24, 3, '17.641.416-2', 30, '''menuTypeChange'' function on change of any radio selection. This function will show/hide respected elements.Now in form, based on menu type selection i want to show or hide other 3 fields. The below code will take care of it. I have called ''menuTypeChange'' function on change of any radio selection. This function will ', 'Aprobado', 'Si');

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
