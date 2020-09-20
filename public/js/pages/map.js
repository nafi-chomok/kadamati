function initAutocomplete() {
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -33.8688, lng: 151.2195 },
        zoom: 13,
        mapTypeId: "roadmap"
    });

    // Create the search box and link it to the UI element.
    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
        searchBox.setBounds(map.getBounds());
    });

    let markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
        const places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }
        // Clear out the old markers.
        markers.forEach(marker => {
            marker.setMap(null);
        });
        markers = [];
        // For each place, get the icon, name and location.
        const bounds = new google.maps.LatLngBounds();
        places.forEach(place => {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };
            // Create a marker for each place.
            markers.push(
                new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location
                })

            );

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }

            console.log(place.geometry.location.lng());
            const latitudeField = document.getElementById("latitude");
            const longitudeField = document.getElementById("longitude");

            latitudeField.value = place.geometry.location.lat();
            longitudeField.value = place.geometry.location.lng();




        });
        map.fitBounds(bounds);

        console.log(map.getZoom());
    });
}

function initMap() {
    const latitudeField = document.getElementById("latitude");
    const longitudeField = document.getElementById("longitude");
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: parseFloat(latitudeField.value), lng:parseFloat(longitudeField.value) },
        zoom: 13,
        mapTypeId: "roadmap"
    });

    var latLng = new google.maps.LatLng(parseFloat(latitudeField.value),parseFloat(longitudeField.value));
    var marker = new google.maps.Marker({
      position: latLng,
      map: map
    });

    marker.setMap(map);


}
