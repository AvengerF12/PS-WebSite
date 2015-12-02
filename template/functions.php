<?php
/*
 To do:
*/


ini_set("display_errors", 1);
error_reporting(E_ALL);

function readDB()
{

    $username="sql1503473";
    $password="m6AZ4QM0TCbb";
    $database="lochnagar.abertay.ac.uk";

    mysql_connect($database,$username,$password);
    @mysql_select_db($username) or die( "Unable to select database");

    $sql = "SELECT id, title, url, content, viewCount FROM websiteData ORDER BY viewCount DESC";
    $result=mysql_query($sql);

    $num=mysql_numrows($result);

    mysql_close();

    return $result;
}


function echoSnippet($newsRank)
{
    
    $queryResult = readDB();
    $i = 0;
    while ($db_field = mysql_fetch_assoc($queryResult)) {

        if($i == $newsRank){
            $newsSnippet = substr($db_field['content'],0,200);
            echo "<h4>" . $db_field['title'] . "</h4> <BR>";
            echo $newsSnippet . "...  ";
            echo "<a href=\"news.php?idNews=". $db_field['id'] ."\">Read more</a>";
            echo "<BR>";

            break;
        }

        $i++;
    }
}


function echoNews($idNews)
{
        
    $queryResult = readDB();

    while ($db_field = mysql_fetch_assoc($queryResult)) {

        if($db_field['id'] == $idNews){
            echo "<h4>" . $db_field['title'] . "</h4> <BR>";
            echo $db_field['content'];
            echo "<BR>";

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

