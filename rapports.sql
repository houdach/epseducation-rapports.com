
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `rapports` (
  `id`     integer NOT NULL,
  `agence` varchar(100) NOT NULL,
  `respo` varchar(100) NOT NULL,
  `date_1` date NOT NULL,
  `date_2` date NOT NULL,
  `ch_1_n` int NOT NULL DEFAULT '0',
  `ch_1_m` int DEFAULT NULL,
  `ch_1_r` text,
  `ch_2_n` int NOT NULL DEFAULT '0',
  `ch_2_m`  int DEFAULT NULL,
  `ch_2_r` text,
  `ch_3_n` int NOT NULL DEFAULT '0',
  `ch_3_m`  int DEFAULT NULL,
  `ch_3_r` text,
  `ch_4_n` int NOT NULL DEFAULT '0',
  `ch_4_m`  int DEFAULT NULL,
  `ch_4_r` text,
  `ch_5_n` int NOT NULL DEFAULT '0',
  `ch_5_r` text,
  `ch_6_n` int NOT NULL DEFAULT '0',
  `ch_6_r` text,
  `ch_7_n` int NOT NULL DEFAULT '0',
  `ch_7_r` text,
  `ch_8_n` int NOT NULL DEFAULT '0',
  `ch_8_r` text,
  `ch_11_n` int NOT NULL DEFAULT '0',
  `ch_11_r` text,
  `ch_9_n` int NOT NULL DEFAULT '0',
  `ch_9_r` text,
  `ch_10_n` int NOT NULL DEFAULT '0',
  `ch_10_r` text
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `rapports`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rapports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

