CREATE DATABASE IF NOT EXISTS MathForKids;

CREATE TABLE IF NOT EXISTS Credentials (
	id INT AUTO_INCREMENT PRIMARY KEY,
	username varchar(255),
	password varchar(255)
);

CREATE TABLE IF NOT EXISTS Results (
	result_id INT AUTO_INCREMENT PRIMARY KEY,
	type varchar(255),
	question varchar(255),
	result varchar(255),
	answer varchar(255),
	user_id INT,
	FOREIGN KEY (user_id) REFERENCES Credentials(id)
);
