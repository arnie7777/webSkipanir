CREATE DATABASE IF NOT EXISTS MathForKids;

CREATE TABLE IF NOT EXISTS Credentials (
	username varchar(255) PRIMARY KEY,
    password varchar(255)
);

CREATE TABLE IF NOT EXISTS Results (
	id INT AUTO_INCREMENT PRIMARY KEY,
    type varchar(255),
    question varchar(255),
    result varchar(255),
    answer varchar(255),
    username varchar(255),
    FOREIGN KEY (username) REFERENCES Credentials(username)
);
