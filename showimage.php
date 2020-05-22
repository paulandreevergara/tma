<?php
    require_once ("dbconn.php");
    $db = new db();
    $db -> Connect();
    
    if (isset($_GET['id'])){
        $id = mysql_real_escape_string($_GET['id']);
        $SQL = "SELECT * FROM faculty where id='$id'";
        $query = mysql_query($SQL);
        
        while($row = mysql_fetch_assoc($query))
            $image = $row["image"];
        
        header("content-type: image/jpeg");
        echo $image;
    }

    else
        echo "error";

    
?>

