<?php

define("HOST", "localhost"); // The host you want to connect to.
define("USER", "dom"); // The database username.
define("PASSWORD", "alfa@123"); // The database password. 
define("DATABASE", "ajaxtable"); // The database name.

require 'function.php';

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

$tablename = "userinfo";

			if(mysqli_connect_errno($connection)){
			
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				
			}else{
			
					tablesDB($tablename, $connection);
			}
