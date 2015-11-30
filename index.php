<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>TBD</title>

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
		    <header>
			    <img src="images/banner-google.jpg" class="img-responsive">

		    </header>
		
		
		    <nav class="navbar navbar-default">
  			    <div class="container-fluid">
    				    <div class="navbar-header">
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						        <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
        					    <span class="icon-bar"></span>                        
      					    </button>
      					    <a class="navbar-brand" href="#">
                                <img src="images/navbar-logo.png" class="icon-img">
                            </a>
    				    </div>

    				    <div class="collapse navbar-collapse" id="myNavbar">
      					    <ul class="nav navbar-nav">
        					    <li class="active"><a href="#">Home</a></li>
        					    <li class="dropdown">
          						    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Event<span class="caret"></span></a>
          						    <ul class="dropdown-menu">
            							<li><a href="#">Page 1-1</a></li>
            							<li><a href="#">Page 1-2</a></li>
            							<li><a href="#">Page 1-3</a></li>
          						    </ul>
        					    </li>
        					    <li><a href="#">About</a></li>
        					    <li><a href="#">Tutor page</a></li>
      					    </ul>
    				    </div>
  			    </div>
		    </nav>
		

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


			    <footer class="row">

				    <div class="col-sm-4">
					    <h4>Information<h3/>
				    </div>

				    <div class="col-sm-4"> 
					    <h4>About<h3/>
				    </div>

				    <div class="col-sm-4">
					    <h4>Terms and conditions</h3>
				    </div>

		    	</footer>
		
	    	</div>
        </div>

	</body>
</html>
