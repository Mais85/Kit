@extends('layouts.site')

@section('title', '| '. __('companies.title'))

@section('content')

<div class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-0 col-sm-10 offset-sm-1 offset-0 col-12 px-0">
                <div class="service__top-img-box mb-30" style="background-image: url({{ $item->img1 }});"></div>
                <div class="row mx-0">
                    <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                        <div class="service">
                            <div class="service__header mb-30">
                                <img src="{{ $item->logo }}" class="service__logo" />
                                <h2 class="service__main-title">{{ $item->company }}</h2>
                            </div>
                            <div class="page-hr mb-25"></div>
                            <h2 class="service__title">{{ $item->company }}</h2>
                            <div class="service__text-block">
                                <img src="{{$item->img2}}" />
                                <p>{{ $item->getTranslation('contents',app()->getLocale(),false) }}</p><br>
                                <span style="display:inline-block;float: left;font-weight: bold; font-family: 'Antiqua Azeri' " class="index-companies-list__number">PDF: &nbsp;</span>
                                <a style="float: left;margin-bottom: 10px;" href="{{ $item->pdf }}" target="_blank" class="link link_blue link_icon link_icon_download">{{ \Str::afterlast($item->pdf,'/') }}</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($item->albom_id))
                    <div class="container-fluid">
                        <div class="row">
                            <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
                                <div class="learn-more-section">
                                    <a href="{{  route('getPhotos',['local' => App::getLocale(),'id'=>$item->albom_id])  }}" class="learn-more-section__link">/ {{ __('index.compAlb') }} /</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="contacts-page bg-navy-dark pt-50">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                            <h1 class="page-title page-title_white mb-60">{{ __('header.Contact') }}</h1>

                            <div class="contacts__main">
                                <span class="contacts__about">{{ $item->contacttext }}</span>
                                <ul class="contacts-social-list">
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($item->fb !=null) ? $item->fb : '#' }}" target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($item->instagram !=null) ? $item->instagram : '#' }}" target="_blank" class="contacts-social-list__link">
                                            <img src="{{asset('img/instagram_white.svg')}}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($item->twitter !=null) ? $item->twitter : '#' }}" target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/twitter_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($item->youtube !=null) ? $item->youtube : '#' }}" target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="contacts__other mb-80">
                                <div class="contacts__address">
                                    <span class="contacts__name">{{ $item->company }}</span>
                                    <span class="contacts__value">{{ $item->address }}</span>
                                </div>
                                <div class="contacts__connection">
                                    <span class="contacts__phone">{{ $item->phone }}</span>
                                    <span class="contacts__phone">{{ $item->mobphone }}</span>
                                    <span class="contacts__email">{{ $item->email }}</span>
                                </div>
                            </div>

                            <div class="contacts__main flex-row-center-end mb-30">
                                <ul class="contacts-social-list">
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($__settings->fb !=null) ? $__settings->fb : '#' }}"  target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($__settings->instagram !=null) ? $__settings->instagram : '#' }}" target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/instagram_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($__settings->twitter !=null) ? $__settings->twitter : '#' }}" target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/twitter_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($__settings->youtube !=null) ? $__settings->youtube : '#' }}" target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="contacts__other mb-25">
                                <div class="contacts__address">
                                    <span class="contacts__name">{{ $__settings->title }} (Baş ofis)</span>
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

            </div>
            @include('site.leftsidebar')
        </div>
    </div>
</div>

@stop
