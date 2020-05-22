<?php
	require_once("dbconn.php");
	$db = new db();
	$db -> Connect();

    $enum=$_POST['textExamNum'];	
	$fname=$_POST['textFirstName'];
    $mname=$_POST['textMiddleName'];
    $lname=$_POST['textLastName'];	
	$level=$_POST['hiddenLevel'];
	$address=$_POST['textAddress'];
    $contact=$_POST['textContact'];
    $year=$_POST['selectYear'];
    $gname=$_POST['textGuardianName'];
    $gcontact=$_POST['textGuardianContact'];
	$gaddress=$_POST['textGuardianAddress'];
    
    $SQL = "INSERT INTO `students`(`enum`, `fname`, `mname`, `lname`, `address`, `contact`,`level`, `year`, `gname`, `gcontact`, `gaddress`) VALUES ('$enum','$fname','$mname','$lname','$address','$contact','$level','$year','$gname','$gcontact','$gaddress')";
    

	$ret = mysql_query($SQL);

?>