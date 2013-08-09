<?php

class Dbconnect{
	private $_host;
	private $_user;
	private $_password;
	private $_database;
	private $_mysqli;
	
	function __construct($host, $user, $pass, $db){
		$this->_host = $host;
		$this->_user = $user;
		$this->_password = $pass;
		$this->_database = $db;
		
		$this->db_connect();
	}
	
	public function db_connect(){
		$this->_mysqli = new mysqli($this->_host, $this->_user, $this->_password, $this->_database);
		
		if ($this->_mysqli->connect_errno) {
			printf("Connect failed: %s\n", $mysqli->connect_error);
			exit();
		}

	}
	
	public function query($sql){
		if(!$result = $this->_mysqli->query($sql)){
			die('There was an error running the query [' . $db->error . ']');
		}
	}
	
	public function dbClose(){
		$this->_mysqli->close();
	}
	
	public function createTable($table){
		$q = "SHOW TABLES LIKE '".$table."'";
			
			$sql= <<<"EOD"
						CREATE table $table(
						ID INT AUTO_INCREMENT NOT NULL, 
						Name VARCHAR(50), 
						Surname VARCHAR(50), 
						City VARCHAR(50),
						Email VARCHAR(100), 
						Dob DATE NULL,
						PRIMARY KEY (ID))
EOD;

			$result = $mysqli->query($q) or die($mysqli->error.__LINE__);

			$r = array();
			$row = $result->fetch_assoc();
			foreach($row as $col) {
			   $r[]= $col;
			}
			
			if(in_array($table, $r)){
				
					
					
			}else{
			
					if ($this->_mysqli->query($sql)){
					
					  echo "Table $table created successfully";
					  
					}else{
					
						echo "Error creating table";
						
					}
			}
	}
	
	public function dropTable($table){
		$this->_mysqli->query("DROP TABLE $table");
	}
	
	public function showAllData(){
		$q = "SELECT * FROM userinfo";
		 $result = $this->_mysqli->query($q) or die($this->_mysqli->error.__LINE__);

		 // GOING THROUGH THE DATA
		 echo "<table border='1'>";
		 if($result->num_rows > 0) {
		  while($row = $result->fetch_assoc()) {
		   echo "<tr>";
		   echo "<td>". $row['Name'] ."</td>"; 
		   echo "<td>". $row['Surname'] ."</td>"; 
		   echo "<td>". $row['City'] ."</td>"; 
		   echo "<td>". $row['Email'] ."</td>"; 
		   echo "<td>". $row['Dob'] ."</td>"; 
		   echo "</tr>";
		  }
		 }
		 echo "</table>";

	}
	
	public function freeResult(){
		$this->_mysqli->free_result();
	}
	
	
}