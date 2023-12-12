-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Lis 29, 2023 at 04:47 PM
-- Wersja serwera: 10.5.20-MariaDB
-- Wersja PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21481358_jawor`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cladding_param`
--

CREATE TABLE `cladding_param` (
  `id` int(11) NOT NULL,
  `wire` varchar(15) NOT NULL,
  `gas` varchar(15) NOT NULL,
  `current` int(20) NOT NULL,
  `voltage_correct` int(11) NOT NULL,
  `gas_flow` int(10) NOT NULL,
  `Prog_Name_Robot` varchar(10) NOT NULL,
  `Prog_Name_Source` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cladding_param`
--

INSERT INTO `cladding_param` (`id`, `wire`, `gas`, `current`, `voltage_correct`, `gas_flow`, `Prog_Name_Robot`, `Prog_Name_Source`) VALUES
(1, 'DO-015', 'Ar', 250, -2, 12, 'spaw1', 'spaw1'),
(2, 'Maraging', 'Ar+CO2+O2', 230, 2, 12, 'prog2', 'prog2'),
(3, 'DO-04', 'Ar+CO2+O2', 240, 0, 12, 'spaw3', 'spaw3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `set_id`
--

CREATE TABLE `set_id` (
  `id` int(11) NOT NULL,
  `id_number` varchar(10) NOT NULL,
  `nazwa_kompletu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `set_id`
--

INSERT INTO `set_id` (`id`, `id_number`, `nazwa_kompletu`) VALUES
(1, '885-064', 'Komplet 1'),
(2, '196-030', 'Komplet 2'),
(3, '510-203', 'Komplet 3'),
(4, '885-159', 'Komplet 4'),
(5, '885-160', 'Komplet 5');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tool`
--

CREATE TABLE `tool` (
  `id` int(100) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `materiał` varchar(10) NOT NULL,
  `tool_type` varchar(10) NOT NULL,
  `reg_cycles` int(10) NOT NULL,
  `id_cladd_prog` int(10) NOT NULL,
  `id_set` int(10) NOT NULL,
  `qr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tool`
--

INSERT INTO `tool` (`id`, `foto`, `materiał`, `tool_type`, `reg_cycles`, `id_cladd_prog`, `id_set`, `qr`) VALUES
(1, 'widlak.jpg', 'WCL', 'widłak', 0, 1, 3, 'id_01.png'),
(2, 'matryca_na_mlot.jpg', 'Unimax', 'dźwignia 1', 2, 2, 1, 'id_02.png'),
(3, 'piasta.jpg', 'WCL', 'piasta', 2, 1, 2, 'id_03.png'),
(4, 'okrojnica.jpg', 'WNL', 'dźwignia 2', 1, 1, 4, 'id_04.png'),
(5, 'widlak.jpg', 'WCL', 'widłak', 2, 1, 3, 'id_05.png'),
(6, 'piasta.jpg', 'WNL', 'piasta', 2, 2, 2, 'id_06.png'),
(7, 'matryca_na_mlot.jpg', 'Unimax', 'dźwignia 1', 2, 1, 1, 'id_07.png'),
(8, 'widlak.jpg', 'WCL', 'widłak', 1, 2, 3, 'id_08.png'),
(9, 'piasta.jpg', 'Unimax', 'piasta', 0, 1, 2, 'id_09.png'),
(10, 'okrojnica.jpg', 'WNL', 'dźwignia 2', 3, 1, 1, 'id_10.png'),
(11, 'widlak.jpg', 'Unimax', 'widłak', 1, 3, 1, 'id_11.png'),
(12, 'piasta.jpg', 'WNL', 'piasta', 0, 3, 3, 'id_12.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cladding_param`
--
ALTER TABLE `cladding_param`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `set_id`
--
ALTER TABLE `set_id`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tool`
--
ALTER TABLE `tool`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cladd_prog` (`id_cladd_prog`),
  ADD KEY `tool_ibfk_2` (`id_set`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tool`
--
ALTER TABLE `tool`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tool`
--
ALTER TABLE `tool`
  ADD CONSTRAINT `tool_ibfk_1` FOREIGN KEY (`id_cladd_prog`) REFERENCES `cladding_param` (`id`),
  ADD CONSTRAINT `tool_ibfk_2` FOREIGN KEY (`id_set`) REFERENCES `set_id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
