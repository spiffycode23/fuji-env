-- Table structure for table `checkin`
--

DROP TABLE IF EXISTS `checkin`;
CREATE TABLE `checkin` (
  `checkin_id` int(11) NOT NULL AUTO_INCREMENT,
  `checkin_host` varchar(32) NOT NULL,
  `checkin_method` varchar(32) DEFAULT NULL,
  `checkin_ts` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `checkin_ip` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`checkin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
