<?php
include("artistDBConnection.php")
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Existing Artist</title>
</head>

<body>
<form method = "post">
Artist To Update:<br>
<input type = "radio" name = "artistToUpdate" value = "ARTIST1"> <!-- Will need to establish a method for displaying all current artists. Working on that once delete is finished!-->
<br>
Artist Name:<br>
<input type = "text" name = "artistName">
<br>
Content Summary:<br>
<input type = "text" name = "contentSummary">
<br>
Full Content:<br>
<input type = "text" name = "fullContent">
<br>
Artist Image:<br>
<input type = "file" name = "artistImage" accept = ".jpg, .jpeg, .bmp, .gif, .png">
<br>
<input type = "submit" value = "Submit" name = "submit">
<br>

<?php
$artistToUpdateValue = $_POST["artistToUpdate"];
$artistNameValue = $_POST["artistName"];
$contentSummaryValue = $_POST["contentSummary"];
$fullContentValue = $_POST["fullContent"];
$artistImageValue = $_POST["artistImage"];
$formInsert = "UPDATE artistTable SET VALUES($artistNameValue, $contentSummaryValue, $fullContentValue, $artistImageValue) WHERE artistName = $artistToUpdateValue";
?>
</body>
</html>