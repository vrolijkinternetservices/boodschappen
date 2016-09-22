-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `boodschappen`
--

-- --------------------------------------------------------

--
-- Table structure for table `boodschappen_boodschappenlijsten`
--

CREATE TABLE IF NOT EXISTS `boodschappen_boodschappenlijsten` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `boodschappen_boodschappenlijsten_items`
--

CREATE TABLE IF NOT EXISTS `boodschappen_boodschappenlijsten_items` (
  `id` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `boodschappenlijst_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boodschappen_boodschappenlijsten`
--
ALTER TABLE `boodschappen_boodschappenlijsten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boodschappen_boodschappenlijsten_items`
--
ALTER TABLE `boodschappen_boodschappenlijsten_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boodschappen_boodschappenlijsten`
--
ALTER TABLE `boodschappen_boodschappenlijsten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `boodschappen_boodschappenlijsten_items`
--
ALTER TABLE `boodschappen_boodschappenlijsten_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
