<?php
	require_once("dbconn.php");
	$db = new db();
	$db -> Connect();
	
	$id=$_GET['id'];
	
	$SQL="SELECT * FROM faculty WHERE id = '$id'";
		
	$ret=mysql_query($SQL);
	
	if($ret)
		$row=mysql_fetch_assoc($ret);
			
	else 
		echo mysql_error();
	
	$id=$row['id'];
    
    $prep = "";
    $elem = "";
    $hs = "";
    
    if ($row['level'] == 'Preparatory')
        $prep = "selected";
    

    else if ($row['level'] == 'Elementary')
        $elem = "selected";
    

    else if ($row['level'] == 'Highschool')
        $hs = "selected";
    
    $science = "";
    $math = "";
    $english = "";
    $filipino = "";
    $social = "";
    $mapeh = "";
    $tle = "";
    $computer = ""; 
    $values = "";
    
    if ($row['department'] == 'Science')
        $science = "selected";

    else if ($row['department'] == 'Mathematics')
        $math = "selected";
    
    else if ($row['department'] == 'English')
        $english = "selected";
    
    else if ($row['department'] == 'Filipino')
        $filipino = "selected";
        
    else if ($row['department'] == 'Social Studies')
        $social = "selected";
        
    else if ($row['department'] == 'MAPEH')
        $mapeh = "selected";
        
    else if ($row['department'] == 'TLE')
        $tle = "selected";

    else if ($row['department'] == 'Computer')
        $computer = "selected";
        
    else if ($row['department'] == 'Values Education')
        $values = "selected";
    
?>

<html>
    <head>
        <title>The Mabini Academy</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	
        <link href="styles.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
        <div id="logo-wrapper">
            <table class="table-header"> 
            <tr><td width=802>
            <div id="logo-header"> 
                <a href="index.php"><img src="images/logo-header-text.png"></a>
            </div></td><td>
            <div id="mabini-logo">
                <a href="login.php"><img src="images/mabini150.jpg"></a>
            </div>
            </td></tr>
            </table>
        </div>
        <hr color="#E8AD15">
        <div id="nav-wrapper">
            <div id="nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="admissions.php">ADMISSIONS</a></li>
                    <li><a href="student-life.php">STUDENT LIFE</a></li>
                    <li><a href="faculty.php">FACULTY</a></li>
                    <li><a href="facilities.php">FACILITIES</a></li>   
               </ul>
            </div>
        </div>
        <div id="content-wrapper">
            <div id="content"><br>
                <table>
                <tr><td width=15></td><td class="td-nav-menu" valign = "top">
                <div id="nav-menu-wrapper">
                    <div id="nav-menu">
                        <ul>
                            <br><h4 class="navh4">Faculty</h4>
                            <li><a href="faculty-prep.php">Preparatory</a></li>
                            <li><a href="faculty-elem.php">Elementary</a></li>
                            <li><a href="faculty-hs.php">Highschool</a></li>
                        </ul>
                    </div>
                </div>
                    </td><td valign="top">
                <div id="main-content-wrapper">
                    <div id="main-content">
                        <form method="POST" action="edit-faculty2.php" enctype="multipart/form-data">
                            <h4>Edit Faculty Member: <?php echo $row['firstname']; echo " ".$row['lastname'];?></h4>
                            <table> 
                                <tr>
                                    <td>First Name:</td>
                                    <td><input type="text" name="textFName" value="<?php echo $row['firstname']?>"></td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td><input type="text" name="textLName" value="<?php echo $row['lastname']?>"></td>
                                </tr>
                                <tr>
                                    <td>Position:</td>
                                    <td><input type="text" name="textPosition" value="<?php echo $row['position']?>"></td>
                                </tr>
                                <tr>
                                    <td>Level: </td>
                                    <td><select name="selectLevel">
                                        <option value="" disabled>-Select Here-</option>
                                        <option value="Preparatory" <?php echo $prep; ?>>Preparatory</option>
                                        <option value="Elementary" <?php echo $elem; ?>>Elementary</option>
                                        <option value="Highschool" <?php echo $hs; ?>>Highschool</option>
                                    </select></td>                                        
                                </tr>
                                <tr>
                                    <td>Department:</td>
                                    <td><select name="selectDepartment">
                                        <option value="" disabled>-Select Here-</option>
                                        <option <?php echo $science; ?>value="Science">Science</option>
                                        <option <?php echo $math; ?>value="Mathematics">Mathematics</option>
                                        <option <?php echo $english; ?>value="English">English</option>
                                        <option <?php echo $filipino; ?>value="Filipino">Filipino</option>
                                        <option <?php echo $social; ?>value="Social Studies">Social Studies</option>
                                        <option <?php echo $mapeh; ?>value="MAPEH">MAPEH</option>
                                        <option <?php echo $tle; ?>value="TLE">TLE</option>
                                        <option <?php echo $computer; ?>value="Computer">Computer</option>
                                        <option <?php echo $values; ?>value="Values Education">Values Education</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Education:</td>
                                    <td><input type="text" value="<?php echo $row['education']?>"name="textEducation"></td>
                                </tr>
                                <tr>
                                    <td>Years in the Academe:</td>
                                    <td><input type="text" value="<?php echo $row['years']?>" name="textYears"></td>
                                </tr>
                            </table>
                            <br><br>
                            <input type="submit" value="Update this record...">&nbsp&nbsp&nbsp
                            <a href="faculty-prep.php"><input type="button" value="Faculty Records List..."></a>
                        </form>
                    </div>
                </div>
                </td></tr>
                </table><br>     
            </div>
        </div>
        <hr color="#E8AD15">
        <div id="footer">
            <i class="fa fa-copyright"></i> Copyright 2015<br> <a href="contact-us.php">Contact  Us</a>
        </div>
	</body>
</html>