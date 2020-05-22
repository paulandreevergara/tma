<html>
    <head>
        <title>The Mabini Academy</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	
        <link href="styles.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="stepcarousel.js"></script>
        <script type="text/javascript">

        stepcarousel.setup({
	       galleryid: 'mygallery', //id of carousel DIV
	       beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	       panelclass: 'panel', //class of panel DIVs each holding content
	       autostep: {enable:true, moveby:1, pause:3000},
	       panelbehavior: {speed:500, wraparound:true, wrapbehavior:'slide', persist:true},
	       defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/arrow-left.png', 30, 250], rightnav: ['images/arrow-right.png', -40, 250]},
            statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last),    and total panels
	       contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
        })

        </script>
	</head>

	<body>
        <?php
            require_once("header.php");
        ?>
        <div id="content-wrapper">
            <div id="content">
                <center>
                    <div id="mygallery" class="stepcarousel">
                        <div class="belt">
                            <div class="panel">
                                <img src="images/slider1.jpg" />
                            </div>
                            <div class="panel">
                                <img src="images/slider2.jpg" />
                            </div>
                            <div class="panel">
                                <img src="images/slider3.jpg" />
                            </div>
                            <div class="panel">
                                <img src="images/slider4.jpg" />
                            </div>
                        </div>
                    </div>
                </center>
                <div id="bottom-content">
                    <table>
                        <tr>
                            <td valign="top" align="center" width="325"><div class="left-column"><h4><i class="fa fa-newspaper-o fa-lg"></i> News</h4></div></td>
                            <td valign="top" align="center" width="550"><div class="mid-column"><h4><i class="fa fa-comments-o fa-lg"></i> Announcements</h4><br><br><br><br><br><br><br><br><br></div></td>
                            <td valign="top" align="center" width="325"><h4><div class="right-column"><i class="fa fa-calendar-check-o fa-lg"></i> Calendar</h4></div></td>
                        </tr>
                    </table>
                </div>
                
            </div>
        </div>
        <hr color="#E8AD15">
        <div id="footer">
            <i class="fa fa-copyright"></i> Copyright 2015<br> <a href="contact-us.php">Contact  Us</a>
        </div>
	</body>
</html>