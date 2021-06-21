﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Unsubscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pictures/icon.png" type="image" sizes="16x16">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_newsletter.css">
</head>
<body>
    <section class="jumbotron jumbotron.fluid full-page">

        <span class="container">

            <?php

            $host="localhost";
            $user="root";
            $pwd="";
            $db="database";

            $firstname = filter_var(addslashes($_POST["firstname"]), FILTER_SANITIZE_STRING);
            $lastname = filter_var(addslashes($_POST["lastname"]), FILTER_SANITIZE_STRING);
            $mail = filter_var(addslashes($_POST["mail"]), FILTER_SANITIZE_EMAIL);
            

            $conn=mysqli_connect($host,$user,$pwd,$db) or die("Operation failed, please try again");

            $deleteEntry ="DELETE FROM subscriber WHERE mail = \"$mail\"";

            $deleteDataEx = mysqli_query($conn, $deleteEntry);




            

            ?>
            <div class="card  " id="newsletter-card">



                <div class="card-body text-center margin_vh_top margin_vh_bottom ">
                    <i class="fa fa-times icon100"></i>
                    <h3 class="card-title margin_vh_bottom margin_vh_top" id="response-text">We are sorry to see you go.</h3>


                    <div class="row margin_vh_top">
                        <div class="col-sm-6 col-12 text-end">
                            <form action="subscription.php" method="POST" class="">
                                <input name="mail" type="hidden" value="<?php echo $mail; ?>">
                            <input name="lastname" type="hidden" value="<?php echo $lastname; ?>">
                            <input name="firstname" type="hidden" value="<?php echo $firstname; ?>">
                                <button class="btn btn-secondary" type="submit">Resubscribe</button>
                            </form>

                        </div>

                        <div class="col-sm-6 col-12 text-start">


                            <a href="home.html" class="btn btn-success ms-4 me-4">Go back</a>


                        </div>
                    </div>
                </div>

            </div>

        </span>


    </section>





</body>
</html>