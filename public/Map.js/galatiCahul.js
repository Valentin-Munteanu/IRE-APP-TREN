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
    let pointb = [46.6757904, 29.0956785];
    let point1 = [46.3272086, 28.9839414];
    let point2 = [46.3626910, 28.6601595];
    let point3 = [46.4235598, 28.4318522];
    let point4 = [46.2731391, 28.1885866];
    let point5 = [ 45.9225188, 28.1928887]
    let point6 = [45.6420584, 28.1734525]
    let point7 = [45.4717762, 28.2026721];
    let end = [45.4448687, 28.0610374];

    L.marker(start).addTo(map).bindPopup('Chisinau').openPopup();
    L.marker(pointb).addTo(map).bindPopup("Cainari")
    L.marker(point1).addTo(map).bindPopup("Basarabeasca")
    L.marker(point2).addTo(map).bindPopup("Comrat")
    L.marker(point3).addTo(map).bindPopup("Iargara")
    L.marker(point4).addTo(map).bindPopup("Prut 2")
    L.marker(point5).addTo(map).bindPopup("Cahul")
    L.marker(point6).addTo(map).bindPopup("Văleni")
    L.marker(point7).addTo(map).bindPopup("Giurgiulești")
    L.marker(end).addTo(map).bindPopup('Galați');

});
