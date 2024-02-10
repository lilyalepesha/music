window.onload = () => {
    (function() {
        document.querySelectorAll('.catalog__genres-button').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelectorAll('.catalog__genres-button').forEach(button => {
                    button.classList.remove('active');
                });
                item.classList.add('active');
            });
        });
    })();
};
