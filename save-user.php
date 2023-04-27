<?php
    require('db-config-.php');
    //collect form data
    //interate over each POST array item, extracting the key as a variable
    //and assigning it the value of the item
    foreach($_POST as $key=>$value){
        $$key = $value;
    }

    $sql = "INSERT INTO `user`(`firstName`, `lastName`, `otherNames`, `emailAddress`, `password`) VALUES ('$firstName','$lastName','$otherNames','$emailAddress','$password')";

    $query = $mysqli->query($sql);

    if($query && $mysqli->affected_rows > 0){
        echo'<p style="color:green">User has been successfully created!</p>';
    }
    else{
        echo'<p style="color:red">Sorry, user could not be created. <b>'.($mysqli->error).'</b> </p>';
    }