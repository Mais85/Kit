@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')
    <button id="comapnies-view-button-open" class="button button_white">View Group of companies</button>

    @include('site.catalog')

    <div class="content">

        <div class="project-item-page-header-block mb-40" style="background-image: url(img/project_main.png);">
            <div class="container-fluid">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <div class="project-item-page-header">
                            <a href="our-projects.html" class="link link_blue link_page mb-45">Our projects</a>
                            <h1 class="project-item-page__title">Qəhrəman Donorlar</h1>
                            <div class="project-item-page__add-info">
                                <span class="project-item-page__category">– Xeyriyyıçilik</span>
                                <span class="project-item-page__year">/ 2019 /</span>
                            </div>
                            <span class="project-item-page__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                            <a href="#" class="button button_white button_uppercase" target="_blank">view project’s website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h2 class="page-mini-title mb-40">Mission</h2>
                    <div class="page-hr mb-40"></div>
                    <div class="project-item-page-mission-list row mb-75">
                        <div class="project-item-page-mission-list__item col-md-6 col-12">Right here, right now, we need you and millions of others to come together and create a movement for change. Lots of small actions make a big difference and so we’ve pulled together a huge selection of ways you can take personal actions or join with other change-makers all over the world, to have a real impact on issues you care about.</div>
                        <div class="project-item-page-mission-list__item col-md-6 col-12">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue. We make some of the world’s best-known brands – all are on a journey to reducing their environmental footprint and increasing their positive social impact.</div>
                    </div>
                    <!-- <ul class="project-item-page-mission-list mb-75">
                        <li class="project-item-page-mission-list__item">Right here, right now, we need you and millions of others to come together and create a movement for change. Lots of small actions make a big difference and so we’ve pulled together a huge selection of ways you can take personal actions or join with other change-makers all over the world, to have a real impact on issues you care about.</li>
                        <li class="project-item-page-mission-list__item">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue. We make some of the world’s best-known brands – all are on a journey to reducing their environmental footprint and increasing their positive social impact.</li>
                    </ul> -->
                </div>
            </div>
        </div>

        <div class="container-fluid mb-75">
            <div class="row">
                <div class="offset-1 col-1 flex-row-center-center">
                    <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_left"></button>
                </div>
                <div class="col-8">
                    <div class="project-item-carousel owl-carousel">
                        <div class="project-item-carousel__item">
                            <div class="project-item-carousel__img" style="background-image: url(img/project_item.png)"></div>
                        </div>
                        <div class="project-item-carousel__item">
                            <div class="project-item-carousel__img" style="background-image: url(img/project_item.png)"></div>
                        </div>
                        <div class="project-item-carousel__item">
                            <div class="project-item-carousel__img" style="background-image: url(img/project_item.png)"></div>
                        </div>
                    </div>
                </div>
                <div class="col-1 flex-row-center-center">
                    <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_right"></button>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-50">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h2 class="page-mini-title mb-40">General information</h2>
                    <div class="page-hr mb-40"></div>
                    <ul class="gen-info-project-list mb-10">
                        <li class="gen-info-project-list__item">
                            <span class="gen-info-project-list__name">Toplam donor sayı:</span>
                            <span class="gen-info-project-list__value">50 412</span>
                            <span class="gen-info-project-list__description">qəhraman donorlar xib edilmiş müraciətə əsasən</span>
                        </li>
                        <li class="gen-info-project-list__item">
                            <span class="gen-info-project-list__name">Qana ehtiyacı olanlar sayı:</span>
                            <span class="gen-info-project-list__value">31 273</span>
                            <span class="gen-info-project-list__description">qəhraman donorlar xib edilmiş müraciətə əsasən</span>
                        </li>
                        <li class="gen-info-project-list__item">
                            <span class="gen-info-project-list__name">Verilmiş qanın həcmi:</span>
                            <span class="gen-info-project-list__value">124 894 litr</span>
                            <span class="gen-info-project-list__description">mart 2019</span>
                        </li>
                        <li class="gen-info-project-list__item">
                            <span class="gen-info-project-list__name">Təşkil edilmiş qan aksiyaların sayı:</span>
                            <span class="gen-info-project-list__value">754</span>
                            <span class="gen-info-project-list__description">1 oktyabr 2014-u ildən məlumat yenilənənə qədər</span>
                        </li>
                        <li class="gen-info-project-list__item">
                            <span class="gen-info-project-list__name">Məlumatın yenilənmə tarixi:</span>
                            <span class="gen-info-project-list__value">07 noyabr 2019</span>
                        </li>
                    </ul>

                    <div class="page-hr mb-55"></div>

                    <ul class="project-info-list">
                        <li class="project-info-list__item">
                            <span class="project-info-list__name">Sayta keçid</span>
                            <a href="#" class="project-info-list__link">qehramandonor.az</a>
                        </li>
                        <li class="project-info-list__item">
                            <span class="project-info-list__name">Telefon</span>
                            <span class="project-info-list__value">+994 55 814 41 91</span>
                        </li>
                        <li class="project-info-list__item">
                            <span class="project-info-list__name">Email</span>
                            <span class="project-info-list__value">info@qehramandonor.az</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>



        <div class="container-fluid bc-light-blue">
            <div class="other-more-section">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <h2 class="page-mini-title mb-40">Other projects</h2>
                        <div class="page-hr mb-65"></div>
                        <div class="row">
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 mb-20">
                                <div class="project-item" style="background-image: url(img/project_item_preview.png);">
                                    <span class="project-item__category">– Xeyriyyıçilik</span>
                                    <h2 class="project-item__title">Qəhrəman Donorlar</h2>
                                    <span class="project-item__year">/ 2019 /</span>
                                    <span class="project-item__description">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue.</span>
                                    <a href="project-item.html" class="button button_light-blue button_uppercase">view more info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
