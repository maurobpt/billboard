-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jul-2016 às 14:34
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billboard`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(255) NOT NULL,
  `v_time` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `video`
--

INSERT INTO `video` (`v_id`, `video_name`, `v_time`, `timestamp`) VALUES
(1, '', '0', '0'),
(2, 'NPro  Drone Video in Dubai in 4K (DJI Inspire 1, Phantom2).3gp', '0', '0'),
(3, 'NPro  Drone Video in Dubai in 4K (DJI Inspire 1, Phantom2).3gp', '0', '0'),
(4, 'NPro  Drone Video in Dubai in 4K (DJI Inspire 1, Phantom2).3gp', '0', '0'),
(5, 'NPro  Drone Video in Dubai in 4K (DJI Inspire 1, Phantom2).3gp', '0', '0'),
(6, '', '0', '0'),
(7, 'Wildlife.wmv', '0', '0'),
(8, 'Wildlife.wmv', '0', '0'),
(9, 'Wildlife.wmv', '4', '2016'),
(10, 'Wildlife.wmv', '05/09/2016 12:00 AM', '2016-07-14 17:43:33'),
(11, 'Wildlife.wmv', '04/12/2016 12:00 AM', '2016-07-14 17:55:32'),
(12, 'Wildlife.wmv', '05/01/2016 12:00 AM', '2016-07-14 17:59:47'),
(13, 'Wildlife.wmv', '07/17/2016 12:00 AM', '2016-07-14 18:00:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
