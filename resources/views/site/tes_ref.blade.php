@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')
    <button id="comapnies-view-button-open" class="button button_white">View Group of companies</button>

    @include('site.catalog')

    <div class="content">

        <div class="container-fluid pt-50 mb-80">
            <div class="row">
                <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
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
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
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
                                            <span class="testimonial-item__position-text">CEO, <span class="testimonial-item__position-text-bold">eBay</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="references" class="tab-pane">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-12 mb-60">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-60">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-60">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-60">
                                    <div class="reference-item">
                                        <a href="img/reference_item.png" class="reference-item__img-link" data-lightbox="references-links" data-title="Name of certificate">
                                            <img src="img/reference_item.png" class="reference-item__img" />
                                        </a>
                                        <h2 class="reference-item__title">Name of certificate</h2>
                                        <span class="reference-item__description">Description of Certificate. Yes, you’ve read that correctly.</span>
                                        <a href="img/reference_item.png" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">Zoom letter</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-12 mb-60">
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
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid bc-light-blue">
            <div class="row">
                <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
                    <div class="learn-more-section">
                        <span class="learn-more-section__description">Learn more about</span>
                        <h3 class="learn-more-section__title">Our clients</h3>
                        <a href="#" class="learn-more-section__link">/ Visit page /</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
