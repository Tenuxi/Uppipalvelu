<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo '<div id="huomautus2" class="alert alert-lght" role="alert">';


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "Tiedosto on kuva - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo '<div id="huomautus" class="alert alert-danger" role="alert">';
        echo "Tiedosto ei ole kuva!.";
        echo "</div>";
        $uploadOk = 0;
    }
}


// Tarkistaa onko tiedosto jo olemassa
if (file_exists($target_file)) {
    echo '<div id="huomautus" class="alert alert-danger" role="alert">';
    echo "Tiedosto on jo olemassa! <br /> Muuta tiedoston nimi.";
    echo "</div>";
    $uploadOk = 0;
}


// Tarkistetaan tiedoston koko
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo '<div id="huomautus" class="alert alert-warning" role="alert">';
    echo "Tiedosto on liian suuri ladattavaksi.";
    echo "</div>";
    $uploadOk = 0;
}


// Tarkistetaan tiedosto pääte
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<div id="huomautus" class="alert alert-danger" role="alert">';
    echo "Vain JPG, JPEG, PNG & GIF on sallittu tiedosto muoto.";
    echo "</div>";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<div id="huomautus" class="alert alert-warning" role="alert">';
    echo "Tiedosto on liian pieni.";
    echo "</div>";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<div id="neutraali" class="alert alert-success" role="alert">';
        echo "Tiedosto ". basename( $_FILES["fileToUpload"]["name"]). " on ladattu.";
        echo "</div>";
    } else {
        echo '<div id="huomautus" class="alert alert-danger" role="alert">';
        echo "Lataamisessa tapahtui jotain statosfäärisen sekavaa. yritä uudestaan!";
        echo "</div>";
    }
}
echo "</div>";

?>