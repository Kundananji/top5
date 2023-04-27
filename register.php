<?php
    //interate over each POST array item, extracting the key as a variable
    //and assigning it the value of the item
    foreach($_POST as $key=>$value){
        $$key = $value;
    }
    
    //data is now available for processing.
    //for example, we can save to the database

    echo '<p> You have entered the following values: ';
    echo'<p>FirstName: '.$firstName;
    echo '<p>Last Name: '.$lastName;
    echo'<p>Other Names: '.$otherNames;
    echo'<p>Email: '.$email;
    echo'<p>Password: '.$password;
    echo'<p>Password Confirm: '.$passwordConfirm;
?>
