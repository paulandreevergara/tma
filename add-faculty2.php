<?php
	require_once("dbconn.php");
	$db = new db();
	$db -> Connect();

	$fname=$_POST['textFName'];
    $lname=$_POST['textLName'];
	$position=$_POST['textPosition'];
	$level=$_POST['selectLevel'];
	$department=$_POST['selectDepartment'];
    $education=$_POST['textEducation'];
	$years=$_POST['textYears'];

    $image=mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imagetype=mysql_real_escape_string($_FILES["image"]["type"]);

    if(substr($imagetype,0,5) == "image")
    {
    $SQL="INSERT INTO faculty (image,firstname,lastname,position,level,department,education,years) values('$image','$fname','$lname','$position','$level','$department','$education','$years')";

	$ret = mysql_query($SQL);
	
    if ($ret)
        if($level=='Preparatory')
            header("Location:faculty-prep.php");
        else if($level=='Elementary')
            header("Location:faculty-elem.php");
        else if($level=='Highschool')
            header("Location:faculty-hs.php");
    
    else
		  echo mysql_error();
    }
    
    else
        echo "Only images are allowed";
?>