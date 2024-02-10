<section class="catalog">
    <div class="catalog__container container">
        <div class="catalog__title">
            Наш каталог пластинок
        </div>

        <form class="catalog__genres-form" action="#!" method="GET">
            <div class="catalog__genres">
                <button class="catalog__genres-button" type="button" name="genre" value="all">Все</button>
                <button class="catalog__genres-button" type="button" name="genre" value="hip-hop">Hip hop</button>
                <button class="catalog__genres-button" type="button" name="genre" value="lo-fi">Lo-fi</button>
                <button class="catalog__genres-button" type="button" name="genre" value="lounge">Lounge</button>
                <button class="catalog__genres-button" type="button" name="genre" value="jazz">Jazz</button>
                <button class="catalog__genres-button" type="button" name="genre" value="ambient">Ambient</button>
            </div>
        </form>
        <div class="catalog__items">
            @foreach($artists as $artist)
                <div class="catalog__item">
                    <div class="catalog__item-img">
                        <img src="https://im.kommersant.ru/Issues.photo/NEWS/2023/02/27/KMO_191711_00091_1_t222_155015.jpg" alt="author">
                    </div>
                    <div class="catalog__item-content catalog__content">
                        <span class="catalog__content-author">{{ $artist->artist_name }}</span>
                        <h4 class="catalog__content-title">{{ $artist->record_name }}</h4>
                        <div class="catalog__content-wrapper">
                            <div class="catalog__content-genres">
                                <div class="{{ \App\Enums\GenreEnum::tryFrom($artist->genre_title)?->color() }}">
                                    {{ \App\Enums\GenreEnum::tryFrom($artist->genre_title)?->title() }}</div>
                                </div>
                            </div>
                            <div class="catalog__content-album">
                                <div>Альбом: </div>
                                <span>{{ $artist->album_name }}</span>
                            </div>
                            <div class="catalog__content-cost catalog-cost">
                                <span class="discount">- {{ round($artist->discount / $artist->price) }} %</span>
                                <div class="catalog-cost-discount">{{ $artist->price }} BYN</div>
                                <div class="catalog-cost-original">{{ $artist->discount }} BYN</div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
        <form id="show-more-form" action="{{ url()->current() }}" method="get" class="show-more__wrapper">
            <input type="hidden" name="show-more" value="true">
            <button id="show-more-btn" class="button-orange catalog__show-more">Показать ещё</button>
            @if(request()->has('genre'))
                <input type="hidden" name="genre" value="{{ request()->input('genre') }}">
            @endif
        </form>
    </div>
</section>
