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
    let point1 = [47.8073485, 28.0652581];
    let point2 = [47.8854552, 28.3073422];
    let point3 = [47.8326055, 28.4425656];
    let point4 = [47.8578227, 28.6061663];
    let point5 = [47.8176283, 28.7912174];
    let end = [47.7985578, 28.9489313];

    L.marker(start).addTo(map).bindPopup('Balti').openPopup();
    L.marker(point1).addTo(map).bindPopup("Alexandreni");
    L.marker(point2).addTo(map).bindPopup("Florești");
    L.marker(point3).addTo(map).bindPopup("Rogojeni");
    L.marker(point4).addTo(map).bindPopup("Cobilnea");
    L.marker(point5).addTo(map).bindPopup("Șoldanesti");
    L.marker(end).addTo(map).bindPopup('Mateuți');
});
