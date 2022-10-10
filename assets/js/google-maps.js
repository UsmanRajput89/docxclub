function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: 33.6844, lng: 73.0479};

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Islamabad, Pakistan' // Title Location
    });
}