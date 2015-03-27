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
                <a class="navbar-brand" href="student_dashboard.php">Willkommen Herr Gichter</a>
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
            
			<div class="row" style="margin-bottom:2em; padding-top:1em; margin-left:2%">
                <div class="col-lg-3">
                    <h4 class="page-wrapper">Aktuelle Vorlesung: Datenbanktechnik</h1>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Kurs: WI376 (345 Studenten)</h1>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Raum: B354</h1>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Zeitraum: 9.00 Uhr - 12.15 Uhr</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="col-lg-6">
			
			<div class="row">
				<div class="col-lg-6">
                    <div class="bewertungcontainer1 panel panel-yellow" id="bewertung_container" style="overflow: hidden">
                        <div class="bewertung1 panel-heading" id="bewertung_header">
                            Detailbewertung: Einführung
                        </div>
                      <div class="panel-body">
                            <div style="width:100%; height:100%" id="chart_div"></div>
                            <div style="margin-left:3%" id="gesamtzahl">Gesamtanzahl: 253 Bewertungen</div>
                            <hr>
                            <div style="margin-left:3%"><b>Kommentare:</b></div><br>
                            <ul class="chat" style="margin-left:3%; margin-right:1%; padding-right:2%; height:200px !important; overflow:auto;">
                                <li class="left clearfix comment1" id="list1">
                                    
                                    <div class="chat-body clearfix">
                                        <div class="header" style="line-height:1">
                                            
                                                <fieldset class="ratingComment">
                                                    <input type="radio" id="ag5" name="ratingComment1" value="5" disabled="true"/><label for="ag5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment1" value="4" disabled="true"/><label for="ag4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment1" value="3" disabled="true"/><label for="ag3" title="Meh">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment1" value="2" checked="true" disabled="true"/><label for="ag2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment1" value="1" disabled="true"/><label for="ag1" title="Sucks big time">1 star</label>
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
                                                    <input type="radio" id="ag5" name="ratingComment2" value="5" checked="true" disabled="true"/><label for="ag5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment2" value="4" disabled="true"/><label for="ag4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment2" value="3" disabled="true"/><label for="ag3" title="Meh">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment2" value="2" disabled="true"/><label for="ag2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment2" value="1" disabled="true"/><label for="ag1" title="Sucks big time">1 star</label>
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
                                                    <input type="radio" id="ag5" name="ratingComment3" value="5" disabled="true"/><label for="ag5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment3" value="4" disabled="true"/><label for="ag4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment3" value="3" checked="true" disabled="true"/><label for="ag3" title="Meh">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment3" value="2" disabled="true"/><label for="ag2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment3" value="1" disabled="true"/><label for="ag1" title="Sucks big time">1 star</label>
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
                                                    <input type="radio" id="ag5" name="ratingComment4" value="5" disabled="true"/><label for="ag5" title="Rocks!">5 stars</label>
                                                    <input type="radio" id="ag4" name="ratingComment4" value="4" disabled="true"/><label for="ag4" title="Pretty good">4 stars</label>
                                                    <input type="radio" id="ag3" name="ratingComment4" value="3" disabled="true"/><label for="ag3" title="Meh">3 stars</label>
                                                    <input type="radio" id="ag2" name="ratingComment4" value="2" disabled="true"/><label for="ag2" title="Kinda bad">2 stars</label>
                                                    <input type="radio" id="ag1" name="ratingComment4" value="1" checked="true" disabled="true"/><label for="ag1" title="Sucks big time">1 star</label>
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
                      ['1 Stern', 37, 'color: #F44336'],
                      ['2 Sterne', 23, 'color: #F44336'],
                      ['3 Sterne', 55, 'color: #F44336'],
                      ['4 Sterne', 76, 'color: #F44336'],
                      ['5 Sterne', 62, 'color: #F44336']
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
					
					function agendaChange(position){
						
						switch(position){
						 case 1:
						 	agenda = 1;
							document.getElementById("bewertung_header").innerHTML="Detailbewertung: Einführung";
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
								  ['1 Stern', 37, 'color: #F44336'],
								  ['2 Sterne', 23, 'color: #F44336'],
								  ['3 Sterne', 55, 'color: #F44336'],
								  ['4 Sterne', 76, 'color: #F44336'],
								  ['5 Sterne', 62, 'color: #F44336']
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
							document.getElementById("bewertung_header").innerHTML="Detailbewertung: Weiterführung";
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
								  ['1 Stern', 10, 'color: #673AB7'],
								  ['2 Sterne', 17, 'color: #673AB7'],
								  ['3 Sterne', 88, 'color: #673AB7'],
								  ['4 Sterne', 34, 'color: #673AB7'],
								  ['5 Sterne', 49, 'color: #673AB7']
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
							document.getElementById("bewertung_header").innerHTML="Detailbewertung: Analyse";
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
								  ['1 Stern', 45, 'color: #2196F3'],
								  ['2 Sterne', 49, 'color: #2196F3'],
								  ['3 Sterne', 55, 'color: #2196F3'],
								  ['4 Sterne', 43, 'color: #2196F3'],
								  ['5 Sterne', 13, 'color: #2196F3']
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
							document.getElementById("bewertung_header").innerHTML="Bewertung: Fazit";
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
				
				<div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Agenda
                                    </div>
                                    <div class="panel-body" style="margin-bottom: -1 em; margin-top: -1 em">

                                      <button type="button" style="text-align:left; width: 100%" class="agenda1 btn btn-default btn-lg " onClick="agendaChange(1);">
                                      <span style="text-align:left;">1. Einführung</span>
                                      <span style="text-align:right;">
                                      	<fieldset class="ratingDoz">
                                            <input type="radio" id="ag5" name="ratingDoz" value="5" disabled="true"/><label for="ag5" title="Rocks!">5 stars</label>
                                            <input type="radio" id="ag4" name="ratingDoz" value="4" checked="true" disabled="true"/><label for="ag4" title="Pretty good">4 stars</label>
                                            <input type="radio" id="ag3" name="ratingDoz" value="3" disabled="true"/><label for="ag3" title="Meh">3 stars</label>
                                            <input type="radio" id="ag2" name="ratingDoz" value="2" disabled="true"/><label for="ag2" title="Kinda bad">2 stars</label>
                                            <input type="radio" id="ag1" name="ratingDoz" value="1" disabled="true"/><label for="ag1" title="Sucks big time">1 star</label>
										</fieldset>
                                        </span>
                                      </button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="agenda2 btn btn-default btn-lg" onclick="agendaChange(2);">
                                      <span style="text-align:left;">2. Weiterführung</span>
                                      <span style="text-align:right;">
                                      	<fieldset class="ratingDoz">
                                            <input type="radio" id="ag5" name="ratingDoz2" value="5" disabled="true"/><label for="ag5" title="Rocks!">5 stars</label>
                                            <input type="radio" id="ag4" name="ratingDoz2" value="4" disabled="true"/><label for="ag4" title="Pretty good">4 stars</label>
                                            <input type="radio" id="ag3" name="ratingDoz2" value="3" checked="true" disabled="true"/><label for="ag3" title="Meh">3 stars</label>
                                            <input type="radio" id="ag2" name="ratingDoz2" value="2" disabled="true"/><label for="ag2" title="Kinda bad">2 stars</label>
                                            <input type="radio" id="ag1" name="ratingDoz2" value="1" disabled="true"/><label for="ag1" title="Sucks big time">1 star</label>
										</fieldset>
                                        </span>
                                      </button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="agenda3 btn btn-default btn-lg" onclick="agendaChange(3);" >
                                      <span style="text-align:left;">3. Analyse</span>
                                      <span style="text-align:right;">
                                      	<fieldset class="ratingDoz">
                                            <input type="radio" id="ag5" name="ratingDoz3" value="5" disabled="true"/><label for="ag5" title="Rocks!">5 stars</label>
                                            <input type="radio" id="ag4" name="ratingDoz3" value="4" disabled="true"/><label for="ag4" title="Pretty good">4 stars</label>
                                            <input type="radio" id="ag3" name="ratingDoz3" value="3" disabled="true"/><label for="ag3" title="Meh">3 stars</label>
                                            <input type="radio" id="ag2" name="ratingDoz3" value="2" checked="true" disabled="true"/><label for="ag2" title="Kinda bad">2 stars</label>
                                            <input type="radio" id="ag1" name="ratingDoz3" value="1" disabled="true"/><label for="ag1" title="Sucks big time">1 star</label>
										</fieldset>
                                        </span>
                                      </button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="btn btn-lg btn-primary" onclick="agendaChange(4);" disabled="disabled">4. Fazit</button>


                                    </div>

                                </div>
                    <!-- /.col-lg-4 -->

                </div>
				
				
				</div>
				

                    <div class="panel panel-info">
                        <div class="panel-heading">
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
														<textarea name="Antwort auf Frage" cols="50" rows="5" placeholder="Es wurde noch keine Antwort gegeben..." readonly>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
														</textarea>
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
													<div class="checkerBoxer beantwortetButtonPositionierung">
														<input type="checkbox" value="None" id="squaredTwo" name="check" />
														<label class="haken" for="squaredTwo"><!-- <img src="/lampe_an.png" width="60" height="60" > --></label>
													</div>

													

													
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p style="font-size: 0.85em; opacity: .5; filter:Alpha(Opacity=50);">11. März 2015 um 11:20</p>
															<p style="font-size: 1.3em; font-weight:bold"> Weiterführung sinnvoll? </p>
														</div>
														<textarea name="user_eingabe" cols="50" rows="4" style="width:100%" placeholder="Es wurde noch keine Antwort gegeben..." readonly></textarea>
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
    
    <footer style="display:block; text-align:center">
    	&copy; 2015 by EduRate
    </footer>

</body>

</html>
