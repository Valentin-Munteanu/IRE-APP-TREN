document.addEventListener('DOMContentLoaded', function() {
    let map = L.map('map').setView([47.0105, 28.8638], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    L.tileLayer('https://{s}.tiles.openrailwaymap.org/standard/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data: &copy; OpenStreetMap contributors, OpenRailwayMap'
    }).addTo(map);

    let start = [47.7861097, 27.9259845];
    let point1 = [47.7184960, 27.8191584];
    let point2 = [47.6786909, 27.7497767];
    let point3 = [47.5490143, 27.7406210]
    let point4 = [47.3476315, 27.6955652];
let point6 = [47.2878096, 27.7450396]
    let end = [47.2034975, 27.7998692];

    L.marker(start).addTo(map).bindPopup('Bălti').openPopup();
    L.marker(point1).addTo(map).bindPopup("Răuțel");
    L.marker(point2).addTo(map).bindPopup("Hiliuți");
    L.marker(point3).addTo(map).bindPopup("Fălesti");
    L.marker(point4).addTo(map).bindPopup("Buciumeni");
    L.marker(point6).addTo(map).bindPopup("Petrești");

    L.marker(end).addTo(map).bindPopup('Ungheni');
});
