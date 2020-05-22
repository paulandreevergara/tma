<?php
    require_once("dbconn.php");
    $db = new db();
    $db -> Connect();
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
            <div id="content">
                <table>
                <tr><td>
                <div id="nav-menu-wrapper">
                    <div id="nav-menu">
                        <ul>
                            <br><h4>Faculty</h4>
                            <li><a href="faculty-prep.php">Preparatory</a></li>
                            <li><a href="faculty-elem.php">Elementary</a></li>
                            <li><a href="faculty-hs.php">Highschool</a></li>
                        </ul>
                    </div>
                </div>
                    </td><td valign="top">
                <div id="main-content-wrapper">
                    <div id="main-content">
                        <form method="POST" action="add-faculty2.php" enctype="multipart/form-data">
                            <br><h4>Add Faculty Member:</h4>
                            <table> 
                                <tr>
                                    <td>First Name:</td>
                                    <td><input type="text" name="textFName"></td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td><input type="text" name="textLName"></td>
                                </tr>
                                <tr>
                                    <td>Position:</td>
                                    <td><input type="text" name="textPosition"></td>
                                </tr>
                                <tr>
                                    <td>Level: </td>
                                    <td><select name="selectLevel">
                                        <option value="" selected disabled>-Select Here-</option>
                                        <option value="Preparatory">Preparatory</option>
                                        <option value="Elementary">Elementary</option>
                                        <option value="Highschool">Highschool</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td>Department:</td>
                                    <td><select name="selectDepartment">
                                        <option value="" selected disabled>-Select Here-</option>
                                        <option value="Science">Science</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="English">English</option>
                                        <option value="Filipino">Filipino</option>
                                        <option value="Social Studies">Social Studies</option>
                                        <option value="MAPEH">MAPEH</option>
                                        <option value="TLE">TLE</option>
                                        <option value="Computer">Computer</option>
                                        <option value="Values Education">Values Education</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Education:</td>
                                    <td><input type="text" name="textEducation"></td>
                                </tr>
                                <tr>
                                    <td>Years in the Academe:</td>
                                    <td><input type="text" name="textYears"></td>
                                </tr>
                                <tr>
                                    <td>Upload Image:</td>
                                    <td><input type="file" name="image"></td>
                                </tr>
                            </table>
                            <br><br>
                            <input type="submit" value="Add this record...">&nbsp&nbsp&nbsp
                            <a href="faculty-prep.php"><input type="button" value="Faculty Records List..."></a>
                        </form>
                    </div>
                </div>
                </td></tr>
                </table>     
            </div>
        </div>
        <hr color="#E8AD15">
        <div id="footer">
            <i class="fa fa-copyright"></i> Copyright 2015<br> <a href="contact-us.php">Contact  Us</a>
        </div>
	</body>
</html>