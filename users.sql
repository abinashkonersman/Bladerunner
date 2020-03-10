CREATE TABLE `users` (
  `uid` bigint(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tname` varchar(255) NOT NULL,
  `rfid` varchar(255) NOT NULL,
  `ans1` varchar(255) NOT NULL,
  `ans2` varchar(255) NOT NULL,
  `ans3` varchar (255) NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


