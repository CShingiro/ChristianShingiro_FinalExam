CREATE DATABASE `guest_db`;

USE  `guest_db`;

CREATE TABLE `guest_details` (
  `guest_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `comment` varchar(45) NOT NULL,
  PRIMARY KEY (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `guest_db`.`guest_details` (`guest_id`, `name`, `email`, `comment`) VALUES ('1', 'Ammie', 'a@email.com', 'Ammie\'s Comment.');
INSERT INTO `guest_db`.`guest_details` (`guest_id`, `name`, `email`, `comment`) VALUES ('2', 'Emma', 'e@email.com', 'Emma\'s Comment.');
INSERT INTO `guest_db`.`guest_details` (`guest_id`, `name`, `email`, `comment`) VALUES ('3', 'Harry', 'h@email.com', 'Harry\'s Comment.');
INSERT INTO `guest_db`.`guest_details` (`guest_id`, `name`, `email`, `comment`) VALUES ('4', 'Jorge', 'j@email.com', 'Jorge\'s Comment.');
INSERT INTO `guest_db`.`guest_details` (`guest_id`, `name`, `email`, `comment`) VALUES ('5', 'Tom', 't@email.com', 'Tom\'s Comment.');
