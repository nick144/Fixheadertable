<?php

$sql= <<<"EOD"
	CREATE table userinfo(
	ID INT AUTO_INCREMENT NOT NULL, 
	Name VARCHAR(50), 
	Surname VARCHAR(50), 
	City VARCHAR(50), 
	Email VARCHAR(100), 
	Dob DATETIME NULL, 
	PRIMARY KEY (ID))
EOD;
					
echo $sql;