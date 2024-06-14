function toggleVisibility(button, containerClass) {
    const formDrop = button.closest(containerClass).nextElementSibling;
    if (formDrop !== null) {
        if (formDrop.classList.contains("show")) {
            formDrop.classList.remove("show");
            setTimeout(() => formDrop.style.display = 'none', 300);
        } else {
            formDrop.style.display = 'block';
            setTimeout(() => formDrop.classList.add("show"), 10);
        }
    }
}
