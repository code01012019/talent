<?php

$host = getenv("MYSQL_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_PORT");
$user = getenv("dbuser");
$pass = getenv("Dbuser1234");
$db = getenv("db_talent");

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
    print("Not Connected <br>".mysql_error());
}
else
{
    echo ("Connected");
}

?>
