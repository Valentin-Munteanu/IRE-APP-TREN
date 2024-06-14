function toggleDropdown(button) {
    toggleVisibility(button, 'vagon');
}

function toggleDropdown2(button) {
    toggleVisibility(button, 'vagon2');
}

function toggleDropdown3(button) {
    toggleVisibility(button, 'vagon3');
}

function toggleDropdown4(button) {
    toggleVisibility(button, 'vagon4');
}


function toggleVisibility(button, vagonClass) {
    let vagonDiv = button.closest('.vagon_info').nextElementSibling;
    if (vagonDiv !== null && vagonDiv.classList.contains(vagonClass)) {
        if (vagonDiv.classList.contains('show')) {
            vagonDiv.classList.remove('show');
            setTimeout(() => vagonDiv.style.display = 'none', 300);
        } else {
            vagonDiv.style.display = 'block';
            setTimeout(() => vagonDiv.classList.add('show'), 150);
        }
    }
}
