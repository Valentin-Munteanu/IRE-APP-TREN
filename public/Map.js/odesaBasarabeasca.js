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
    let point2 = [45.9970579, 29.4201956];
    let point3 = [ 46.1848606, 30.3379051];
    let end = [46.4666018, 30.7406995];

    L.marker(start).addTo(map).bindPopup('Chisinau').openPopup();
    L.marker(pointb).addTo(map).bindPopup("Căinari")
    L.marker(point1).addTo(map).bindPopup("Basarabeasca")
    L.marker(point2).addTo(map).bindPopup("Arțâz")
    L.marker(point3).addTo(map).bindPopup('Belgorod-Dnistrovsk')
    L.marker(end).addTo(map).bindPopup('Odesa');
});
