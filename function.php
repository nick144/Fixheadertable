<?php

function tablesDB($table, $con){

			$sqlTable = "SHOW TABLES LIKE '".$table."'";
			
			$sql= <<<"EOD"
						CREATE table userinfo(
						ID INT AUTO_INCREMENT NOT NULL, 
						Name VARCHAR(50), 
						Surname VARCHAR(50), 
						City VARCHAR(50),
						Email VARCHAR(100), 
						Dob DATE NULL,
						PRIMARY KEY (ID))
EOD;
				if(mysqli_num_rows(mysqli_query($con, $sqlTable)) == 1){
				
				
				}else{
					if (mysqli_query($con, $sql)){
					
					  echo "Table persons created successfully";
					  
					}else{
					
						echo "Error creating table: " . mysqli_error($con);
						
					}
				}
}


function insertIntoDb($name, $surname, $city, $email, $dob, $con){
	
	/* $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

			if(mysqli_connect_errno($con)){
			
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				
			} */
	 
	 $sql = <<<"EOD"
	 INSERT INTO  userinfo (Name, Surname, City, Email, Dob) 
	 VALUES ('$name', '$surname', '$city', '$email', '$dob');
EOD;
	
	 
	if($result = (mysqli_query($con, $sql)) === true){
			echo "Successfull";
	}else{
		die("Nothing inserted in database");
	}

	
	mysqli_close($con);

	
}