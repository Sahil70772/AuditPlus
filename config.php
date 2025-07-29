
<?php

$hostname = "localhost:3312";
$username = "root";
$password = "";
$database = "auditplus";


//try connecting to database
$conn = mysqli_connect($hostname, $username, $password, $database) ;

//checking connection
if(!$conn)
{
    die("Error: not able to connect: ". mysqli_connect_error);
}
// else
// {
//     echo "connection is successful";
// }


?>