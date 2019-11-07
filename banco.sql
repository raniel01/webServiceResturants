CREATE TABLE `tb_restaurants` (
  `code` int(11) NOT NUll AUTO_INCREMENT,
  `restaurants` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `localization` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categories` int(11) NOT NULL,
  `login` varchar(20) NOT NUll,
  `password` int(50) NOT NUll
  PRIMARY KEY (`code`)
);

CREATE TABLE `tb_menu` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `restaurants` int(11) NOT NULL,
  `items` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prices` decimal(10,2) NOT NULL,
  PRIMARY KEY (`code`),
  FOREIGN KEY (`restaurans`) REFERENCES `tb_restaurants` (`code`)
);
