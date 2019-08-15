<?php

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Testi Uppi palvelu</title>
</head>
<body>

<header>
    <h1>Uppi palvelu</h1>
</header>


<div id="upload">

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</div>

</body>
</html>