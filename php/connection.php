<?php
$connection = mysql_connect('localhost','root','christ');

if($connection){
	$db = mysql_select_db("glove");
	//print "connection established";
	if($db){
		$tips_query = mysql_query("SELECT * FROM tips");
		// $tips_assoc = mysql_fetch_assoc($tips);
		// print_r($tips_assoc);
		$tips = array();
		$a = 0;
		while($row = mysql_fetch_assoc($tips_query)){
			$tips[$a] = $row['title'];
			$a++;
		}
	}
}