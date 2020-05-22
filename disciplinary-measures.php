<html>
    <head>
        <title>The Mabini Academy</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	
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
                            <li><a href="rulesandreg.php">Rules and Regulations</a></li>
                            <li><a href="org.php">Student Organizations</a></li>
                            <li class="nav-selected"><a href="disciplinary-measures.php">Disciplinary Measures</a></li>
                        </ul>
                    </div>
                </div>
                    </td><td valign = "top">
                <div id="main-content-wrapper">
                    <div id="main-content">
<h4><b>DISPLINARY MEASURES </b></h4>
Penalties are imposed for violation of rules and regulations of the school and are designed to:<br>
-	Teach the students the idea of justice<br>
-	Develop in the students a healthy respect for law and authority.<br>
-	Instill in the minds of the students the importance of rules and regulations.<br>
-	Correct an unacceptable behavior.<br>
-	Help strengthen the characters of students.<br>
-	Protect the students and the good name of the school from the corrupting influence of law breakers.<br>
<div class="accordion">

			<h4 class="accordion-h4">A. OFFENSE</h4>

			<p class="accordion-p">&nbsp &nbsp &nbsp &nbsp The offense will either be minor or major depending upon the gravity of the action and frequency of its commission.<br>
1.	Fighting, excessive teasing, name calling, bullying, foul language<br>
2.	Cheating in examination and intellectual dishonesty (refer to the Academic Dishonesty)<br>
3.	Frequent violation of norms of conduct, rules on uniform, attendance and tardiness<br>
4.	Serious violation of the rules, such as vandalism, truancy, serious bullying act and the like<br>
5.	Possessing, displaying or distributing pornographic materials<br>
6.	Forgery and tampering of school marks, documents and other academic and non-academic files, etc.<br>
7.	Falsification of letters or signatures of parents, guardians, teachers and other school authorities<br>
8.	Smoking and drinking liquor in and out of the campus<br>
9.	Possession of/carrying or use of any deadly weapon, blunt instrument, firecrackers, prohibited drugs, etc.<br>
10.	Injury to others: acts of defiance or disrespect against a teacher, students, school authorities or personnel<br>
11.	Making indecent letters and pictures <br>
12.	Uttering vulgar words maliciously or with intent to hurt<br>
13.	Using social media/networks to ruin one's integrity and affect the good name of the school<br>
14.	Lending or borrowing ID's, lunch pass and library cards<br>
15.	Extortion- asking or receiving money or material from others under threat<br>
16.	Cutting classes<br>
17.	Leaving school campus premises during class hours without permission from any of the school authorities<br>
18.	Organizing and joining fraternities or any organization not officially recognized by the school<br><br> </p> 

			<h4 class="accordion-h4">B. DUE PROCESS</h4>

			<p class="accordion-p">1.	The first level of the disciplinary measure is taken in the classroom by the class adviser/subject teacher. The teacher has the authority to impose on the spot disciplinary measures to students committing minor violation.<br>
2.	Serious violations of regulations shall be reported through the Class Advisers to the Guidance Counselor, then to the Principal who shall appoint the Disciplinary Committee.<br>
3.	The Disciplinary Committee shall be composed of the teacher/s in whose presence the misbehavior or misconduct was committed, the class adviser of the student, Values Education teacher, guidance counselor and the principal. The committee shall investigate the circumstances surrounding the reported misbehavior and determine the gravity of the offense and the corresponding disciplinary action to be taken.<br>
4.	The Guidance Counselor should be informed or notified of the offense committed.<br>
5.	The Principal upon receipt of the report shall determine and apply the necessary disciplinary action to be taken under circumstances.
6.	All serious disciplinary cases shall be reported to the School Director for final decisions.<br><br></p>

			<h4 class="accordion-h4">C. SANCTIONS AND PENALTIES</span></h4>

			<p class="accordion-p" id="para">1.	Corporal Punishment is absolutely prohibited<br>
2.	After the deliberation in Letter B, the Disciplinary Committee may recommend the following measures:<br>
<i>a.	For minor offenses, the class adviser/ subject teacher, guidance counselor may take such measures to ensure that the misbehavior is not repeated.<br>
b.	For serious offense:<br>
b.1.  Conference with parents or guardians for them to take corrective measures<br>
b.2. If no changes take place, withdrawal from the classroom in order to make reparation within the school campus.<br>
b.3. Suspension from the classes for a specified period. A student in suspension is separated from his/her class and classmates for 1-5 days. He/She may be asked to stay in the library to study his/her lessons or report to the office of the principal to do a productive work/service/duties in the school. The students absence from the class while on suspension is unexcused and he/she is responsible for all the lessons that he/she missed.<br>
b.4. Dismissal or expulsion from the school as an extreme measure shall be imposed only after all possibilities have been exhausted.</i><br><br>

3.	The guidance counselor may provide an atmosphere for change and growth.<br><br><br>	</p>
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