<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- CSS Eike -->
	<link href="css_eike.css" rel="stylesheet" type="text/css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="dropzoneStudent.js"></script>
	<script src="dropzoneDozent.js"></script>
	<link rel="stylesheet" href="dropzoneDozent.css">
	<link rel="stylesheet" href="dropzoneStudent.css">
	
	<script>
				/*
				DropzoneStudent.options.stmyDropzone = {
					init: function() {
						thisDropzone = this;
						<!-- 4 -->
						$.get('upload.php', function(data) {
							<!-- 5 -->
							$.each(data, function(key,value){
								 
								var mockFile = { name: value.name, size: value.size };
								 
								thisDropzone.options.addedfile.call(thisDropzone, mockFile);
				 
								thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
								 
							});
							 
						});
					}
				};*/
				</script>
	
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Student Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Willkommen xyz</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <h4 class="page-wrapper">Aktuelle Vorlesung: Datenbanktechnik</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="col-lg-6">
			
			<div class="row">
				<div class="col-lg-6">
                    <div class="panel panel-yellow" style="overflow: hidden">
                        <div class="panel-heading">
                            Bewertung: Einführung
                        </div>
                        <div class="panel-body">
							<div class="col-lg-12" style="margin: 0 auto">
								<fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
									<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
									<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
									<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
									<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
								</fieldset>
							</div>
							
							<div class="col-lg-6" style="margin-top:2em">
							  <input type="radio" name="like" value="Understood"> 
							  verstanden
							</div>
							<div class="col-lg-6" style="margin-top:2em">
							  <input type="radio" name="like" value="Not_understood">nicht verstanden
							</div>
							<div class="col-lg-12" style="margin-top:2em">
								<div class="form-group input-group">
														<input type="text" class="form-control" placeholder="Gib einen Kommentar ab">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button"><i class="fa fa-comment"></i>
															</button>
														</span>
								</div>
							</div>	
							
						</div>
					</div>
				</div>
				
				
				<div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Agenda
                                    </div>
                                    <div class="panel-body" style="text-align: left; margin-bottom: -1 em; margin-top: -1 em">

                                      <button type="button" style="width: 100% ; text-align: left" class="btn btn-default btn-lg active">1. Einführng</button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="btn btn-default btn-lg active">2. Weiterführung</button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="btn btn-primary btn-lg active">3. Analyse</button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="btn btn-lg btn-primary" disabled="disabled">4. Fazit</button>


                                    </div>

                                </div>
                    <!-- /.col-lg-4 -->

                </div>
				</div>
				

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Student Vorlesungsinhalte
                        </div>
                        <div class="panel-body" style="margin-bottom: 0.5em; margin-top: 0.5em;">
							<div style="height: 200px; width: 100%; border: 2px dashed #0087F7; border-radius: 5px; background-color: white;>
								<form style="height: 100%; width: 100px" action="upload.php" class="dropzoneStud" id="stmy-Dropzone"></form>
							</div>
                        </div>

                    </div>
					
				</div>

				

				
				<!------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------- Fragenbox Anfang -----------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------->
				
				<div class="col-lg-6">
                    <div class="panel panel-default" style="overflow: hidden">
                        <div class="panel-heading">
                            <h4 style="display:inline-block">FRAGEN</h4>
							
				<!-- **********************************************************Filterfunktion Anfang*************************************************************** -->
<ul class="nav navbar-top-links navbar-right in" style="display:inline-block; position:center">
                <li class="dropdown active">
                    <a class="dropdown-toggle active" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-filter fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages in">
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center active" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
            </ul>
				
				
				
				
				
