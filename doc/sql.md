-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 30, 2015 at 02:26 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ciel`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalite`
--

CREATE TABLE `personalite` (
`reg_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `revendeur` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `personalite` varchar(255) NOT NULL,
  `reponse1` text NOT NULL,
  `reponse2` text NOT NULL,
  `reponse3` text NOT NULL,
  `reponse4` text CHARACTER SET utf16 NOT NULL,
  `reponse5` text NOT NULL,
  `reg_datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalite`
--
ALTER TABLE `personalite`
 ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalite`
--
ALTER TABLE `personalite`
MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;