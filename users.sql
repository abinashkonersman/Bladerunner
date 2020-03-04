CREATE TABLE `users` (
  `uid` bigint(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tname` varchar(50) NOT NULL,
  `rfid` varchar(70) NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `usa` (
    `sid` bigint(11) NOT NULL PRIMARY KEY,
    `answer` varchar(50) NOT NULL,
    `timemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `uid` bigint(11),
    FOREIGN KEY (uid) REFERENCES users(uid))ENGINE=InnoDB DEFAULT CHARSET=utf8;