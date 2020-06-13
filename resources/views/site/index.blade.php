@extends('layouts.site')

@section('title', '| '. __('index.title'))


@section('content')
<div class="index-page">
    <div class="content">

    <section id="index-why" class="index-why">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-12">
                    <div class="index-why-carousel owl-carousel mb-30">
                        @foreach($photoblock1 as $elem)
                        <div class="index-why-carousel__item">
                            <img style="max-height: 500px; max-width: 930px" src="{{ $elem }}" class="index-why-carousel__img" />
                        </div>
                        @endforeach
                    </div>
                    <h2 class="index-why__title mb-30">{{ $__header->getTranslation('title1',App::getLocale(),false) }}</h2>
                    <span class="index-why__description">{{ $__header->getTranslation('contents1',App::getLocale(),false) }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="index-clients">
        <div class="container-fluid">
            <h2 class="index-title index-title_white mb-50">{{__('header.OurClients')}}</h2>
            <div class="row mb-40">
                <div class="offset-sm-1 col-sm-1 col-2 flex-row-center-start">
                    <button id="index-clients-left" href="javascript:void(0)" class="carousel-button-2 carousel-button-2_transparent carousel-button-2_left"></button>
                </div>

                <div class="col-8">
                    <div class="index-clients-carousel owl-carousel">
                        @foreach($clients as $client)
                        <div class="index-clients-carousel__item">
                            <img src="{{ $client->logo }}" class="index-clients-carousel__img" />
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-sm-1 col-2 flex-row-center-end">
                    <button id="index-clients-right" href="javascript:void(0)" class="carousel-button-2 carousel-button-2_transparent carousel-button-2_right"></button>
                </div>

            </div>
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <a href="{{ route('clients',App::getLocale()) }}" class="button button_dark-blue-alpha button_uppercase button_full">{{ __('index.clientAllView') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="index-news bc-light-grey">
        <div class="container-fluid">
            <h2 class="index-title mb-50">{{ __('index.news') }}</h2>

            <div class="row mb-10 elems-block-wrap">
                @forelse($news as $elem)
                    @if($loop->first)
                        <div class="offset-lg-2 col-lg-2 col-md-6 col-12 mb-20">
                    @else
                        <div class="col-lg-2 col-md-6 col-12 mb-20">
                    @endif
                         <a href="news-item.html" class="news-item">
                            <div class="news-item__img-box" style="background-image: url({{ $elem->smallimg }});"></div>
                             <div class="elems-block-extra">
                                 <h2 class="news-item__title">{{ $elem->getTranslation('title',app()->getLocale(),false) }}</h2>
                                 <span style="margin-top: 10px;" class="news-item__description">{{ $elem->getTranslation('desc',app()->getLocale(),false) }}</span>
                             </div>
                            <span style="margin-top: 10px" class="news-item__date">{{ $elem->created_at }}</span>
                         </a>
                        </div>
                    @empty
                        <h3>{{ __('index.notf') }}</h3>
                @endforelse
            </div>

            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <a href="{{ route('news',['local' => App::getLocale()]) }}" class="button button_white button_uppercase button_full">{{ __('index.newsAllView') }}</a>
                </div>
            </div>
            </div>
    </section>

    <div class="index-test-ref">
        <div class="container-fluid">
            <ul class="test-ref-nav nav-tabs mb-50">
                <li class="test-ref-nav__item active nav-tabs__item">
                    <h2><a href="javascript:void(0)" class="test-ref-nav__link page-title nav-tabs__link" data-tab="#testimonials">{{ __('index.testi') }}</a></h2>
                </li>
                <li class="test-ref-nav__item nav-tabs__item">
                    <h2><a href="javascript:void(0)" class="test-ref-nav__link page-title nav-tabs__link" data-tab="#references">{{ __('index.referen') }}</a></h2>
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
                                @forelse($testi as $elems)
                                <div class="index-test-carousel__item">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item__img-box-block">
                                            <div class="testimonial-item__img-box">
                                                <img src="{{ $elems->img }}" class="testimonial-item__img"/>
                                            </div>
                                        </div>
                                        <span class="testimonial-item__description" >{{ $elems->getTranslation('contents',app()->getLocale(),false) }}</span>
                                        <div class="testimonial-item__hr"></div>
                                        <div class="testimonial-item__personal">
                                            <h3 class="testimonial-item__name">{{ $elems->username }}</h3>
                                            <ul class="testimonial-item-social-list">
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($elems->facebook != null) ? $elems->facebook : '#' }}" target="_blank" class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/facebook.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($elems->twitter != null) ? $elems->twitter : '#' }}" class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/twitter.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($elems->linkedin != null) ? $elems->linkedin : '#' }}" class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/linkedin.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($elems->instagram != null) ? $elems->instagram : '#' }}" class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/instagram_org.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item__position">
                                            <span class="testimonial-item__position-text">{{ $elems->getTranslation('position',app()->getLocale(),false) }}, <span class="testimonial-item__position-text-bold">{{ $elems->company }}</span></span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                 <h3>{{ __('index.notf') }}</h3>
                               @endforelse
                            </div>
                        </div>

                        <div class="col-sm-1 col-2 flex-row-center-end">
                            <button id="index-test-right" href="javascript:void(0)" class="carousel-button carousel-button_light-blue carousel-button_right"></button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-8 col-12">
                            <a href="{{ route('tes_ref',['local' => App::getLocale()]) }}" class="button button_light-blue button_uppercase button_full">{{ __('index.tesView') }}</a>
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
                                @forelse($ref as $elems)
                                    <div class="index-ref-carousel__item">
                                        <div class="reference-item">
                                            <a href="{{ $elems->img }}" class="reference-item__img-link" data-lightbox="references-links" data-title="{{ $elems->referancer }}">
                                                <img  src="{{ $elems->img }}" class="reference-item__img" />
                                            </a>
                                            <h2 class="reference-item__title">{{ $elems->referancer }}</h2>
                                            <div class="testimonial-item__position">
                                                <span class="testimonial-item__position-text">{{ $elems->name }}, </span>
                                                <span class="testimonial-item__position-text">{{ $elems->getTranslation('position',app()->getLocale(),false) }}</span><br><br>
                                                @foreach($__companies as $el)
                                                  @if($el->id == $elems->company_id)
                                                    <span style="font-weight: bold" class="testimonial-item__position-text-bold">{{ $el->company }}, </span>
                                                  @endif
                                                @endforeach
                                                <span class="testimonial-item__position-text">{{ $elems->ref_date }} </span><br><br>
                                            </div>

                                            <a href="{{ $elems->img }}" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="Name of certificate">{{ __('index.zoom') }}</a>
                                        </div>
                                    </div>
                                @empty
                                    <h3>{{ __('index.notf') }}</h3>
                                @endforelse

                            </div>
                        </div>

                        <div class="col-sm-1 col-2 flex-row-center-end">
                            <button id="index-ref-right" href="javascript:void(0)" class="carousel-button carousel-button_light-blue carousel-button_right"></button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-8 col-12">
                            <a href="{{ route('tes_ref',['local' => App::getLocale()]) }}" class="button button_light-blue button_uppercase button_full">{{ __('index.ref') }}</a>
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
                    <h2 class="index-companies__title">{{ $__header->getTranslation('title2',app()->getLocale(),false) }}</h2>
                    <span class="index-companies__description">{{ $__header->getTranslation('contents2',app()->getLocale(),false) }}</span>

                    <ul class="index-companies-list">
                        @php $counter = 0; @endphp
                        @foreach($__companies as $el)
                            @php   $counter++;  @endphp
                        <li class="index-companies-list__item">
                            <span class="index-companies-list__number">{{ $counter }}</span>
                            <span style="font-weight: bold" class="index-companies-list__name">{{ $el->company }}</span>
                            <a href="{{ $el->pdf }}" target="_blank" class="link link_blue link_icon link_icon_download">{{ \Str::afterlast($el->pdf,'/') }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="d-none d-md-flex col-lg-5 col-md-4 flex-row-center-center">
                    <img src="{{ $__header->img6 }}" class="index-companies__img">
                </div>
            </div>
        </div>
    </section>

    <section id="index-contacts" class="index-contacts">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-sm-2 col-sm-8 col-12">
                    <div class="contacts__main">
                        <span class="contacts__about">{{ $__settings->getTranslation('footcontent',app()->getLocale(),false) }}</span>
                        <ul class="contacts-social-list">
                            <li class="contacts-social-list__item">
                                <a href="{{ ($__settings->fb != null) ? $__settings->fb : '#' }}" target="_blank" class="contacts-social-list__link">
                                    <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="{{ ($__settings->instagram != null) ? $__settings->instagram : '#' }}"  target="_blank" class="contacts-social-list__link">
                                    <img src="{{ asset('img/instagram_white.svg') }}" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="{{ ($__settings->twitter != null) ? $__settings->twitter : '#' }}"  target="_blank" class="contacts-social-list__link">
                                    <img src="{{ asset('img/twitter_white.svg') }}" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="{{ ($__settings->youtube != null) ? $__settings->youtube : '#' }}" target="_blank" class="contacts-social-list__link">
                                    <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="contacts__other mb-25">
                        <div class="contacts__address">
                            <span class="contacts__name">{{ $__settings->title }}</span>
                            <span class="contacts__value">{{ $__settings->address }}</span>
                        </div>
                        <div class="contacts__connection">
                            <span class="contacts__phone">{{ $__settings->phone }}</span>
                            <span class="contacts__phone">{{ $__settings->mobphone }}</span>
                            <span class="contacts__email">{{ $__settings->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="index-map"></div>


</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6gnyokeyiWFW_sgpLl0M9ijf0ToQ-Dn0&callback=initMap"></script>
@stop
