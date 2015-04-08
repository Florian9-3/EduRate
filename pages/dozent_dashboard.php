<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EduRate - Dozent</title>

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
	
		 <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    
    <!-- Für Highlighten in Textarea GEHT NICHT
    <script src="jquery-ui-1.11.4/jquery-ui/jquery-ui.min.js"></script>
    <script src="jquery-highlighttextarea/jquery.highlighttextarea.min.js"></script>
    
    <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui/theme/jquery-ui.min.css">
    <link rel="stylesheet" href="jquery-highlighttextarea/jquery.highlighttextarea.min.css"> -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="dropzoneStudent.js"></script>
	<script src="dropzoneDozent.js"></script> 
	<link rel="stylesheet" href="dropzoneDozent.css">
	<link rel="stylesheet" href="dropzoneStudent.css">


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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #ECEFF1 !important;">
            <div class="navbar-header">
                <a class="navbar-brand" href="student_dashboard.php" style="color:#000000">Willkommen Herr Gichter</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Einstellungen</a>
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

            
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
			<div class="row" style="padding-top:1em; margin-left:2%">
                <div class="col-lg-3">
                    <h4 class="page-wrapper">Aktuelle Vorlesung: Datenbanktechnik</h4>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Kurs: WI376 (345 Studenten)</h4>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Raum: B354</h4>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Zeitraum: 9.00 Uhr - 12.15 Uhr</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <hr style="margin-top:0px !important;">
			
			<div class="col-lg-6">
			
			<div class="row">
            
            <script type="text/javascript">
				$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();   
					document.getElementById("activate_button4").disabled = false;
				});
			</script>
            
            <div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading panelCustom" style="background-color: #ECEFF1 !important; border-color: #B0BEC5 !important; padding:16px; font-size:16px">
                                        Agenda
                                    </div>
                                    <div class="panel-body" style="margin-bottom: -1 em; margin-top: -1 em">

                                      <button type="button" style="text-align:left; width: 100%" class="agenda1 btn btn-default btn-lg " onClick="agendaChange(1);">
                                      <span style="text-align:left;">1. Einführung</span>
                                      <span style="text-align:right;">
                                      	<fieldset class="ratingDoz">
                                            <input type="radio" id="ag5" name="ratingDoz" value="5" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                            <input type="radio" id="ag4" name="ratingDoz" value="4" checked="true" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                            <input type="radio" id="ag3" name="ratingDoz" value="3" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                            <input type="radio" id="ag2" name="ratingDoz" value="2" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                            <input type="radio" id="ag1" name="ratingDoz" value="1" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
										</fieldset>
                                        </span>
                                      </button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="agenda2 btn btn-default btn-lg" onclick="agendaChange(2);">
                                      <span style="text-align:left;">2. Weiterführung</span>
                                      <span style="text-align:right;">
                                      	<fieldset class="ratingDoz">
                                            <input type="radio" id="ag5" name="ratingDoz2" value="5" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                            <input type="radio" id="ag4" name="ratingDoz2" value="4" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                            <input type="radio" id="ag3" name="ratingDoz2" value="3" checked="true" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                            <input type="radio" id="ag2" name="ratingDoz2" value="2" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                            <input type="radio" id="ag1" name="ratingDoz2" value="1" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
										</fieldset>
                                        </span>
                                      </button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="agenda3 btn btn-default btn-lg" onclick="agendaChange(3);" >
                                      <span style="text-align:left;">3. Analyse</span>
                                      <span style="text-align:right;">
                                      	<fieldset class="ratingDoz">
                                            <input type="radio" id="ag5" name="ratingDoz3" value="5" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                            <input type="radio" id="ag4" name="ratingDoz3" value="4" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                            <input type="radio" id="ag3" name="ratingDoz3" value="3" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                            <input type="radio" id="ag2" name="ratingDoz3" value="2" checked="true" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                            <input type="radio" id="ag1" name="ratingDoz3" value="1" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
										</fieldset>
                                        </span>
                                      </button>
                                      <br><br>
                                      <div data-toggle="tooltip" data-placement="right" title="Noch nicht behandelt" id="nichtBehandelt4">
                                          <div style="width: 100%; text-align: left; margin-bottom:1em; cursor: default !important;" id="agenda4" class="agendaDisabled btn btn-lg btn-primary" onclick="agendaChange(4);"
                                          >4. Fazit
                                          <span style="float: right;">
                                          <button type="button" class="btn btn-info btn-circle" style="cursor: pointer !important" onClick="activate(4)" id="activate_button4"><i class="fa fa-check"></i>
                                            </button>
											<fieldset class="ratingDoz" id="rating4" style="display: none">
                                            <input type="radio" id="ag5" name="ratingDoz4" value="5" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                            <input type="radio" id="ag4" name="ratingDoz4" value="4" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                            <input type="radio" id="ag3" name="ratingDoz4" value="3" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                            <input type="radio" id="ag2" name="ratingDoz4" value="2" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                            <input type="radio" id="ag1" name="ratingDoz4" value="1" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
										</fieldset>
											</span>
                                          </div></div>
                                      <br>
                                      


                                    </div>

                                </div>
                    <!-- /.col-lg-4 -->

                </div>
            
				<div class="col-lg-6">
                    <div class="bewertungcontainer1 panel panel-yellow" id="bewertung_container" style="overflow: hidden">
                        <div class="bewertung1 panel-heading" id="bewertung_header" style="padding:16px; font-size:16px;">
                            Detailbewertung: 1. Einführung
                        </div>
                      <div class="panel-body">
                            <div style="width:100%; height:100%" id="chart_div"></div>
                            <div style="margin-left:3%" id="gesamtzahl">Gesamtanzahl: 253 Bewertungen</div>
                            <hr>
                            <div id="Kommentare" style="margin-left:3%"><b>Kommentare:</b></div><br>
                            <ul id="comments" class="chat" style="margin-left:3%; margin-right:1%; padding-right:2%; height:200px !important; overflow:auto;">
                                <li class="left clearfix comment1" id="list1">
                                    
                                    <div class="chat-body clearfix">
                                        <div class="header" style="line-height:1">
                                            
                                                <fieldset class="ratingComment">
                                                    <input type="radio" id="ag5" name="ratingComment1" value="5" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment1" value="4" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment1" value="3" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment1" value="2" checked="true" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment1" value="1" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
                                                </fieldset>
                                            
                                            <small class="pull-right text-muted" style="margin-top:2%">
                                                <i class="fa fa-clock-o fa-fw"></i> vor 12 min
                                            </small>
                                        </div>
                                        <p>
                                            Schlecht erklärt
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix comment1" id="list2">
                                    
                                    <div class="chat-body clearfix">
                                        <div class="header" style="line-height:1">
                                            
                                                <fieldset class="ratingComment">
                                                    <input type="radio" id="ag5" name="ratingComment2" value="5" checked="true" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment2" value="4" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment2" value="3" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment2" value="2" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment2" value="1" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
                                                </fieldset>
                                            
                                            <small class="pull-right text-muted" style="margin-top:2%">
                                                <i class="fa fa-clock-o fa-fw"></i> vor 13 min
                                            </small>
                                        </div>
                                        <p>
                                            Super! Habe alles verstanden.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix comment1" id="list3">
                                    
                                    <div class="chat-body clearfix">
                                        <div class="header" style="line-height:1">
                                            
                                                <fieldset class="ratingComment">
                                                    <input type="radio" id="ag5" name="ratingComment3" value="5" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment3" value="4" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment3" value="3" checked="true" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment3" value="2" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment3" value="1" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
                                                </fieldset>
                                            
                                            <small class="pull-right text-muted" style="margin-top:2%">
                                                <i class="fa fa-clock-o fa-fw"></i> vor 15 min
                                            </small>
                                        </div>
                                        <p>
                                            Gut erklärt, aber Übungsaufgaben hätten geholfen.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix comment1"  id="list4">
                                    
                                    <div class="chat-body clearfix">
                                        <div class="header" style="line-height:1">
                                            
                                                <fieldset class="ratingComment">
                                                    <input type="radio" id="ag5" name="ratingComment4" value="5" disabled="true"/><label for="ag5" title="Perfekt">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment4" value="4" disabled="true"/><label for="ag4" title="Gut">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment4" value="3" disabled="true"/><label for="ag3" title="Okay">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment4" value="2" disabled="true"/><label for="ag2" title="Verbesserungsfähig">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment4" value="1" checked="true" disabled="true"/><label for="ag1" title="Ungenügend">1 star</label>
                                                </fieldset>
                                            
                                            <small class="pull-right text-muted" style="margin-top:2%">
                                                <i class="fa fa-clock-o fa-fw"></i> vor 22 min
                                            </small>
                                        </div>
                                        <p>
                                            Das war ein reiner Monolog. Nichts verstanden. Tafelbild unübersichtlich.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            
						</div>
					</div>
				</div>
                
                
                <!-- googleAPI -->
                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                <script type="text/javascript">
            
                  // Load the Visualization API and the piechart package.
                  google.load('visualization', '1.0', {'packages':['corechart']});
            
                  // Set a callback to run when the Google Visualization API is loaded.
                  google.setOnLoadCallback(drawChart);
            
                  // Callback that creates and populates a data table,
                  // instantiates the pie chart, passes in the data and
                  // draws it.
                  function drawChart() {
            
                    // Create the data table.
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Anzahl der Bewertungen');
					data.addColumn({type:'string', role:'style'});
                    data.addRows([
                      ['1 Stern', 37, 'color: #009688'],
                      ['2 Sterne', 23, 'color: #009688'],
                      ['3 Sterne', 55, 'color: #009688'],
                      ['4 Sterne', 76, 'color: #009688'],
                      ['5 Sterne', 62, 'color: #009688']
                    ]);
            
                    // Set chart options
                    //var options = {'title':'Bewertung der Studenten'};
					var options = {
						title: 'Bewertung der Studenten',
						animation:{
							duration: 1500,
							startup: true,
							easing: 'out',
						  },
						legend:{
							position: 'none',
						},
					};
            
                    // Instantiate and draw our chart, passing in some options.
                    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                  }
            
                  window.onresize = function(event) {
            
                  };
                </script>
				
				<script>
				
					var one_stars = 0;
					var two_stars = 0;
					var three_stars = 0;
					
					var one_comment = null;
					var two_comment = null;
					var three_comment = null;
					
					var one_count = 40;
					var two_count = 40;
					var three_count = 40;
					
					var one_Counter;
					var two_Counter;
					var three_Counter;
					
					var one_verstanden = -1;
					var two_verstanden = -1;
					var three_verstanden = -1;
					
					var radio_button;
					var agenda = 1;
					
					function activate(position){
						
						document.getElementById("agenda4").className = "agenda4 btn btn-lg btn-primary";
						document.getElementById("agenda4").disabled = false;
						$("#nichtBehandelt4").tooltip('destroy');
						document.getElementById("activate_button4").style.display = "none";
						document.getElementById("rating4").style.display = "inline";
					}
					
					function agendaChange(position){
						
						switch(position){
						 case 1:
						 	agenda = 1;
							document.getElementById("Kommentare").innerHTML="<b>Kommentare:</b>";
							document.getElementById("comments").style.display = "block";
							document.getElementById("bewertung_header").innerHTML="Detailbewertung: 1. Einführung";
							document.getElementById("bewertung_header").className = "panel-heading bewertung1";
							document.getElementById("bewertung_container").className = "bewertungcontainer1 panel panel-yellow";
							document.getElementById("list1").className = "left clearfix comment1";
							document.getElementById("list2").className = "left clearfix comment1";
							document.getElementById("list3").className = "left clearfix comment1";
							document.getElementById("list4").className = "left clearfix comment1";
							
							// Load the Visualization API and the piechart package.
							  google.load('visualization', '1.0', {'packages':['corechart']});
						
							  // Set a callback to run when the Google Visualization API is loaded.
							  google.setOnLoadCallback(drawChart);
						
							  // Callback that creates and populates a data table,
							  // instantiates the pie chart, passes in the data and
							  // draws it.
							  function drawChart1() {
						
								// Create the data table.
								var data = new google.visualization.DataTable();
								data.addColumn('string', 'Topping');
								data.addColumn('number', 'Anzahl der Bewertungen');
								data.addColumn({type:'string', role:'style'});
								data.addRows([
								  ['1 Stern', 37, 'color: #009688'],
								  ['2 Sterne', 23, 'color: #009688'],
								  ['3 Sterne', 55, 'color: #009688'],
								  ['4 Sterne', 76, 'color: #009688'],
								  ['5 Sterne', 62, 'color: #009688']
								]);
						
								// Set chart options
								//var options = {'title':'Bewertung der Studenten'};
								var options = {
									title: 'Bewertung der Studenten',
									animation:{
										duration: 1500,
										startup: true,
										easing: 'out',
									  },
									legend:{
										position: 'none',
									},
								};
						
								// Instantiate and draw our chart, passing in some options.
								var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
								chart.draw(data, options);
							  }
							  drawChart1();
						
							  window.onresize = function(event) {
						
							  };
							document.getElementById("gesamtzahl").innerHTML="Gesamtanzahl: 253 Bewertungen";  
							break;
						 case 2:
						 	agenda = 2;
							document.getElementById("Kommentare").innerHTML="<b>Kommentare:</b>";
							document.getElementById("comments").style.display = "block";
							document.getElementById("bewertung_header").innerHTML="Detailbewertung: 2. Weiterführung";
							document.getElementById("bewertung_header").className = "panel-heading bewertung2";
							document.getElementById("bewertung_container").className = "bewertungcontainer2 panel panel-yellow";
							document.getElementById("list1").className = "left clearfix comment2";
							document.getElementById("list2").className = "left clearfix comment2";
							document.getElementById("list3").className = "left clearfix comment2";
							document.getElementById("list4").className = "left clearfix comment2";
							
							// Load the Visualization API and the piechart package.
							  google.load('visualization', '1.0', {'packages':['corechart']});
						
							  // Set a callback to run when the Google Visualization API is loaded.
							  google.setOnLoadCallback(drawChart);
						
							  // Callback that creates and populates a data table,
							  // instantiates the pie chart, passes in the data and
							  // draws it.
							  function drawChart2() {
						
								// Create the data table.
								var data = new google.visualization.DataTable();
								data.addColumn('string', 'Topping');
								data.addColumn('number', 'Anzahl der Bewertungen');
								data.addColumn({type:'string', role:'style'});
								data.addRows([
								  ['1 Stern', 10, 'color: #4CAF50'],
								  ['2 Sterne', 17, 'color: #4CAF50'],
								  ['3 Sterne', 88, 'color: #4CAF50'],
								  ['4 Sterne', 34, 'color: #4CAF50'],
								  ['5 Sterne', 49, 'color: #4CAF50']
								]);
						
								// Set chart options
								//var options = {'title':'Bewertung der Studenten'};
								var options = {
									title: 'Bewertung der Studenten',
									animation:{
										duration: 1500,
										startup: true,
										easing: 'out',
									  },
									legend:{
										position: 'none',
									},
								};
						
								// Instantiate and draw our chart, passing in some options.
								var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
								chart.draw(data, options);
							  }
							
							  drawChart2();
							  window.onresize = function(event) {
						
							  };
							document.getElementById("gesamtzahl").innerHTML="Gesamtanzahl: 198 Bewertungen";
							break;
						 case 3:
						 	agenda = 3;
							document.getElementById("Kommentare").innerHTML="<b>Kommentare:</b>";
							document.getElementById("comments").style.display = "block";
							document.getElementById("bewertung_header").innerHTML="Detailbewertung: 3. Analyse";
							document.getElementById("bewertung_header").className = "panel-heading bewertung3";
							document.getElementById("bewertung_container").className = "bewertungcontainer3 panel panel-yellow";
							document.getElementById("list1").className = "left clearfix comment3";
							document.getElementById("list2").className = "left clearfix comment3";
							document.getElementById("list3").className = "left clearfix comment3";
							document.getElementById("list4").className = "left clearfix comment3";
							
							// Load the Visualization API and the piechart package.
							  google.load('visualization', '1.0', {'packages':['corechart']});
						
							  // Set a callback to run when the Google Visualization API is loaded.
							  google.setOnLoadCallback(drawChart);
						
							  // Callback that creates and populates a data table,
							  // instantiates the pie chart, passes in the data and
							  // draws it.
							  function drawChart3() {
						
								// Create the data table.
								var data = new google.visualization.DataTable();
								data.addColumn('string', 'Topping');
								data.addColumn('number', 'Anzahl der Bewertungen');
								data.addColumn({type:'string', role:'style'});
								data.addRows([
								  ['1 Stern', 45, 'color: #8BC34A'],
								  ['2 Sterne', 49, 'color: #8BC34A'],
								  ['3 Sterne', 55, 'color: #8BC34A'],
								  ['4 Sterne', 43, 'color: #8BC34A'],
								  ['5 Sterne', 13, 'color: #8BC34A']
								]);
						
								// Set chart options
								//var options = {'title':'Bewertung der Studenten'};
								var options = {
									title: 'Bewertung der Studenten',
									animation:{
										duration: 1500,
										startup: true,
										easing: 'out',
									  },
									legend:{
										position: 'none',
									},
								};
						
								// Instantiate and draw our chart, passing in some options.
								var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
								chart.draw(data, options);
							  }
							
							  drawChart3();
							  window.onresize = function(event) {
						
							  };
							document.getElementById("gesamtzahl").innerHTML="Gesamtanzahl: 205 Bewertungen";
							
							break;
						 case 4:
							if(document.getElementById("activate_button4").style.display == "none"){
								agenda = 4;
								document.getElementById("bewertung_header").innerHTML="Detailbewertung: 4. Fazit";
								document.getElementById("bewertung_header").className = "panel-heading bewertung4";
								document.getElementById("bewertung_container").className = "bewertungcontainer4 panel panel-yellow";
								document.getElementById("list1").className = "left clearfix comment4";
								document.getElementById("list2").className = "left clearfix comment4";
								document.getElementById("list3").className = "left clearfix comment4";
								document.getElementById("list4").className = "left clearfix comment4";
								document.getElementById("comments").style.display = "none";
								document.getElementById("Kommentare").innerHTML="<b>Noch keine Kommentare</b>";
								
								// Load the Visualization API and the piechart package.
								  google.load('visualization', '1.0', {'packages':['corechart']});
							
								  // Set a callback to run when the Google Visualization API is loaded.
								  google.setOnLoadCallback(drawChart);
							
								  // Callback that creates and populates a data table,
								  // instantiates the pie chart, passes in the data and
								  // draws it.
								  function drawChart4() {
							
									// Create the data table.
									var data = new google.visualization.DataTable();
									data.addColumn('string', 'Topping');
									data.addColumn('number', 'Anzahl der Bewertungen');
									data.addColumn({type:'string', role:'style'});
									data.addRows([
									  ['1 Stern', 0, 'color: #B6902E'],
									  ['2 Sterne', 0, 'color: #B6902E'],
									  ['3 Sterne', 0, 'color: #B6902E'],
									  ['4 Sterne', 0, 'color: #B6902E'],
									  ['5 Sterne', 0, 'color: #B6902E']
									]);
							
									// Set chart options
									//var options = {'title':'Bewertung der Studenten'};
									var options = {
										title: 'Bewertung der Studenten',
										animation:{
											duration: 1500,
											startup: true,
											easing: 'out',
										  },
										legend:{
											position: 'none',
										},
									};
							
									// Instantiate and draw our chart, passing in some options.
									var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
									chart.draw(data, options);
								  }
								
								  drawChart4();
								  window.onresize = function(event) {
							
								  };
								document.getElementById("gesamtzahl").innerHTML="Gesamtanzahl: 0 Bewertungen";
							}
							break;
						 }
						 
						 }
					
					DropzoneDozent.options.stmyDropzone = {
					init: function() {
						thisDropzone = this;
						<!-- 4 -->
						$.get('upload.php', function(data) {
							<!-- 5 -->
							$.each(data, function(key,value){
								
								document.getElementById("noFiles").style.display = 'none';
								 
								var mockFile = { name: value.name, size: value.size };
								 
								thisDropzone.options.addedfile.call(thisDropzone, mockFile);
				 
								thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
								 
							});
							 
						});
						
					}
					}
					
					
				</script>
				
				
				
				
				</div>
				

                    <div class="panel panel-info">
                        <div class="panel-heading panelCustom" style="background-color: #ECEFF1 !important; border-color: #B0BEC5 !important; padding:16px; font-size:16px">
                            Vorlesungsinhalte
                        </div>
                        <div class="panel-body" style="margin-bottom: 0.5em; margin-top: 0.5em;">
							<div style="height: 200px; width: 100%; border: 2px dashed #0087F7; border-radius: 5px; background-color: white;">
								<form style="height: 100%; width: 100%" action="upload.php" class="dropzoneDoz" id="stmy-Dropzone">
                                <span class="folder_empty" id="noFiles" style="z-index:-100;">
                           	    	<img src="res/upload.png"  height="70%" alt="" style="display:block; margin-left:auto; margin-right:auto; width:auto"/>
                                 	<div style="text-align:center">Dieser Ordner ist leer <br> (Dateien per Drag&amp;Drop hinzufügen) 
                                 	</div>
                                 </span>
                                 </form>
						  </div>
                        </div>

                    </div>
					
				</div>

				

				
