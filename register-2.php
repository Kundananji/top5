<?php
    //collect form data and validate
    $firstName =validateName($_POST['firstName'],'First Name');    
    $lastName = validateName($_POST['lastName'],'Last Name');
    $otherNames =validateName($_POST['otherNames'],'Other Names');

    $emailAddress = $_POST['emailAddress'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    
    //data is now available for processing.
    //for example, we can save to the database

    /**
     * Function to validate firstName, otherName or Last Name
     * @param $name : the name to validate
     * @param $label: the label to identify the type of name we are validating
     * @return the validated name
     */
    function validateName($name,$label){
         //check if first name is empty
        if($label!='Other Names' && $name == null){
            //if the name variable is not set, or if it is and is empty
            //exit with a reason why
            exit("Please enter $label");
        }
        //add slashes to sanitize malicious characters
        $name = addslashes($name);
        //convert to upper case
        $name = strtoupper($name);
        //return the sanitized value
        return $name;
    }

?>
