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

		    <article class="container-fluid news">

                <ul>
                    <li>A clear use of HTML5 tags including text, images and links.</li>
                    <BR>
                    <p class="text-center">All of the html pages use the html5 tags to define the structure of the content.
                        The tags used include: article, aside, nav, section, footer, header.
                    </p>
                    <li>Use of a CSS framework, such as Bootstrap, to provide responsive layout.</li>
                    <BR>
                    <p class="text-center">
                        The website is completely responsive through the use of Bootstrap. Its layout adapts depending on the device or the dpi.
                    </p>
                    <li>Use of Javascript which demonstrates:</li>
                    <ul>
                        <li>DOM element selection</li>
                        <li>An event</li>
                        <li>A DOM manipulation method</li>
                        <BR>
                        <p class="text-center">
                            The "Load more news" button on the homepage uses javascript to accomplish all of these three requirements. 
                            It selects the next three hidden news through a DOM element selection, it waits for a onClick event to occur to the button and manipulates the DOM to show the next three hidden news.
                        </p>
 
                    </ul>
                    </li>
                    <li>Use of jQuery which demonstrates an event with an effect</li>
                        <BR>
                        <p class="text-center">
                            I used jQuery to hide the news in excess right after the page was finished loading.
                            The .ready event is used to call the jQuery hide() effect, on all the news after the third one, right after the page is loaded.
                        </p>
 
                    <li>Use of php server side script(s) to enable:</li>
                    <ul>
                        <li>Reading a table in a database</li>
                        <li>or</li>
                        <li>Writing to a table in a database</li>
                        <BR>
                        <p class="text-center">
                            Both of these requirements have been fulfilled.
                            The web application keeps track of the number of visits for each article and writes them in the database.
                            It also reads all the news contents, titles, etc from the database and uses php echo to write it directly into a blank html page.
                        </p>
                    </ul>
                    </li>

                </ul>

	    	</article>

            <?php require 'template/footer.php';?>
        </div>

	</body>
</html>
