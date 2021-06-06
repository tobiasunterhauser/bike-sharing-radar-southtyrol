<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> <!--bootstrap stylesheet-->
    <link rel="icon" href="https://www.iconexperience.com/_img/g_collection_png/standard/512x512/bicycle.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--font awesome icons-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <header>
     
     </header>

     <h1 hidden>accessibility</h1>

     <!--search bar start-->

     
    <section class="jumbotron jumbatron.fluid  bg-light text-center shadow" id="sectionHeaderMap">

        <!--display on mobile with css display attribute-->

        

            <span class="container">

                <div class="card " id="card-map">
                    <div class="card-body my-auto">
                       
                    <div class="placeholder3"></div>

                    <div class="row">
                           <div class="col-xl-10 col-lg-8 col-md-8 col-12" id="searchBarMap">

                                  <form id="searchField" target="_blank" action="map.php" method="GET">
                                            <label class="input-group ms-3  header-buttons">
                                                <input type="text" class="form-control rounded" id="searchInput" placeholder="Streetname, City or zip code" name="search">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success shadow btn-lg" id="searchButton" type="submit">Go</button>
                                                </div>
                                            </label>
                                    </form>
                             </div>
                        
                          
                       
                                <div class="col-xl-2 col-lg-4 col-12 col-md-4">
                                        <button class="btn btn-dark btn-lg header-buttons" id="gpsButton" onclick="getLocation();">GPS Position<i class="ms-2 fa fa-location-arrow" src="#"></i></button>
                                </div>
                           
                            
                    </div>
                        
                        <div class="placeholder3"></div>
                    </div>

                </div>

          <div class="placeholder3"></div>

         <div class="">
  
                <section id="map"></section>

         </div>

            </span>
   
    </section>


     <!--search bar end-->


     <footer class="footer bg-dark text-white">
        <div class="container-fluid">
            <div class="row">
                <!--social media icons on the left-->
                <div class="col-xl-3 col-12 " id="footerLeft">
                    <a class="btn btn-outline-light btn-floating " href="#" role="button">
                        <label hidden>Facebook Links</label>
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>Instagram Links</label>
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>Youtube Links</label>
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>LinkedIn Links</label>
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button">
                        <label hidden>Twitter Links</label>
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </div>

                <!--newsletter sigup-->
                <div class="col-xl-6 col-12" id="footerCenter">
                    <section class="">
                        <form action=""> <!--add get method to con-->
                            <label>
                                <div class="row d-flex justify-content-center">

                                    <div class="col-auto">
                                        <p class="pt-2">
                                            <strong style="color: white;">Sign up for our newsletter</strong>
                                        </p>
                                    </div>

                                    <div class="col-md-5 col-12">

                                        <div class="form-outline form-white mb-4">
                                            <input type="email" class="form-control" placeholder="example@com" />

                                        </div>
                                    </div>

                                    <div class="col-auto">

                                        <button type="submit" class="btn btn-outline-light mb-4">
                                            Subscribe
                                        </button>
                                    </div>

                                </div>
                            </label>
                        </form>
                    </section>
                </div>
                <!--links to privacy, impressum etc on the right-->
                <div class="col-xl-3 col-12" id="footerRight">
                    <a href="#">Privacy</a>
                    <a href="#">Impressum</a>
                </div>
            </div>
        </div>
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>� 2020 Copyright: Jonas Gatterer & Tobias Unterhauser</p>

        </div>
    </footer>


    
    <script>
    
        var map = L.map('map'); 

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=rtwXzaPknPj5CuAX8Sto', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>', 
      
        }).addTo(map);

        map.setZoom(14); //default zoom
        
               //JSON form open data hub
            var xmlhttp = new XMLHttpRequest();
            var url = "https://mobility.api.opendatahub.bz.it/v2/flat/BikesharingStation";

       
        var myArr;
            

            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    myArr = JSON.parse(this.responseText);
                    showData();
                }
            };
            xmlhttp.open("GET", url, true);
        xmlhttp.send();
        

        function showData() {
                
            var i;
            for (i = 0; i < myArr.data.length; i++) {
                
                var xc = myArr.data[i].scoordinate.x;

               if(xc < 12 && xc > 11){ 
                    showThisLine(myArr.data[i]);
               }
                
                map.setView([46.4907, 11.3398]);
                        
 
                }

    
               
        }
       
        //function which adds line to table
        function showThisLine(arrayLine) {
  
            var name = arrayLine.sname;
            var active = arrayLine.sactive;
            var x = arrayLine.scoordinate.x;
            var y = arrayLine.scoordinate.y;
            var srid = arrayLine.scoordinate.srid;
            var origin = arrayLine.sorigin;
            //var bikesAvailable = myArr.data[i].smetadata.bikes.number - available;
            var municipality = arrayLine.smetadata.municipality;
            var sCode = arrayLine.scode;
            var totalBays = arrayLine.smetadata["total-bays"];
            var url;
            
            if (origin == "BIKE_SHARING_BOLZANO") {
                url = "https://bicibolzano.ecospazio.it/#/login";
            }
            else if (origin == "BIKE_SHARING_PAPIN"){
                url = "https://www.papinsport.com/";
            }
            
            var bays_text = "";
            if(typeof totalBays != 'undefined'){
                bays_text = "<a>Total Bays: " + totalBays + "</a><br>";
            }




            var markerText = "<div class=\"text-center\"><h6>" + name + "</h6>" + bays_text + "<button class=\"btn btn-success btn-sm mt-2\" onclick=\"location.href='" + url + "'\">Link to Service</button></div>";

             var markerNew = L.marker([y, x]).addTo(map);
                markerNew.bindPopup(markerText);
        }


        
        function addPositionMarker(longIn, latIn){
            var userPosition = L.marker([longIn, latIn]).addTo(map);
            userPosition.bindPopup("<h6>Your are here!</h6>").openPopup(); 
             map.setView([longIn, latIn]);
        }
        
       

         function getLocation() {
           
     
         navigator.geolocation.getCurrentPosition(showPosition);

        }

        function showPosition(position) {
            var lat = position.coords.latitude;
            var long = position.coords.longitude; 

            addPositionMarker(lat, long);
        }
        
        var searchInputField = document.getElementById("searchInput");
       
     

        var searchTerm = "<?php Print($_GET["search"])?>";

            if(searchTerm == 'userPosition'){
                getLocation();
            }
            else{
             searchInputField.value = searchTerm;

             //geacoding api gets searchTerm and returns lat & long 

             // addPositonMarker(lat,long);
            }
      
        
       

        
    </script>
</body>
</html>