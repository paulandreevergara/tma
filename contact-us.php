<html>
    <form action = "" method="POST">
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
                <br><br>
                <h4>Contact Us</h4>
                <table align="center">
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>Name: </td>
                                    <td width=350><input type = "text" name = "textName"></td>
                                </tr>
                                <tr>
                                    <td>Email Address: </td>
                                    <td><input type = "text" name = "textEmail"></td>    
                                </tr>
                                <tr>
                                    <td>Subject: </td>
                                    <td><input type = "text" name = "textSubject"></td>    
                                </tr>
                                <tr>
                                    <td valign = "top">Message: </td>
                                    <td><textarea name = "textMessage" cols = 30 rows = 8></textarea></td>    
                                </tr>
                                <tr>
                                    <td colspan=2><input type = "submit" name = "buttonSubmit" value = "Send"><br><br></td>
                                </tr>
                            </table>
                        </td>
                        <td valign="top" width=350>
                            Contact Information
                        </td>
                    </tr>
                    
                </table>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
        <hr color="#E8AD15">
        <div id="footer">
            <i class="fa fa-copyright"></i> Copyright 2015<br> <a href="contact-us.php">Contact  Us</a>
        </div>
	</body>
     </form>
</html>