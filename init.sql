SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `przepisy` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf32_polish_ci NOT NULL,
  `kategoria` tinytext COLLATE utf32_polish_ci NOT NULL,
  `sklad` text COLLATE utf32_polish_ci NOT NULL,
  `przygotowanie` text COLLATE utf32_polish_ci NOT NULL,
  `opis` text COLLATE utf32_polish_ci NOT NULL,
  `shortopis` text COLLATE utf32_polish_ci NOT NULL,
  `img` text COLLATE utf32_polish_ci NOT NULL,
  `vegan` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;
ALTER TABLE `przepisy`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `przepisy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;