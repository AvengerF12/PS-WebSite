<!DOCTYPE html>
<html>

	<head>

		<title>Google I/O 2015 About</title>

        <?php require_once "template/dependencies.php" ?>

        <?php require_once "template/functions.php"?>

	</head>
	
	<body>
        <div class="h-container">	
		    <?php require 'template/header.php';?>

            <div class="container-fluid">
		        <article>
                    <section class="row news">

                        <li>A clear use of HTML5 tags including text, images and links.</li>
                        <BR>
                        <p class="text-center">
							All of the html pages are structured through 
							the use of the html5 tags to define the content.
                            The tags used include: article, aside, nav, section, footer, header.
                        </p>
                    </section>

                    <section class="row news">
                        <li>Use of a CSS framework, such as Bootstrap, to provide responsive layout.</li>
                        <BR>
                        <p class="text-center">
                            The website is completely responsive through the use of Bootstrap.
                            Its layout adapts depending on the dpi, allowing to use the
							website in a comfortable way from any device.
                        </p>

                    </section>

                    <section class="row news">

                        <li>Use of Javascript which demonstrates:</li>
                        <ul>
                            <li>DOM element selection</li>
                            <li>An event</li>
                            <li>A DOM manipulation method</li>
                            <BR> 
                        </ul>
                            
                        <p class="text-center">
                            The "Load more news" button on the homepage uses javascript to 
                            accomplish all of these three requirements. 
                            It selects the next three hidden news through a DOM element selection method, 
                            it waits for an "onClick()" event to occur to the button, when it receives 								it manipulates the DOM to show the next three hidden news and so on.
                        </p>

                    </section>

                    <section class="row news">

                        <li>Use of jQuery which demonstrates an event with an effect</li>
                        <BR>
                        <p class="text-center">
                            jQuery is used to hide all of the articles after the third one right after 								the page has finished loading.
                            In order to accomplish this the .ready() event is used to call the jQuery 								hide() effect.
                            The .ready() event is also used to load the slick carousel plugin after 
                            the page is loaded.
                        </p>
 
                    </section>

                    <section class="row news">

                        <li>Use of php server side script(s) to enable:</li>
                        <ul>
                            <li>Reading a table in a database</li>
                            <li>or</li>
                            <li>Writing to a table in a database</li>
                            <BR>
                        </ul>
                        <p class="text-center">
                            Both of these requirements have been fulfilled.
                            The web application keeps track of the number of visits 
                            for each article and writes them in the database. 
							This is for the purpouse of displaying the articles from the most to the 								least read.
                            The application also reads all the news contents, titles, etc from the 
                            database in which they are stored and uses php echo to write it directly into 
                            an html page in order to reduce the amount of copy-pasted code and simplify 							
the whole structure.
                        </p>

                    </section>

	    	    </article>

                <?php require 'template/footer.php';?>
            </div>
        </div>

	</body>
</html>
