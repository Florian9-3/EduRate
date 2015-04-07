<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EduRate - Student</title>

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #B0BEC5 !important;">
            <div class="navbar-header">
                <a class="navbar-brand" href="student_dashboard.php" style="color: #000 !important">Willkommen Henny</a>
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
                    <h4 class="page-wrapper">Dozent: Prof. Dr. Reorg Gichter</h4>
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
            
            <script type="text/javascript">
				$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();   
				});
			</script>
			
			<div class="row">
            
            <div class="col-lg-6">
                                <div class="panel panel-info" style="border-color: #B0BEC5 !important;">
                                    <div class="panel-heading panelCustom" style="background-color: #B0BEC5 !important;">
                                        Agenda
                                    </div>
                                    <div class="panel-body" style="text-align: left; margin-bottom: -1 em; margin-top: -1 em">

                                      <button type="button" id="agenda1" style="width: 100% ; text-align: left" class="agenda1 btn btn-default btn-lg " onClick="agendaChange(1);">1. Einführung</button>
                                      <br><br>
                                      <button type="button" id="agenda2" style="width: 100% ; text-align: left" class="agenda2 btn btn-default btn-lg" onclick="agendaChange(2);">2. Weiterführung</button>
                                      <br><br>
                                      <button type="button" id="agenda3" style="width: 100% ; text-align: left" class="agenda3 btn btn-default btn-lg" onclick="agendaChange(3);" >3. Analyse</button>
                                      <br><br>
                                      <div data-toggle="tooltip" data-placement="right" title="Noch nicht behandelt">
                                      <button type="button" id="agenda5" style="width: 100% ; text-align: left" class="agendaDisabled btn btn-lg btn-primary" onclick="agendaChange(5);" disabled="disabled"
                                      >4. Fazit</button></div>


                                    </div>

                                </div>
                    <!-- /.col-lg-4 -->

                </div>
            
            
            
				<div class="col-lg-6">
                    <div class="bewertungcontainer1 panel panel-yellow" id="bewertung_container" style="overflow: hidden">
                        <div class="bewertung1 panel-heading" id="bewertung_header">
                            Bewertung: 1. Einführung
                        </div>
                      <div class="panel-body">
							<div class="col-lg-12" style="margin: 0 auto">
								<fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" onChange="ratingChange(5)"/><label for="star5" title="Rocks!">5 stars</label>
									<input type="radio" id="star4" name="rating" value="4" onChange="ratingChange(4)"/><label for="star4" title="Pretty good">4 stars</label>
									<input type="radio" id="star3" name="rating" value="3" onChange="ratingChange(3)"/><label for="star3" title="Meh">3 stars</label>
									<input type="radio" id="star2" name="rating" value="2" onChange="ratingChange(2)"/><label for="star2" title="Kinda bad">2 stars</label>
									<input type="radio" id="star1" name="rating" value="1" onChange="ratingChange(1)"/><label for="star1" title="Sucks big time">1 star</label>
								</fieldset>
							</div>
							
							<div class="col-lg-3 radios1" style="margin-top:0.3em">
                            <span title="Thema verstanden">
							  <input type="radio" name="like" value="1" id="v1" onChange="verstandenChange()"/> 
                              <label class="radio" for="v1" data-toggle="tooltip" data-placement="right" title="Thema verstanden"></label>
                             </span>
							</div>
							<div class="col-lg-3 radios2" style="margin-top:0.8em">
                            <span title="Thema nicht verstanden">
							  <input type="radio" name="like" value="0" id="v2" onChange="verstandenChange()" />
                              <label class="radio" for="v2" data-toggle="tooltip" data-placement="right" title="Thema nicht verstanden"></label>
                            </span>
							</div>
							<div class="col-lg-12" style="margin-top:0.5em">
								<div class="form-group input-group">
														<input type="text" class="form-control" id="kommentar" placeholder="Gib einen Kommentar ab" 
                                                        onkeydown="if (event.keyCode == 13) document.getElementById('sendButton').click()">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button" id="sendButton" onClick="sendComment()"><i class="fa fa-comment"></i>
															</button>
														</span>
								</div>
							</div>	
							
						</div>
					</div>
				</div>
				
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
					
					var classOld = "agenda1";
					
					function verstandenChange(){
						switch(agenda){
						case 1:
							if(document.getElementById("v1").checked)
								one_verstanden = 2;
							else
								one_verstanden = 1;
							break;
						case 2:
							if(document.getElementById("v1").checked)
								two_verstanden = 2;
							else
								two_verstanden = 1;
							break;
						case 3:
							if(document.getElementById("v1").checked)
								three_verstanden = 2;
							else
								three_verstanden = 1;
							break;	
						}
					}
					
					function ratingChange(value){
						switch(agenda){
							case 1:
								one_stars = value;
								break;
							case 2:
								two_stars = value;
								break;
							case 3:
								three_stars = value;
								break;
							default:
							break;
						}
					}

					function agendaChange(position){
						var agendaLabel;
						
						switch(position){
						 case 1:
							//Ändere Fragenzuweisung
							agendaLabel = document.getElementById("agendaLabel")
							agendaLabel.textContent = document.getElementById("agenda1").textContent;
							agendaLabel.setAttribute("value", "agenda1") ;
							agendaLabel.className= "agenda1Label quLabel";
							document.getElementById("quNewPanel").className = "panel panel-default agenda1Fragen";
							
							
						 	//Last agenda
							var comment = document.getElementById("kommentar").value;
							if((!comment == "") && !document.getElementById("kommentar").disabled){
								switch(agenda){
									case 1:
										one_comment = comment;
										break;
									case 2:
										two_comment = comment;
										break;
									case 3:
										three_comment = comment;
										break;
								}
							}
						 	agenda = 1;
							document.getElementById("bewertung_header").innerHTML= "Bewertung: " + document.getElementById("agenda1").textContent;
							document.getElementById("bewertung_header").className = "panel-heading bewertung1";
							document.getElementById("bewertung_container").className = "bewertungcontainer1 panel panel-yellow";
					
							
							
							verstanden_button = document.getElementById("v1");
							nichtverstanden_button = document.getElementById("v2");
							if(one_verstanden == 2)
								verstanden_button.checked = true;
							else if(one_verstanden == 1)
								nichtverstanden_button.checked = true;
							else{
								verstanden_button.checked = false;
								nichtverstanden_button.checked = false;
							}
							
							if((one_comment === 'undefined' || one_comment === null) && one_count > 30){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							else if(one_count<=30){
								document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+one_count+")";
								document.getElementById("kommentar").disabled = true;
								document.getElementById("sendButton").disabled = true;
							}
							else{
								document.getElementById("kommentar").value = one_comment;
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							switch(one_stars){
								case 1:
									radio_button = document.getElementById("star1");
									radio_button.checked = true;
									break;
								case 2:
									radio_button = document.getElementById("star2");
									radio_button.checked = true;
									break;
								case 3:
									radio_button = document.getElementById("star3");
									radio_button.checked = true;
									break;
								case 4:
									radio_button = document.getElementById("star4");
									radio_button.checked = true;
									break;
								case 5:
									radio_button = document.getElementById("star5");
									radio_button.checked = true;
									break;
								default:
									radio_button = document.getElementById("star5");
									radio_button.checked = false;
									radio_button = document.getElementById("star4");
									radio_button.checked = false;
									radio_button = document.getElementById("star3");
									radio_button.checked = false;
									radio_button = document.getElementById("star2");
									radio_button.checked = false;
									radio_button = document.getElementById("star1");
									radio_button.checked = false;
									break;
							}

							break;
						 case 2:
							//Ändere Fragenzuweisung
							agendaLabel = document.getElementById("agendaLabel")
							agendaLabel.textContent = document.getElementById("agenda2").textContent;
							agendaLabel.setAttribute("value", "agenda2") ;
							agendaLabel.className= "agenda2Label quLabel";
							document.getElementById("quNewPanel").className = "panel panel-default agenda2Fragen";

								
						 	//Last agenda
							var comment = document.getElementById("kommentar").value;
							if((!comment == "") && !document.getElementById("kommentar").disabled){
								switch(agenda){
									case 1:
										one_comment = comment;
										break;
									case 2:
										two_comment = comment;
										break;
									case 3:
										three_comment = comment;
										break;
								}
							}
						 	agenda = 2;
							document.getElementById("bewertung_header").innerHTML= "Bewertung: " + document.getElementById("agenda2").textContent;
							document.getElementById("bewertung_header").className = "panel-heading bewertung2";
							document.getElementById("bewertung_container").className = "bewertungcontainer2 panel panel-yellow";
							
							verstanden_button = document.getElementById("v1");
							nichtverstanden_button = document.getElementById("v2");
							if(two_verstanden == 2)
								verstanden_button.checked = true;
							else if(two_verstanden == 1)
								nichtverstanden_button.checked = true;
							else{
								verstanden_button.checked = false;
								nichtverstanden_button.checked = false;
							}
							
							if((two_comment === 'undefined' || two_comment === null) && two_count > 30){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							else if(two_count<=30){
								document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+two_count+")";
								document.getElementById("kommentar").disabled = true;
								document.getElementById("sendButton").disabled = true;
							}
							else{
								document.getElementById("kommentar").value = two_comment;
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							
							switch(two_stars){
								case 1:
									radio_button = document.getElementById("star1");
									radio_button.checked = true;
									break;
								case 2:
									radio_button = document.getElementById("star2");
									radio_button.checked = true;
									break;
								case 3:
									radio_button = document.getElementById("star3");
									radio_button.checked = true;
									break;
								case 4:
									radio_button = document.getElementById("star4");
									radio_button.checked = true;
									break;
								case 5:
									radio_button = document.getElementById("star5");
									radio_button.checked = true;
									break;
								default:
									radio_button = document.getElementById("star5");
									radio_button.checked = false;
									radio_button = document.getElementById("star4");
									radio_button.checked = false;
									radio_button = document.getElementById("star3");
									radio_button.checked = false;
									radio_button = document.getElementById("star2");
									radio_button.checked = false;
									radio_button = document.getElementById("star1");
									radio_button.checked = false;
									break;
							}
							break;
						 case 3:
							//Ändere Fragenzuweisung
							agendaLabel = document.getElementById("agendaLabel")
							agendaLabel.textContent = document.getElementById("agenda3").textContent;
							agendaLabel.setAttribute("value", "agenda3") ;
							agendaLabel.className= "agenda3Label quLabel";
							document.getElementById("quNewPanel").className = "panel panel-default agenda3Fragen";
							
						 	//Last agenda
							var comment = document.getElementById("kommentar").value;
							if((!comment == "") && !document.getElementById("kommentar").disabled){
								switch(agenda){
									case 1:
										one_comment = comment;
										break;
									case 2:
										two_comment = comment;
										break;
									case 3:
										three_comment = comment;
										break;
								}
							}
						 	agenda = 3;
							document.getElementById("bewertung_header").innerHTML= "Bewertung: " + document.getElementById("agenda3").textContent;
							document.getElementById("bewertung_header").className = "panel-heading bewertung3";
							document.getElementById("bewertung_container").className = "bewertungcontainer3 panel panel-yellow";
							
							verstanden_button = document.getElementById("v1");
							nichtverstanden_button = document.getElementById("v2");
							if(three_verstanden == 2)
								verstanden_button.checked = true;
							else if(three_verstanden == 1)
								nichtverstanden_button.checked = true;
							else{
								verstanden_button.checked = false;
								nichtverstanden_button.checked = false;
							}
							
							if((three_comment === 'undefined' || three_comment === null) && three_count > 30){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							else if(three_count<=30){
								document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+three_count+")";
								document.getElementById("kommentar").disabled = true;
								document.getElementById("sendButton").disabled = true;
							}
							else{
								document.getElementById("kommentar").value = three_comment;
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							switch(three_stars){
								case 1:
									radio_button = document.getElementById("star1");
									radio_button.checked = true;
									break;
								case 2:
									radio_button = document.getElementById("star2");
									radio_button.checked = true;
									break;
								case 3:
									radio_button = document.getElementById("star3");
									radio_button.checked = true;
									break;
								case 4:
									radio_button = document.getElementById("star4");
									radio_button.checked = true;
									break;
								case 5:
									radio_button = document.getElementById("star5");
									radio_button.checked = true;
									break;
								default:
									radio_button = document.getElementById("star5");
									radio_button.checked = false;
									radio_button = document.getElementById("star4");
									radio_button.checked = false;
									radio_button = document.getElementById("star3");
									radio_button.checked = false;
									radio_button = document.getElementById("star2");
									radio_button.checked = false;
									radio_button = document.getElementById("star1");
									radio_button.checked = false;
									break;
							}
							break;
						 case 4:

							document.getElementById("bewertung_header").innerHTML="Bewertung: Fazit";
							break;
						 }
						 
						 }
						 
					   function sendComment(){
						   var comment = document.getElementById("kommentar").value;
						   if(!comment == ""){
							   switch(agenda){
								case 1:
									one_count = 30;
									one_Counter = setInterval(oneCounter, 1000);
									document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+one_count+")";
									document.getElementById("kommentar").disabled = true;
									document.getElementById("sendButton").disabled = true;
									one_comment = null;
									break;
								case 2:
									two_count = 30;
									two_Counter = setInterval(twoCounter, 1000);
									document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+two_count+")";
									document.getElementById("kommentar").disabled = true;
									document.getElementById("sendButton").disabled = true;
									two_comment = null;
									break;
								case 3:
									three_count = 30;
									three_Counter = setInterval(threeCounter, 1000);
									document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+three_count+")";
									document.getElementById("kommentar").disabled = true;
									document.getElementById("sendButton").disabled = true;
									three_comment = null;
									break;
								default:
									break;   
							   }
						   }
						}
					
					function oneCounter(){
						one_count = one_count - 1;
						if(one_count <= 0){
							clearInterval(one_Counter);
							one_count = 40;
							if(agenda == 1){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							return;	
						}
						if(agenda == 1)
							document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+one_count+")";
					}
					
					function twoCounter(){
						two_count = two_count - 1;
						if(two_count <= 0){
							clearInterval(two_Counter);
							two_count = 40;
							if(agenda == 2){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							return;	
						}
						if(agenda == 2)
							document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+two_count+")";
					}
					
					function threeCounter(){
						three_count = three_count - 1;
						if(three_count <= 0){
							clearInterval(three_Counter);
							three_count = 40;
							if(agenda == 3){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							return;	
						}
						if(agenda == 3)
							document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+three_count+")";
					}
					
					
					
					DropzoneStudent.options.stmyDropzone = {
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
				

                    <div class="panel panel-info" style="border-color: #B0BEC5 !important;">
                        <div class="panel-heading panelCustom" style="background-color: #B0BEC5 !important;">
                            Vorlesungsinhalte
                        </div>
                        <div class="panel-body" style="margin-bottom: 0.5em; margin-top: 0.5em;">
							<div style="height: 200px; width: 100%; border: 2px dashed #0087F7; border-radius: 5px; background-color: white;">
								<form style="height: 100%; width: 100%" action="upload.php" class="dropzoneStud" id="stmy-Dropzone">
                                <span class="folder_empty" id="noFiles" >
                           	    	<img src="res/empty_folder.png"  height="70%" alt="" style="display:block; margin-left:auto; margin-right:auto; width:auto;"/>
                                 	<div style="text-align:center">Dieser Ordner ist leer <br> (Dateien werden vom Dozenten bereitgestellt) 
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
                    <div class="panel panel-default" style="overflow: hidden; border-color: #B0BEC5 !important;">
                        <div class="panel-heading" style="display:inline-block; width:100%; background-color: #B0BEC5 !important;">

						<div style="float:left; width:90%">
						
							<div style="display:inline-block; width:150px">
								Fragen
							</div>
							
							<div class="fa fa-search" >
							</div>
							
							<div style="display:inline-block; width: 350px;">
								<input class="form-control" type="text" id="search" placeholder="Suche nach Stichwort...">
							</div>
						
						</div>	

<!-- **********************************************************Filterfunktion Anfang*************************************************************** -->						
						<div class="nav navbar-top-links navbar-right in" style="width:10% display:inline-block">
							<label id="filterLabel" class="dropdown active">
								<div id="dropdownDivFilter" href="#dropItLikeItsHot" style="cursor:pointer" class="dropdown-toggle filter nav navbar-top-links in" onClick="toggleFilter()" role="button" aria-expanded="false">
									<label class="fa fa-filter" style="cursor:pointer"></label> Filter <span class="caret"></span>
								</div>
								
								<ul id="dropdownListFilter" class="dropdown-menu"role="menu">
								
								  <li class="dropdown-header">STATUS</li>
								  <li><input class="stFilter fi" href="#dropItLikeItsHot" type="checkbox" id="ug" value="quBold" style="margin-left:5px; cursor:pointer"><label for="ug" style="margin-left:2px; cursor:pointer">Ungelesen</label><br></li>
								  <li><input class="stFilter fi" href="#dropItLikeItsHot" type="checkbox" id="ub" value="fa-check" style="margin-left:5px; cursor:pointer"><label for="ub" style="margin-left:2px; cursor:pointer">Beantwortet</label><br></li>
								  <li class="divider"></li>
								  <li class="dropdown-header">AGENDA</li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda1Filter" value="pgagenda1" style="margin-left:5px; cursor:pointer" checked><label for="agenda1Filter" style="margin-left:2px; cursor:pointer">1. Einführung</label><br></li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda2Filter" value="pgagenda2" style="margin-left:5px; cursor:pointer" checked><label for="agenda2Filter" style="margin-left:2px; cursor:pointer">2. Weiterführung</label><br></li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda3Filter" value="pgagenda3" style="margin-left:5px; cursor:pointer" checked><label for="agenda3Filter" style="margin-left:2px; cursor:pointer">3. Analyse</label><br></li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda4Filter" value="pgagenda4" style="margin-left:5px; cursor:pointer" checked><label for="agenda4Filter" style="margin-left:2px; cursor:pointer">4. Aufgaben</label><br></li>
								  <li><input class="agFilter fi" href="#dropItLikeItsHot" type="checkbox" id="agenda5Filter" value="pgagenda5" style="margin-left:5px; cursor:pointer" checked><label for="agenda5Filter" style="margin-left:2px; cursor:pointer">5. Fazit</label><br></li>

								</ul>
							</label>
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
					<div id="quNewPanel" class="panel panel-default agenda1Fragen"style="margin: 20px 30px 30px 30px">
											
						<div style="margin: 20px 30px 30px 30px">
							<label id="quHeading" class="quLabel" style="display: inline-block; margin-bot:5px">Stelle eine Frage zum Thema:</label>
							<div style="display: inline-block; margin-bot:5px">
								<label id="agendaLabel" class="quLabel agenda1Label" value="agenda1">1. Einführung</label>
							</div>
						</div>

						
						<div class=" input-group" style="margin: 20px 30px 30px 30px" style="margin-top: 15px">
								<input type="text" class="form-control" id="quNew" placeholder="Stelle eine Frage">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" id="btnAddQuestion"><i class="fa fa-share"></i>
									</button>
								</span>
						</div>
					</div>

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
												<div id="antwort1" name="texterArea">Weil der Dozent passender zu der spezifischen Frage und vor allem passender zu seinem relevanten Stoff eine passende Antwort geben kann. Suchen bei Google können immer durch die nicht vorhandene Möglichkeit des expliziten Fragestellens sehr mühselig werden, bis man die für die Frage relevanten Informationen gefunden hat. </div>														
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
												<div id="antwort2" name="texterArea"></div>	
												
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
												<div id="antwort3" name="texterArea">Weil er so während der Vorlesung mehr Zeit hat seinen Stoff verständlich und interaktiv zu vermitteln. Außerdem kann er so die Informationen die er den Studenten bereitstellt mit weiteren Informationen oder Dateien versehen. Z.B. der kompletten Lösung einer Rechenaufgabe. 
												Hierbei kann er sich viel mehr Zeit nehmen, als er während der Vorlesung hätte. 
												</div>														
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
												<div id="antwort4" name="texterArea"></div>	
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
					
<!-- Setze gelesen-Status -->					
					$(".quBold").on("click", function() {					
						$(this).removeClass("quBold");		
					});

									
				</script>
               
				
				<script>
				
				
				   $(function() {
					   
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
							
							$("div[name='texterArea']").each(function(){
								var text = $(this).text().toLowerCase();
								if(text.indexOf(val) != -1)
								{
									$("div[name='texterArea']").removeHighlight();
									$("div[name='texterArea']").highlight(val);
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
									
									if(cl == ".fa-check"){
										$(".fa-check").each(function(){
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
									$(".fa-check").each(function(){
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
						
						
								

										
						
<!-- Frage hinzufügen -->
						var x = 5;
						
							$("#btnAddQuestion").on("click", function() {
							
							var quNew = document.getElementById("quNew").value;
							
							if(quNew == ""){
							}
							else{								
								div1 = document.createElement('div');
								div21 = document.createElement('div');
								div22 = document.createElement('div');
								div31 = document.createElement('div');
								div32 = document.createElement('div');
								div33 = document.createElement('div');
								div4 = document.createElement('div');
								p1 = document.createElement('p');
								p2 = document.createElement('p');
								
								<!-- Dynamische Zuordnung herstellen -->
								var agendaLabel = document.getElementById("agendaLabel");
								var id = agendaLabel.getAttribute("value");
								var hid = '#pg' + id;	
								
								<!-- Variable zur dynamischen Erstellung von IDs -->
								
								$(hid).prepend(div1);
								
								$(div1).addClass("panel panel-default hider");
								var quX = 'qu' + x;
								var hquX = '#qu' + x;
								$(div1).attr( 'id', quX);
								
									var collapseX = 'collapse' + x;
									var hcollapseX = '#collapse' + x;
										
									$(div21).appendTo($(hquX));	
									var div21X = 'div21' + x;
									var hdiv21X = '#div21' + x;
									$(div21).attr( 'id', div21X);			
									$(div21).attr( 'data-toggle', 'collapse');		
									$(div21).attr( 'data-parent', hid);		
									$(div21).attr( 'href', hcollapseX);
									$(div21).attr( 'aria-expanded', 'false');	
									$(div21).attr( 'aria-controls', collapseX);
									$(div21).addClass("panel-heading quOverflow").addClass(id);								
									
										
										$(div31).addClass("panel-title ellipsis fragePositionierung quBold")
											.appendTo($(hdiv21X));
										$(div31).html(quNew);
										var div31X = 'div31' + x;
										var hdiv31X = '#div31' + x;
										$(div31).attr( 'id', div31X);
											
										
									<!-- Status -->
										$(div32).addClass("checkerBoxer beantwortetButtonPositionierung")
											.appendTo($(hdiv21X));
										var div32X = 'div32' + x;
										var hdiv32X = '#div32' + x;
										$(div32).attr( 'id', div32X);
										$(div32).attr("data-toggle", "tooltip"); 
										$(div32).attr("data-placement", "left"); 
										$(div32).attr("data-original-title", ""); 
										 
																				
											$('<label />', { 
												'name': 'labeler', 
												class:'haken'  }).appendTo($(hdiv32X));
											
								<!-- Ausfahrender Body -->
									$(div22).addClass("panel-collapse collapse")
										.appendTo($(hquX));	
									$(div22).attr( 'id', collapseX);
										
										$(div33).addClass("panel-body")
											.appendTo($(hcollapseX));	
										var div33X = 'div33' + x;
										var hdiv33X = '#div33' + x;
										$(div33).attr( 'id', div33X);
										
											$(div4).appendTo($(hdiv33X));	
											var div4X = 'div4' + x;
											var hdiv4X = '#div4' + x;
											$(div4).attr( 'id', div4X);
											
											<!-- Datum der Frage -->
											var currentdate = new Date(); 
											
											var minutes = currentdate.getMinutes();
											if(minutes < 10){
												minutes = '0' + minutes;
											}
											
											var hours = currentdate.getHours();
											if(hours < 10){
												hours = '0' + hours;
											}
											
											var datetime = currentdate.getDate() + "/"
															+ (currentdate.getMonth()+1)  + "/" 
															+ currentdate.getFullYear() + " um "  
															+ hours + ":"  
															+ minutes;
											
												$(p1).addClass("frageDatum")
													.html(datetime)
													.appendTo($(hdiv4X));	
												var p1X = 'p1' + x;
												var hp1X = '#p1' + x;
												$(p1).attr( 'id', p1X);
												
											<!-- Frage Vollständig -->
												$(p2).addClass("frageVollständig")
													.html(quNew)
													.appendTo($(hdiv4X));	
												var p2X = 'p2' + x;
												var hp2X = '#p2' + x;
												$(p2).attr( 'id', p2X);
												 
												var antwortX = 'antwort' + x;
										<!-- Antwortfeld -->
											$('<div />', { 
												'id': antwortX,
												'name': 'texterArea'}).appendTo($(hdiv33X));
										
							<!-- BeantwortetStatus setzen -->
								setzeBeantwortetStatus();
								
							<!-- Erhöhe x um 1, damit die nächste Frage erneute dynamisch erzeugt werden kann  -->
								x = x +1;
								
							<!-- Lösche Eingabe aus Textfeld -->
								document.getElementById("quNew").value = "";
								
								$(".quBold").on("click", function() {					
									$(this).removeClass("quBold");		
								});
								
								$('[data-toggle="tooltip"]').tooltip();   
							}
							
							});
					});
						
				</script>
               
				
<!----------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------- Fragenbox ENDE ---------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------->
		

		
		
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   

   

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
