var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 53.902039, lng: 27.559453},
        zoom: 12
    });
}