<!--
  - File Name: dbconnection.php
  - Program Description: class that contains database connections
  -->
<?php
class dbconnection {

	function connectdb() {
		$con = mysql_connect("localhost","upfdb-user3", "p6QURqVqpyEPAXsw") or die("cannot connect");//create connection to the database
		if (!$con)
			die('Could not connect: ' . mysql_error());
			
		mysql_select_db("upfdatabase", $con) or die("cannot connect to DB");//select database from user
		return $con;
	}//connect to the database
	
	function closeconnection($con) {
		mysql_close($con);
	}//close database connection
	
	function searchProfile($username) {
		//$numrows2=-1;
		//if($username=="username"){
			$result = mysql_query("SELECT * FROM table_profile where userName='$username'");
		//}
		
		//if($numrows2>0) return $result2;
		//else
		return $result;
	}
}

?>