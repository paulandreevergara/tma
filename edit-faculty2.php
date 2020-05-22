<?php
	require_once("dbconn.php");
	$db = new db();
	$db -> Connect();
	

	$fn = $_POST['textFName'];
    $ln = $_POST['textLName'];
    $position = $_POST['textPosition'];
    $level = $_POST['selectLevel'];
    $department = $_POST['selectDepartment'];
    $education = $_POST['textEducation'];
    $years = $_POST['textYears'];

	$SQL="UPDATE faculty SET firstname = '$fn', lastname = '$ln', position = '$position', level = '$level', department = '$department', education = '$education', years = '$years'";
	$ret = mysql_query($SQL);
	
	if ($ret)
		if ($level = 'Preparatory')
            header("Location: faculty-prep.php");
        else if ($level = 'Elementary')
            header("Location: faculty-elem.php");
        else if ($level = 'Highschool')
            header("Location: faculty-hs.php");
	
	else
		echo mysql_error();
?>