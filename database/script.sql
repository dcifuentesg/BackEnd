CREATE DATABASE php_crud;

use php_crud;

CREATE TABLE comment(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE comment;