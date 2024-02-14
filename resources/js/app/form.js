document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Предотвращаем отправку формы

        // Получаем значения полей формы
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const topic = document.getElementById("topic").value;
        const message = document.getElementById("message").value;
        const answer = document.getElementById("answer").value;

        // Проверка на пустые поля
        if (!name,  !email,  !topic,  !message,  !answer) {
            alert("Пожалуйста, заполните все поля формы.");
            return;
        }

        // Проверка валидности E-mail с использованием регулярного выражения
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Пожалуйста, введите корректный E-mail адрес.");
            return;
        }

        // Создаем объект с данными формы в JSON-формате
        const formData = {
            name,
            email,
            topic,
            message,
            answer,
        };

        // Преобразуем объект в строку JSON и сохраняем в cookie
        document.cookie = "formData=" + JSON.stringify(formData);

        // Выводим значения полей в диалоговое окно
        alert(JSON.stringify(formData));
    });

    // Добавим функционал для отображения данных из cookie при загрузке страницы
    const savedFormData = getCookie("formData");
    if (savedFormData) {
        alert("Значения из cookie: " + savedFormData);
    }

    // Добавим функционал для очистки cookie при нажатии кнопки "Очистить"
    form.addEventListener("reset", function () {
        document.cookie = "formData=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    });

    // Функция для получения значения cookie по имени
    function getCookie(name) {
        const cookies = document.cookie.split("; ");
        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].split("=");
            if (cookie[0] === name) {
                return cookie[1];
            }
        }
        return null;
    }
});
