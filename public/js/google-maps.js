var m = new google.maps.Map(document.getElementById('my-map'), {
    zoom: 14,

    // position of codeup
    center: {
        lat:  29.426791,
        lng: -98.489602
    }
});

var g = new google.maps.Geocoder();
g.geocode({ address: 'austin' }, function(res, stts) {
    // Check for a successful result
    if (stts == google.maps.GeocoderStatus.OK) {
        m.setZoom(4);
        for(var i = 0; i < res.length; i += 1) {
            var mar = new google.maps.Marker({
                position: res[i].geometry.location,
                map: m
            });
            var iw = new google.maps.InfoWindow({
                content: res[i].formatted_address
            });
            iw.open(m, mar);
        }
    } else {
        // Show an error message with the status if our request fails
        alert("Geocoding was not successful - STATUS: " + stts);
    }
});

document.getElementById('zoom-btn').addEventListener('click', function(e){
    var zl = document.getElementById('change-zoom').value;
    m.setZoom(parseInt(zl));
});