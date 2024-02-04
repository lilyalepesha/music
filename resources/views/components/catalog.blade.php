<section class="catalog">
    <div class="catalog__container container">
        <div class="catalog__title">
            Наш каталог пластинок
        </div>
        <form class="catalog__genres-form" action="#!" method="GET">
            <div class="catalog__genres">
                <button class="catalog__genres-button" type="submit" name="genre" value="all">Все</button>
                <button class="catalog__genres-button" type="submit" name="genre" value="hip-hop">Hip hop</button>
                <button class="catalog__genres-button" type="submit" name="genre" value="lo-fi">Lo-fi</button>
                <button class="catalog__genres-button" type="submit" name="genre" value="lounge">Lounge</button>
                <button class="catalog__genres-button" type="submit" name="genre" value="jazz">Jazz</button>
                <button class="catalog__genres-button" type="submit" name="genre" value="ambient">Ambient</button>
            </div>
        </form>
        <div class="catalog__items">
            <div class="catalog__item">
                <div class="catalog__item-img">
                    <img src="https://im.kommersant.ru/Issues.photo/NEWS/2023/02/27/KMO_191711_00091_1_t222_155015.jpg" alt="author">
                </div>
                <div class="catalog__item-content catalog__content">
                    <span class="catalog__content-author">grandson</span>
                    <h4 class="catalog__content-title">Death Of An Optimist</h4>
                    <div class="catalog__content-wrapper">
                        <div class="catalog__content-genres">
                            <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">Alternative Rock</div>
                            <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">Alternative Rock</div>
                        </div>
                        <div class="catalog__content-cost catalog-cost">
                            <span class="discount">-228%</span>
                            <div class="catalog-cost-discount">249 BYN</div>
                            <div class="catalog-cost-original">500 BYN</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__item">
                <div class="catalog__item-img">
                    <img src="https://im.kommersant.ru/Issues.photo/NEWS/2023/02/27/KMO_191711_00091_1_t222_155015.jpg" alt="author">
                </div>
                <div class="catalog__item-content catalog__content">
                    <span class="catalog__content-author">grandson</span>
                    <h4 class="catalog__content-title">Death Of An Optimist</h4>
                    <div class="catalog__content-wrapper">
                        <div class="catalog__content-genres">
                            <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">Alternative Rock</div>
                            <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">Alternative Rock</div>
                        </div>
                        <div class="catalog__content-cost catalog-cost">
                            <span class="discount">-228%</span>
                            <div class="catalog-cost-discount">249 BYN</div>
                            <div class="catalog-cost-original">500 BYN</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__item">
                <div class="catalog__item-img">
                    <img src="https://im.kommersant.ru/Issues.photo/NEWS/2023/02/27/KMO_191711_00091_1_t222_155015.jpg" alt="author">
                </div>
                <div class="catalog__item-content catalog__content">
                    <span class="catalog__content-author">grandson</span>
                    <h4 class="catalog__content-title">Death Of An Optimist</h4>
                    <div class="catalog__content-wrapper">
                        <div class="catalog__content-genres">
                            <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">Alternative Rock</div>
                            <div class="{{ \App\Enums\GenreEnum::tryFrom('Alternative Rock')?->color() }}">Alternative Rock</div>
                        </div>
                        <div class="catalog__content-cost catalog-cost">
                            <span class="discount">-228%</span>
                            <div class="catalog-cost-discount">249 BYN</div>
                            <div class="catalog-cost-original">500 BYN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-more__wrapper">
            <button class="button-orange catalog__show-more">Показать ещё</button>
        </div>
    </div>
</section>
