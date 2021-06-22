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
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <header>
        <!-- no header-->
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

                                    <!--target="_blank" action="map.php" method="GET"-->

                                  <div class="input-group ms-3  header-buttons" id="searchField" >
                                            
                                            <input autocomplete="off" type="text" class="form-control rounded" id="searchInput" placeholder="Streetname, City or zip code" name="search">
                                            
                                            <div class="input-group-append">
                                                <button class="btn btn-success shadow btn-lg" id="searchButton" onclick="geocode()">Go</button>
                                            </div>
                                    </div>
                                    <div id="result-list" class="text-start">
                                             </div>

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
        <div class="placeholder3"></div>
        <div class="container-fluid">
            <div class="row">
                <!--social media icons on the left-->
                <div class="col-xl-6 col-6 " id="footerLeft">
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

                <!--
                <div class="col-xl-6 col-6" id="footerCenter">

                   

                    <section class="">
                      
                    </section>

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


         

        
        var map = L.map('map', { zoomControl: false }); 

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=rtwXzaPknPj5CuAX8Sto', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>', 
        }).addTo(map);

        map.setZoom(15); //default zoom
        
        
       
        //div to which search results get appended
        var resultDiv = document.getElementById("result-list");

        function removeChildren(input) {
            while (input.firstChild) {
                input.removeChild(input.lastChild);
            }
        }

       
        function noResultInfo(){
             var lineDiv = document.createElement("div");
                            
                            lineDiv.className += " result-line";
                            lineDiv.innerHTML = "No results found...";
                             resultDiv.appendChild(lineDiv);
        }

        document.body.setAttribute("onclick", "removeChildren(resultDiv)"); //closes Results onclick 
   
        function geocode() {

            removeChildren(resultDiv);

            var searchTerm = document.getElementById("searchInput").value;
            


            var xmlhttp1 = new XMLHttpRequest();
            var url = "https://api.opencagedata.com/geocode/v1/json?key=3c38d15e76c02545181b07d3f8cfccf0&pretty=1&countrycode=it&q=" + searchTerm;

            

            var searchResults; //array containing result
           

            xmlhttp1.onreadystatechange = function () {
                if (this.readyState == 4) {
                    searchResult = JSON.parse(this.responseText);
                    showResult();
                }
            };
            xmlhttp1.open("GET", url, true);
            xmlhttp1.send();


            function showResult() {
            var i = 0;
            var stop = false;
                while (i < 5 && stop == false) {
                   
                    if(typeof(searchResult.results[i]) == "undefined" ){
                        if(i == 0){
                           noResultInfo();
                        }
                       
                        
                        stop = true;

                    }
                    else{
                        var formattedResult = searchResult.results[i].formatted;
                        var long = searchResult.results[i].geometry.lng;
                        var lat = searchResult.results[i].geometry.lat;
                       

                        var lineDiv = document.createElement("div");
                        lineDiv.innerHTML = formattedResult;
                        
                        lineDiv.className += " result-line";
                        lineDiv.setAttribute("onclick", "setSearchMarker(" + i + ")");
                        var inputLong = document.createElement("input");
                        inputLong.type="hidden";
                        inputLong.value=long;
                        inputLong.id="long" + i;

                        var inputLat = document.createElement("input");
                        inputLat.type="hidden";
                        inputLat.value=lat;
                        inputLat.id="lat" + i;
                    
                        lineDiv.appendChild(inputLong);
                        lineDiv.appendChild(inputLat);

                        resultDiv.appendChild(lineDiv);
                    }

                    i++;

                }

            }

        }


        var searchInputField = document.getElementById("searchInput");
       
        searchInputField.addEventListener("keyup", function(event) {
             if (event.keyCode === 13) {
                event.preventDefault();
                geocode(); 
             }
        });
    

        var searchTerm = "<?php 
        $data = filter_var(addslashes($_GET["search"]), FILTER_SANITIZE_STRING);
        Print($data);
        ?>";

            if(searchTerm == 'userPosition'){
                getLocation();
            }
            else{
             searchInputField.value = searchTerm;

             geocode();
            
            }
        
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


        
        
        
        var positionMarkerLong;
        var positionMarkerLat;
        var countPositionChange = 0;
        
        function setSearchMarker(index){
 
            var lat = document.getElementById("lat" + index).value;
            var long = document.getElementById("long" + index).value;

            
            removeChildren(resultDiv);

            addPositionMarker(lat, long);

           
           

        }



        function addPositionMarker(latIn, longIn){
            
        if(countPositionChange == 0){
           
        userPosition = L.marker([latIn, longIn]).addTo(map);
        userPosition._icon.classList.add("userPositionMarker");
            userPosition.bindPopup("<h6>Your are here!</h6>").openPopup(); 
            
            map.setView([latIn, longIn]);
        }
        else{
           
                userPosition.setLatLng([latIn,longIn]).openPopup;
            
             map.setView([latIn, longIn]);
        }


         countPositionChange++;
         
         
         


        }

      
        
    
         function getLocation() {
           
     
         navigator.geolocation.getCurrentPosition(showPosition);

        }

        function showPosition(position) {
  
            addPositionMarker(position.coords.latitude, position.coords.longitude);
        }
        

        /*function setRoute(stationLat, stationLong){
              userPos = userPosition.getLatLng();
              if(userPos == 'undefined'){
                     alert("Please specifie your position first");
              }
              else{
                    L.Routing.control({
                       waypoints:   [
                       L.latLng(userPos),
                       L.latLng(stationLat, stationLong)
                       ]
                    }).addTo(map);
                }
         
             }
       
      */
        
       

        
    </script>
</body>
</html>