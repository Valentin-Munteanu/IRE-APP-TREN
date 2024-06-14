document.addEventListener('DOMContentLoaded', function() {
    let map = L.map('map').setView([47.0105, 28.8638], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    L.tileLayer('https://{s}.tiles.openrailwaymap.org/standard/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data: &copy; OpenStreetMap contributors, OpenRailwayMap'
    }).addTo(map);

    let start = [47.0130540, 28.8602002];
    let point1 = [47.2034975, 27.7998692];
    let point2 = [47.7861097, 27.9259845];
    let point3 = [48.4054180, 27.4849108];
    let point4 = [48.2902515, 26.7859993];
    let end = [48.3012428, 25.9302074];

    L.marker(start).addTo(map).bindPopup('Chișinău').openPopup();
    L.marker(point1).addTo(map).bindPopup("Ungheni");
    L.marker(point2).addTo(map).bindPopup("Bălți");
    L.marker(point3).addTo(map).bindPopup("Ocnița");
    L.marker(point4).addTo(map).bindPopup('Lipcani');
    L.marker(end).addTo(map).bindPopup('Cernăuți');
});
