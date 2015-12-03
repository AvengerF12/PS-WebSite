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
					
					    <section id="snippet0" class="row news">
                        <p>
                            <?php echoSnippet(0);?>
                        </p>
					    </section>

					    <section id="snippet1" class="row news">
                        <p>
                            <?php echoSnippet(1);?>
                        </p>
					    </section>

					    <section id="snippet2" class="row news">
                        <p>
                            <?php echoSnippet(2);?>
                        </p>
					    </section>

					    <section id="snippet3" class="row news h-snippet">
                        <p>
                            <?php echoSnippet(3);?>
                        </p>
					    </section>

                        <section id="snippet4" class="row news h-snippet">
                        <p>
                            <?php echoSnippet(4);?>
                        </p>
					    </section>

                        <section id="snippet5" class="row news h-snippet">
                        <p>
                            <?php echoSnippet(5);?>
                        </p>
					    </section>

                        <section id="snippet6" class="row news h-snippet">
                        <p>
                            <?php echoSnippet(6);?>
                        </p>
					    </section>

                        <section id="snippet7" class="row news h-snippet">
                        <p>
                            <?php echoSnippet(7);?>
                        </p>
					    </section>

                        <section id="snippet8" class="row news h-snippet">
                        <p>
                            <?php echoSnippet(8);?>
                        </p>
					    </section>

                        <section id="snippet9" class="row news h-snippet">
                        <p>
                            <?php echoSnippet(9);?>
                        </p>
					    </section>


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
