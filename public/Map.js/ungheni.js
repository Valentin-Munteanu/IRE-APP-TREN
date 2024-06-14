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
    let pointg = [47.0729278, 28.7535937]
    let point1 = [47.1499755, 28.6200305];
    let pointb = [ 47.1873901, 28.4569995]
    let point2 = [47.2443178, 28.3346240];
    let point3 = [47.2794081, 28.2061947];
    let point4 = [48.5999903, 37.9987519];
    let point5 = [47.3628544, 28.0025621];
    let point6 = [47.3227722, 27.8920900];

    let end = [47.2034975, 27.7998692];

    L.marker(start).addTo(map).bindPopup('Chișinău').openPopup();
    L.marker(pointg).addTo(map).bindPopup("Ghidighici")
    L.marker(point1).addTo(map).bindPopup("Strășeni")
    L.marker(pointb).addTo(map).bindPopup("Bucuvet")
    L.marker(point2).addTo(map).bindPopup("Călărași")
    L.marker(point3).addTo(map).bindPopup('Sipoteni')
    L.marker(point4).addTo(map).bindPopup('Bahmut')
    L.marker(point5).addTo(map).bindPopup('Cornești')
    L.marker(point6).addTo(map).bindPopup('Pârlița')


    L.marker(end).addTo(map).bindPopup('Ungheni');
});
