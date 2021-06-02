<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Subscription</title>

<link rel="stylesheet" type="text/css" href="style_newsletter.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
    <section class="jumbotron jumbotron.fluid full-page">
     
<span class="container">
    <div class="card  " id="newsletter-card">
            
            <div class="card-body text-center margin_vh_top margin_vh_bottom ">
                    <h3 class="card-title margin_vh_bottom" id="response-text">Hi there, thanks for subscribing!</h3>
                    

            <div class="row ">
                            <div class="col-6 text-end">
                                <form action="unsubscription.php" method="POST" class="">
                            <input name="mail" type="hidden" value="<?php echo $_POST["mail"]; ?>">
                            <button class="btn btn-danger" type="submit">Unsubscribe</button>
                                </form>

                            </div>
    
                            <div class="col-6 text-start">

                               
                                    <a href="home.html" class="btn btn-success ms-4 me-4">Go back</a>
                              
                                 
                            </div>
                         </div>
            </div>

    </div>

</span>


</section>




    
</body>
</html>