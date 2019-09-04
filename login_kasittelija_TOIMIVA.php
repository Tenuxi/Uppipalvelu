<?php

include "db.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($connection,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($connection,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($connection,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            echo "<script type='text/javascript'>
            window.location = 'index.php?page=login_index'
            </script>";
        }else{
            echo "Väärä käyttäjänimi tai salasana<br />";
            echo "Käyttäjänimi: user tai admin<br />";
            echo "Salasana: user tai admin";
        }

    }

}
?>