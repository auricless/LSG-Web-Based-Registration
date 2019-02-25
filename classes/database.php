<?php

class Database
{
	const $DB;

	function init($host, $user, $pass, $name)
	{
		$DB['host'] = $host;
		$DB['user'] = $user;
		$DB['pass'] = $pass;
		$DB['name'] = $name;
	}

	function connect()
	{
		$con = mysqli_connect($DB['host'], $DB['user'], $DB['pass'], $DB['name']);
		if(!$con){
			die("Error in connecting database");
		}
	}
}

?>