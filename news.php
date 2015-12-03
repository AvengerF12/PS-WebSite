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
				
				    <aside class="col-sm-4">

                        <h3 class="text-center">Most read news</h3>

                        <!--Placeholder for the slick carousel inserted by the script-->
                        <div class="responsive-news">
                            <?php echoMostReadList(9); ?>
                        </div>

				    </aside>

			    </div>

                <?php require 'template/footer.php';?>
		
	    	</div>
        </div>

	</body>
</html>
