<html>
    <head>
        <title>The Mabini Academy</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>	
        <link href="styles.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	
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
                    <li><a href="student-life.php">FACILITIES</a></li>    
               </ul>
            </div>
        </div>
        <div id="content-wrapper">
            <div id="content"><br>
                <table>
                    <tr><td width=15 border = 1></td><td class="td-nav-menu"  valign = "top">
                <div id="nav-menu-wrapper">
                    <div id="nav-menu">
                        <ul>
                            <br><h4 class="navh4">Admissions</h4>
                            <li><a href="admission-prep.php">Preparatory</a></li>
                            <li><a href="admission-elem.php">Elementary</a></li>
                            <li><a href="admission-hs.php">Highschool</a></li>
                            <li class="nav-selected"><a href="enrollment-form.php">Digital Enrollment Form</a></li>
                        </ul>
                    </div>
                </div>
                    </td><td valign = "top">
                <div id="main-content-wrapper">
                    <div id="main-content">
<h4>DIGITAL ENROLLMENT FORM - HIGHSCHOOL LEVEL</h4>
<h4>Basic Personal Information</h4>
<form method="POST" action="enrollment2.php">
    <input type="hidden" value="Highschool" name="hiddenLevel">
<table class="enrollment-form-table">
    <tr>
        <td>Examinee Number:</td>
        <td><input type = "text" name = "textExamNum"></td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td><input type = "text" name = "text+FirstName"></td>
    </tr>
    <tr>
        <td>Middle Name:</td>
        <td><input type = "text" name = "textMiddleName"></td>
     </tr>
     <tr>
        <td>Last Name:</td>
        <td><input type = "text" name = "textLastName"></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><input type = "text" name = "textAddress"></td>
    </tr>
    <tr>
        <td>Contact Number:</td>
        <td><input type = "text" name = "textContact"></td>
    </tr>
    <tr>
        <td>Year:</td>
        <td>
            <select name="selectYear">
            <option value="" selected disabled>-Select Here-</option>
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Fourth Year</option>
            </select>
        </td>
    </tr>
</table>
<h4>Information of Parent/Guardian</h4>
<table class="enrollment-form-table">
    <tr>
        <td>Name:</td>
        <td><input type = "text" name = "textGuardianName"></td>
    <tr>
    </tr>
        <td>Contact Number:</td>
        <td><input type = "text" name = "textGuardianContact"></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><input type = "text" name = "textGuardianAddress"></td>
    </tr>
</table>
    <br>
    <input type = "submit" value = "Submit"> <a href="enrollment-form.php"><button>Back</button></a>
                    </form></div>
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