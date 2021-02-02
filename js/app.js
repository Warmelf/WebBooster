document.addEventListener('DOMContentLoaded', function() {

    const openPopupAllButton = document.querySelectorAll('.card__button');
    const popup = document.querySelector('.popup');
    const closePopup = document.querySelector('.popup__close');
    const popupBody = document.querySelector('.popup__body');

    const form = document.querySelector('.popup__form');

    openPopupAllButton.forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            popup.classList.remove('hidden');
        });
    })

    closePopup.addEventListener('click', (e) => {
        e.preventDefault();
        popup.classList.add('hidden');
    });

    popupBody.addEventListener('click', (e) => {
        if (!e.target.closest('.popup__content')) {
            popup.classList.add('hidden');
        }
    });

    document.addEventListener('keyup', (e) => {
        if (e.keyCode === 27) {
            popup.classList.add('hidden');
        }
    });

    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();
        let formData = new FormData(form);

        let response = await fetch('sendmail.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            alert(result.message);
            form.reset();
        } else {
            alert('Что-то пошло не так :(');
        }
    }
});