<!------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------- Fragenbox Anfang -----------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------->
				
			<div class="col-lg-6">
                    <div class="panel panel-default" style="overflow: hidden">
                        <div class="panel-heading" style="display:inline-block; width:100%">

						<div style="float:left; width:90%">
						
							<div style="display:inline-block; width:150px; font-size:16px">
								Fragen
							</div>
							
							<div class="fa fa-search" >
							</div>
							
							<div style="display:inline-block; width: 350px;">
								<input class="form-control" type="text" id="search" placeholder="Suche nach Stichwort...">
							</div>
						
						</div>	

<!-- **********************************************************Filterfunktion Anfang*************************************************************** -->												
						<div style="float:right; width:10%; height:34px">
						<div class="nav navbar-top-links navbar-right in" style="padding-top: 6px;">
							<label id="filterLabel" class="dropdown active">
								<div id="dropdownDivFilter" href="#dropItLikeItsHot" style="cursor:pointer" class="dropdown-toggle filter nav navbar-top-links in" onClick="toggleFilter()" role="button" aria-expanded="false">
									<label class="fa fa-filter" style="cursor:pointer; font-size:16px"></label> Filter <span class="caret"></span>
								</div>
								
								<ul id="dropdownListFilter" class="dropdown-menu"role="menu">
								
								  <li class="dropdown-header">STATUS</li>
								  <li><input class="stFilter fi" href="#dropItLikeItsHot" type="checkbox" id="ug" value="quBold" style="margin-left:5px; cursor:pointer"><label for="ug" style="margin-left:2px; cursor:pointer">Ungelesen</label><br></li>
								  <li><input class="stFilter fi" href="#dropItLikeItsHot" type="checkbox" id="ub" value="fa-ellipsis-h" style="margin-left:5px; cursor:pointer"><label for="ub" style="margin-left:2px; cursor:pointer">Unbeantwortet</label><br></li>
								  <li class="divider"></li>
								  <li class="dropdown-header">AGENDA</li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda1Filter" value="pgagenda1" style="margin-left:5px; cursor:pointer" checked><label for="agenda1Filter" style="margin-left:2px; cursor:pointer">1. Einführung</label><br></li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda2Filter" value="pgagenda2" style="margin-left:5px; cursor:pointer" checked><label for="agenda2Filter" style="margin-left:2px; cursor:pointer">2. Weiterführung</label><br></li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda3Filter" value="pgagenda3" style="margin-left:5px; cursor:pointer" checked><label for="agenda3Filter" style="margin-left:2px; cursor:pointer">3. Analyse</label><br></li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda4Filter" value="pgagenda4" style="margin-left:5px; cursor:pointer" checked><label for="agenda4Filter" style="margin-left:2px; cursor:pointer">4. Fazit</label><br></li>

								</ul>
							</label>
						</div>
						</div>
					
					<script>
						function toggleFilter(){
							$('#filterLabel').toggleClass('open');
						}
						
						$('body').on('click', function (e) {
							if (!$('#filterLabel').is(e.target) 
								&& $('#filterLabel').has(e.target).length === 0 
								&& $('.open').has(e.target).length === 0
							) {
								$('#filterLabel').removeClass('open');
							}
						});
						
						
					</script>
					
					</div>	
