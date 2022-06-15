DROP Database if exists  cine_exemple;
CREATE Database cine_exemple;







CREATE TABLE `user` (
  `user_id` int(11) NOT NULL PRIMARY KEY,
  `user_pseudo` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_adress` varchar(30) NOT NULL,
  `user_date_of_birth` date NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL PRIMARY KEY,
  `article_title` varchar(30) NOT NULL,
  `article_date` date NOT NULL,
  `article_author` varchar(50) NOT NULL,
  `article_content` text NOT NULL,
  `article_type` varchar(30) NOT NULL,
  `article_picture` varchar(255) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES user (user_id),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
CREATE TABLE `forum` (
  `post_id` int(11) NOT NULL PRIMARY KEY,
  `post_title` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_content` text NOT NULL,
  `article_type` varchar(30) NOT NULL,
  `post_picture` varchar(255) NOT NULL,
 FOREIGN KEY (user_id) REFERENCES user (user_id),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL PRIMARY KEY,
  `comment_date` date NOT NULL,
  `comment_author` varchar(50) NOT NULL,
  `comment_content` text NOT NULL,
  FOREIGN KEY (user_id) REFERENCES user (user_id),
  FOREIGN KEY (post_id) REFERENCES forum (post_id),
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
