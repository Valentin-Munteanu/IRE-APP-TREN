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
    let point1 = [47.1499755, 28.6200305];
    let point2 = [47.2443178, 28.3346240];
    let point3 = [47.2034975, 27.7998692];
    let end = [47.1655500, 27.5693656];

    L.marker(start).addTo(map).bindPopup('Chișinău').openPopup();
    L.marker(point1).addTo(map).bindPopup("Strășeni")
    L.marker(point2).addTo(map).bindPopup("Călărași")
    L.marker(point3).addTo(map).bindPopup('Ungheni')
    L.marker(end).addTo(map).bindPopup('Iași');
});
