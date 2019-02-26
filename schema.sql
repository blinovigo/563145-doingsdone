CREATE DATABASE doingsdone
	DEFAULT CHARACTER SET utf8
	DEFAULT COLLATE utf8_general_ci;
	
USE doingsdone;

CREATE TABLE project (
	id				INT AUTO_INCREMENT PRIMARY KEY,
	name		 	CHAR(128),
	user_id 		INT
	);

CREATE TABLE task (
	id				INT AUTO_INCREMENT PRIMARY KEY,
	data_create		DATETIME,
	data_finish		DATETIME,
	status_task			TINYINT,
	name 			CHAR(128),
	file_link		CHAR(128),
	term			DATETIME,
	user_id 		INT,
	project_id		INT
	);
	
CREATE TABLE user (
	id					INT AUTO_INCREMENT PRIMARY KEY,
	data_registered		DATETIME,
	email				CHAR(128),
	name		 		CHAR(128),
	password 			INT
	);

CREATE TABLE role (
	id				INT AUTO_INCREMENT PRIMARY KEY,
	user_id 		INT,
	role			INT
	);
	
	
CREATE INDEX task_name ON task(name);
CREATE INDEX project_name ON project(name);