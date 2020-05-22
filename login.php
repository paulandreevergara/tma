<?php
    session_start();
?>

<html>
    <head>
        <title>The Mabini Academy</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	
        <link href="styles.css" type="text/css" rel="stylesheet"/>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script type="text/javascript" src="stepcarousel.js">

</script>
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
                <?php
                    if($_SESSION['username']){
                ?>
                    <div class ="logout-window">
                    You are logged in as <?php echo $_SESSION['username']; ?>
                <br><br><a href="logout.php"<button>Logout</button></a>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>  
                <?php
                    }else{
                ?>
                <form method="POST" action="login.php">
                <center>
                    <br><br><br><br><br><br><br><br>
                    <table>
                        <tr>
                            <td>Username: </td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td><input type="password" name="password"></td>
                        </tr>
                    </table>
                        <input type="submit" value="Login..">
                        <input type="button" value="Reset.." onclick="reset()"> 
                    <br><br><br><br><br><br><br><br><br><br>
                </center>
                </form>
                <?php } ?>
            </div>
        </div>
        <hr color="#E8AD15">
        <div id="footer">
            <i class="fa fa-copyright"></i> Copyright 2015<br> <a href="contact-us.php">Contact  Us</a>
        </div>
	</body>
</html>

<?php
    if (isset($_POST['username'])){
        require("dbconn2.php");
        $login = mysql_query("SELECT * FROM users WHERE (username = '".mysql_real_escape_string($_POST['username'])."') and (password = '".mysql_real_escape_string($_POST['password'])."')") or die("mysql_error");
        
        if(mysql_num_rows($login) == 1){
            $_SESSION['username'] = $_POST['username'];
            header("Location: index.php");
        }
        
        else {
            header("Location: index.php");
        }
    }
?>