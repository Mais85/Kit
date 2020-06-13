@extends('layouts.site')

@section('title', '| '. __('header.TestRef'))

@section('content')

    <div class="content">

        <div class="container-fluid pt-50 mb-80">
            <div class="row">
                <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
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
                            <div class="row">
                                @foreach($Titems as $item)
                                <div class="col-xl-4 col-md-6 col-12 mb-100">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item__img-box-block">
                                            <div class="testimonial-item__img-box">
                                                <img src="{{ $item->img }}" class="testimonial-item__img"/>
                                            </div>
                                        </div>
                                        <span class="testimonial-item__description">{{ $item->getTranslation('contents',app()->getLocale(),false) }}</span>
                                        <div class="testimonial-item__hr"></div>
                                        <div class="testimonial-item__personal">
                                            <h3 class="testimonial-item__name">{{ $item->username }}</h3>
                                            <ul class="testimonial-item-social-list">
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($item->facebook !=null) ? $item->facebook : '#' }}"  target="_blank" class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/facebook.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($item->twitter !=null) ? $item->twitter : '#' }}" target="_blank"  class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/twitter.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($item->linkedin !=null) ? $item->linkedin : '#' }}"  target="_blank" class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/linkedin.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                                <li class="testimonial-item-social-list__item">
                                                    <a href="{{ ($item->instagram !=null) ? $item->instagram : '#' }}" target="_blank" class="testimonial-item-social-list__link">
                                                        <img src="{{ asset('img/instagram_org.svg') }}" class="testimonial-item-social-list__img" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="testimonial-item__position">
                                            <span class="testimonial-item__position-text">{{ $item->getTranslation('position',app()->getLocale(),false) }}, <span class="testimonial-item__position-text-bold">{{ $item->company }}</span></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="references" class="tab-pane">
                            <div class="row">
                                @foreach($Ritems as $elems)
                                <div class="col-xl-4 col-md-6 col-12 mb-60">
                                    <div class="reference-item">
                                        <a href="{{ $elems->img }}" class="reference-item__img-link" data-lightbox="references-links" data-title="{{ $elems->referancer }}">
                                            <img src="{{ $elems->img }}" class="reference-item__img" />
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
                                        <a href="{{ $elems->img }}" class="link link_blue link_icon link_icon_zoom_in" data-lightbox="references" data-title="{{ $elems->referancer }}">{{ __('index.zoom') }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