<!-- ************************************************Filterfunktion Ende*************************************************************************** -->
                      	<!-- Frage stellen -->


				<div class="panel-body">
					<div class="col-lg-12">
							
					<!-- Panel Groups-->		

						<!-- *******************************************Panel Group 1 *****************************************************-->
						<div class="panel-group " id="pgagenda1">
									
									<!-- Frage 1.1 -->
									<div class="panel panel-default hider" id="qu1">
										<div data-toggle="collapse" data-parent="#pgagenda1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="panel-heading quOverflow agenda1">
					   
											<div id="quHeader1" class="panel-title ellipsis fragePositionierung quBold">
												Warum sollten Studenten ihrem Dozenten eine Frage stellen, wenn sie doch stattdessen Google benutzen könnten?
											</div>

											<div data-toggle="tooltip" data-placement="left" data-original-title="" class="checkerBoxer beantwortetButtonPositionierung">
												<label class="haken" name="labeler"></label>
											</div>

											
										</div>
										<div id="collapseOne" class="panel-collapse collapse">
											<div class="panel-body">
												<div>
													<p class="frageDatum">30/3/2015 um 19:50</p>
													<p class="frageVollständig"> Warum sollten Studenten ihrem Dozenten eine Frage stellen, wenn sie doch stattdessen Google benutzen könnten? </p>
												</div>
												<textarea rows="5" id="antwort1" name="texterArea" style="width:100%" class="dozSentAnswer" readonly>Weil der Dozent passender zu der spezifischen Frage und vor allem passender zu seinem relevanten Stoff eine passende Antwort geben kann. Suchen bei Google können immer durch die nicht vorhandene Möglichkeit des expliziten Fragestellens sehr mühselig werden, bis man die für die Frage relevanten Informationen gefunden hat. </textarea>														
												<button type="button" class="btn btn-success disabled answSend"><label class="fa fa-share"></label>  Absenden</button>
												<button type="button" class="btn btn-warning answChange"><label class="fa fa-pencil"></label> Bearbeiten</button>
											</div>
										</div>
									</div>
									

									<!-- Frage 1.2 -->
									<div class="panel panel-default hider" id="qu2">
										<div data-toggle="collapse" data-parent="#pgagenda1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="panel-heading quOverflow agenda1"> 

											<div id="quHeader2" class="panel-title ellipsis fragePositionierung quBold">
												Warum sollten Dozenten Feedback wollen?
											</div>

											<div  class="checkerBoxer beantwortetButtonPositionierung" data-toggle="tooltip" data-placement="left" data-original-title="">
												<label class="haken" name="labeler"></label>
											</div>

											
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												<div>
													<p class="frageDatum">30/3/2015 um 19:39</p>
													<p class="frageVollständig"> Warum sollten Dozenten Feedback wollen? </p>
												</div>
												<textarea rows="5" id="antwort2" name="texterArea" style="width:100%" class="dozSentAnswer" readonly></textarea>	
												<button type="button" class="btn btn-success disabled answSend"><label class="fa fa-share"></label> Absenden</button>
												<button type="button" class="btn btn-warning answChange"><label class="fa fa-pencil"></label> Bearbeiten</button>
											</div>
										</div>
									</div>
									
								</div>	

							
								<!-- *********************************************Panel Group 2 *********************************************************-->									
								<div class="panel-group " id="pgagenda2">
									
									<!-- Frage 2.1 -->
									<div class="panel panel-default hider" id="qu3">
										<div data-toggle="collapse" data-parent="#pgagenda2" href="#collapse3" aria-expanded="true" aria-controls="collapse3" class="panel-heading quOverflow agenda2">

											<div id="quHeader3" class="panel-title ellipsis fragePositionierung quBold">
												Warum sollte sich der Dozent im Nachgang Zeit nehmen um die Fragen der Studenten zu beantworten?
											</div>

											<div data-toggle="tooltip" data-placement="left" data-original-title="" class="checkerBoxer beantwortetButtonPositionierung">
												<label class="haken" name="labeler"></label>
											</div>
										</div>
										
										<div id="collapse3" class="panel-collapse collapse">
											<div class="panel-body">
												<div>
													<p class="frageDatum">30/3/2015 um 20:15</p>
													<p class="frageVollständig"> Warum sollte sich der Dozent im Nachgang Zeit nehmen um die Fragen der Studenten zu beantworten? </p>
												</div>
												<textarea rows="5" id="antwort3" name="texterArea" style="width:100%" class="dozSentAnswer" readonly>Weil er so während der Vorlesung mehr Zeit hat seinen Stoff verständlich und interaktiv zu vermitteln. Außerdem kann er so die Informationen die er den Studenten bereitstellt mit weiteren Informationen oder Dateien versehen. Z.B. der kompletten Lösung einer Rechenaufgabe. Hierbei kann er sich viel mehr Zeit nehmen, als er während der Vorlesung hätte. 
												</textarea>	
                                                <button type="button" class="btn btn-success disabled answSend"><label class="fa fa-share"></label> Absenden</button>
												<button type="button" class="btn btn-warning answChange"><label class="fa fa-pencil"></label> Bearbeiten</button>
											</div>
										</div>
									</div>
									
									
									<!-- Frage 2.2 -->
									<div class="panel panel-default hider" id="qu4">
										<div data-toggle="collapse" data-parent="#pgagenda2" href="#collapse4" aria-expanded="true" aria-controls="collapse4" class="panel-heading quOverflow agenda2"> 

											<div id="quHeader4" class="panel-title ellipsis fragePositionierung quBold">
												Dies ist eine sehr, sehr lange Dummy Frage, um zu zeigen welch tolles Feature die Fragenanzeige hinsichtlich zu langen Fragen hat. Welches Feature könnte es nur sein?
											</div>

											<div data-toggle="tooltip" data-placement="left" data-original-title="" class="checkerBoxer beantwortetButtonPositionierung" style="border-left:groove">
												<label class="haken" name="labeler"></label>
											</div>

											
										</div>
										<div id="collapse4" class="panel-collapse collapse">
											<div class="panel-body">
												<div>
													<p class="frageDatum">30/3/2015 um 19:55</p>
													<p class="frageVollständig"> Dies ist eine sehr, sehr lange Dummy Frage, um zu zeigen welch tolles Feature die Fragenanzeige hinsichtlich zu langen Fragen hat. Welches Feature könnte es nur sein? </p>
												</div>
												<textarea rows="5" id="antwort4" name="texterArea" style="width:100%" class="dozSentAnswer" readonly></textarea>	
                                                <button type="button" class="btn btn-success disabled answSend"><label class="fa fa-share"></label> Absenden</button>
												<button type="button" class="btn btn-warning answChange"><label class="fa fa-pencil"></label> Bearbeiten</button>
                                            </div>
										</div>
									</div>
									
								</div>							
					
					
					<div class="panel-group " id="pgagenda3">
					</div>
					
					<div class="panel-group " id="pgagenda4">
					</div>
					
				</div>
			</div>
            </div>
                <!-- /.col-lg-4 -->
          </div>     
				
