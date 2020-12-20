<?php 
 require_once(dirname(__FILE__) . '/adodb5/adodb.inc.php');

		//Get Heroku ClearDB connection information
		$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
		$cleardb_server   = $cleardb_url["host"];
		$cleardb_username = $cleardb_url["user"];
		$cleardb_password = $cleardb_url["pass"];
		$cleardb_db       = substr($cleardb_url["path"],1);

		$db = NewADOConnection('mysqli');
		$db->Connect(
			$cleardb_server,
			$cleardb_username,
			$cleardb_password,
			$cleardb_db);
		
		// Ensure fields are (only) indexed by column name
		$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;

		// Use UTF-8
		$db->EXECUTE("set names 'utf8'"); 
?>