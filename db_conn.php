<?php

$sname= "sql108.epizy.com";
$unmae= "epiz_32035829";
$password = "FUdSQyKL2hl";

$db_name = "epiz_32035829_thebookshelf";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}