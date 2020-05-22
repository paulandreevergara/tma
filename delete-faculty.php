<?php
	require_once("dbconn.php");
	$db = new db();
	$db -> Connect();
	
    $hidden=$_POST['hidden'];
	$idList=$_POST['check'];
	$ids=implode(",", $idList);
			
	echo $SQL="DELETE FROM faculty WHERE id in ('$ids')";
	
	$ret = mysql_query($SQL);
	
	if ($ret){
        if ($hidden==1)
		header("Location:faculty-prep.php");
        
        else if ($hidden==2)
		header("Location:faculty-elem.php");
        
        else if ($hidden==3)
		header("Location:faculty-hs.php");
    }

	else 
		echo mysql_error();
	
?>