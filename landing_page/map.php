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
    <style>
        #map{ height: 70vh;   }
        #searchBar{height: 10vh; }
    </style>
</head>
<body onload="getLocation()">
     <header>
     <div class="text-center mt-2 container alert alert-warning" role="alert">
 Simple Website to test java script with API
</div>
     </header>

     <section   class=" container mt-4">
     
     <div class="row">
     
         <form class="form-inline justify-content-center col-9" target="_blank" action="map.php" method="GET">
               
                    <div class="input-group"  id="searchField">
                     <input type="hidden" value="" name="long" >
                     <input type="hidden" value="" name="lat" >
                        <input type="text" class="form-control" placeholder="Streetname, City or zip code" name="search" id="inputSearch">
                        <div class="input-group-append">
                            <button class="btn btn-success shadow" type="submit">Go</button>
                        </div>
                    </div>
                 
                
                
        </form>

        <form class="col-3">
             
                <input type="hidden" value="" name="long" id="inputLong">
                <input type="hidden" value="" name="lat" id="inputLat">
                <button class="btn btn-secondary" type="submit">Show my positon</button> <!--add php get method so that new marker gets created with coordinates-->

        </form>
        </div>

     </section>

     

     <section id="map" class="container mt-4"></section>

     
    

    <!-- shows json data as a table-->
    <section class="container text-center" >
        
        <div id="div1" >
            <h3>Raw JSON Data provided by the open data hub</h2>
            <div >
                <h5><a id="link"></a></h5> 
                <div id="buttons">
                    <!--add buttons to filter content-->
                    
                </div>
                <p id="notActive"></p>

                <table id="table1">
                    <tr>
                        <th>Name</th>
                        <th></th>
                        <th>X-Coordinate</th>
                        <th>Y-Coordinate</th>
                        <th>Origin</th>
                        <th>Active</th>
                        <th>Bays available</th>
                        
                        <th>Count</th>
                    </tr>

                </table>
            </div>  
           
        </div>
        
    </section>


    <section id="map" class="container"></section>
    <script>
        
    
        //
        var map = L.map('map'); 

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=rtwXzaPknPj5CuAX8Sto', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>', 
      
        }).addTo(map);

        map.setZoom(14); //default zoom
        
        //set values for user marker
        
      
        
        var long = <?php Print($_GET["long"])?> + "";
        var lat = <?php Print($_GET["lat"])?> + "";

      

        if(long == ""){
        long = 46.4907; //default bozen if no value is passed
        lat = 11.3398;

         

        }else{
            var userPosition = L.marker([long, lat]).addTo(map);
        userPosition.bindPopup("Your Position").openPopup(); // ?php echo $_GET["search"] ?
        }



        
        

      
        
        
        
       
        
       
       
        
        //Geolocation api set value of hidden input types to send php get method with long & lat

        var inputLong = document.getElementById("inputLong");
        var inputLat = document.getElementById("inputLat");

        function getLocation() {
           
     
         navigator.geolocation.getCurrentPosition(showPosition);
        
        


           

        }

        

        function showPosition(position) {
            inputLong.value = position.coords.latitude;
             inputLat.value = position.coords.longitude; 
        }


      //execute getLocation function onload of body
      var body = document.body;
        body.setAttribute("onload", "getLocation()");
      

       //JSON form open data hub
            var xmlhttp = new XMLHttpRequest();
            var url = "https://mobility.api.opendatahub.bz.it/v2/flat/BikesharingStation";

            var a = document.createElement("a");
        a.href = url;
    
            a.appendChild(document.createTextNode(url));
            var linkDiv = document.getElementById("link");
            linkDiv.appendChild(a);
       
        var myArr;
            

            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    myArr = JSON.parse(this.responseText);
                    showData();
                }
            };
            xmlhttp.open("GET", url, true);
        xmlhttp.send();

        var notActive = 0;
        var tabelle = document.getElementById("table1");


        

        function showData() {
                
            var i;
            for (i = 0; i < myArr.data.length; i++) {
                
                //var xc = myArr.data[i].scoordinate.x;

               //if(xc < 12 && xc > 11){ //filter out only data in southtyrol 
                    showThisLine(myArr.data[i]);
               // }
                
                map.setView([long, lat]);
                        
 
                }

    
               
        }
        var lineCount = 0;
        //function which adds line to table
        function showThisLine(arrayLine) {
            var tr = document.createElement("tr");

            lineCount++;

            //function which adds a td child to the tr parent
            function addTD(value) {
                var td = document.createElement("td");
                td.appendChild(document.createTextNode(value));
                tr.appendChild(td);
            }


            function addTDLink(url, label) {
                var td = document.createElement("td");
                var a = document.createElement("a");
                a.href = url;
                a.appendChild(document.createTextNode(label));
                td.appendChild(a);
                tr.appendChild(td);
            }


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
            


             var markerNew = L.marker([y, x]).addTo(map);
                markerNew.bindPopup(name).openPopup();

            addTD(name);
            addTDLink(url, "Link to Service");
            addTD(x);
            addTD(y);
            addTD(origin);
            addTD(active);
            addTD(totalBays);
            
            addTD(lineCount);
            
            






            tabelle.appendChild(tr);
        }

       /*
       add reverse geocoding api to use values form searchBar
       ask only one time for position
       */
       
        
    </script>
</body>
</html>