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
    let point2 = [47.5490143, 27.7406210];
    let point3 = [47.7861097, 27.9259845];
    let point4 = [48.0308608, 27.8098753];
    let point5 = [48.2354049, 27.6090995];
    let point6 = [48.4054180, 27.4849108];
 let point7 =[48.4122024, 27.5983978];
 let point8 = [48.4391779, 27.5760883]
    let end = [48.4505221, 27.7361088];

    L.marker(start).addTo(map).bindPopup('Chișinău').openPopup();
    L.marker(point1).addTo(map).bindPopup("Ungheni");
    L.marker(point2).addTo(map).bindPopup("Fălești");
    L.marker(point3).addTo(map).bindPopup("Bălți");
    L.marker(point4).addTo(map).bindPopup("Drochia");
    L.marker(point5).addTo(map).bindPopup("Dondușeni");
    L.marker(point6).addTo(map).bindPopup("Ocnița");
    L.marker(point7).addTo(map).bindPopup("Gârbova");
    L.marker(point8).addTo(map).bindPopup("Naslavcea");


    L.marker(end).addTo(map).bindPopup('Valcinet(Otaci)');
});
