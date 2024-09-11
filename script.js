// Функция для открытия модального окна
function openModal(id) {
    var modal = document.getElementById('modal-' + id);
    modal.style.display = "block";
}

// Функция для закрытия модального окна
function closeModal(id) {
    var modal = document.getElementById('modal-' + id);
    modal.style.display = "none";
}

// Закрытие модального окна при клике вне его области
window.onclick = function(event) {
    var modals = document.getElementsByClassName('modal');
    for (var i = 0; i < modals.length; i++) {
        if (event.target == modals[i]) {
            modals[i].style.display = "none";
        }
    }
}