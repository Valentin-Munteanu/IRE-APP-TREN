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
    let point1 = [46.6757904, 29.0956785];
    let point2 = [46.6955276, 28.8962132];
    let point3 = [46.6367462, 28.9240410];
    let point4 = [46.5366797, 28.9273661];
    let point5 = [46.3272086, 28.9839414];
    let point6 = [46.3626910, 28.6601595];
    let point7 = [46.4235598, 28.4318522];
    let point8 = [46.2731391, 28.1885866];
    let point9 = [46.2831351, 28.2333876];
    let end = [45.9225188, 28.1928887];


    L.marker(start).addTo(map).bindPopup('Chișinău').openPopup();
    L.marker(point1).addTo(map).bindPopup("Căinari");
    L.marker(point2).addTo(map).bindPopup("Zloți");
    L.marker(point3).addTo(map).bindPopup("Ciuflești");
    L.marker(point4).addTo(map).bindPopup("Cimișlia");
    L.marker(point5).addTo(map).bindPopup("Basarabeasca");
    L.marker(point6).addTo(map).bindPopup("Comrat");
    L.marker(point7).addTo(map).bindPopup("Iargara");
    L.marker(point8).addTo(map).bindPopup("Prut 2");
    L.marker(point9).addTo(map).bindPopup("Prut 1");
    L.marker(end).addTo(map).bindPopup('Cahul');

});
