<!DOCTYPE html>
<html>

	<head>

		<title>Google I/O 2015</title>

        <?php require_once "template/dependencies.php"?>

        <?php require_once "template/functions.php"?>

	</head>
	
	<body>
        <div class="h-container">	
		    <?php require 'template/header.php';?>
		

		    <div class="container-fluid">
			
                <!--Row class needed in order to keep white background-->
			    <div class="row">

				    <article class="col-sm-8">
                        
                        <h3 class="text-center">Recent news</h3>
					
                        <?php echoCronologicalList(9);?>

                        <button type="button" id="load-btn" class="btn btn-default btn-block" onClick="showNews()">
                            Load more news
                        </button>
                        
                        <BR>

				    </article>
				
				    <aside class="col-sm-4 text-center">
                        
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
