<?php
$host="localhost";
$user="root";
$pass="";
$db="crud";

$cn=mysqli_connect($host,$user,$pass,$db,3310);

if($cn){
    echo "";

}
else{
    echo "DB not connected";
}


?>