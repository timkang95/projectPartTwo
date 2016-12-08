DROP TABLE IF EXISTS `blog_members`;

CREATE TABLE `blog_members` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`)
VALUES
  (1,'Timothy Kang','asdasdasd','tik12@pitt.edu');


DROP TABLE IF EXISTS `blog_posts`;

CREATE TABLE `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postCont`, `postDate`)
VALUES
  (1, 'Please roast my resume here', 'Hi this is my resume please implode and destroy my resume', toDate('04 Dec 2016', 'DD MON YYYY');
