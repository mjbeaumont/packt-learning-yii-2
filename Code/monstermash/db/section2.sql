DROP TABLE IF EXISTS `monstertest`;
CREATE TABLE `monstertest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `monstertest` VALUES ('1', 'Dracula', '999', 'm'), ('2', 'Frankenstein', '2', 'm'), ('3', 'Medusa', '34', 'f'), ('4', 'Mummy', '86', 'm'), ('5', 'Wicked Witch', '40', 'f');
