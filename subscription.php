﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Subscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pictures/icon.png" type="image" sizes="16x16">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style_newsletter.css">
</head>
<body>
    <section class="jumbotron jumbotron.fluid full-page">
     
<span class="container">

    <?php 

       

        $firstname = filter_var(addslashes($_GET["firstname"]), FILTER_SANITIZE_STRING);
        $lastname = filter_var(addslashes($_GET["lastname"]), FILTER_SANITIZE_STRING);
        $mail = filter_var(addslashes($_GET["mail"]), FILTER_SANITIZE_EMAIL);
        
        $myPDO = new PDO('pgsql:host=ec2-34-254-120-2.eu-west-1.compute.amazonaws.com;dbname=dm33p451h4fua', 'kgubvonznsmufu', '29662366d8531bd0834598d64496ebddb140f4a0e589d8ddfa90b61118db228b');
       

        

        $insertDataEx = $myPDO->query("INSERT INTO subscriber VALUES (  \"$firstname\", \"$lastname\", \"$mail\")" );

        
       

        if(!empty($firstname)){
            $name = $firstname;
        }

    ?>
    <div class="card  " id="newsletter-card">
            
            
    
            <div class="card-body text-center margin_vh_top margin_vh_bottom ">
                    <i class="fa fa-check icon100 fa"></i>
                    <h3 class="card-title margin_vh_bottom margin_vh_top" id="response-text">Hi <b><?php echo $name; ?>,</b> thanks for subscribing!</h3>
                    

            <div class="row margin_vh_top">
                            <div class="col-sm-6 col-12 text-end">
                                <form action="unsubscription.php" method="POST" class="">
                            <input name="mail" type="hidden" value="<?php echo $mail; ?>">
                            <input name="lastname" type="hidden" value="<?php echo $lastname; ?>">
                            <input name="firstname" type="hidden" value="<?php echo $firstname; ?>">
                            <button class="btn btn-danger" type="submit">Unsubscribe</button>
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