<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike-sharing Southtyrol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> <!--bootstrap stylesheet-->
    <link rel="icon" href="pictures/icon.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--font awesome icons-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <header>
        <h1 hidden>accessibility</h1>
        <nav class="navbar navbar-expand" id="topNavigation">

            <ul class="navbar-nav justify-content-center w-100 text-center">
                <li class="nav-item">
                    <a class="nav-link" href="#about" id="navItem">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Partner" id="navItem">Partner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team" id="navItem">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="navItem">Map</a>
                </li>

            </ul>

        </nav>

    </header>




    <section class="jumbotron jumbatron.fluid  bg-light text-center pb-5 shadow" id="sectionHeader">

        
        <span class="container" id="cta-mobile">

            <div class="card " id="card-home">
                <div class="card-body my-auto">
                    <div class="placeholder3"></div>
                    <h2 hidden>accessibility</h2>
                    <h3 hidden>accessibility</h3>
                    <h4 hidden>accessibility</h4>
                    <h5 class=" display-6 align-middle color text-dark" id="mainHeader">Bike-Sharing Radar Southtyrol</h5>
                    <div class="placeholder3"></div>

                    
                    <form class="input-group" id="searchField" target="_blank" action="map.php" method="GET">
                            <input type="text" class="form-control rounded" autocomplete="off" placeholder="Streetname, City or zip code" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-success shadow btn-lg" type="submit">Go</button>
                            </div>
                    </form>
                    

                    <div class="placeholder3"></div>
                    <h5 class="text-bold">
                        or use
                    </h5>
                    <div class="placeholder2"></div>
                    <form target="blank" action="map.php" method="GET">


                        <input type="hidden" value="userPosition" name="search">
                        <button class="btn btn-dark btn-lg" type="submit">GPS Position<i class="ms-2 fa fa-location-arrow" src="#"></i></button>

                    </form>
                    <div class="placeholder3"></div>
                </div>

            </div>

          

        </span>



    </section>

    <section id="placeholder" class="container-fluid bg-white"></section>



    <!--idea-->

    <section class="container " id="about">


        <div class="row" id="idea">
            <div class="col-md-6 col-lg-6">
                <h2>The idea</h2>
                <p class="lead">In todays cities it´s very important to have some alternative means of transport. Our goal is to create a website that makes it easy to find Bike-sharing bikes. We have focused our service on Southtyrol only.</p>
            </div>
            <div class="col-md-6 col-lg-6">
                <a href="#"><img alt="Example Map" src="pictures/exMap.PNG" class="shadow w-75 float-end rounded" /></a>
            </div>

        </div>


    </section>


    <section id="placeholder" class="container-fluid bg-white"></section>

    <!--Team Members-->
    <section class="container-fluid bg-light" id="team">
        <div class="container">

            <div class="row mb-5 pt-5" id="team">
                <h2 class="mb-5">Team </h2>
                <p class="lead">Our Team consists of the two Founder Jonas and Tobias, who came up with the idea. Both are Students at the University Bolzano and are eager to simplify even mor the bike-sharing concept not only in the city of Bolzano, but in the whole province.</p>
            </div>



            <div class="row mt-5 pb-5">
                <div class="col-12 col-md-6 text-center mt-5 ">
                    <img class="rounded-circle m-3" src="pictures/jonas.png" alt="Jonas Gatterer" width="140" height="140">
                    <h2>Jonas Gatterer</h2>
                    <h3 hidden>accessibility</h3>
                    <h4 hidden>accessibility</h4>
                    <h5>Co-Founder</h5>
                    <div class="row ">
                        <div class="col-lg-2"></div>
                        <p class="col-lg-8 col-12">"Computer programming is becoming an important skill for your career. Learning how to code software is a great opportunity which could help you to achieve your dreams."</p>
                        <div class="col-lg-2"></div>
                    </div>
                    <div>
                        <a href="#"><label hidden>Github Jonas Gatterer</label><i class="fa fa-github-square fa-2x m-2" src="#"></i></a>
                        <a href="#"><label hidden>LinkedIn Jonas Gatterer</label><i class="fa fa-linkedin-square fa-2x m-2" src="#"></i></a>
                        <a href="#"><label hidden>Stack-Overflow Jonas Gatterer</label><i class="fa fa-stack-overflow fa-2x m-2" src="#"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-6 text-center mt-5 ">
                    <img class="rounded-circle m-3" src="pictures/tobias.jpg" alt="Tobias Unterhauser" width="140" height="140">
                    <h2>Tobias Unterhauser</h2>
                    <h3 hidden>accessibility</h3>
                    <h4 hidden>accessibility</h4>
                    <h5>Co-Founder</h5>
                    <div class="row mb-3 ">
                        <div class="col-lg-2"></div>
                        <p class="col-lg-8 col-12">"Imagine an IT-Guy who cares about the environment and that without a 100k a year salary as an incentive. Done? Well… that’s me!"</p>
                        <div class="col-lg-2"></div>
                    </div>
                    <div>
                        <a href="#"><label hidden>Github Tobias Unterhauser</label><i class="fa fa-github-square fa-2x m-2" src="#"></i></a>
                        <a href="#"><label hidden>LinkedIn Tobias Unterhauser</label><i class="fa fa-linkedin-square fa-2x m-2" src="#"></i></a>
                        <a href="#"><label hidden>Stack-Overflow Tobias Unterhauser</label><i class="fa fa-stack-overflow fa-2x m-2" src="#"></i></a>
                    </div>

                </div>
            </div>






        </div>
    </section>

    <section id="placeholder" class="container-fluid bg-white"></section>

    <!--partner -->
    <section class="container" id="Partner">
        <div class="row">
            <div class="col-lg-4 mt-4 order-2 order-lg-10">
                <a href="https://www.unibz.it/"><img alt="University of Bolzano" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Free_University_of_Bozen-Bolzano_logo.svg/1200px-Free_University_of_Bozen-Bolzano_logo.svg.png" class="img-thumbnail" id="partner" /></a>
                <a href="https://opendatahub.readthedocs.io/en/latest/index.html"><img alt="Open Data Hub" src="https://opendatahub.bz.it/img/logo-open-data-hub.png" id="partner" class="img-thumbnail" /></a>
            </div>
            <div class="col-lg-8 order-1 order-lg-2">
                <h2>Partner</h2>
                <p class="lead">We have been able to get two important partners for our software project. The Uni-BZ has helped us to work out how to develop the website. Our other partner is Opendata-Hub, who provided us with the data we needed.</p>
            </div>
        </div>
    </section>

    <section id="placeholder" class="container-fluid bg-white"></section>

    <!--form newsletter-->

    <section class="container-fluid bg-light" id="team">
        <div id="placeholder"></div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>News</h2>
                    <p class="lead pe-2">If you always want to be up to date then just subscribe to our newsletter, so that we can inform you as soon as possible about the newest developments and changes.</p>
                </div>

                <div class="col-lg-4">
                    <form action="subscription.php" method="GET">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingFirstName" name="firstname" placeholder="">
                                    <label for="floatingFirstName">Firstname</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingLastName" name="lastname" placeholder="">
                                    <label for="floatingLastName">Lastname</label>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="" name="mail" required>
                            <label for="floatingEmail">Email-Address</label>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <span class="align-middle">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                                    <label class="form-check-label" for="defaultCheck1">
                                        I want to recive Newsletters
                                    </label>
                                </span>
                                
                            </div>
                            <div class="col-4">
                                <div class="pull-right">
                                    <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>



            </div>

            <div id="placeholder"></div>
    </section>





    <section id="placeholder" class="container-fluid bg-white"></section>
    <section id="placeholder" class="container-fluid bg-white"></section>

    <footer class="footer bg-dark text-white">
        <div class="placeholder3"></div>
        <div class="container-fluid">
            <div class="row">
                <!--social media icons on the left-->
                <div class="col-xl-6 col-6 " id="footerLeft">
                    <a class="btn btn-outline-light btn-floating " href="#" role="button">
                        <label hidden>Facebook Link</label>
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>Instagram Link</label>
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>Youtube Link</label>
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>LinkedIn Link</label>
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>Twitter Link</label>
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </div>

                <!--
                <div class="col-xl-6 col-6" id="footerCenter">
                   
                </div>-->

                <!--links to privacy, impressum etc on the right-->
                <div class="col-xl-6 col-6" id="footerRight">
                    <a href="#">Privacy</a>
                    <a href="#">Impressum</a>
                </div>
            </div>
        </div>
        <div class="placeholder3"></div>
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="placeholder3"></div>
            <p>2021 Copyright: Jonas Gatterer & Tobias Unterhauser</p>

        </div>
    </footer>



    <script>
        var searchInputField = document.getElementById("searchInput");

        searchInputField.addEventListener("keyup", function (event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("searchButton").click();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
