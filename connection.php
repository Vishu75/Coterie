<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coteriedb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn)
{
    echo " Connected";
}
else
{
    echo "Failed";
}

?>