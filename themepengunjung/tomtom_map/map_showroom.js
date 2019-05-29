tomtom.setProductInfo('Show Room Car', '1.0.0');

var instructionMarker, groupMarkersLayer, lastPointShowroom, lastStartPoint;
var points = [];

// Setting TomTom keys
tomtom.routingKey(showroom.map_properties.tokenApi);
tomtom.searchKey(showroom.map_properties.tokenApi);

// Creating map
var map = tomtom.L.map('mapid', {
    center: [-7.782889, 110.3648873],
    zoom: 15,
    key: showroom.map_properties.tokenApi,
    zoomControl: false,
    basePath: 'https://api.tomtom.com/maps-sdk-js/4.47.6/examples/sdk'
});

tomtom.controlPanel({
    position: 'topright',
    collapsed: false,
    close: null,
    closeOnMapClick: false
}).addTo(map).addContent(document.getElementById('labels-container'));

// map.zoomControl.setPosition('bottomright');

// Adding route-on-map widget
var routeOnMapView = tomtom.routeOnMap({
    generalMarker: {
        draggable: true,
        zIndexOffset: 10
    },
    serviceOptions: {
        instructionsType: 'tagged',
        language: "id-ID"
    }
}).addTo(map);

// Adding route-instructions widget
var routeInstructionsInstance = tomtom.routeInstructions({
    size: [340, 330],
    position: 'topleft',
    instructionGroupsCollapsed: true
}).addTo(map);

var startMarkerOptions = {
    icon: tomtom.L.icon({
        iconUrl: showroom.map_properties.baseUrl + '/tomtom_map/img/start1.png',
        iconSize: [60, 64],
        iconAnchor: [30, 60]
    })
};

var dealerMarkerOptions = {
    icon: tomtom.L.icon({
        iconUrl: showroom.map_properties.baseUrl + '/tomtom_map/img/dealer2.png',
        iconSize: [60, 64],
        iconAnchor: [30, 60]
    })
};

var startMarker = tomtom.L.marker([-7.782889, 110.3648873], startMarkerOptions).addTo(map);

showroom.place.forEach(function (data) {
    var location = data.geometry.coordinates;
    var name = data.properties.name;
    var marker = tomtom.L.marker(location, dealerMarkerOptions).addTo(map);
    marker.bindPopup(name, { offset: [0, -47] });
    marker.addEventListener('click', (function (marker) {
        var end = marker.getLatLng()
        return function () {
            if (lastPointShowroom) {
                if (lastPointShowroom.lat != end.lat && lastPointShowroom.lng != end.lng) {
                    if (points.length > 1) {
                        points.pop();
                        lastPointShowroom = undefined;
                    }
                }
            }
            points.push(end);
            if (points.length > 1) {
                routeOnMapView.draw(points);
                lastPointShowroom = marker.getLatLng();
            } else {
                points.pop();
            }
        }
    })(marker));
});

map.on('click', function (event) {
    var point = event.latlng;
    start = [point.lat, point.lng];
    startMarkerFunc(point);
});

function startMarkerFunc(start) {
    if (points.length > 0) {
        points = [];
    }
    map.removeLayer(startMarker);
    lastStartPoint = start;
    startMarker = tomtom.L.marker(start, startMarkerOptions).addTo(map);
    points.push(start);
}

document.getElementById('submit-button').addEventListener('click', submitButtonHandler);

function submitButtonHandler() {
    console.log("MASUK");
    routeInstructionsInstance.hide();
    routeOnMapView.clear();
    startMarker.setLatLng([-7.782889, 110.3648873]);
    points = [];
    map.setZoom(15);
    map.setView([-7.782889, 110.3648873]);
  }

// Connecting route-on-map with route-instructions widget
routeOnMapView.on(routeOnMapView.Events.RouteChanged, function (eventObject) {
    routeInstructionsInstance.updateGuidanceData(eventObject.instructions);
});

// Focus a instruction step in the map when the use select it on the route-instructions widget
routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionClickedSelect, function (eventObject) {
    map.setView({ lat: eventObject.point.latitude, lon: eventObject.point.longitude }, 17);
});
// Focus a instructions group in the map when the use select it on the route-instructions widget
routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupClickedExpand, function (eventObject) {
    zoomToPoints(eventObject.points);
});
routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupClickedCollapse, function (eventObject) {
    zoomToPoints(eventObject.points);
});
// Show popups over the points in the map when the use move the cursor over the instruction steps
routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionHoverOn, function (eventObject) {
    var position = {
        lat: eventObject.point.latitude,
        lon: eventObject.point.longitude
    };
    instructionMarker = tomtom.L.marker(position, {
        icon: tomtom.L.icon({
            iconUrl: showroom.map_properties.baseUrl + '/tomtom_map/img/instruction_marker.svg',
            iconSize: tomtom.L.Browser.retina ? [34, 34] : [20, 20],
            iconAnchor: tomtom.L.Browser.retina ? [17, 17] : [10, 10]
        }),
        zIndexOffset: 100
    });
    map.addLayer(instructionMarker);
    tomtom.L.popup({ autoPan: false, maxWidth: 150 }).setLatLng(position)
        .setContent(eventObject.message.toString()).openOn(map);
});
routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionHoverOff, function () {
    map.removeLayer(instructionMarker);
    instructionMarker = undefined;
    map.closePopup();
});
// Hightlight all the steps of a group in the map when the use move the cursor over an instructions group
routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupHoverOn, function (eventObject) {
    var markersForGroup = eventObject.points.map(function (instruction) {
        return tomtom.L.marker({
            lat: instruction.latitude,
            lon: instruction.longitude
        }, {
                icon: tomtom.L.icon({
                    iconUrl: showroom.map_properties.baseUrl + '/tomtom_map/img/instruction_marker.svg',
                    iconSize: tomtom.L.Browser.retina ? [25, 25] : [15, 15],
                    iconAnchor: tomtom.L.Browser.retina ? [13, 13] : [7, 7]
                }),
                zIndexOffset: 100
            });
    });
    groupMarkersLayer = tomtom.L.layerGroup(markersForGroup);
    map.addLayer(groupMarkersLayer);
});
routeInstructionsInstance.on(routeInstructionsInstance.Events.InstructionGroupHoverOff, function () {
    map.removeLayer(groupMarkersLayer);
});
function zoomToPoints(points) {
    var latLons = points.map(function (point) {
        return tomtom.L.latLng(point.latitude, point.longitude);
    });
    map.fitBounds(tomtom.L.latLngBounds(latLons));
}
