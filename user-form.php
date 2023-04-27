<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dynamic User Form</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
           <?php include('menu.php'); ?>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        <div class="mt-5">

            <?php
            /**
             * Function to get label name from field 
             * 
             */

            function getLabel($fieldName){
                //split file name into the words it is composed of
                $nameParts = preg_split('/(?=[A-Z])/', $fieldName); 
                //combine the words, putting spaces
                $fullName = implode(" ",$nameParts);
                //fix the capitalization
                $fullName = ucwords($fullName);
                return $fullName;
            }

            error_reporting(0);
            $user = 'root';
            $password = '';
            $database = 'top5';
            $mysqli = new mysqli('localhost', $user, $password, $database);
            if ($mysqli->connect_errno != null) {
                exit("Failed to connect to database");
            }

            $query = $mysqli->query("Describe `user`");

            if ($query) {
                echo '<form  method="post" action="save-user.php">'; //form header
                while ($row = $query->fetch_assoc()) {
                    //our record is available here


                    //fetch field values
                    $fieldName = $row['Field'];
                    $type = $row['Type'];
                    $null = $row['Null'];
                    $key = $row['Key'];

                    if ($key == 'PRI') {
                        //this is primary key, so we hide it
                        echo '<input type="hidden" name="' . $fieldName . '"/>';
                    } else {

                        //other fields will be wrapped in a form-group container
                        echo '<div class="form-group mb-3">';

                        $inputType = 'text'; //by default the input type is text

                        if (stripos($type, "int") !== false) {
                            $inputType = 'number';
                        } 

                        if (stripos($type, "varchar") !== false) {
                            $inputType = 'text';
                        } 

                        if ($fieldName == 'emailAddress') {
                            $inputType = 'email';
                        }

                        if ($fieldName == 'password') {
                            $inputType = 'password';
                        }
                        echo '<label for="' . $fieldName . '">' . getLabel($fieldName). '</label>';
                        echo '<input type="' . $inputType . '" name ="' . $fieldName . '" placeholder="Enter ' . getLabel($fieldName) . '" class="form-control mt-2"/>';

                        echo '</div>'; //end form group
                    }
                }
                echo '<input type="submit" value="Submit" class="btn btn-primary"/>';
                echo '</form>'; //form footer
            }
            ?>

        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>