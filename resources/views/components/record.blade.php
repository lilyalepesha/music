<section class="record">
    <h1 class="record__title">Подборки пластинок</h1>
    <div class="record__container container">
        <div class="swiper record__content record__content-slider">
            <div class="swiper-wrapper record__wrapper">
                @foreach($records as $record)
                    <div class="swiper-slide record__content-item record__item">
                        <div class="record__item-img">
                            <span>{{ $record?->description }}</span>
                            <img src="{{ asset('storage/' . $record->image_url) }}" alt="img">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="record__content-slider__buttons">
            <div class="record__content-slider-prev">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="white"/>
                    <path d="M26 14L15.5 22.5L26 30.5" stroke="black" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>

            <div class="record__content-slider-next">
                <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="22" cy="22" r="22" fill="white"/>
                    <path d="M17 30.5L27.5 22L17 14" stroke="black" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </div>
</section>
