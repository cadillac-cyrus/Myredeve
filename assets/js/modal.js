document.addEventListener('DOMContentLoaded', function() {
    var openModalBtn = document.getElementById('btn-open');
    var modal = document.getElementById('myModal');
    var closeModalBtn = modal.querySelector('.btn-close');
    var modalOverlay = modal.querySelector('.overlay');

    openModalBtn.addEventListener('click', function(event) {
        event.preventDefault();
        modal.classList.remove('hidden');
        modalOverlay.classList.add('active');
    });

    closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
    });

    modalOverlay.addEventListener('click', function(event) {
        if (event.target === modalOverlay) {
            modal.classList.add('hidden');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var openModalBtn = document.getElementById('btn-open2',);
    var modal = document.getElementById('myModal2');
    var closeModalBtn = modal.querySelector('.btn-close2');
    var modalOverlay = modal.querySelector('.overlay-2');

    openModalBtn.addEventListener('click', function(event) {
        event.preventDefault();
        modal.classList.remove('hidden');
        modalOverlay.classList.add('active');
    });

    closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
    });

    modalOverlay.addEventListener('click', function(event) {
        if (event.target === modalOverlay) {
            modal.classList.add('hidden');
        }
    });
});