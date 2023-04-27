<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign Up User Form</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
               <?php include('menu.php');?>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="mt-5">
                <h1>Register</h1>
                <p class="lead">Enter your inform below to register</p>
                <div class="row">
                    <div class="col">
                    <form method="post" action="register-2.php">
                        <div class="form-group m-3">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Enter First Name"/>
                        </div>
                        <div class="form-group m-3">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name"/>
                        </div>
                        <div class="form-group m-3">
                        <label for="otherNames">Other Names</label>
                        <input type="text" class="form-control" name="otherNames" placeholder="Enter Other Names"/>
                        </div>
                        <div class="form-group m-3">
                        <label for="emailAddress">Email Address</label>
                        <input type="email" class="form-control" name="emailAddress" placeholder="Enter Email"/>
                        </div>
                        <div class="form-group m-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password"/>
                        </div>
                        <div class="form-group m-3">
                        <label for="passwordConfirm">Password Confirm</label>
                        <input type="password" class="form-control" name="passwordConfirm" placeholder="Confirm Password"/>
                        </div>
                        <input type="submit" value="Submit Form" class="btn btn-primary m-3">

                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
