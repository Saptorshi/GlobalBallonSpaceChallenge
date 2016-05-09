<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="Tab Styles Inspiration: A small collection of styles for tabs" />
	<meta name="keywords" content="tabs, inspiration, web design, css, modern, effects, svg" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/tabs.css" />
	<link rel="stylesheet" type="text/css" href="css/tabstyles.css" />
	<script src="js/modernizr.custom.js"></script>

	
	<title>TechnoTronics-Global Balloon Space Challenge</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Table css -->
	<script src="js/table.js"></script>
	<link rel="stylesheet" type="text/css" href="css/table.css" />

</head>
<body>
	<svg class="hidden">
		<defs>
			<path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
		</defs>
	</svg>
	<!-- <div class="container"> -->
		<section>
			<div class="tabs tabs-style-linemove">
				<nav>
					<ul>
						<li><a href="#section-linemove-1" class="icon icon-cloud"><span>Environment Parameters</span></a></li>
						<li><a href="#section-linemove-2" class="icon icon-box"><span>Location Parameters</span></a></li>
						<li><a href="#section-linemove-3" class="icon icon-display"><span>Mobility Parameters</span></a></li>
						<li><a href="#section-linemove-4" class="icon icon-upload"><span>Module Power Parameters</span></a></li>
					</ul>
				</nav>
				<div class="content-wrap">
					<section id="section-linemove-1" style = ""><?php include'env.php';?></section>
					<section id="section-linemove-2"><?php include'location.php';?></section>
					<section id="section-linemove-3"><?php include'mobility.php';?></section>
					<section id="section-linemove-4"><?php include'module.php';?></section>
				</div><!-- /content -->
			</div><!-- /tabs -->
		</section>

 	<!-- Contact Section -->
    <section >
            <img src="img/flatnature4.png" style="height:375px; width:100%;padding-bottom:0px; margin-bottom:-100px;">
    </section>
    

    <!-- Footer -->
    <?php include'footer.php';?>
    
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   


   <!-- Scripts Section -->
   <?php include 'scripts.php';?>

	
		
	<!-- </div>/container -->
	<script src="js/cbpFWTabs.js"></script>
	<script>
		(function() {

			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});

		})();
	</script>
</body>