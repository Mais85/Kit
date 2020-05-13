@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')
    <button id="comapnies-view-button-open" class="button button_white">View Group of companies</button>
    @include('site.catalog')

    <div class="content">

        <div class="container-fluid pt-70 mb-90">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h1 class="page-title mb-30">About us</h1>

                    <div class="row mb-80">
                        <div class="col-lg-6 col-12">
                            <h2 class="about__title">the best, strongest</h2>
                            <span class="about__description">Right here, right now, we need you and millions of others to come together and create a movement for change. Lots of small actions make a big difference and so we’ve pulled together a huge selection of ways you can take personal actions or join with other change-makers all over the world, to have a real impact on issues you care about.</span>
                        </div>
                        <div class="col-lg-6 col-12 flex-row-center-center">
                            <img src="img/about_img.png" class="about__img" />
                        </div>
                    </div>

                    <h2 class="page-mini-title mb-40">Pholosophy</h2>
                    <div class="page-hr mb-40"></div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="img/reliability.svg" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">Reliability</h3>
                                <span class="pholosophy-item__description">Take complete control of your assets with our non-custodial.</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="img/reliability.svg" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">Rapidity</h3>
                                <span class="pholosophy-item__description">All fees are transparent, upfront, and listed when you place.</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="img/reliability.svg" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">Safe & Secure</h3>
                                <span class="pholosophy-item__description">We verify and authenticate our users with industry technologies.</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="img/reliability.svg" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">Benefit</h3>
                                <span class="pholosophy-item__description">Take complete control of your assets with our non-custodial.</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mission container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h2 class="page-mini-title page-mini-title_white mb-40">Mission</h2>
                    <div class="page-hr page-hr_grey-2 mb-40"></div>
                </div>
                <div class="offset-xl-2 col-xl-4 offset-sm-1 col-sm-5 col-12">
                    <span class="mission__description">Right here, right now, we need you and millions of others to come together and create a movement for change. Lots of small actions make a big difference and so we’ve pulled together a huge selection of ways you can take personal actions or join with other change-makers all over the world, to have a real impact on issues you care about.</span>
                </div>
                <div class="col-xl-4 col-sm-5 col-12">
                    <span class="mission__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue. We make some of the world’s best-known brands – all are on a journey to reducing their environmental footprint and increasing their positive social impact.</span>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-80 pb-80">
            <div class="other-more-section">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <h2 class="page-mini-title mb-40">Certificates</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-1 col-1 flex-row-center-center">
                        <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_left"></button>
                    </div>
                    <div class="col-8">
                        <div class="certificates-carousel owl-carousel">
                            <div class="certificates-carousel__item">
                                <div class="certificate-item">
                                    <div class="certificate-item__img-box" style="background-image: url(img/certificate_1.png)"></div>
                                    <h3 class="certificate-item__title">Name of certificate</h3>
                                    <span class="certificate-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                    <a href="img/certificate_1.png" class="link link_blue link_size-16 link_underlined ta-center" data-lightbox="certificates-links" data-title="Name of certificate">View details</a>
                                </div>
                            </div>
                            <div class="certificates-carousel__item">
                                <div class="certificate-item">
                                    <div class="certificate-item__img-box" style="background-image: url(img/certificate_2.png)"></div>
                                    <h3 class="certificate-item__title">Certificate of achievement</h3>
                                    <span class="certificate-item__description">We’ve taken the axe throwing out of the woodland and brought it into the city.</span>
                                    <a href="img/certificate_2.png" class="link link_blue link_size-16 link_underlined ta-center" data-lightbox="certificates-links" data-title="Name of certificate">View details</a>
                                </div>
                            </div>
                            <div class="certificates-carousel__item">
                                <div class="certificate-item">
                                    <div class="certificate-item__img-box" style="background-image: url(img/certificate_3.png)"></div>
                                    <h3 class="certificate-item__title">Name of certificate</h3>
                                    <span class="certificate-item__description">Wrapped in a vibrant venu.</span>
                                    <a href="img/certificate_3.png" class="link link_blue link_size-16 link_underlined ta-center" data-lightbox="certificates-links" data-title="Name of certificate">View details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 flex-row-center-center">
                        <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_right"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bc-light-blue pt-70 pb-100">

            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h2 class="page-mini-title mb-40">Direction</h2>
                    <div class="page-hr page-hr_grey-2 mb-40"></div>

                    <div class="direction row">
                        <div class="col-12 mb-25">
                            <div class="direction-item direction-item_big">
                                <div class="direction-item__img-box-block">
                                    <div class="direction-item__img-box">
                                        <img src="img/direction_ayla.png" class="direction-item__img" />
                                    </div>
                                </div>
                                <div class="direction-item__main-info">
                                    <h3 class="direction-item__name">Ayla Mamedova</h3>
                                    <span class="direction-item__position">CEO, KIT Finance</span>
                                    <img src="img/kit_group_logo_dark.png" class="direction-item__logo"/>
                                </div>
                                <div class="direction-item__contacts">
                                    <span class="direction-item__email">aylamamedova@kitfinance.az</span>
                                    <span class="direction-item__phone">+994 12 345 67 89</span>
                                    <span class="direction-item__phone">+994 55 987 65 43</span>
                                    <ul class="direction-item-social-list">
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/facebook.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/twitter.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/linkedin.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/google.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-25">
                            <div class="direction-item">
                                <div class="direction-item__img-box-block">
                                    <div class="direction-item__img-box">
                                        <img src="img/direction_ayla.png" class="direction-item__img" />
                                    </div>
                                </div>
                                <div class="direction-item__main-info">
                                    <h3 class="direction-item__name">Ayla Mamedova</h3>
                                    <span class="direction-item__position">CEO, KIT Finance</span>
                                    <img src="img/kit_group_logo_dark.png" class="direction-item__logo"/>
                                </div>
                                <div class="direction-item__contacts">
                                    <span class="direction-item__email">aylamamedova@kitfinance.az</span>
                                    <span class="direction-item__phone">+994 12 345 67 89</span>
                                    <span class="direction-item__phone">+994 55 987 65 43</span>
                                    <ul class="direction-item-social-list">
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/facebook.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/twitter.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/linkedin.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/google.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-25">
                            <div class="direction-item">
                                <div class="direction-item__img-box-block">
                                    <div class="direction-item__img-box">
                                        <img src="img/direction_ayla.png" class="direction-item__img" />
                                    </div>
                                </div>
                                <div class="direction-item__main-info">
                                    <h3 class="direction-item__name">Ayla Mamedova</h3>
                                    <span class="direction-item__position">CEO, KIT Finance</span>
                                    <img src="img/kit_group_logo_dark.png" class="direction-item__logo"/>
                                </div>
                                <div class="direction-item__contacts">
                                    <span class="direction-item__email">aylamamedova@kitfinance.az</span>
                                    <span class="direction-item__phone">+994 12 345 67 89</span>
                                    <span class="direction-item__phone">+994 55 987 65 43</span>
                                    <ul class="direction-item-social-list">
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/facebook.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/twitter.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/linkedin.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/google.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-25">
                            <div class="direction-item">
                                <div class="direction-item__img-box-block">
                                    <div class="direction-item__img-box">
                                        <img src="img/direction_ayla.png" class="direction-item__img" />
                                    </div>
                                </div>
                                <div class="direction-item__main-info">
                                    <h3 class="direction-item__name">Ayla Mamedova</h3>
                                    <span class="direction-item__position">CEO, KIT Finance</span>
                                    <img src="img/kit_group_logo_dark.png" class="direction-item__logo"/>
                                </div>
                                <div class="direction-item__contacts">
                                    <span class="direction-item__email">aylamamedova@kitfinance.az</span>
                                    <span class="direction-item__phone">+994 12 345 67 89</span>
                                    <span class="direction-item__phone">+994 55 987 65 43</span>
                                    <ul class="direction-item-social-list">
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/facebook.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/twitter.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/linkedin.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="#" class="direction-item-social-list__link">
                                                <img src="img/google.svg" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
                    <div class="learn-more-section">
                        <span class="learn-more-section__description">keep in touch</span>
                        <h3 class="learn-more-section__title">Our contacts and location</h3>
                        <a href="#" class="learn-more-section__link">/ Visit page /</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
