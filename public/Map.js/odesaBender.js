document.addEventListener('DOMContentLoaded', function() {
    let map = L.map('map4').setView([47.0105, 28.8638], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);


    L.tileLayer('https://{s}.tiles.openrailwaymap.org/standard/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: 'Map data: &copy; OpenStreetMap contributors, OpenRailwayMap'
    }).addTo(map);

    let start = [47.0130540, 28.8602002];
    let pointb = [46.8428982, 29.4759273];
    let point1 = [46.8476247, 29.6295960];
    let point2 = [46.7541252, 30.0027278];
    let point3 = [46.8503034, 30.0737425];
    let end = [46.4666018, 30.7406995];

    L.marker(start).addTo(map).bindPopup('Chisinau').openPopup();
    L.marker(pointb).addTo(map).bindPopup("Bender")
    L.marker(point1).addTo(map).bindPopup("Tiraspol")
    L.marker(point2).addTo(map).bindPopup("Cuciurgan")
    L.marker(point3).addTo(map).bindPopup('Rozdilina 1')
    L.marker(end).addTo(map).bindPopup('Odesa');
});
