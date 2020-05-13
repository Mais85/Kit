@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')
    <button id="comapnies-view-button-open" class="button button_white">View Group of companies</button>

    @include('site.catalog')

    <div class="content">

        <div class="container-fluid pt-30 mb-15">
            <div class="row">
                <div class="offset-xl-3 col-xl-5 offset-sm-2 col-sm-7 col-12">
                    <a href="#" class="link link_blue link_page mb-20">News</a>
                    <h1 class="news-item-page__title">Tramp Zelenski ilə naməlum söhbətindən danışdı</h1>
                    <div class="news-item-page__add">
                        <span class="news-item-page__date">05 noyabr 2019</span>
                        <span class="news-item-page__type">/ Yeni müştərİmİz /</span>
                    </div>
                    <div class="news-item-page__text-box">
                        <img src="img/news_item_page_1.png" />
                        <p>Right here, right now, we need you and millions of others to come together and create a movement for change. Lots of small actions make a big difference and so we’ve pulled together a huge selection of ways you can take personal actions or join with other change-makers all over the world, to have a real impact on issues you care about.</p>
                        <p>Turindəki “Alyans Stadium”da keçirilən oyun meydan sahiblərinin qələbəsi ilə yekunlaşıb - 1:0. Beləliklə də, “İnter”i bir xalla üstələyərək “Yuventus” yenidən İtaliya Çempionatının birinci pilləsinə yüksəlib.</p>
                        <p>Turinlilər üçün qələbə qolunun müəllifi argentinalı Dibala oldu. O, meydana 55-ci dəqiqədə Kriştianu Ronaldunun yerinə daxil olub və 77-ci dəqiqədə oyunun yeganə qolunu vurub.</p>
                        <img src="img/news_item_page_1.png" />
                        <p>Right here, right now, we need you and millions of others to come together and create a movement for change. Lots of small actions make a big difference and so we’ve pulled together a huge selection of ways you can take personal actions or join with other change-makers all over the world, to have a real impact on issues you care about.</p>
                        <p>Turindəki “Alyans Stadium”da keçirilən oyun meydan sahiblərinin qələbəsi ilə yekunlaşıb - 1:0. Beləliklə də, “İnter”i bir xalla üstələyərək “Yuventus” yenidən İtaliya Çempionatının birinci pilləsinə yüksəlib.</p>
                        <p>Turinlilər üçün qələbə qolunun müəllifi argentinalı Dibala oldu. O, meydana 55-ci dəqiqədə Kriştianu Ronaldunun yerinə daxil olub və 77-ci dəqiqədə oyunun yeganə qolunu vurub.</p>
                    </div>
                    <h2 class="page-mini-title mb-40">General information</h2>
                    <div class="page-hr mb-45"></div>
                    <ul class="gen-info-list">
                        <li class="gen-info-list__item">
                            <span class="gen-info-list__name">Sifarişçi:</span>
                            <span class="gen-info-list__value">Expressbank</span>
                        </li>
                        <li class="gen-info-list__item">
                            <span class="gen-info-list__name">İcraçı:</span>
                            <span class="gen-info-list__value">Vertical Group</span>
                        </li>
                        <li class="gen-info-list__item">
                            <span class="gen-info-list__name">Lahiyənin adı:</span>
                            <span class="gen-info-list__value">Expresso</span>
                        </li>
                        <li class="gen-info-list__item">
                            <span class="gen-info-list__name">Xidmətin növü:</span>
                            <span class="gen-info-list__value">Reklam</span>
                        </li>
                        <li class="gen-info-list__item">
                            <span class="gen-info-list__name">Xidmətin növü:</span>
                            <span class="gen-info-list__value">Reklam</span>
                        </li>
                        <li class="gen-info-list__item">
                            <span class="gen-info-list__name">Xidmətin növü:</span>
                            <span class="gen-info-list__value">Reklam</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid bc-light-blue">
            <div class="other-more-section">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <h2 class="page-mini-title mb-40">Other news</h2>
                        <div class="page-hr mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 flex-row-center-center">
                        <button href="javascript:void(0)" class="carousel-button carousel-button_left"></button>
                    </div>
                    <div class="col-8">
                        <div class="news-carousel owl-carousel">
                            <div class="news-carousel__item">
                                <a href="news-item.html" class="news-item">
                                    <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                                    <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                                    <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <span class="news-item__date">05 noyabr 2019</span>
                                </a>
                            </div>
                            <div class="news-carousel__item">
                                <a href="news-item.html" class="news-item">
                                    <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                                    <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                                    <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <span class="news-item__date">05 noyabr 2019</span>
                                </a>
                            </div>
                            <div class="news-carousel__item">
                                <a href="news-item.html" class="news-item">
                                    <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                                    <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                                    <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <span class="news-item__date">05 noyabr 2019</span>
                                </a>
                            </div>
                            <div class="news-carousel__item">
                                <a href="news-item.html" class="news-item">
                                    <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                                    <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                                    <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <span class="news-item__date">05 noyabr 2019</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 flex-row-center-center">
                        <button href="javascript:void(0)" class="carousel-button carousel-button_right"></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
