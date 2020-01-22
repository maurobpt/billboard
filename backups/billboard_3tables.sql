-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jul-2016 às 13:38
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
-- Estrutura da tabela `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_images` varchar(255) NOT NULL,
  `p_time` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `pictures`
--

INSERT INTO `pictures` (`p_id`, `p_images`, `p_time`, `timestamp`) VALUES
(1, 'Array', '', '2016-07-16 15:37'),
(2, 'Array', '07/12/2016 12:00 AM', '2016-07-16 15:42'),
(3, 'upload/wall1.jpg;upload/wall2.jpg;upload/wall3.jpg;upload/wall4.jpg', '07/12/2016 12:00 AM', '2016-07-16 15:46'),
(4, 'upload/wall1.jpg;upload/wall2.jpg;upload/wall3.jpg;upload/wall4.jpg', '07/12/2016 12:00 AM', '2016-07-16 15:48'),
(5, 'upload/robot_animated.gif', '07/27/2016 3:00 PM', '2016-07-20 15:49'),
(6, 'upload/bruce_lee_vector.jpg', '07/28/2016 5:00 PM', '2016-07-27 13:34'),
(7, 'upload/jackie-chan.jpg', '07/31/2016 5:00 AM', '2016-07-27 13:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_username` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `users_password` varchar(256) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `users_email` varchar(256) NOT NULL,
  `users_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`users_id`, `users_username`, `users_password`, `users_email`, `users_active`) VALUES
(1, 'teste', '46070d4bf934fb0d4b06d9e2c46e346944e322444900a435d7d9a95e6d7435f5', 'teste@teste.com', 1);

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
