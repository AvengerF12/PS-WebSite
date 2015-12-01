<?php
/*
 To do:
 * Create function for echoing news snippet on front page
*/


ini_set("display_errors", 1);
error_reporting(E_ALL);

function readDB(){

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

function echoSnippet($newsRank){
    
    $queryResult = readDB();
    $i = 0;
    while ($db_field = mysql_fetch_assoc($queryResult)) {

        if($i == $newsRank){
            $newsSnippet = substr($db_field['content'],0,200);
            echo "<h4>" . $db_field['title'] . "</h4> <BR> <BR>";
            echo $newsSnippet . "...<BR>";

            break;
        }
        $i++;
    }
}
?>

