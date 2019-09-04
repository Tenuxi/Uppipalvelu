<?php

$servername= 'localhost';
$database='uppipalvelu';
$username= 'testaaja';
$password= 'salasana';
$server= 'localhost';
$port= 3306;

$connection= mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error())
{
    echo '<div id="huomautus" class="alert alert-danger" role="alert">';
    echo "SQL yhteys ei ole toiminnassa!: " . mysqli_connect_error();
    echo "</div>";
} else {

 mysqli_set_charset($connection, 'utf8');
 echo '<div id="sqlToiminnassa" class="alert alert-primary" role="alert">';
 echo "SQL yhteys toimii";
 echo "</div>";

}

?>