<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Google I/O 2015</title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>

		<script src="website-script.js"></script>

		<link rel="stylesheet" type="text/css" href="website-style.css"/>

	</head>
	
	<body>
        <div class="h-container">	
		    <?php require 'pages/template/header.php';?>
		

		    <div class="container-fluid">
			
			    <div class="row">

				    <article class="col-sm-8">
					
					    <section class="row news">
                            <?php @ require_once ("pages/news/1.html"); ?>
					    </section>

					    <section class="row news">
                            <p>Story n2</p>
					    </section>

					    <section class="row news">
                            <p>Story n3</p>
					    </section>
					
					    <button type="button" class="btn btn-default btn-block" onClick="retrieveNews()"> Load more news</button>

				    </article>
				
				    <aside class="col-sm-4 responsive-news">
					    <!--Placeholder for the slick carousel inserted by the script-->
					
					    <div><h3>1</h3></div>
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

                <?php require 'pages/template/footer.php';?>
		
	    	</div>
        </div>

	</body>
</html>
