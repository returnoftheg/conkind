<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;
   charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Travel Template</title>

    <link rel="shortcut icon" href="bootstrap3_travelTheme/assets/ico/favicon.png">

    <!-- Google fonts used in this theme  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bootstrap3_travelTheme/assets/js/html5shiv.js"></script>
    <script src="bootstrap3_travelTheme/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php include 'travel-header.php'; ?>

<div class="container">  <!-- start main content container -->
    <div class="row">  <!-- start main content row -->

        <div id="content" class="clearfix">

            <div class="main">
                <h1>Sign up!</h1>
                <p>Please fill out the following form to be signed up for this service!</p>
                <form name="frmNewsletter" id="frmNewsletter" method="post">
                    <table>
                        <tr>
                            <td>Email Address:</td>
                            <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                        </tr>

                        <tr>
                            <td>Password:</td>
                            <td><input type="text" name="password" id="username" size='20'>
                        </tr>

                        <tr>
                            <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                        </tr>


                    </table>
                </form>

                <?php
                if (isset($_POST["emailAddress"])){
                    $emailAddress = $_POST["emailAddress"];
                }else{
                    echo "All fields need to be filled";
                    header("Location: index.php");
                    exit();
                }

                if (isset($_POST["password"])){
                    $passwrd = $_POST["password"];
                }else{
                    echo "All fields need to be filled";
                    header("Location: index.php");
                    exit();
                }

                include ("db_config.php");

                $sql = "SELECT emailAddress,passwrd FROM users WHERE emailAddress = '$emailAddress'";
                if(mysqli_query($conn, $sql)){
                    echo "Records added successfully.";
                } else{
                    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
                }

                ?>
            </div><!-- End Main -->
        </div><!-- End Content -->
    </div>  <!-- end main content column -->
</div>  <!-- end main content row -->
</div>   <!-- end main content container -->

<?php include 'travel-footer.php'; ?>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
<script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
<script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>