@extends('layouts.site')

@section('title', '| '. __('header.Services'))

@section('content')

<div class="content">

    <div class="container-fluid">
        <div class="row">

           @include('site.rightServicebar',$services)

            <div class="col-xl-8 offset-xl-0 col-sm-10 offset-sm-1 offset-0 col-12 pl-0">
                <div class="service__top-img-box mb-30" style="background-image: url({{ $item->img1 }});"></div>
                <div class="row mx-0">
                    <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                        <div class="service mb-20">
                            <div class="service__header mb-30">
                                <img src="{{ $__companies->where('company',$item->company_name)->pluck('logo')->first() }}" class="service__logo" />
                                <h2 class="service__main-title">{{ $item->company_name }}</h2>
                            </div>
                            <div class="page-hr mb-25"></div>
                            <h2 class="service__title">{{ $item->getTranslation('title',app()->getLocale(),false)}}</h2>
                            <div class="service__text-block">
                                <img src="{{ $item->img2 }}" />
                                <p>{{ $item->getTranslation('contents',app()->getLocale(),false)}}</p>
                                @if(isset($item->pdf))
                                    <span style="display:inline-block;float: left;font-weight: bold; font-family: 'Antiqua Azeri' " class="index-companies-list__number">PDF: &nbsp;</span>
                                    <a style="float: left;margin-bottom: 10px;" href="{{ $item->pdf }}" target="_blank" class="link link_blue link_icon link_icon_download">{{ \Str::afterlast($item->pdf,'/') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($item->albom_id))
                <div class="container-fluid">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-9 offset-sm-1 col-sm-10 col-12">
                            <div class="learn-more-section">
                                <a href="{{  route('getPhotos',['local' => App::getLocale(),'id'=>$item->albom_id])  }}" class="learn-more-section__link">/ {{ __('services.serAlb') }} /</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="contacts-page bg-navy-dark pt-50">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                            <h1 class="page-title page-title_white mb-60">{{ __('header.Contact') }}</h1>

                            <div class="contacts-inner mb-40">
                                <div class="contacts__main">
                                    <span class="contacts__about">{{  $__companies->where('company',$item->company_name)->pluck('contacttext')->first() }}</span>

                                    <div class="contacts__address">
                                        <span class="contacts__name">{{$item->company_name}}</span>
                                        <span class="contacts__value">{{ $__companies->where('company',$item->company_name)->pluck('address')->first() }}</span>
                                    </div>
                                </div>

                                <div class="contacts__other">

                                    <ul class="contacts-social-list">
                                        <li class="contacts-social-list__item">
                                            <a href="{{  $__companies->where('company',$item->company_name)->pluck('fb')->first() }}"  target="_blank" class="contacts-social-list__link">
                                                <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ $__companies->where('company',$item->company_name)->pluck('instagram')->first()}}"  target="_blank" class="contacts-social-list__link">
                                                <img src="{{ asset('img/instagram_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{  $__companies->where('company',$item->company_name)->pluck('linkedin')->first() }}"  target="_blank" class="contacts-social-list__link">
                                                <img src="{{ asset('img/linkedin_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ $__companies->where('company',$item->company_name)->pluck('youtube')->first()}}" target="_blank" class="contacts-social-list__link">
                                                <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="contacts__connection">
                                        <span class="contacts__phone">{{ $__companies->where('company',$item->company_name)->pluck('phone')->first() }}</span>
                                        <span class="contacts__phone">{{ $__companies->where('company',$item->company_name)->pluck('mobphone')->first() }}</span>
                                        <span class="contacts__email">{{ $__companies->where('company',$item->company_name)->pluck('email')->first() }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="contacts-inner mb-40">
                                <div class="contacts__main">
                                    <div class="contacts__address">
                                        <span class="contacts__name"> {{ $__settings->title }} (Baş ofis)</span>
                                        <span class="contacts__value">{{ $__settings->address }}</span>
                                    </div>
                                </div>

                                <div class="contacts__other">
                                    <ul class="contacts-social-list">
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->fb != null) ? $__settings->fb : '#' }}" class="contacts-social-list__link">
                                                <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->instagram != null) ? $__settings->instagram : '#' }}" class="contacts-social-list__link">
                                                <img src="{{ asset('img/instagram_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->linkedin != null) ? $__settings->linkedin : '#' }}" class="contacts-social-list__link">
                                                <img src="{{ asset('img/linkedin_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->youtube != null) ? $__settings->youtube : '#' }}" class="contacts-social-list__link">
                                                <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                    </ul>
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

            </div>

        </div>
    </div>
</div>
@endsection
