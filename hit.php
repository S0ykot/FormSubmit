<?php

$uname = $_REQUEST['uname'];
$pass = $_REQUEST['pass'];
$dob = $_REQUEST['dob'];
$dept = $_REQUEST['dept'];
$gen = $_REQUEST['gender'];
$txtarea = $_REQUEST['txtarea'];
$option = $_REQUEST['option'];

echo "username: ".$uname."<br>"."Password: ".$pass."<br>";
echo "DOB: ".$dob."<br>"."Dept: ".$dept."<br>";
echo "Gender: ".$gen."<br>";
echo "Text: ".$txtarea."<br>";

$i=0;
while ($i < count($option)) {
	echo $option[$i]."<br>";
	$i++;
}


?>