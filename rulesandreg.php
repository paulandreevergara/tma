<html>
    <head>
        <title>The Mabini Academy</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	
        <link href="styles.css" type="text/css" rel="stylesheet"/>
        
        <meta name="description" content="" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="accordion/jquery.magic-accordion.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.accordion').magicAccordion({
					headingTag 	: 'h4',
					bodyClass 	: 'body',
					headClass 	: 'head',
					activeClass : 'active',
					speed 		: 200,
					easing 		: 'swing'
				}).on( 'opened.magic', function(e){
					console.log(e.head);
				}).on( 'closed.magic', function(e){
					console.log(e.body);
				});

				var app = $('.accordion').data( 'magic-accordion' );
				$('.unbind').click( function(e) {
					e.preventDefault();
					app.unbind();
				});
				$('.rebind').click( function(e) {
					e.preventDefault();
					app.rebind();
				});
			});
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
                    <li><a href="student-life.php">FACILITIES</a></li>  
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
                            <br><h4 class="navh4">Student Life</h4>
                            <li class="nav-selected"><a href="rulesandreg.php">Rules and Regulations</a></li>
                            <li><a href="org.php">Student Organizations</a></li>
                            <li><a href="disciplinary-measures.php">Disciplinary Measures</a></li>
                        </ul>
                    </div>
                </div>
                    </td><td valign = "top">
                <div id="main-content-wrapper">
                    <div id="main-content">
<center><h4><b> GENERAL GUIDELINES ON STUDENTS' BEHAVIOR </b></h4></center>
        
<div class="accordion">

        <h4 class="accordion-h4">A. ON CLASSROOM BEHAVIOR</h4>
			<p class="accordion-p">&nbsp &nbsp &nbsp &nbsp Attendance and active participation in classroom activities are necessary to create an atmosphere inductive to learning.<br><br>
1.	Be courteous if you wish to leave or enter the classroom. You should ask permission from the teacher<br><br>
2.	Observe politeness when a classmate is called upon to recite or is asking questions. Laughing at somebody's mistakes, giving-uncalled-for comments, and the like, are not tolerated in the classroom.<br><br>
3.	You are not to play or do anything that would prevent others from performing class activities.<br><br>
4.	There shall always be reasonable order and silence in the classroom. When the teacher is late or absent, your Class President should promptly go to the office of the principal to check if your teacher will be arriving or not.<br><br>
5.	Cleanliness and orderliness must be maintained by all. Before leaving the room you must keep your chairs and tables in order and clean up your place of litter.<br><br>
6.	Respect and courtesy should be accorded the teacher. When a teacher, school authority, or visitor enter and leaves a room you should rise and stand quiet attention and greet. The teacher's table is "private". The privacy is to be respected. Nothing should be read nor taken from the teacher's table without his/her permission. You must respect other people's rights as well as you should wish them to respect yours. Lost or found articles must be reported promptly to the teacher.<br><br> </p> 

			<h4 class="accordion-h4">B. ON LEAVING THE CLASSROOM</h4>

			<p class="accordion-p">&nbsp &nbsp &nbsp &nbsp	No student is allowed to leave the room during class hours, except when he/she receives an excuse from the office of the principal or the guidance counselor or if the reason is URGENT.<br><br></p>

			<h4 class="accordion-h4">C. ON ACADEMIC DISHONESTY</span></h4>

			<p class="accordion-p" id="para">&nbsp &nbsp &nbsp &nbsp	Mabinians are known to be well-disciplined and honest students. These values are most challenged during examinations and quizzes, therefore, acts of academic dishonesty are regarded as very serious offenses and are subject to academic and disciplinary actions.
The following are examples of acts of academic dishonesty<br><br>
1.	Possession or use of crib notes (cheat sheets or "kodiko") for quick reference which may be written on paper, on the student's chair, or on instruments and gadgets which have banned during the exam.<br><br>
2.	Copying or looking at another student's test paper.<br><br>
3.	Holding up one's test paper or allowing another student to copy from his/her paper or writing on another student's test paper.<br><br>
4.	Giving signals or any form of communication which may be interpreted as giving or soliciting help during tests.<br><br>
5.	Changing of answer, scores during checking of papers.<br><br>
6.	Stealing, giving or receiving stolen test papers.<br><br>

<i>Disciplinary Action</i><br>
a.	Any student caught cheating during examinations will be given zero (0) in that particular test.<br>
b.	A student who will be found cheating for more than three times during his/her stay in the school shall be expelled after due notice and opportunity to be heard.<br><br></p>

			<h4 class="accordion-h4">D.	ON THE CARE OF CLASSROOM AND SCHOOL FACILITIES</span></h4>

			<p class="accordion-p">&nbsp &nbsp &nbsp &nbsp Any damage done by the student to any property of the school or of others due to unruly conduct of carelessness, besides subjecting the offender to disciplinary measures, shall be replaced or repaired at the student's expense.<br>
&nbsp &nbsp &nbsp &nbsp Students who commit acts of vandalism will be subjected to disciplinary measures. He/She will also be required to repair or replace any damaged property at his/her expense.<br><br>
</p>
                        </div>
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