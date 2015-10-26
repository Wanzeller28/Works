
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Beyond Vision </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
		
		<style>
		
		
				.node {
	fill:#fff !important;
	opacity:0.8;
}

.link {
  stroke: #A98C3E;
  stroke-opacity: .4;
}  

.chart-1 svg{
    overflow: initial !important;
}

.chart-1{
margin-left: 55px;
    margin-top: 10px;
}

svg:not(:root){
    overflow: initial !important;
}
      
		
		html, body {
		height:100%;
		width:100%;
		}
		body{
		margin: 0px;
		overflow-x:hidden;
		overflow-y:scroll;
		}
		a{
		color:#0078ff;
		}
		p{
    margin: 0 10px 24px;
    }
		.navbar-default {
    background-color: transparent;
    border: 0px;
    }
    .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    background-color: transparent;
    color: #a98c3e;
    }	
    #navbar{		
    float: right;
    margin-right: 25px;
    margin-top: 15px;
    }
    
    .navbar-default .navbar-brand{
    color:#fff;
    margin-top: 1em;
    margin-left: 1em;
    }
    
    .navbar-default .navbar-nav>li>a {
    color:#a98c3e;
    }
    .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
    color: #fff;
    background-color: transparent;
    }
    
    .st0 {
    fill: #0B0F10 !important;
    opacity: 0.8;

    }
    
    /* Underline From Left */
		.hvr-underline-from-left {
		display: inline-block;
		vertical-align: middle;
		-webkit-transform: translateZ(0);
		transform: translateZ(0);
		box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
		-moz-osx-font-smoothing: grayscale;
		position: relative;
		overflow: hidden;
		}
		.hvr-underline-from-left:before {
		content: "";
		position: absolute;
		z-index: -1;
		left: 0;
		right: 100%;
		bottom: 10px;
		background: #a98c3e;
		height: 3px;
		-webkit-transition-property: right;
		transition-property: right;
		-webkit-transition-duration: 0.6s;
		transition-duration: 0.6s;
		-webkit-transition-timing-function: ease-out;
		transition-timing-function: ease-out;
		}
		.hvr-underline-from-left:hover:before, .hvr-underline-from-left:focus:before, .hvr-underline-from-left:active:before {
		right: 0;
		}

		section{
		position: relative;
		/*background-attachment:fixed;*/
		height: 100%;
		}
		
		canvas{
		/*position: fixed;*/
		top: 0em !important;
		}
		
    section .logos{
    width: 18%;
    padding-bottom: 1em;
    position: absolute;
    bottom: 0;
    right: 0.5em;
    z-index: 2;
    }
    section .arrow{
    padding-bottom: 1em;
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    margin-left: auto;
    margin-right: auto;
    }
    
		.header{
		position: absolute;
    left: 0;
    right: 0;
    color: #fff;
    text-align: center;
    top: 38%;
    font-family: 'Squada One', cursive;
    text-transform: uppercase;
    }
    .header h1{
    font-size:120px;
    }
  
	
		.panel{
		height: 100%;
		background-image:url("img/pattern.jpg");
		background-repeat:repeat;
		margin-bottom: 0;
		position: relative;
		border:0px;
		border-radius:0px;
		background-color:#082131;
		}
		
		.panel h1{
		text-align: right;
    color: #fff;
    font-size: 52px;
    font-weight: 300;
    padding-left: 5.5em;
    font-family: 'Squada One', cursive;
    text-transform: uppercase;
    }

		
		.lead{
		color: #E8E5E5;
    font-size: 16px;
    font-family: 'Raleway', sans-serif;
    z-index: 1;
		}
		
		#contacts{
		/*background-color: #1e292d;*/
		/*background-image: none;*/
		color:#fff;
		}
		#contacts form{
		padding: 0;
		}
		
		#contacts .form-control{
		border-radius:0px;
		}
		
		#contacts .input-group{
		width:100%;
		}
		
		#contacts #submit{
    width: 40%;
    background: #a98c3e;
    border:0px;
    border-radius: 0;
    }
    
    #contacts textarea {
    resize: none;
    }
    
    @media only screen and (max-width : 1199px) {
    
    .chart-1{
    
        margin-left: 5px;}
        
        #about h1 {

    padding-left: 3.9em;
      } 
    
    /* Medium Devices, Desktops */
    @media only screen and (max-width : 992px) {
    
  
    
 .main-text{
margin-top:0 !important;
padding-left: 0 !important;
margin-left: 0 !important;
}
    
    .chart{
    padding-left:0;
    }
		
		.line{
		padding-left: 0em !important;
		}
    
    }
    

    @media only screen and (max-width : 768px) {
    	.container{
    	padding-top: 5em;
    	}
    
        #services .main-text, #services .our-solutions{
margin-top:0 !important;
}
   #products .our-products, #products .main-content{
   margin-top:0 !important;
   } 
   
   .header h1 {
    font-size: 80px;
}
.header h2{
font-size: 35px;
}

    
    }
    /* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 480px) {
.header h1 {
    font-size: 55px;
}
.header h2{
font-size: 25px;
}
    }
  
    

    
		
		</style>
	</head>
	
	<body>
		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r71/three.js"></script>
		<script src="js/Projector.js"></script>
		<script src="js/CanvasRenderer.js"></script>
		<script src="js/main.js"></script>
	 	<script type='text/javascript' src='js/gen_validatorv31-min.js'></script>	

    
    
		
		<!-- Javascript -->
		<script src="js/smooth-scroll.js"></script>
		<script>
			smoothScroll.init();
		</script>
		

<?php

  require_once("./include/fgcontactform.php");

  $formproc = new FGContactForm();

  $formproc->SetFormRandomKey('CnRrspl1FyEylUj');

  /* contact form validations */
  if(isset($_POST['submitted']))
  {
    if($formproc->ProcessForm())
    {
      ?>
      <script>
      $(document).ready(function (){
        $('.alert-success').fadeIn();
        $('#name').val('');
        $('#email').val('');
        $('#message').val('');
        window.location.href = '#contacts';
        setTimeout( "jQuery('.alert').fadeOut();",2000 );
      });
      </script>
      <?php
    }else{
      ?>
      <script>
      $(document).ready(function (){
        $('.alert-danger').fadeIn();
        window.location.href = '#contacts';
        setTimeout( "jQuery('.alert').fadeOut();",2000 );
      });
      </script>
      <?php
    }
  }
