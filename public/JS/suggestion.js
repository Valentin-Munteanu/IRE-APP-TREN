document.addEventListener('DOMContentLoaded', function() {
    let inputRight = document.querySelector('.input_right');
    let inputLeft = document.querySelector('.input_left');

    function addSuggestions(inputElement) {
        let suggestionsList = document.createElement('datalist');
        suggestionsList.id = 'suggestions';
        inputElement.parentNode.appendChild(suggestionsList);

        inputElement.addEventListener('input', function() {
            const inputValue = inputElement.value.trim();
            if (inputValue === '') {
                suggestionsList.innerHTML = '';
                return;
            }

            let stations = ['Chisinau', 'Iasi', "Cahul", "Galati", "Cernauti", "Odesa", "Otaci", "Valcinet", "Bender", "Balti", "Ungheni", "Mateuti",];

            suggestionsList.innerHTML = '';

            stations.forEach(station => {
                if (!inputRight.value.includes(station) && !inputLeft.value.includes(station)) {
                    let option = document.createElement('option');
                    option.value = station;
                    suggestionsList.appendChild(option);
                }
            });
        });
    }

    addSuggestions(inputRight);
    addSuggestions(inputLeft);
});



   document.getElementById('switch-input-values').addEventListener('click', function() {
        let inputRight = document.querySelector('.input_right');
        let inputLeft = document.querySelector('.input_left');

        let valueFromRight = inputRight.value;

        inputRight.value = inputLeft.value;
        inputLeft.value = valueFromRight;
    });
