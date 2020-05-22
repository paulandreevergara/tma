<?php
    require_once("dbconn2.php");

    session_start();

    $SQL = "SELECT * FROM faculty WHERE level='Preparatory'";
    $ret = mysql_query($SQL);
    $facultyList = array();

    if($ret)
        while($row=mysql_fetch_assoc($ret))
        {   
            $facultyList[] = $row;
            $image = $row['image'];
        }
    else
        echo mysql_error();
    
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
                            <li class="nav-selected"><a href="faculty-prep.php">Preparatory</a></li>
                            <li><a href="faculty-elem.php">Elementary</a></li>
                            <li><a href="faculty-hs.php">Highschool</a></li>
                        </ul>
                    </div>
                    </div>
                    </td><td width=800px>
                <div id="main-content-wrapper">
                    <div id="main-content">
                        <div id="faculty-members">
                        <form action="delete-faculty.php" method="post">
                        <table><tr>
                        <?php
                            $z=count($facultyList);
                            for($x=0;$x<$z;$x++){
                                $name = $facultyList[$x]['firstname'];
                                $initial = substr("$name", 0,1);
                                
                            echo"           <input type=\"hidden\" value=\"1\" name=\"hidden\">
                                            <td>
                                                <input type=\"checkbox\" name=\"check[]\" value=".$facultyList[$x]['id'].">
                                            </td>
                                            <td width=\"200\" align=\"center\" valign=\"top\">
                                            <a href=\"edit-faculty.php?id=".$facultyList[$x]['id']."\">
                                            <img src=\"showimage.php?id=".$facultyList[$x]['id']."\"></a>
                                            <br><br>"
                                                 .$initial.". "
                                                 .$facultyList[$x]['lastname']."<br>"
                                                 .$facultyList[$x]['position']."<br>"
                                                 .$facultyList[$x]['department']."<br>"
                                                 .$facultyList[$x]['education']."<br>"
                                                 .$facultyList[$x]['years'].
                                            "</td>";
                                
                            if($x%3==2){    
                                echo"
                                    </tr><tr>
                                    ";
                                }
                            }
                        ?>
                        </table>
                        <?php

                        if ($_SESSION['username'] && $_SESSION['username']=="apolinario"){  
                        echo"<br><br>
                        <a href=\"add-faculty.php\"><input type=\"button\" value=\"Add Faculty Member..\"></a>
                        <input type=\"submit\" value=\"Delete Faculty Member..\"><br><br><br>";
                        }
                        ?>    
                        </div>
                    </div>
                </div>
                </td></tr>
                </table><br>
                </form>
            </div>
        </div>
        <hr color="#E8AD15">
        <div id="footer">
            <i class="fa fa-copyright"></i> Copyright 2015<br> <a href="contact-us.php">Contact  Us</a>
        </div>
	</body>
</html>