<!--Connects to the SQLite database, artistDB.-->

<?php

try {
    $dbh = new PDO("sqlite:artistDB.sqlite");
    
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
