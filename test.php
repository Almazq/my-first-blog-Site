<?php
$servarname = "localhost";
$username = "root";
$pass = "";
$dbname = "prochea";

$conn = new mysqli($servarname,$username,$pass,$dbname);

$sql = "INSERT INTO test (name,surname) VALUES ('Ivan', 'Petrov')";

if($conn->query($sql) === true){
	echo "ЗАпись созданно";
}
?>