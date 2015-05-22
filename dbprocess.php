<!-- Created by: William D. Gallagher !-->
<!-- 28/4/2014 !-->

<!--Establishes Connection to Database!-->

<!--The following code might only be scripted to work with Artists at present...-->
<?php 
include "artistDBConnection.php";
$debugOn = true;
?>
    
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>(INCOMPLETE!) TCMC - Database Results Page?</title>
        <link href="stylesheet.css" rel="stylesheet">
    </head>
    
<!--    Determines action based on which form has been submitted!-->
    <?php 
        
/*  Useful for debugging, but might not need in final code (TBC?)
        echo "<h2>Form Data</h2>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
 */
        
//        Creates a new Artist record if INSERT was selected.
        if($_REQUEST["submit"] == "Create New Artist!") {
            $sql = "INSERT INTO artistTable (artistName, artistContentSummary, artistImage, artistContentFull) VALUES ('$_REQUEST[artistName]', '$_REQUEST[artistContentSummary]','$_REQUEST[artistImage]', '$_REQUEST[artistContentFull]');";
            
//            Not sure what this lines does exactly...
//            echo "<p>Query: " . $sql . "</p>\n<p><strong>";
            
            if ($dbh->exec($sql)) {
                echo "$_REQUEST[artistName] has been inserted."
                echo "<a href='index.php'>index</a>";
            } else {
                echo "ERROR: Could not insert $_REQUEST[artistName]"
                echo "An error has occured. <a href='index.php'>Home</a>";
            }
        }

//        Updates a pre-existing Artist record if UPDATE was selected.
        else if ($_REQUEST["submit"] == "Update Artist") {
            $sql = "UPDATE artistTable SET artistName = '$_REQUEST[artistName]', artistContentSummary = '$_REQUEST[artistContentSummary]', artistContentFull = '$_REQUEST[artistContentFull]' WHERE ID = $_REQUEST[id];";
            if($dbh->exec($sql))
                echo "$_REQUEST[artistName] has been updated.";
            else
                echo "ERROR: Could not update $_REQUEST[artistName]";
            
            echo "<a href='index.php'>index</a>;"; 
        }

//        Removes a pre-existing Artist record if DELETE was selected.
        else if($_REQUEST["submit"] == "Delete Artist") {
            $sql = "DELETE FROM artistTable WHERE artistName = '$_REQUEST[artistName]';";
//            echo "<p>Query: " . $sql . "</p>\n<p><strong>";
            if ($dbh->exec($sql))
                echo "$_REQUEST[artistName] has been deleted.";
            else
                echo "ERROR: Could not delete $_REQUEST[artistName]";
            
            echo"<a href='index.php'>index</a>;";
        }
        
        else {
            echo "ERROR: The requested page did not come from a validated form submission.";
        }
    
//    ...
    ?>