<!----------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------- Fragenbox ENDE ---------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------------
        <!-- /#page-wrapper -->
                       
    <!-- <style type="text/css">

      .CodeMirror-line-numbers {
        width: 2.2em;
        color: #aaa;
        background-color: #eee;
        text-align: right;
        padding-right: .3em;
        font-size: 10pt;
        font-family: monospace;
        padding-top: .4em;
      }

    </style> -->
            
            
            
	<script type="text/javascript">
					<!-- Textarea auslesen und Status setzen -->
					
					window.onload = start;
					
					function start(){
						setzeBeantwortetStatus();
					}
					
					
<!-- Beantwortet Status setzen  -->
					function setzeBeantwortetStatus(){
						var listeTextarea = document.getElementsByName("texterArea");
						var listeLabel = document.getElementsByName("labeler");
						var anzahlLT = listeTextarea.length;
						var antwort;
						
						for(var i = 0; i < anzahlLT; i++ ){
						
							antwort = listeTextarea[i].textContent;
							
							if(antwort == ""){
								listeLabel[i].className = "haken fa fa-ellipsis-h";
								$(listeLabel[i]).parent().attr("data-original-title" , "Unbeantwortet");
							}
							else{
								listeLabel[i].className = "haken fa fa-check";
								$(listeLabel[i]).parent().attr("data-original-title", "Beantwortet");
							}

						}
						
					}
					
					function setzeBeantwortetStatusTextarea(){
						var listeTextarea = document.getElementsByName("texterArea");
						var listeLabel = document.getElementsByName("labeler");
						var anzahlLT = listeTextarea.length;
						var antwort;
						
						for(var i = 0; i < anzahlLT; i++ ){
						
							antwort = listeTextarea[i].value;
							
							if(antwort == ""){
								listeLabel[i].className = "haken fa fa-ellipsis-h";
								$(listeLabel[i]).parent().attr("data-original-title" , "Unbeantwortet");
							}
							else{
								listeLabel[i].className = "haken fa fa-check";
								$(listeLabel[i]).parent().attr("data-original-title", "Beantwortet");
							}

						}
						
					}
					
