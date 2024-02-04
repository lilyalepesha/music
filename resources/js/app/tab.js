window.onload = () => {
    (function() {
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.catalog__genres-button');

            buttons.forEach(button => {
                button.addEventListener('click', (event) => {
                    event.preventDefault();
                    buttons.forEach(otherButton => {
                        otherButton.classList.remove('active');
                    });
                    button.classList.add('active');
                });
            });
        });
    })();
}
