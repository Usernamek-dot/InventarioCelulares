-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 04:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celulares`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcelular`
--

CREATE TABLE `tblcelular` (
  `codigo` int(3) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `precio` int(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcelular`
--

INSERT INTO `tblcelular` (`codigo`, `modelo`, `marca`, `precio`, `color`, `estado`) VALUES
(2, 'modelo2Df', 'marca2', 34000, 'rosa', 0),
(3, 'modelo 3', 'marca 3Actualizada', 60000, 'violeta', 1),
(5, 'modelo 5 ', 'marca 5', 54000, 'verde', 0),
(6, 'modelo 6', 'marca 6.3', 70000, 'amarillo', 0),
(7, 'modelo 7', 'marca 7', 36000, 'azul', 0),
(8, 'modelo666', 'marca S', 60000, 'violetAA', 0),
(9, 'modelo 4', 'marca 4BfH', 650000, 'magentaaaa', 0),
(11, 'modelo 6Qs', 'marca 6', 70000, 'amarillo', 0),
(13, 'modelo 13Hya', 'marca 13', 60000, 'tomate', 0),
(14, 'modelo 88EE', 'marca 88', 69000, 'naranja', 0),
(15, 'modelo ddQs', 'marca ddAS', 59000, 'verde', 0),
(16, 'modelo 77Ahta', 'marca 77', 70000, 'amarillo', 0),
(17, 'modelo 86DD', 'marca od3', 36000, 'gris', 1),
(18, 'modelo45D', 'maracaDzz', 3400, 'marron', 1),
(19, 'modelo SRx', 'marca 33Fho Samsumng', 13000, 'Celeste', 0),
(20, 'modelo Fr33', 'marca 5yy', 4500, 'azul', 0),
(21, 'model fhg', 'marca 45', 89000, 'gris', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblestado`
--

CREATE TABLE `tblestado` (
  `codigo` int(1) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblestado`
--

INSERT INTO `tblestado` (`codigo`, `nombre`) VALUES
(0, 'inactivo'),
(1, 'activo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcelular`
--
ALTER TABLE `tblcelular`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_estado` (`estado`);

--
-- Indexes for table `tblestado`
--
ALTER TABLE `tblestado`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcelular`
--
ALTER TABLE `tblcelular`
  MODIFY `codigo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcelular`
--
ALTER TABLE `tblcelular`
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`estado`) REFERENCES `tblestado` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
