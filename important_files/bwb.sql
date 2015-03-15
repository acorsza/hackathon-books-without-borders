-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Maio-2014 às 09:37
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bwb`
--
CREATE DATABASE IF NOT EXISTS `bwb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bwb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `idcountries` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `flag_url` varchar(100) NOT NULL,
  PRIMARY KEY (`idcountries`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=244 ;

--
-- Extraindo dados da tabela `countries`
--

INSERT INTO `countries` (`idcountries`, `country`, `flag_url`) VALUES
(1, 'Afghanistan', ''),
(2, 'Aland Islands', ''),
(3, 'Albania', ''),
(4, 'Algeria', ''),
(5, 'American Samoa', ''),
(6, 'Andorra', ''),
(7, 'Angola', ''),
(8, 'Anguilla', ''),
(9, 'Antarctica', ''),
(10, 'Antigua And Barbuda', ''),
(11, 'Argentina', ''),
(12, 'Armenia', ''),
(13, 'Aruba', ''),
(14, 'Australia', ''),
(15, 'Austria', ''),
(16, 'Azerbaijan', ''),
(17, 'Bahamas', ''),
(18, 'Bahrain', ''),
(19, 'Bangladesh', ''),
(20, 'Barbados', ''),
(21, 'Belarus', ''),
(22, 'Belgium', ''),
(23, 'Belize', ''),
(24, 'Benin', ''),
(25, 'Bermuda', ''),
(26, 'Bhutan', ''),
(27, 'Bolivia', ''),
(28, 'Bosnia And Herzegovina', ''),
(29, 'Botswana', ''),
(30, 'Bouvet Island', ''),
(31, 'Brazil', ''),
(32, 'British Indian Ocean Territory', ''),
(33, 'Brunei Darussalam', ''),
(34, 'Bulgaria', ''),
(35, 'Burkina Faso', ''),
(36, 'Burundi', ''),
(37, 'Cambodia', ''),
(38, 'Cameroon', ''),
(39, 'Canada', ''),
(40, 'Cape Verde', ''),
(41, 'Cayman Islands', ''),
(42, 'Central African Republic', ''),
(43, 'Chad', ''),
(44, 'Chile', ''),
(45, 'China', ''),
(46, 'Christmas Island', ''),
(47, 'Cocos (Keeling) Islands', ''),
(48, 'Colombia', ''),
(49, 'Comoros', ''),
(50, 'Congo', ''),
(51, 'Congo', ' The Democratic Republic Of The'),
(52, 'Cook Islands', ''),
(53, 'Costa Rica', ''),
(54, 'Cote D''Ivoire', ''),
(55, 'Croatia', ''),
(56, 'Cuba', ''),
(57, 'Cyprus', ''),
(58, 'Czech Republic', ''),
(59, 'Denmark', ''),
(60, 'Djibouti', ''),
(61, 'Dominica', ''),
(62, 'Dominican Republic', ''),
(63, 'Ecuador', ''),
(64, 'Egypt', ''),
(65, 'El Salvador', ''),
(66, 'Equatorial Guinea', ''),
(67, 'Eritrea', ''),
(68, 'Estonia', ''),
(69, 'Ethiopia', ''),
(70, 'Falkland Islands (Malvinas)', ''),
(71, 'Faroe Islands', ''),
(72, 'Fiji', ''),
(73, 'Finland', ''),
(74, 'France', ''),
(75, 'French Guiana', ''),
(76, 'French Polynesia', ''),
(77, 'French Southern Territories', ''),
(78, 'Gabon', ''),
(79, 'Gambia', ''),
(80, 'Georgia', ''),
(81, 'Germany', ''),
(82, 'Ghana', ''),
(83, 'Gibraltar', ''),
(84, 'Greece', ''),
(85, 'Greenland', ''),
(86, 'Grenada', ''),
(87, 'Guadeloupe', ''),
(88, 'Guam', ''),
(89, 'Guatemala', ''),
(90, 'Guernsey', ''),
(91, 'Guinea', ''),
(92, 'Guinea-Bissau', ''),
(93, 'Guyana', ''),
(94, 'Haiti', ''),
(95, 'Heard Island And Mcdonald Islands', ''),
(96, 'Holy See (Vatican City State)', ''),
(97, 'Honduras', ''),
(98, 'Hong Kong', ''),
(99, 'Hungary', ''),
(100, 'Iceland', ''),
(101, 'India', ''),
(102, 'Indonesia', ''),
(103, 'Iran', ' Islamic Republic Of'),
(104, 'Iraq', ''),
(105, 'Ireland', ''),
(106, 'Isle Of Man', ''),
(107, 'Israel', ''),
(108, 'Italy', ''),
(109, 'Jamaica', ''),
(110, 'Japan', ''),
(111, 'Jersey', ''),
(112, 'Jordan', ''),
(113, 'Kazakhstan', ''),
(114, 'Kenya', ''),
(115, 'Kiribati', ''),
(116, 'Korea', ' Democratic People''S Republic Of'),
(117, 'Korea', ' Republic Of'),
(118, 'Kuwait', ''),
(119, 'Kyrgyzstan', ''),
(120, 'Lao People''S Democratic Republic', ''),
(121, 'Latvia', ''),
(122, 'Lebanon', ''),
(123, 'Lesotho', ''),
(124, 'Liberia', ''),
(125, 'Libyan Arab Jamahiriya', ''),
(126, 'Liechtenstein', ''),
(127, 'Lithuania', ''),
(128, 'Luxembourg', ''),
(129, 'Macao', ''),
(130, 'Macedonia', ' The Former Yugoslav Republic Of'),
(131, 'Madagascar', ''),
(132, 'Malawi', ''),
(133, 'Malaysia', ''),
(134, 'Maldives', ''),
(135, 'Mali', ''),
(136, 'Malta', ''),
(137, 'Marshall Islands', ''),
(138, 'Martinique', ''),
(139, 'Mauritania', ''),
(140, 'Mauritius', ''),
(141, 'Mayotte', ''),
(142, 'Mexico', ''),
(143, 'Micronesia', ' Federated States Of'),
(144, 'Moldova', ' Republic Of'),
(145, 'Monaco', ''),
(146, 'Mongolia', ''),
(147, 'Montserrat', ''),
(148, 'Morocco', ''),
(149, 'Mozambique', ''),
(150, 'Myanmar', ''),
(151, 'Namibia', ''),
(152, 'Nauru', ''),
(153, 'Nepal', ''),
(154, 'Netherlands', ''),
(155, 'Netherlands Antilles', ''),
(156, 'New Caledonia', ''),
(157, 'New Zealand', ''),
(158, 'Nicaragua', ''),
(159, 'Niger', ''),
(160, 'Nigeria', ''),
(161, 'Niue', ''),
(162, 'Norfolk Island', ''),
(163, 'Northern Mariana Islands', ''),
(164, 'Norway', ''),
(165, 'Oman', ''),
(166, 'Pakistan', ''),
(167, 'Palau', ''),
(168, 'Palestinian Territory', ' Occupied'),
(169, 'Panama', ''),
(170, 'Papua New Guinea', ''),
(171, 'Paraguay', ''),
(172, 'Peru', ''),
(173, 'Philippines', ''),
(174, 'Pitcairn', ''),
(175, 'Poland', ''),
(176, 'Portugal', ''),
(177, 'Puerto Rico', ''),
(178, 'Qatar', ''),
(179, 'Reunion', ''),
(180, 'Romania', ''),
(181, 'Russian Federation', ''),
(182, 'Rwanda', ''),
(183, 'Saint Helena', ''),
(184, 'Saint Kitts And Nevis', ''),
(185, 'Saint Lucia', ''),
(186, 'Saint Pierre And Miquelon', ''),
(187, 'Saint Vincent And The Grenadines', ''),
(188, 'Samoa', ''),
(189, 'San Marino', ''),
(190, 'Sao Tome And Principe', ''),
(191, 'Saudi Arabia', ''),
(192, 'Senegal', ''),
(193, 'Serbia And Montenegro', ''),
(194, 'Seychelles', ''),
(195, 'Sierra Leone', ''),
(196, 'Singapore', ''),
(197, 'Slovakia', ''),
(198, 'Slovenia', ''),
(199, 'Solomon Islands', ''),
(200, 'Somalia', ''),
(201, 'South Africa', ''),
(202, 'South Georgia And The South Sandwich Islands', ''),
(203, 'Spain', ''),
(204, 'Sri Lanka', ''),
(205, 'Sudan', ''),
(206, 'Suriname', ''),
(207, 'Svalbard And Jan Mayen', ''),
(208, 'Swaziland', ''),
(209, 'Sweden', ''),
(210, 'Switzerland', ''),
(211, 'Syrian Arab Republic', ''),
(212, 'Taiwan', ' Province Of China'),
(213, 'Tajikistan', ''),
(214, 'Tanzania', ' United Republic Of'),
(215, 'Thailand', ''),
(216, 'Timor-Leste', ''),
(217, 'Togo', ''),
(218, 'Tokelau', ''),
(219, 'Tonga', ''),
(220, 'Trinidad And Tobago', ''),
(221, 'Tunisia', ''),
(222, 'Turkey', ''),
(223, 'Turkmenistan', ''),
(224, 'Turks And Caicos Islands', ''),
(225, 'Tuvalu', ''),
(226, 'Uganda', ''),
(227, 'Ukraine', ''),
(228, 'United Arab Emirates', ''),
(229, 'United Kingdom', ''),
(230, 'United States', ''),
(231, 'United States Minor Outlying Islands', ''),
(232, 'Uruguay', ''),
(233, 'Uzbekistan', ''),
(234, 'Vanuatu', ''),
(235, 'Venezuela', ''),
(236, 'Viet Nam', ''),
(237, 'Virgin Islands', ' British'),
(238, 'Virgin Islands', ' U.S.'),
(239, 'Wallis And Futuna', ''),
(240, 'Western Sahara', ''),
(241, 'Yemen', ''),
(242, 'Zambia', ''),
(243, 'Zimbabwe', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `donnation`
--

CREATE TABLE IF NOT EXISTS `donnation` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `description` varchar(256) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `type` varchar(20) NOT NULL,
  `observations` text NOT NULL,
  `last_state` varchar(20) NOT NULL,
  `current_state` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `donnor_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `donnor`
--

CREATE TABLE IF NOT EXISTS `donnor` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `since` date NOT NULL,
  `user_id` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `method`
--

CREATE TABLE IF NOT EXISTS `method` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `filepath` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `staff_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `description` varchar(256) NOT NULL,
  `about` text NOT NULL,
  `method_id` int(20) NOT NULL,
  `teacher_id` int(20) NOT NULL,
  `accepted` int(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `result_files`
--

CREATE TABLE IF NOT EXISTS `result_files` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `filepath` varchar(100) NOT NULL,
  `result_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `since` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `since` date NOT NULL,
  `user_id` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `type` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `type`) VALUES
(1, 'thales', '123', 'S'),
(2, 'aderlei', '123', 'S'),
(3, 'teacher', '123', 'T'),
(4, 'donor', '123', 'D');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
