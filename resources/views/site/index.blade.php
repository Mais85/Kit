@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}
@include("inc.site.header")

@section('content')
<div class="index-page">
    <button id="comapnies-view-button-open" class="button button_white">View Group of companies</button>
      @include('site.catalog')
    <div class="content">

    <section id="index-why" class="index-why">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-12">
                    <div class="index-why-carousel owl-carousel mb-30">
                        <div class="index-why-carousel__item">
                            <img src="img/why_1.png" class="index-why-carousel__img" />
                        </div>
                        <div class="index-why-carousel__item">
                            <img src="img/why_2.jpg" class="index-why-carousel__img" />
                        </div>
                        <div class="index-why-carousel__item">
                            <img src="img/why_1.png" class="index-why-carousel__img" />
                        </div>
                        <div class="index-why-carousel__item">
                            <img src="img/why_2.jpg" class="index-why-carousel__img" />
                        </div>
                        <div class="index-why-carousel__item">
                            <img src="img/why_1.png" class="index-why-carousel__img" />
                        </div>
                        <div class="index-why-carousel__item">
                            <img src="img/why_2.jpg" class="index-why-carousel__img" />
                        </div>
                        <div class="index-why-carousel__item">
                            <img src="img/why_1.png" class="index-why-carousel__img" />
                        </div>
                    </div>

                    <h2 class="index-why__title mb-30">why kit group</h2>
                    <span class="index-why__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</span>
                </div>
            </div>
        </div>
    </section>

    <section class="index-clients">
        <div class="container-fluid">
            <h2 class="index-title index-title_white mb-50">our clients</h2>
            <div class="row mb-40">
                <div class="offset-sm-1 col-sm-1 col-2 flex-row-center-start">
                    <button id="index-clients-left" href="javascript:void(0)" class="carousel-button-2 carousel-button-2_transparent carousel-button-2_left"></button>
                </div>

                <div class="col-8">
                    <div class="index-clients-carousel owl-carousel">
                        <div class="index-clients-carousel__item">
                            <img src="img/client_neftchi.png" class="index-clients-carousel__img" />
                        </div>
                        <div class="index-clients-carousel__item">
                            <img src="img/client_affa.png" class="index-clients-carousel__img" />
                        </div>
                        <div class="index-clients-carousel__item">
                            <img src="img/client_bs2.png" class="index-clients-carousel__img" />
                        </div>
                        <div class="index-clients-carousel__item">
                            <img src="img/client_gunay_bank.png" class="index-clients-carousel__img" />
                        </div>
                        <div class="index-clients-carousel__item">
                            <img src="img/client_premium_bank.png" class="index-clients-carousel__img" />
                        </div>
                        <div class="index-clients-carousel__item">
                            <img src="img/client_bella_plaza.png" class="index-clients-carousel__img" />
                        </div>
                        <div class="index-clients-carousel__item">
                            <img src="img/client_fifa.png" class="index-clients-carousel__img" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-1 col-2 flex-row-center-end">
                    <button id="index-clients-right" href="javascript:void(0)" class="carousel-button-2 carousel-button-2_transparent carousel-button-2_right"></button>
                </div>

            </div>
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <a href="#" class="button button_dark-blue-alpha button_uppercase button_full">VIEW all clients</a>
                </div>
            </div>
        </div>
    </section>

    <section class="index-news bc-light-grey">
        <div class="container-fluid">
            <h2 class="index-title mb-50">news</h2>

            <div class="row mb-10">
                <div class="offset-lg-2 col-lg-2 col-md-6 col-12 mb-20">
                    <a href="news-item.html" class="news-item">
                        <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                        <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                        <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                        <span class="news-item__date">05 noyabr 2019</span>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-12 mb-20">
                    <a href="news-item.html" class="news-item">
                        <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                        <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                        <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                        <span class="news-item__date">05 noyabr 2019</span>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-12 mb-20">
                    <a href="news-item.html" class="news-item">
                        <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                        <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                        <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                        <span class="news-item__date">05 noyabr 2019</span>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-12 mb-20">
                    <a href="news-item.html" class="news-item">
                        <div class="news-item__img-box" style="background-image: url(img/news_item_preview.png);"></div>
                        <h2 class="news-item__title">“Moody's” Britaniyaya təsəlli vermədi</h2>
                        <span class="news-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                        <span class="news-item__date">05 noyabr 2019</span>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <a href="#" class="button button_white button_uppercase button_full">VIEW all news list</a>
                </div>
            </div>
        </div>
    </section>

    <div class="index-test-ref">
        <div class="container-fluid">
            <ul class="test-ref-nav nav-tabs mb-50">
                <li class="test-ref-nav__item active nav-tabs__item">
                    <h2><a href="javascript:void(0)" class="test-ref-nav__link page-title nav-tabs__link" data-tab="#testimonials">testimonials</a></h2>
                </li>
                <li class="test-ref-nav__item nav-tabs__item">
                    <h2><a href="javascript:void(0)" class="test-ref-nav__link page-title nav-tabs__link" data-tab="#references">references</a></h2>
                </li>
            </ul>

            <div class="tab-content">
                <div id="testimonials" class="tab-pane">
                    <div class="row mb-30">
                        <div class="offset-sm-1 col-sm-1 col-2 flex-row-center-start">
                            <button id="index-test-left" href="javascript:void(0)" class="carousel-button carousel-button_light-blue carousel-button_left"></button>
                        </div>

                        <div class="col-8">
                            <div class="index-test-carousel owl-carousel">
                                <div class="index-test-carousel__item">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item__img-box-block">
                                            <div class="testimonial-item__img-box">
                                                <img src="img/testimonial_person.png" class="testimonial-item__img"/>
                                            </div>
                                        </div>
                                        <span class="testimonial-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city.</span>
                                        <div class="testimonial-item__hr"></div>
                                        <div class="testimonial-item__personal">
                                            <h3 class="testimonial-item__name">Tanya Fisher</h3>
                                            <ul class="testimonial-item-social-list">
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/facebook.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/twitter.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/linkedin.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/google.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item__position">
                                            <span class="testimonial-item__position-name">CEO,</span>
                                            <span class="testimonial-item__position-value">eBay</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="index-test-carousel__item">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item__img-box-block">
                                            <div class="testimonial-item__img-box">
                                                <img src="img/testimonial_person.png" class="testimonial-item__img"/>
                                            </div>
                                        </div>
                                        <span class="testimonial-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city.</span>
                                        <div class="testimonial-item__hr"></div>
                                        <div class="testimonial-item__personal">
                                            <h3 class="testimonial-item__name">Tanya Fisher</h3>
                                            <ul class="testimonial-item-social-list">
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/facebook.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/twitter.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/linkedin.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/google.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item__position">
                                            <span class="testimonial-item__position-name">CEO,</span>
                                            <span class="testimonial-item__position-value">eBay</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="index-test-carousel__item">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item__img-box-block">
                                            <div class="testimonial-item__img-box">
                                                <img src="img/testimonial_person.png" class="testimonial-item__img"/>
                                            </div>
                                        </div>
                                        <span class="testimonial-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city.</span>
                                        <div class="testimonial-item__hr"></div>
                                        <div class="testimonial-item__personal">
                                            <h3 class="testimonial-item__name">Tanya Fisher</h3>
                                            <ul class="testimonial-item-social-list">
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/facebook.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/twitter.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/linkedin.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/google.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item__position">
                                            <span class="testimonial-item__position-name">CEO,</span>
                                            <span class="testimonial-item__position-value">eBay</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="index-test-carousel__item">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item__img-box-block">
                                            <div class="testimonial-item__img-box">
                                                <img src="img/testimonial_person.png" class="testimonial-item__img"/>
                                            </div>
                                        </div>
                                        <span class="testimonial-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city.</span>
                                        <div class="testimonial-item__hr"></div>
                                        <div class="testimonial-item__personal">
                                            <h3 class="testimonial-item__name">Tanya Fisher</h3>
                                            <ul class="testimonial-item-social-list">
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/facebook.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/twitter.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/linkedin.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="#" class="testimonial-item-social-list__link">
                                                        <img src="img/google.svg" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item__position">
                                            <span class="testimonial-item__position-name">CEO,</span>
                                            <span class="testimonial-item__position-value">eBay</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-1 col-2 flex-row-center-end">
                            <button id="index-test-right" href="javascript:void(0)" class="carousel-button carousel-button_light-blue carousel-button_right"></button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-8 col-12">
                            <a href="test-ref.html" class="button button_light-blue button_uppercase button_full">VIEW more reviews</a>
                        </div>
                    </div>

                </div>
                <div id="references" class="tab-pane">
                    <div class="row mb-30">
                        <div class="offset-sm-1 col-sm-1 col-2 flex-row-center-start">
                            <button id="index-ref-left" href="javascript:void(0)" class="carousel-button carousel-button_light-blue carousel-button_left"></button>
                        </div>

                        <div class="col-8">
                            <div class="index-ref-carousel owl-carousel">
                                <div class="index-ref-carousel__item">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                                <div class="index-ref-carousel__item">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                                <div class="index-ref-carousel__item">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                                <div class="index-ref-carousel__item">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-1 col-2 flex-row-center-end">
                            <button id="index-ref-right" href="javascript:void(0)" class="carousel-button carousel-button_light-blue carousel-button_right"></button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-8 col-12">
                            <a href="test-ref.html" class="button button_light-blue button_uppercase button_full">VIEW more reviews</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <section id="index-companies" class="index-companies">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-2 col-lg-4 offset-md-1 col-md-5 offset-1 col-10">
                    <h2 class="index-companies__title">catalogs of companies</h2>
                    <span class="index-companies__description">Once your session starts, our trusty instructors will demonstrate how to safely and successfully throw an axe and then it’s your turn.</span>

                    <ul class="index-companies-list">
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">01</span>
                            <span class="index-companies-list__name">KIT Construction</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">02</span>
                            <span class="index-companies-list__name">KIT Media</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">03</span>
                            <span class="index-companies-list__name">KIT FIinance</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">01</span>
                            <span class="index-companies-list__name">KIT Construction</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">02</span>
                            <span class="index-companies-list__name">KIT Media</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">03</span>
                            <span class="index-companies-list__name">KIT FIinance</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">01</span>
                            <span class="index-companies-list__name">KIT Construction</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">02</span>
                            <span class="index-companies-list__name">KIT Media</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">03</span>
                            <span class="index-companies-list__name">KIT FIinance</span>
                            <a href="#" class="link link_blue link_icon link_icon_download">download (pdf, 356 KB)</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-md-flex col-lg-5 col-md-4 flex-row-center-center">
                    <img src="img/companies_img.png" class="index-companies__img">
                </div>
            </div>
        </div>
    </section>

    <section id="index-contacts" class="index-contacts">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-sm-2 col-sm-8 col-12">
                    <div class="contacts__main">
                        <span class="contacts__about">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping </span>
                        <ul class="contacts-social-list">
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/facebook_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/instagram_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/twitter_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/youtube_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="contacts__other mb-25">
                        <div class="contacts__address">
                            <span class="contacts__name">KIT Group</span>
                            <span class="contacts__value">36, 4 floor Chinar Park,</span>
                            <span class="contacts__value">Baku, Azerbaijan</span>
                        </div>
                        <div class="contacts__connection">
                            <span class="contacts__phone">012 345 67 89</span>
                            <span class="contacts__phone">055 814 41 91</span>
                            <span class="contacts__email">info@kitgroup.az</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="index-map"></div>


</div>
</div>
@stop
