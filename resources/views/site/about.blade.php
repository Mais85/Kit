@extends('layouts.site')

@section('title', '| '. __('about.title'))

@section('content')

    <div class="content">

        <div class="container-fluid pt-70 mb-90">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h1 class="page-title mb-30">{{ __('about.about') }}</h1>

                    <div class="row mb-80">
                        <div class="col-lg-6 col-12">
                            <h2 class="about__title">{{ $abItems->getTranslation('title1',app()->getLocale(),false)}}</h2>
                            <span class="about__description">{!!  $abItems->getTranslation('content1',app()->getLocale(),false) !!}</span>
                        </div>
                        <div class="col-lg-6 col-12 flex-row-start-center">
                            <img src="{{ $abItems->img}}" class="about__img" />
                        </div>
                    </div>

                    <h2 class="page-mini-title mb-40">{{ $abItems->getTranslation('title2',app()->getLocale(),false)}}</h2>
                    <div class="page-hr mb-40"></div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="{{ asset('img/reliability.svg') }}" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">{{ $abItems->getTranslation('desc1',app()->getLocale(),false)}}</h3>
                                <span class="pholosophy-item__description">{{ $abItems->getTranslation('smtxt1',app()->getLocale(),false)}}</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="{{ asset('img/reliability.svg') }}" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">{{ $abItems->getTranslation('desc2',app()->getLocale(),false)}}</h3>
                                <span class="pholosophy-item__description">{{ $abItems->getTranslation('smtxt2',app()->getLocale(),false)}}</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="{{ asset('img/reliability.svg') }}" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">{{ $abItems->getTranslation('desc3',app()->getLocale(),false)}}</h3>
                                <span class="pholosophy-item__description">{{ $abItems->getTranslation('smtxt3',app()->getLocale(),false)}}</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 mb-10">
                            <div class="pholosophy-item">
                                <img src="{{ asset('img/reliability.svg') }}" class="pholosophy-item__img" />
                                <h3 class="pholosophy-item__title">{{ $abItems->getTranslation('desc4',app()->getLocale(),false)}}</h3>
                                <span class="pholosophy-item__description">{{ $abItems->getTranslation('smtxt4',app()->getLocale(),false)}}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mission container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                    <h2 class="page-mini-title page-mini-title_white mb-40">{{ $abItems->getTranslation('title3',app()->getLocale(),false)}}</h2>
                    <div class="page-hr page-hr_grey-2 mb-40"></div>
                </div>
                <div class="offset-xl-2 col-xl-4 offset-sm-1 col-sm-5 col-12">
                    <span class="mission__description">{!! $abItems->getTranslation('content2',app()->getLocale(),false) !!} </span>
                </div>
                <div class="col-xl-4 col-sm-5 col-12">
                    <span class="mission__description">{!! $abItems->getTranslation('content3',app()->getLocale(),false) !!} </span>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-80 pb-80">
            <div class="other-more-section">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-sm-1 col-sm-10 col-12">
                        <h2 class="page-mini-title mb-40">{{ __('about.cer') }}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-1 col-1 flex-row-center-center">
                        <button href="javascript:void(0)" class="carousel-button-2 carousel-button-2_left"></button>
                    </div>
                    <div class="col-8">
                        <div class="certificates-carousel owl-carousel">
                            @forelse($abCer as $items)
                            <div class="certificates-carousel__item">
                                <div class="certificate-item">
                                    <div class="certificate-item__img-box" style="background-image: url({{ $items->img }})"></div>
                                    <h3 class="certificate-item__title">{{ $items->title }}</h3>
                                    <span class="certificate-item__description">{{ $items->getTranslation('desc',app()->getLocale(),false)}}</span>
                                    <a href="{{ $items->img }}" class="link link_blue link_size-16 link_underlined ta-center" data-lightbox="certificates-links" data-title="{{ $items->title }}">{{ __('about.zoom') }}</a>
                                </div>
                            </div>
                            @empty
                                <h3>{{ __('index.notf') }}</h3>
                            @endforelse
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
                    <h2 class="page-mini-title mb-40">{{ __('about.Direction') }}</h2>
                    <div class="page-hr page-hr_grey-2 mb-40"></div>

                    <div class="direction row">
                        @forelse($emp as $items)
                            @if($loop->first)
                        <div class="col-12 mb-25">
                            <div class="direction-item direction-item_big">
                                <div class="direction-item__img-box-block">
                                    <div class="direction-item__img-box">
                                        <img src="{{ $items->img }}" class="direction-item__img" />
                                    </div>
                                </div>
                                <div class="direction-item__main-info">
                                    <h3 class="direction-item__name">{{ $items->name }} {{ $items->surname }}</h3>
                                    <span class="direction-item__position">{{ $items->getTranslation('position',app()->getLocale(),false) }}, {{ $items->company }}</span>
                                    <img src="{{ asset('img/kit_group_logo_dark.png') }}" class="direction-item__logo"/>
                                </div>
                                <div class="direction-item__contacts">
                                    <span class="direction-item__email">{{ $items->email }}</span>
                                    <span class="direction-item__phone">+{{ $items->phone }}</span>
                                    <span class="direction-item__phone">+{{ $items->mobphone }}</span>
                                    <ul class="direction-item-social-list">
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->fb !=null) ? $items->fb : '#' }}" target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/facebook.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->twitter !=null) ? $items->fb : '#' }}"  target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/twitter.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->linkedin !=null) ? $items->linkedin : '#' }}" target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/linkedin.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->instagram !=null) ? $items->instagram : '#' }}" target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/instagram_org.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         @else
                        <div class="col-xl-6 col-12 mb-25">
                            <div class="direction-item">
                                <div class="direction-item__img-box-block">
                                    <div class="direction-item__img-box">
                                        <img src="{{ $items->img }}" class="direction-item__img" />
                                    </div>
                                </div>
                                <div class="direction-item__main-info">
                                    <h3 class="direction-item__name">{{ $items->name }} {{ $items->surname }}</h3>
                                    <span class="direction-item__position">{{ $items->getTranslation('position',app()->getLocale(),false) }}, {{ $items->company }}</span>
                                    <img src="{{ $__companies->where('company',$items->company)->pluck('logo')->first() }}" class="direction-item__logo"/>
                                </div>
                                <div class="direction-item__contacts">
                                    <span class="direction-item__email">{{ $items->email }}</span>
                                    <span class="direction-item__phone">+{{ $items->phone }}</span>
                                    <span class="direction-item__phone">+{{ $items->mobphone }}</span>
                                    <ul class="direction-item-social-list">
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->fb !=null) ? $items->fb : '#' }}" target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/facebook.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->twitter !=null) ? $items->fb : '#' }}"  target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/twitter.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->linkedin !=null) ? $items->linkedin : '#' }}" target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/linkedin.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                        <li class="direction-item-social-list__item">
                                            <a href="{{ ($items->instagram !=null) ? $items->instagram : '#' }}" target="_blank" class="direction-item-social-list__link">
                                                <img src="{{ asset('img/instagram_org.svg') }}" class="direction-item-social-list__img" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            @endif
                        @empty
                            <h3>{{ __('index.notf') }}</h3>
                        @endforelse
                    </div>
                </div>
            </div>


        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
                    <div class="learn-more-section">
                        <span class="learn-more-section__description">{{ __('about.keep') }}</span>
                        <h3 class="learn-more-section__title">{{ __('about.OurCont') }}</h3>
                        <a href="{{  route('contact',['local' => App::getLocale()])  }}" class="learn-more-section__link">/ {{ __('about.visPag') }} /</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
