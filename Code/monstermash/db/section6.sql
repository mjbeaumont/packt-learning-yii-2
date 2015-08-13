DROP TABLE IF EXISTS `skin`;
CREATE TABLE `skin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `skin` VALUES ('1', 'Pale'), ('2', 'Green'), ('3', 'White'), ('4', 'Unknown');

ALTER TABLE monster ADD skinId INT(11);

ALTER TABLE `monstermash`.`monster` ADD CONSTRAINT `skin_id` FOREIGN KEY (`skin_id`) REFERENCES `monstermash`.`skin` (`id`)   ON UPDATE NO ACTION ON DELETE NO ACTION;