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

        <?php require_once "pages/template/functions.php"?>

	</head>
	
	<body>
        <div class="h-container">	
		    <?php require 'pages/template/header.php';?>
		

		    <div class="container-fluid">
			
			    <div class="row">

				    <article class="col-sm-8">
					
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


                        <button type="button" class="btn btn-default btn-block" onClick="showNews()">
                            Load more news
                        </button>

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

                <?php require 'pages/template/footer.php';?>
		
	    	</div>
        </div>

	</body>
</html>
