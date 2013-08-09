<?php

require 'config.php';
include 'db_connect.php';

$db = new Dbconnect(HOST, USER, PASSWORD, DATABASE);

$db->showAllData();
//$db->freeResult();


$table = 'userinfo2';

if($db->dropTable($table)){
	echo "<h2>$table has been Drop</h2>";
}

$db->dbClose();