?>


		<div class="header">
			<h1>Beyond Vision</h1>
			<h2 style="font-family:'Raleway', sans-serif;">Join The Future</h2>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
      	
        	<div class="navbar-header">
          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="#">Beyond Vision</a>
        	</div>

        	<div id="navbar" class="navbar-collapse collapse">
          	<ul class="nav navbar-nav">
            	<li class="active hvr-underline-from-left"><a data-scroll data-options='{ "easing": "linear","speed": 200}' href="#about">Mission</a></li>
            	<li class="hvr-underline-from-left"><a data-scroll data-options='{ "easing": "linear","speed": 200}' href="#services">Solutions</a></li>
            	<li class="hvr-underline-from-left"><a data-scroll data-options='{ "easing": "linear","speed": 200}' href="#products">Products</a></li>
            	<li class="hvr-underline-from-left"><a data-scroll data-options='{ "easing": "linear","speed": 200}' href="#contacts">Contacts</a></li>
          	</ul>
        	</div><!--/.nav-collapse -->
      	
    	</nav>
    </div><!-- /.header -->
    
		<div id="about" class="panel">
			<canvas id="myCanvas" style="position: absolute;background-color: #1e5c6f;width: 115%;-ms-transform: rotate(-6deg);-webkit-transform: rotate(-6deg);transform: rotate(-6deg);overflow-x: hidden;height: 85%;top: 4.55em;left: -3em;z-index:1;opacity: 0.5;"></canvas>
     	<canvas id="myCanvas" style="position: absolute;background-color: #1e5c6f;width: 115%;-ms-transform: rotate(6deg);-webkit-transform: rotate(6deg);transform: rotate(6deg);overflow-x: hidden;height: 85%;left: -3em;z-index:1;opacity: 0.1;top: 38.55em;"></canvas>
			<div class="container" style="z-index: 1;position: relative;">
      	
      	<div class="col-md-4 col-sm-12 chart" style="margin-top: 10em;">
        	<div class="chart-1"></div>
        		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 298.6 306.4" style="enable-background:new 0 0 298.6 306.4;width: 120%;top: -1em;position: absolute;z-index: -1;opacity: 0.4;" xml:space="preserve">
        			<style type="text/css">.Arched_x0020_Green{fill:url(#SVGID_1_);stroke:#FFFFFF;stroke-width:0.25;stroke-miterlimit:1;}.st0{fill:#122F39;}</style>
        			<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-144" y1="612.835" x2="-143.2929" y2="612.1279">
        				<stop offset="0" style="stop-color:#20AC4B"/>
        				<stop offset="0.9831" style="stop-color:#19361A"/>
        			</linearGradient>
        			<g>
        				<path class="st0" d="M149.8,85.7c0.1,3.9,0.1,8.1,0.2,12.4c0,4.2,0.1,8.5,0.1,13l0,0c23.5,0.8,42.4,20,42.9,43.6   c-1.7,0-3.4,0-5.2-0.1c-2.2,0-4.5,0-6.8,0c-0.5-16.9-14-30.7-30.8-31.5c0,4.1,0.1,8.3,0.1,12.5c0,3.7,0,7.4,0,11.1   c-0.6-0.1-1.1-0.2-1.7-0.2c-0.4,0-0.8,0-1.2,0.1c0-3.7,0-7.4,0-11c0-4.2,0-8.4,0.1-12.6c0-2.3,0-4.6,0.1-6.8c0-1.7,0-3.4,0.1-5.1   c0-4.5,0.1-8.8,0.1-12.9c0.1-4.3,0.1-8.5,0.2-12.4C109.9,86,79.1,117,78.8,155c3.9-0.1,8-0.1,12.2-0.2c4.2,0,8.6-0.1,13.1-0.1l0,0   c0.4-23.8,19.6-43.1,43.4-43.6c0,1.7,0,3.4-0.1,5.1c0,2.2,0,4.5-0.1,6.8c-17.1,0.6-30.9,14.4-31.3,31.5c4.1,0,8.2-0.1,12.4-0.1   c3.7,0,7.4,0,11.2,0c0,0.3-0.1,0.7-0.1,1c0,0,0,0,0,0c0-0.3,0-0.7,0.1-1c0.5-4.1,3.6-7.3,7.7-7.9c0.4,0,0.8-0.1,1.2-0.1   c0.6,0,1.2,0.1,1.7,0.2c3.8,0.7,6.7,3.9,7.2,7.8l0,0c3.7,0,7.3,0,11,0c4.2,0,8.4,0,12.6,0.1c2.3,0,4.5,0,6.8,0.1   c1.7,0,3.5,0,5.2,0.1c4.4,0,8.8,0.1,12.9,0.1c4.3,0,8.5,0.1,12.5,0.2C218.1,117.1,187.6,86.3,149.8,85.7z"/>
        				<path class="st0" d="M148.6,164.4c-0.4,0-0.8,0-1.2-0.1C147.8,164.4,148.2,164.4,148.6,164.4L148.6,164.4z"/>
        				<path class="st0" d="M148.5,23.4c-73,0-132.1,59.2-132.1,132.1c0,73,59.2,132.1,132.1,132.1c73,0,132.1-59.2,132.1-132.1   C280.6,82.6,221.5,23.4,148.5,23.4z M246.4,156.2c-2.8,0.1-6.2,0.2-10.1,0.3l0,0c-0.5,47.6-39.2,86.2-86.8,86.7c0-0.1,0-0.2,0-0.3   c0.1-4.1,0.2-8.7,0.3-13.7c0-1.3,0-2.6,0.1-4c37.5-0.6,67.8-30.9,68.6-68.4h0c-3.9,0.1-8.1,0.1-12.4,0.2c-4.2,0-8.5,0.1-13,0.1l0,0   c-0.9,23.2-19.6,41.8-42.8,42.6c0-1.6,0-3.2,0.1-4.9c0,1.6,0,3.3-0.1,4.9c-0.1,4.5-0.1,8.9-0.1,13.1c0,4.3-0.1,8.4-0.2,12.2   c0,1.3,0,2.7-0.1,4c-0.1,5-0.2,9.6-0.3,13.7c0,0.1,0,0.2,0,0.3c-0.1,4-0.2,7.4-0.3,10.3c-0.1,2.9-0.2,5.2-0.2,6.8   c-0.1,1.6-0.1,2.4-0.1,2.4s0-0.8-0.1-2.4c0-1.6-0.1-3.9-0.2-6.8c-0.1-2.9-0.2-6.3-0.3-10.3l0,0c-47.9-0.2-86.8-38.9-87.4-86.7   c4.1,0.1,8.8,0.2,13.9,0.3c1.3,0,2.6,0,4,0.1c0.7,37.6,31.4,68,69.1,68.4c-0.1-3.9-0.1-8-0.2-12.3c0-4.2-0.1-8.6-0.1-13.1l0,0   c-23.5-0.5-42.5-19.3-43.4-42.7c1.6,0,3.3,0,4.9,0.1c2.3,0,4.7,0,7,0c0.9,16.7,14.5,30,31.3,30.6c0-4.1-0.1-8.2-0.1-12.4   c0-3.7,0-7.4,0-11.2c-3.7-0.5-6.7-3.3-7.5-6.9c0,0,0,0,0,0c-3.8,0-7.6,0-11.3,0c-4.2,0-8.3,0-12.3-0.1c-2.4,0-4.7,0-7,0   c-1.7,0-3.3,0-4.9-0.1c-4.5-0.1-8.9-0.1-13.2-0.1c-4.3-0.1-8.4-0.1-12.2-0.2c-1.3,0-2.7,0-4-0.1c-5.1-0.1-9.8-0.2-13.9-0.3   c-4-0.1-7.4-0.2-10.3-0.3c-2.9-0.1-5.2-0.2-6.8-0.2c-1.6-0.1-2.4-0.1-2.4-0.1s0.8,0,2.4-0.1c1.6,0,3.9-0.1,6.8-0.2   c2.9-0.1,6.3-0.2,10.3-0.3c0,0,0,0,0,0c0-48.2,39.2-87.4,87.4-87.6c0,0.1,0,0.2,0,0.3c0-0.1,0-0.2,0-0.3c0.1-3.9,0.2-7.3,0.2-10.1   c0.1-2.9,0.2-5.2,0.2-6.8c0.1-1.6,0.1-2.4,0.1-2.4s0,0.8,0.1,2.4c0,1.6,0.1,3.9,0.2,6.8c0.1,2.8,0.2,6.2,0.3,10.1c0,0,0,0,0,0   c47.9,0.4,86.8,39.6,86.9,87.6c3.9,0.1,7.3,0.2,10.1,0.3c2.9,0.1,5.2,0.2,6.8,0.2c1.6,0.1,2.4,0.1,2.4,0.1s-0.8,0-2.4,0.1   C251.6,156.1,249.3,156.2,246.4,156.2z"/>
        				<path class="st0" d="M150.3,164.2L150.3,164.2c0,3.8,0,7.6,0,11.3c0,4.2,0,8.3-0.1,12.4c0,2.3,0,4.7-0.1,6.9c0-2.3,0-4.6,0.1-6.9   c16.5-0.8,29.8-14.1,30.8-30.6c-4.1,0-8.3,0.1-12.5,0.1c-3.7,0-7.4,0-11.1,0l0,0C156.6,160.8,153.8,163.6,150.3,164.2z"/>
        			</g>
        		</svg>
        		
        		<h1 class="title">Mission</h1>
        		<svg width="100" height="1" class="line" style="float: right;padding-left: 5.4em;">
							<rect width="100" height="1" style="fill:rgb(255,255,255);" />
						</svg>
        </div>
        
        <div class="lead col-md-4 col-sm-12 main-text" style="margin-top: 10em;padding-left: 3em;margin-left: 4em;">
        	<p>
        	Beyond Vision was established in 2013 to operate in the businesses of continuous monitoring 
        	and tracking of goods and people, as well as in the area of industrial control and in augmented reality applications, 
        	relying on the existing expertise inside the business group it belongs, particularly focused on low power/cost electronic
        	systems design, besides conventional automation and control in the development of autonomous mobile devices for augmented
        	reality targeting industrial environments.</p>
        </div>
        
        <div class="lead col-md-4 col-sm-12 main-text" style="margin-top: 10em;padding-left: 4em;margin-left: -4em;">
        	<p>Although our brief existence, Beyond Vision’s associates and working team has many years of experience in the development
        	of complex solutions, both HW and SW, namely from the activities and projects carried out within the mother company of 
        	the business group, PDMFC, over the past ten years.
      		Our main goal is to achieve the total satisfaction of our customers and partners. Total commitment to innovative and ambitious 
      		solutions is our driving force.
        	</p>
        </div>
    	</div><!-- /.container -->
    </div>
 


    <div id="services" class="panel">
    	<canvas id="myCanvas" style="position: absolute;background-color: #1e5c6f;width: 115%;-ms-transform: rotate(-6deg);-webkit-transform: rotate(-6deg);transform: rotate(-6deg);overflow-x: hidden;height: 85%;top: 4.55em;left: -3em;z-index:1;opacity: 0.5;"></canvas>
     	<canvas id="myCanvas" style="position: absolute;background-color: #1e5c6f;width: 115%;-ms-transform: rotate(6deg);-webkit-transform: rotate(6deg);transform: rotate(6deg);overflow-x: hidden;height: 85%;left: -3em;z-index:1;opacity: 0.1;top: 38.55em;"></canvas>
    	
    	<div class="container">
    	
    		<div class="lead col-md-4 col-sm-6 col-xs-6 main-text" style="margin-top: 10em;padding: 0;">
        	<p>Our services and solutions derive from the vast experience and background knowledge in digital/analogue hardware design and implementation, embedded systems software implementation, monitoring, automation and control systems, development and quality processes, and generic systems engineering. With a growing activity, Beyond Vision is involved in mobile (3G, HSDPA, LTE, and Wi-Fi standards) systems, and is particularly involved in the nano electronics domain, developing Power Amplifiers for Reconfigurable Transceivers.
        	Beyond Vision proud itself of being involved in many touch areas, with the most prominent in the fields of:
        	</p> 
        </div>
    	
    		<div class="col-md-2 col-sm-2 col-xs-6 our-solutions" style="color: #fff;font-size: 23px;margin-top: 13em;font-weight: 500;padding-left: 2em;text-decoration: underline;list-style-type: none;z-index: 1;">
    			<li>Energy</li>
         	<li>eHealth</li>
         	<li>Logistics</li>
         	<li>Transportation</li>
         	<li>Production Processes</li>
    		</div>

				<div class="col-md-4 col-md-offset-1 col-sm-4 col-xs-4" style="z-index: 1;margin-top: 10em;">
					<div class="chart-1"></div>				
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1005 1031.2" style="enable-background:new 0 0 1005 1031.2;width: 120%;top: -1em;position: absolute;z-index: -1;opacity: 0.7;" xml:space="preserve">
					<style type="text/css">.Arched_x0020_Green{fill:url(#SVGID_1_);stroke:#FFFFFF;stroke-width:0.25;stroke-miterlimit:1;}.st1{fill:#122F39;}</style>
					<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-144" y1="849.8896" x2="-143.2929" y2="849.1825">
						<stop offset="0" style="stop-color:#20AC4B"/>
						<stop offset="0.9831" style="stop-color:#19361A"/>
					</linearGradient>
					<path class="st1" d="M466.6,53.8c-162.2,0-298.4,102.9-327.3,240.9c-13.1,60.3-2.1,113.2,15.1,163c17.3,49.9,40.6,97.2,54.6,149.5  c13.6,50.9,10.4,136.6,2.8,208.1c-7.5,71.5-18.9,129.3-18.9,129.3c-1.6,7.9,3.5,15.5,11.4,17.1c1,0.2,2.1,0.3,3.1,0.3h330.5  c8,0,14.5-6.5,14.5-14.5c0-4.3-1.8-8.3-5.1-11.1c-3.2-2.7-6.8-10-7.6-24.6c-0.8-14.6,1.2-34.9,5.4-59.9c3.6-22,10.7-27.5,20.5-31.2  c9.8-3.7,24.7-3.1,39.7-2.8c26.6,0.5,40.2,7.5,83.6,14.5c23.9,3.9,42.7-1.4,52.7-14.5c10-13.1,9.4-28.5,7.2-41  c-1.2-6.9,0.1-19.6,4.1-28.7c4-9.1,8.9-13.6,15.8-14.2c17.6-1.6,31.8-12.8,36.3-27.4c4.5-14.6,1-30.3-6.9-44.8c-4-7.3-3-14,0.9-21.4  c4-7.4,11.9-14.1,16.7-16.1c9.1-3.8,17.4-7.5,24.9-13.2c7.5-5.8,13.5-14,17.3-24c4.1-10.7-0.2-20-4.7-27.1  c-4.5-7.1-10.4-13.7-17-20.5c-13.2-13.7-29.1-28.6-39.4-41.6c-1.8-2.3-6.1-14.6-6.9-30.6c-0.9-15.7,0-34.8,1.6-52.7  c5.4-21.1,8.5-43,8.5-65.6C799.9,185.1,649.5,53.8,466.6,53.8z M453.4,102.6c121.9,0,233.5,86.7,262.7,208.8  C744.4,430,690,555.1,586.4,618.3c-5.6,4.1-13.5,2.9-17.7-2.7c-4.1-5.6-2.9-13.5,2.7-17.7c0.5-0.4,1.1-0.7,1.7-1  c94.1-57.4,144-171.9,118.3-279.4c-30.8-128.6-163.1-214.1-292.6-182.9c-120.3,29-200.1,152.9-170.6,274  C255.5,520.6,371,594.9,484,567.2c104-25.6,173-132.9,147-237.8C607,233.3,507.7,169.4,410.8,193.8  c-88.4,22.2-146.9,114-124.3,203.1c20.6,80.8,104.6,134.2,186.1,113.2c73.3-18.9,121.9-95.4,102.5-169.3  c-17.3-66-86.6-109.6-153.3-91.8c-58.9,15.8-97.9,77.4-81.7,136.9c14.2,52,69.2,86.6,121.7,71.9c45.3-12.7,75-60.9,61.8-106.6  c-11.2-38.8-52.4-64.3-91.4-52.7c-32.6,9.7-54,44.5-43.8,77.3c8.2,26.5,37.1,44,63.7,35.3c20.8-6.8,34.3-29.5,27.1-50.1  c-5.4-15.3-22.5-25.6-37.5-19.9c-10.2,3.9-17.1,15.6-12.9,25.2c0.6,1.3,1.5,2.7,2.5,3.8c-1-2.3-0.9-4.2-0.9-5.7c0-2.1,0.2-3.5,0.6-5  c0.4-1.5,0.6-2.9,2.8-5.7c4.9-6.2,13.7-7.5,19.2-6c5.5,1.5,9.8,4.5,12.9,9.1c5,7.4,4.9,16.8,2.2,23.6c-2.7,6.9-7.6,12.1-14.2,15.5  c-9.7,4.9-20.8,4.3-29.3,0.3c-8.6-4-15.5-11-19.2-19.9c-10.4-24.3,4.5-50.4,27.1-59c29.5-11.2,60.9,7.1,70.6,35  c12.2,35-10,71.7-43.5,82.6c-40.9,13.4-83.3-12.3-95.6-51.7c-14.6-46.9,15.3-95.5,60.9-109.1c53.3-15.9,108,18.1,123,70  c17.2,59.8-21,121.5-79.5,137.8c-66.6,18.6-134.8-24.4-152.6-89.6c-20.1-73.6,27.5-148.8,99.7-168.1c80.7-21.6,163,30.8,183.9,110.1  c23.1,88-33.9,177.9-120.5,200.3c-95.5,24.7-193-37.7-217-131.8c-26.2-103.1,40.8-208.1,142.5-233.7  c110.9-27.9,223.8,44.7,251,154.2c29.5,118.9-48.1,239.5-165.6,268.4C363,623,234.1,540,203.6,414.5c-2.1-8.4-3.6-16.8-4.7-25.2  C182,262.8,267.5,140.1,392.8,109.9C413,105,433.4,102.7,453.4,102.6z"/>
					</svg>
					
					<h1 class="title" style="padding-left: 0em;">Solutions</h1>
					<svg width="100" height="1" style="float: right;">
						<rect width="100" height="1" style="fill:rgb(255,255,255);" />
					</svg>
				</div>
				
    	</div><!-- /.container -->
    </div>
    
    
    
    
    
    
    
    
    
    <div id="products" class="panel">
    	<canvas id="myCanvas" style="position: absolute;background-color: #1e5c6f;width: 115%;-ms-transform: rotate(-6deg);-webkit-transform: rotate(-6deg);transform: rotate(-6deg);overflow-x: hidden;height: 85%;top: 4.55em;left: -3em;z-index:1;opacity: 0.5;"></canvas>
     	<canvas id="myCanvas" style="position: absolute;background-color: #1e5c6f;width: 115%;-ms-transform: rotate(6deg);-webkit-transform: rotate(6deg);transform: rotate(6deg);overflow-x: hidden;height: 85%;left: -3em;z-index:1;opacity: 0.1;top: 38.55em;"></canvas>
    	
    	<div class="container">
    	
    		<div class="lead col-md-4 col-sm-4 col-xs-6 main-text" style="margin-top: 10em;padding: 0;">
    		
    			<div class="chart-1"></div>				
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 1005 1031.2" style="enable-background:new 0 0 1005 1031.2;width: 120%;top: -1em;position: absolute;z-index: -1;opacity: 0.7;" xml:space="preserve">
					<style type="text/css">.Arched_x0020_Green{fill:url(#SVGID_1_);stroke:#FFFFFF;stroke-width:0.25;stroke-miterlimit:1;}.st1{fill:#122F39;}</style>
					<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-144" y1="849.8896" x2="-143.2929" y2="849.1825">
						<stop offset="0" style="stop-color:#20AC4B"/>
						<stop offset="0.9831" style="stop-color:#19361A"/>
					</linearGradient>
					<path class="st1" d="M466.6,53.8c-162.2,0-298.4,102.9-327.3,240.9c-13.1,60.3-2.1,113.2,15.1,163c17.3,49.9,40.6,97.2,54.6,149.5  c13.6,50.9,10.4,136.6,2.8,208.1c-7.5,71.5-18.9,129.3-18.9,129.3c-1.6,7.9,3.5,15.5,11.4,17.1c1,0.2,2.1,0.3,3.1,0.3h330.5  c8,0,14.5-6.5,14.5-14.5c0-4.3-1.8-8.3-5.1-11.1c-3.2-2.7-6.8-10-7.6-24.6c-0.8-14.6,1.2-34.9,5.4-59.9c3.6-22,10.7-27.5,20.5-31.2  c9.8-3.7,24.7-3.1,39.7-2.8c26.6,0.5,40.2,7.5,83.6,14.5c23.9,3.9,42.7-1.4,52.7-14.5c10-13.1,9.4-28.5,7.2-41  c-1.2-6.9,0.1-19.6,4.1-28.7c4-9.1,8.9-13.6,15.8-14.2c17.6-1.6,31.8-12.8,36.3-27.4c4.5-14.6,1-30.3-6.9-44.8c-4-7.3-3-14,0.9-21.4  c4-7.4,11.9-14.1,16.7-16.1c9.1-3.8,17.4-7.5,24.9-13.2c7.5-5.8,13.5-14,17.3-24c4.1-10.7-0.2-20-4.7-27.1  c-4.5-7.1-10.4-13.7-17-20.5c-13.2-13.7-29.1-28.6-39.4-41.6c-1.8-2.3-6.1-14.6-6.9-30.6c-0.9-15.7,0-34.8,1.6-52.7  c5.4-21.1,8.5-43,8.5-65.6C799.9,185.1,649.5,53.8,466.6,53.8z M453.4,102.6c121.9,0,233.5,86.7,262.7,208.8  C744.4,430,690,555.1,586.4,618.3c-5.6,4.1-13.5,2.9-17.7-2.7c-4.1-5.6-2.9-13.5,2.7-17.7c0.5-0.4,1.1-0.7,1.7-1  c94.1-57.4,144-171.9,118.3-279.4c-30.8-128.6-163.1-214.1-292.6-182.9c-120.3,29-200.1,152.9-170.6,274  C255.5,520.6,371,594.9,484,567.2c104-25.6,173-132.9,147-237.8C607,233.3,507.7,169.4,410.8,193.8  c-88.4,22.2-146.9,114-124.3,203.1c20.6,80.8,104.6,134.2,186.1,113.2c73.3-18.9,121.9-95.4,102.5-169.3  c-17.3-66-86.6-109.6-153.3-91.8c-58.9,15.8-97.9,77.4-81.7,136.9c14.2,52,69.2,86.6,121.7,71.9c45.3-12.7,75-60.9,61.8-106.6  c-11.2-38.8-52.4-64.3-91.4-52.7c-32.6,9.7-54,44.5-43.8,77.3c8.2,26.5,37.1,44,63.7,35.3c20.8-6.8,34.3-29.5,27.1-50.1  c-5.4-15.3-22.5-25.6-37.5-19.9c-10.2,3.9-17.1,15.6-12.9,25.2c0.6,1.3,1.5,2.7,2.5,3.8c-1-2.3-0.9-4.2-0.9-5.7c0-2.1,0.2-3.5,0.6-5  c0.4-1.5,0.6-2.9,2.8-5.7c4.9-6.2,13.7-7.5,19.2-6c5.5,1.5,9.8,4.5,12.9,9.1c5,7.4,4.9,16.8,2.2,23.6c-2.7,6.9-7.6,12.1-14.2,15.5  c-9.7,4.9-20.8,4.3-29.3,0.3c-8.6-4-15.5-11-19.2-19.9c-10.4-24.3,4.5-50.4,27.1-59c29.5-11.2,60.9,7.1,70.6,35  c12.2,35-10,71.7-43.5,82.6c-40.9,13.4-83.3-12.3-95.6-51.7c-14.6-46.9,15.3-95.5,60.9-109.1c53.3-15.9,108,18.1,123,70  c17.2,59.8-21,121.5-79.5,137.8c-66.6,18.6-134.8-24.4-152.6-89.6c-20.1-73.6,27.5-148.8,99.7-168.1c80.7-21.6,163,30.8,183.9,110.1  c23.1,88-33.9,177.9-120.5,200.3c-95.5,24.7-193-37.7-217-131.8c-26.2-103.1,40.8-208.1,142.5-233.7  c110.9-27.9,223.8,44.7,251,154.2c29.5,118.9-48.1,239.5-165.6,268.4C363,623,234.1,540,203.6,414.5c-2.1-8.4-3.6-16.8-4.7-25.2  C182,262.8,267.5,140.1,392.8,109.9C413,105,433.4,102.7,453.4,102.6z"/>
					</svg>
					
					<h1 class="title" style="padding-left: 0em;">Products</h1>
					<svg width="100" height="1" style="float: right;">
						<rect width="100" height="1" style="fill:rgb(255,255,255);" />
					</svg>
        	
        </div>
    	
    	

				<div class="col-md-6 col-md-offset-2 col-sm-offset-1 col-sm-4 col-xs-4" style="z-index: 1;margin-top: 6em; 
				color: #fff;

    font-weight: 500;
    padding-left: 2em;
    text-decoration: underline;
    list-style-type: none;

    font-size:29px;

				">
					
					<li>Energy</li>
         	<li>eHealth</li>
         	<li>Logistics</li>
         	<li>Transportation</li>
         	<li>Production Processes</li>
					
					
				</div>
				
    	</div><!-- /.container -->
    </div>
    
    
    
    
    
    
    
   


    
    
    
    
    
   
    
    
    
    
    <div id="contacts" class="panel" style="padding-top:10em;">
    	<div class="container">
    		
        <div class="alert alert-success" role="alert" style="display:none">Your message has been successfully sent!</div>
        <div class="alert alert-danger" role="alert" style="display:none"><?php echo $formproc->GetErrorMessage(); ?></div> 
        
        <form name="contact" id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
        	<input type='hidden' name='submitted' id='submitted' value='1'>
          <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'>
          <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>'>

          <div class="form-group">
          	<label for="InputName">Your Name</label>
            <div class="input-group">
							<input type="text" name="name" id="name" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" class="form-control" placeholder="Enter Name" required>
              <span id='contactus_name_errorloc' class='error'></span>
            </div>
          </div>
          <div class="form-group">
          	<label for="InputEmail">Your Email</label>
            <div class="input-group">
							<input type="text" name="email" id="email" value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" class="form-control" placeholder="Enter Email" required>
              <span id='contactus_email_errorloc' class='error'></span>
            </div>
          </div>

          <div class="form-group">
          	<label for="InputMessage">Message</label>
            <div class="input-group">
            	<textarea rows="13" name="message" id="message" class="input-block-leveli form-control" required placeholder="Comments"><?php echo $formproc->SafeDisplay('message') ?></textarea>
            </div>
          </div>
          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
        </form>

        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" id="office">          
          <h2>Europe Office </h2>
          <p>Rua Fradesso da Silveira</p>
          <p>n. 4, Piso 1 B</p>
          <p>1300-609 Lisboa, Portugal</p>       
        	<h1 style="    padding: 0;">Contacts</h1>
        	<svg width="100" height="1" style="float: right;">
						<rect width="100" height="1" style="fill:rgb(255,255,255);" />
					</svg>
        </div>
        
    	</div><!-- /.container -->
    </div>
    
    
    <script>
    
    	var width = 350,
    height = 350;

var color = d3.scale.category20();

var force = d3.layout.force()
    .charge(-70)
    .linkDistance(80)
    .size([width, height]);

var svg = d3.selectAll(".chart-1").append("svg")
    .attr("width", width)
    .attr("height", height);

d3.json("main.json", function(error, graph) {
  if (error) throw error;

  force
      .nodes(graph.nodes)
      .links(graph.links)
      .start();

  var link = svg.selectAll(".link")
      .data(graph.links)
    	.enter().append("line")
      .attr("class", "link")
      .style("stroke-width", function(d) { return Math.sqrt(d.value); });
      

  var node = svg.selectAll(".node")
      .data(graph.nodes)
    	.enter().append("circle")
      .attr("class", "node")
      .attr("r", 3)
      .style("fill", function(d) { return color(d.group); })
      .call(force.drag);

  

  force.on("tick", function() {
    link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node.attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; });
  });
});
    
    	$(".arrow").on("click",function(){
    		$("html, body").animate({
    			scrollTop: $('#about').offset().top
    		}, 	600);
    	});
    	
    	$( window ).scroll(function() {
    		$('.navbar-default').css('background-image', 'url("img/pattern.jpg")');
    	
    	});
    	
    
    	  if ($(window).width() < 992) {
    	    $( ".chart-1" ).remove();
    	  }
    
    	
    </script>
    
    
   
   
    
    
    
		
	</body>
</html>
