
<?php

session_start();
if (!isset($_SESSION['verified'])) {
	header('Location: Login.php');
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVE CHANGES</title>

    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="css/flickity.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginmdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="editStyle.css">

</head>
<body style="text-align:center;">

<h2>CONTENT SUCCESSFULLY CHANGED!!!</h2>
<h2>DO YOU WANT TO EDIT OTHER CONTENT?</h2>

<a href="edit.php"><button class="btn">YES</button></a>
<a href="logs.php"><button class="btn">NO</button></a>
    
</body>
</html>