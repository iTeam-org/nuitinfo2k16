<?php echo $this->Html->script('http://code.jquery.com/jquery.min.js'); ?>
<div id="map" style="width:100%;height:500px"></div>

<script>
    /* $(document).ready(function () {
     
     });*/
    var json = [
        {
            "title": "Stockholm",
            "lat": 59.3,
            "lng": 18.1,
            "description": "Stockholm is the capital and the largest city of Sweden and constitutes the most populated urban area in Scandinavia with a population of 2.1 million in the metropolitan area (2010)"
        },
        {
            "title": "Oslo",
            "lat": 59.9,
            "lng": 10.8,
            "description": "Oslo is a municipality, and the capital and most populous city of Norway with a metropolitan population of 1,442,318 (as of 2010)."
        },
        {
            "title": "Copenhagen",
            "lat": 55.7,
            "lng": 12.6,
            "description": "Copenhagen is the capital of Denmark and its most populous city, with a metropolitan population of 1,931,467 (as of 1 January 2012)."
        }
    ];
    function myMap() {
        var myCenter = new google.maps.LatLng(51.508742, -0.120850);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: myCenter,
            zoom: 5,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true,
            rotateControl: true
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var geocoder = new google.maps.Geocoder();
        //var latLng;
        var latLng2;
        for (var i = 0, length = json.length; i < length; i++) {
            var data = json[i];
            geocoder.geocode({'address': data.title}, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    latLng = results[0].geometry.location;
                    // Creating a marker and putting it on the map
                    var marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                        title: data.title
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
        
    marker.setMap(map);
    }



</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASsb_-IPSArCj2H4AtVL1sABaeH9agkUE&callback=myMap"></script>