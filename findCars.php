<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="./style/main.css">

    <title>Find a Car</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <link href="css/adminAdd-page.css" rel="stylesheet">

    <!-- Initialize Firebase.js -->
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase.js"></script>
    <script src="/js/config_and_init.js"></script>

    <!-- Tracking Auth State -->
    <script src="/js/tracking_auth_state.js"></script>

    <!-- SignOut button funtion -->
    <script src="/js/signout.js"></script>

    <script>
    function initMap(){
        
        var map = new google.maps.Map(document.getElementById("map"),{
            zoom: 17,
            center: {lat:-37.808115,  lng:144.963002,}
        });

        var markerOne = new google.maps.Marker({
            position: {lat:-37.807602, lng: 144.962020}, 
            map: map,
            icon: "img/carIconMap.png"
        })
        markerOne.addListener('click', function(){
            infoWindow.open(map, markerOne);
        });


        var markerTwo = new google.maps.Marker({
            position: {lat:-37.808610, lng:144.963049}, 
            map: map,
            icon: "img/carIconMap.png"
        })

        var markerThree = new google.maps.Marker({
            position: {lat:-37.808084,  lng: 144.960774}, 
            map: map,
            icon: "img/carIconMap.png"
        })

        var markerFour = new google.maps.Marker({
            position: {lat:-37.809131, lng:144.961297 }, 
            map: map,
            icon: "img/carIconMap.png"
        })

        var markerFive = new google.maps.Marker({
            position: {lat:-37.806381, lng:144.963047 }, 
            map: map,
            icon: "img/carIconMap.png"
        })

        var markerSix = new google.maps.Marker({
            position: {lat:-37.808972,  lng:144.965895 }, 
            map: map,
            icon: "img/carIconMap.png"
        })


        var infoWindow = new google.maps.InfoWindow({
                content:`<h6 style="font-size:0.7rem; line-height:10px">Car Name</h6>
                <p>
                <img src="./img/carPic.jpg" style="width: 85px; height: 55px;" alt="">                    
            </p>
                <h6 style="font-size:0.7rem; line-height:5px">Status: Available</h6>
                <h6 style="font-size:0.7rem; line-height:5px">Start Date: 2020/12/20</h6>
                <h6 style="font-size:0.7rem; line-height:5px"><a href="/login">Book from here</a></h6>
            `
                
            });

        markerTwo.addListener('click', function(){
                infoWindow.open(map, markerTwo);
        });
        markerThree.addListener('click', function(){
            infoWindow.open(map, markerThree);
        });
        markerFour.addListener('click', function(){
            infoWindow.open(map, markerFour);
        });
        markerFive.addListener('click', function(){
            infoWindow.open(map, markerFive);
        });
        markerSix.addListener('click', function(){
            infoWindow.open(map, markerSix);
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiKjehIUL_O5YuWsqhHZwdyHIqHTDXIYg&callback=initMap"
      type="text/javascript"></script>
    
    <script src="./js/main.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">CarShare</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/booking">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/userProfile">User Profile</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/userRecords">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/findCars">Find a Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" onclick="signout()">Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="containerMapPage">
                <h2 style="text-align: center; padding: 1%;">Find a Car</h2>
                <div id="map"></div>    
        </div>

        <footer id="footer" class="py-2 bg-light text-black-90">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="./index.html"> shareCars.com</a>
            </div>
            <!-- Copyright -->
    
        </footer>
    </div>

</body>

</html>