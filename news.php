<!DOCTYPE html>
<html>

	<head>

		<title>Google I/O 2015 News</title>

        <?php require_once "template/dependencies.php" ?>

        <?php require_once "template/functions.php"?>

        <?php
            // Increment the visit count for this news page
            updateViewCountDB($_GET["idNews"]);
        ?>

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
