<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>databaseConnection</title>
</head>

<body>
<?php
//Connects to the artistDB.
try{
    $dbh = new PDO("sqlite:artistDB.sqlite");
    }
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
</body>
</html>