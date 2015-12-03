<?php
/*
 To do:
*/


ini_set("display_errors", 1);
error_reporting(E_ALL);

function readDB($query)
{

    $username="sql1503473";
    $password="m6AZ4QM0TCbb";
    $database="lochnagar.abertay.ac.uk";

    mysql_connect($database,$username,$password);
    @mysql_select_db($username) or die( "Unable to select database");

    $result=mysql_query($query);

    $num=mysql_numrows($result);

    mysql_close();

    return $result;
}


// Outputs news in the order in which they were added
function echoCronologicalSnippet($newsOrder)
{
    $sql = "SELECT id, title, url, content, image, viewCount FROM websiteData";

    $queryResult = readDB($sql);
    $i = 0;
    while ($db_field = mysql_fetch_assoc($queryResult)) {

        if($i == $newsOrder){
            $newsSnippet = substr($db_field['content'],0,200);
            echo "<h4>" . $db_field['title'] . "</h4> <BR>";
            echo $newsSnippet . "...  ";

            echo '<BR>';

            // Insert url for the current news
            echo '<a href="news.php?idNews=' . $db_field['id'] . '">';
            echo '<p class="text-right">';
            echo 'Click to read more';
            echo '</p>';
            echo '</a>';

            break;
        }

        $i++;
    }
}


function echoCronologicalList($nItems)
{
    for($i=0;$i<$nItems;$i++){
            if($i<3){
                echo '<section id="snippet'.$i.'" class="row news">';
            } else {
                echo '<section id="snippet'.$i.'" class="row news h-snippet">';
            }
            echo '<p>';
            echoCronologicalSnippet($i);
            echo '</p>';
            echo '</section>';
    }

}


function echoMostReadSnippet($newsRank)
{
    $sql = "SELECT id, title, url, content, image, viewCount FROM websiteData ORDER BY viewCount DESC";
    
    $queryResult = readDB($sql);
    $i = 0;
    while ($db_field = mysql_fetch_assoc($queryResult)) {

        if($i == $newsRank){
            echo '<a href="news.php?idNews='. $db_field['id'] .'">';
                echo '<h4 class="text-center">' . $db_field['title'] . '</h4> <BR>';
                echo '<img src="'. $db_field['image'] .'" class="img-responsive aside-img center">';
            echo '</a>';

            break;
        }

        $i++;
    }
}


function echoMostReadList($nItems)
{
    for($i=0;$i<$nItems;$i++){
        echo '<div class="news">';
        echoMostReadSnippet($i);
        echo '</div>';
    }
}


function echoNews($idNews)
{
    $sql = "SELECT id, title, url, content, image, viewCount FROM websiteData";
        
    $queryResult = readDB($sql);

    while ($db_field = mysql_fetch_assoc($queryResult)) {

        if($db_field['id'] == $idNews){
            echo '<h4 class="text-center">' . $db_field['title'] . '</h4> <BR>';

            echo '<img src="' . $db_field['image'] . '" class="img-responsive center">';

            echo "<BR>";
            echo '<p>';
            echo $db_field['content'];
            echo '</p>';
            echo "<BR>";

            // Insert source's url in the news page
            echo '<p class="text-right">';
            echo '<a href="'. $db_field['url'] .'">Via</a>';
            echo '</p>';

            break;
        }

    }
}


function updateViewCountDB($idToUpdate)
{
    $username="sql1503473";
    $password="m6AZ4QM0TCbb";
    $database="lochnagar.abertay.ac.uk";
    $conn=mysql_connect($database,$username,$password);
     @mysql_select_db($username) or die( "Unable to select database");

    $sql1 = "UPDATE websiteData
                SET viewCount=viewCount+1
                WHERE id = $idToUpdate";
    $rs=mysql_query($sql1) or die("Unable to run query");

    mysql_close();
}

?>

