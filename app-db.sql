DROP TABLE IF EXISTS article;
CREATE TABLE IF NOT EXISTS article (
	id int(11) unsigned NOT NULL AUTO_INCREMENT,
	titre varchar(255) NOT NULL,
	texte TEXT NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_general_ci AUTO_INCREMENT=1 ;

