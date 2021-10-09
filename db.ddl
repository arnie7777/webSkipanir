CREATE DATABASE IF NOT EXISTS MathForKids;
CREATE TABLE IF NOT EXISTS Circles (
   id INT AUTO_INCREMENT PRIMARY KEY,
   x INT,
   y INT,
   radius INT,
   color varchar(255)
);

CREATE TABLE IF NOT EXISTS Credentials (
   id INT AUTO_INCREMENT PRIMARY KEY,
   username varchar(255),
   password varchar(255)
);

INSERT INTO Credentials(username, password)
VALUES ("testusername", "testpassword");