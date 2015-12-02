<!DOCTYPE html>
<html>

	<head>

		<title>Google I/O 2015 News</title>

        <link rel="shortcut icon" type="image/png" href="favicon.ico"/>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>

		<script src="website-script.js"></script>

		<link rel="stylesheet" type="text/css" href="website-style.css"/>

        <?php require_once "template/functions.php"?>

	</head>
	
	<body>
        <div class="h-container">	
		    <?php require 'template/header.php';?>

		    <div class="container-fluid">
			
			    <div class="row">

				    <article class="col-sm-8">
                        
                        <section class="row news">
                        <p>
                            <?php echoNews($_GET["idNews"]);?>
                        </p>
                        </section>

					
                       
                        <BR>

				    </article>
				
				    <aside class="col-sm-4 responsive-news">
					    <!--Placeholder for the slick carousel inserted by the script-->
					
                        <div>
                            <iframe width="200" height="90" src="https://www.youtube.com/embed/7V-fIGMDsmE" frameborder="0" allowfullscreen></iframe>
                        </div>

					    <div><h3>2</h3></div>
					    <div><h3>3</h3></div>
					    <div><h3>4</h3></div>
					    <div><h3>5</h3></div>
					    <div><h3>6</h3></div>
					    <div><h3>7</h3></div>
					    <div><h3>8</h3></div>
				    	<div><h3>9</h3></div>

				    </aside>

			    </div>

                <?php require 'template/footer.php';?>
		
	    	</div>
        </div>

	</body>
</html>
