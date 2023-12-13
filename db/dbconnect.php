<?php

/* Connection to database */
	/* Azure MySQL Database variable setting */
	$dbhost = getenv('AZURE_MYSQL_HOST');
	$dbname = getenv('AZURE_MYSQL_DBNAME');
	$dbusername = getenv('AZURE_MYSQL_USERNAME');
	$dbpassword = getenv('AZURE_MYSQL_PASSWORD');
	$dbport = getenv('AZURE_MYSQL_PORT');

	/* Connect Setting */
	$conn = mysqli_init();
	mysqli_real_connect($conn, $dbhost, $dbusername, $dbpassword, $dbname, $dbport);


	/* Check connection */
	if(mysqli_connect_error()) {
		echo "Connection failed";
		printf("Error : %s",mysqli_connect_error());
	}

?>
