window.onload = () => {
    (function () {
        const genreButtons = document.querySelectorAll('.catalog__genres-button');
        const showMoreBtn = document.getElementById('show-more-btn');
        const catalogItemsContainer = document.querySelector('.catalog__items');
        const imgSrc = document.getElementById('image_src').value;

        // Функция для установки класса активности на выбранной кнопке жанра
        function setActiveGenreButton(button) {
            genreButtons.forEach(button => {
                button.classList.remove('active');
            });
            button.classList.add('active');
        }

        // Функция для отправки запроса на сервер при загрузке страницы
        async function loadInitialData() {
            const genre = 'all'; // Любой жанр, который вы хотите отобразить изначально
            await fetchData({ genre, showMore: false }); // Отправить запрос на сервер для первоначальной загрузки
        }

        // Вызов функции для загрузки данных при загрузке страницы
        loadInitialData();

        genreButtons.forEach(button => {
            button.addEventListener('click', async function (e) {
                e.preventDefault();

                const genre = button.value;

                // Установить класс активности на выбранной кнопке жанра
                setActiveGenreButton(button);

                // Отправить запрос на сервер с параметром жанра
                await fetchData({ genre });
            });
        });

        // Обработчик клика по кнопке "Показать ещё"
        showMoreBtn.addEventListener('click', async function (e) {
            e.preventDefault();

            const showMore = true;
            const genre = document.querySelector('.catalog__genres-button.active')?.value || 'all';

            // Отправить запрос на сервер с параметрами "Показать ещё" и жанром
            await fetchData({ showMore, genre });
        });

        // Функция для отправки запроса на сервер и обновления каталога
        async function fetchData(params) {
            try {
                const response = await fetch('/catalog/api/filter?' + new URLSearchParams(params), {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Если требуется CSRF-токен
                    }
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();

                if (data.success) {
                    // Очистить текущие элементы в каталоге
                    catalogItemsContainer.innerHTML = '';

                    // Добавить новые элементы в каталог
                    data.data.forEach(artist => {
                        const catalogItem = document.createElement('div');
                        catalogItem.classList.add('catalog__item');
                        catalogItem.innerHTML = `
                        <div class="catalog__item-img">
                            <img src="${imgSrc + '/' + artist.record_image}" alt="author">
                        </div>
                        <div class="catalog__item-content catalog__content">
                            <span class="catalog__content-author">${artist.artist_name}</span>
                            <h4 class="catalog__content-title">${artist.record_name}</h4>
                            <div class="catalog__content-wrapper">
                                <div class="catalog__content-album">
                                     <div>Жанр: </div>
                                     <span>${artist.genre_title}</span>
                                    <div class="album">Альбом: </div>
                                    <span>${artist.album_name}</span>
                                </div>
                                <div class="catalog__content-cost catalog-cost">
                                    <span class="discount">- ${ Math.round(artist.discount / artist.price)} %</span>
                                    <div class="catalog-cost-discount">${artist.price} BYN</div>
                                    <div class="catalog-cost-original">${artist.discount} BYN</div>
                                </div>
                            </div>
                        </div>
                    `;
                        catalogItemsContainer.appendChild(catalogItem);
                    });
                } else {
                    console.error('Ошибка при загрузке данных: ' + data.message);
                }
            } catch (error) {
                console.error('Ошибка при загрузке данных:', error);
            }
        }
    })();
}