<!-- 							<li class="dropdown open" style="display:inline-block; left:500px">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
									<i class="fa fa-filter fa-fw"></i>  <i class="fa fa-caret-down"></i>
								</a>
								<ul class="dropdown-menu dropdown-messages">
									<li>
										<a href="#">
											<div>
												<strong>John Smith</strong>
												<span class="pull-right text-muted">
													<em>Yesterday</em>
												</span>
											</div>
											<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a class="text-center" href="#">
											<strong>Read All Messages</strong>
											<i class="fa fa-angle-right"></i>
										</a>
									</li>
								</ul>
								<!-- /.dropdown-messages -->
							<!-- </li>  -->
				<!-- ************************************************Filterfunktion Ende*************************************************************************** -->
                        </div>

                        <div class="panel-body">
                            <div class="col-lg-12">
									
							<!-- Panel Groups-->		
		
										<!-- *******************************************Panel Group 1 *****************************************************-->
										<div class="panel-group " id="accordion1">
											
											<!-- Frage 1.1 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenOne">
													<div class="panel-title ellipsis fragePositionierung">
													<!-- display:inline; position:relative;  -->
													<script type="text/javascript">
													
													<!-- TODO: Textfeld auslesen und Checkbox setzen -->
													
													</script>
														<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >Frage: Einleitung sooooooooo unglaublich lang und deswegen frage ich mich, ob sie sinnvoll ist?</a>
													</div>
													
													<!-- Squared FOUR -->
													<div class="squaredCheckbox beantwortetButtonPositionierung disabled">
														<input type="checkbox" onclick="return false" value="None" id="squaredOne" name="check" />
														<label for="squaredOne"></label>
													</div>
													
													<!-- Beantwortet Label -->
													<div class="panel-title beantwortetLabelPositionierung">
															Beantwortet
													</div>
												</div>
												
												<div id="collapseOne" class="panel-collapse collapse in">
													<div class="panel-body">
														<div>
															<p style="font-size: 0.85em; opacity: .5; filter:Alpha(Opacity=50);">11. März 2015 um 11:10</p>
															<p style="font-size: 1.3em; font-weight:bold"> Einleitung sooooooooo unglaublcih lang und deswegen frage ich mich, ob sie sinnvoll ist? </p>
														</div>
													
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
											
											
											<!-- Frage 1.2 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenOne">
													<div class="panel-title ellipsis fragePositionierung">
													<script type="text/javascript">
													
													<!-- TODO: Textfeld auslesen und Checkbox setzen -->
													
													</script>
														<a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" >Frage: Weiterführung sinnvoll?</a>
													</div>
													
													<!-- Squared FOUR -->
													<div class="squaredCheckbox beantwortetButtonPositionierung">
														<input type="checkbox" value="None" id="squaredTwo" name="check" />
														<label for="squaredTwo"></label>
													</div>
													
													<!-- Beantwortet Label -->
													<div class="panel-title beantwortetLabelPositionierung">
															Beantwortet
													</div>
													
													
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p style="font-size: 0.85em; opacity: .5; filter:Alpha(Opacity=50);">11. März 2015 um 11:20</p>
															<p style="font-size: 1.3em; font-weight:bold"> Weiterführung sinnvoll? </p>
														</div>
														<!-- Antwort -->
													</div>
												</div>
											</div>
											
										</div>	

									
										<!-- *********************************************Panel Group 2 *********************************************************-->									
										<div class="panel-group" id="accordion2">
											
											<!-- Frage 2.1 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenTwo">
													<div class="panel-title ellipsis fragePositionierung">
													<script type="text/javascript">
													
													<!-- TODO: Textfeld auslesen und Checkbox setzen -->
													
													</script>
														<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" >Frage: Weiterführung sinnvoll?</a>
													</div>
													
													<!-- Squared FOUR -->
													<div class="squaredCheckbox beantwortetButtonPositionierung">
														<input type="checkbox" value="None" id="squaredThree" name="check" />
														<label for="squaredThree"></label>
													</div>
													
													<!-- Beantwortet Label -->
													<div class="panel-title beantwortetLabelPositionierung">
															Beantwortet
													</div>
													
													
												</div>
												<div id="collapseThree" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p style="font-size: 0.85em; opacity: .5; filter:Alpha(Opacity=50);">11. März 2015 um 12:20</p>
															<p style="font-size: 1.3em; font-weight:bold"> Weiterführung sinnvoll? </p>
														</div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
											
											
											
											<!-- Frage 2.2 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenTwo">
													<div class="panel-title ellipsis fragePositionierung">
													<script type="text/javascript">
													
													<!-- TODO: Textfeld auslesen und Checkbox setzen -->
													
													</script>
														<a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" >Frage: Weiterführung sinnvoll?</a>
													</div>
													
													<!-- Squared FOUR -->
													<div class="squaredCheckbox beantwortetButtonPositionierung">
														<input type="checkbox" value="None" id="squaredFour" name="check" />
														<label for="squaredFour"></label>
													</div>
													
													<!-- Beantwortet Label -->
													<div class="panel-title beantwortetLabelPositionierung">
															Beantwortet
													</div>
													
													
												</div>
												<div id="collapseFour" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p style="font-size: 0.85em; opacity: .5; filter:Alpha(Opacity=50);">12. März 2015 um 11:20</p>
															<p style="font-size: 1.3em; font-weight:bold"> Weiterführung sinnvoll? </p>
														</div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
											
											
										</div>							
								
								
								
							
								
									</div>
							
						</div>
							

                        <div class="panel-footer">
                            Panel Footer
                        </div>
					</div>
                </div>
                <!-- /.col-lg-4 -->
               
				
<!----------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------- Fragenbox ENDE ---------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------->
		

		
		
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>