<section class="catalog">
    <div class="catalog__container container">
        <div class="catalog__title">
            Наш каталог пластинок
        </div>

        <form class="catalog__genres-form" action="#!" method="GET">
            <div class="catalog__genres">
                <button class="catalog__genres-button" type="button" name="genre" value="all">Все</button>
                <button class="catalog__genres-button" type="button" name="genre" value="{{ \App\Enums\GenreEnum::HIP_HOP->value }}">Hip hop</button>
                <button class="catalog__genres-button" type="button" name="genre" value="lo-fi">{{ \App\Enums\GenreEnum::LOFI->value }}</button>
                <button class="catalog__genres-button" type="button" name="genre" value="lounge">{{ \App\Enums\GenreEnum::LOUNGE->value }}</button>
                <button class="catalog__genres-button" type="button" name="genre" value="jazz">{{ \App\Enums\GenreEnum::JAZZ->value }}</button>
                <button class="catalog__genres-button" type="button" name="genre" value="ambient">{{ \App\Enums\GenreEnum::AMBIENT->value }}</button>
            </div>
        </form>
        <div class="catalog__items">

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