<!-- Setze gelesen-Status -->					
					$(".quBold").on("click", function() {					
						$(this).removeClass("quBold");		
					});

				
				
				   $(function() {
				
<!-- Antwort auf Frage bearbeiten bzw absenden -->
    
                $(".answSend").on("click", function(){
                if(!($(this).hasClass("disabled"))){
                    var textarea = $(this).parent().children("[name*=texterArea]");
                    textarea.addClass("dozSentAnswer");
                    textarea.attr("readonly", "yes");
                    $(this).addClass("disabled");
                    $(this).parent().children(".answChange").removeClass("disabled");
					setzeBeantwortetStatusTextarea();
                }
                });

                $(".answChange").on("click", function(){
                if(!($(this).hasClass("disabled"))){
                    var textarea = $(this).parent().children("[name*=texterArea]");
                    textarea.removeClass("dozSentAnswer");
                    textarea.removeAttr("readonly");
                    $(this).addClass("disabled");
                    $(this).parent().children(".answSend").removeClass("disabled");
					setzeBeantwortetStatusTextarea();
                }
                });
					   
<!-- Enterfunktion Textfeld Fragen -->
						$("#quNew").keyup(function(event){
							if(event.keyCode == 13){
								$("#btnAddQuestion").click();
							}
						});
						
<!-- Suche -->
						jQuery.fn.highlight = function(pat) {
							 function innerHighlight(node, pat) {
							  var skip = 0;
							  if (node.nodeType == 3) {
							   var pos = node.data.toUpperCase().indexOf(pat);
							   pos -= (node.data.substr(0, pos).toUpperCase().length - node.data.substr(0, pos).length);
							   if (pos >= 0) {
								var spannode = document.createElement('span');
								spannode.className = 'highlight';
								var middlebit = node.splitText(pos);
								var endbit = middlebit.splitText(pat.length);
								var middleclone = middlebit.cloneNode(true);
								spannode.appendChild(middleclone);
								middlebit.parentNode.replaceChild(spannode, middlebit);
								skip = 1;
							   }
							  }
							  else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
							   for (var i = 0; i < node.childNodes.length; ++i) {
								i += innerHighlight(node.childNodes[i], pat);
							   }
							  }
							  return skip;
							 }
							 return this.length && pat && pat.length ? this.each(function() {
							  innerHighlight(this, pat.toUpperCase());
							 }) : this;
						};

						jQuery.fn.removeHighlight = function() {
						 return this.find("span.highlight").each(function() {
						  this.parentNode.firstChild.nodeName;
						  with (this.parentNode) {
						   replaceChild(this.firstChild, this);
						   normalize();
						  }
						 }).end();
						};

						$("#search").keyup(function(){
							var val = $(this).val().toLowerCase();
							$(".hider").hide();
							$(".hider").each(function(){
								var text = $(this).text().toLowerCase();
								if(text.indexOf(val) != -1)
								{
									$('.fragePositionierung').removeHighlight();
									$(".fragePositionierung").highlight(val);
									$(this).show();
								}
							});
							
							// $("textarea[name='texterArea']").each(function(){
								// var text = $(this).text().toLowerCase();
								// if(text.indexOf(val) != -1)
								// {
									// $("textarea[name='texterArea']").removeHighlight();
									// $("textarea[name='texterArea']").highlight(val); 
                                    // //$("textarea[name='texterArea']").highlightTextarea({
                                    // //  words: ['dozent'],
                                    // //  caseSensitive: true
                                    // //});

									// $(this).show();
								// }
							// });
							
							$(".frageVollständig").each(function(){
								var text = $(this).text().toLowerCase();
								if(text.indexOf(val) != -1)
								{
									$(".frageVollständig").removeHighlight();
									$(".frageVollständig").highlight(val);
									$(this).show();
								}
							});

						 });	



<!-- Filter -->
						$(".fi").on("click", function(){
							
							var checkedAgendaList = [];
							var checkedStatusList = [];
							var count = 0;
							
							<!-- Filteroptionen auslesen -->
							$(".agFilter").each(function(){
								if(this.checked === true){
									checkedAgendaList[count] =  this;
									count++;
								}
							});
							
							count = 0;
							
							$(".stFilter").each(function(){
								if(this.checked === true){
									checkedStatusList[count] =  this;
									count++;
								}
							});
								
							$(".panel-group").hide();
							
							if(checkedStatusList.length > 0){
								$(".hider").hide();
							}else{
								$(".hider").show();
							}
							
							if(checkedStatusList.length < 2){
															
								for(var i = 0; i < checkedAgendaList.length; i++){
									var cl = "#" + checkedAgendaList[i].value;
									$(cl).show();
								}
								
								for(var i = 0; i < checkedStatusList.length; i++){
									var cl = "." + checkedStatusList[i].value;
									
									if(cl == ".quBold"){
										$(".quBold").each(function(){
											$(this).parent().parent().show();
										});
									}
									
									if(cl == ".fa-ellipsis-h"){
										$(".fa-ellipsis-h").each(function(){
											$(this).parent().parent().parent().show();
										});
									}		
								}
								
							}else{
									for(var i = 0; i < checkedAgendaList.length; i++){
									var cl = "#" + checkedAgendaList[i].value;
									$(cl).show();
									}
									
									var faEllipsisEle = [];
									var i = 0;
									$(".fa-ellipsis-h").each(function(){
										faEllipsisEle[i] = $(this).parent().parent().parent().attr("id");
										i++;
									});
									
									$(".quBold").each(function(){
										var found = faEllipsisEle.indexOf($(this).parent().parent().attr("id"));
										// var found = $.inArray($(this).parent().parent(), faEllipsisEle);
										if(found > -1){
											$(this).parent().parent().show();
										}
									});

							}	
						});
						
						
								

					});
						
				</script>
		
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
    
    <footer style="display:block; text-align:center">
    	&copy; 2015 by EduRate
    </footer>

</body>

</html>
