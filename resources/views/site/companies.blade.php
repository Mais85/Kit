@extends('layouts.site')

@section('title', '| '. __('companies.title'))

@section('content')

<div class="content">


    <div class="container-fluid">
        <div class="row">
            @include('site.leftsidebar')
            <div class="service-block col-sm-10 offset-sm-1 offset-0 col-12 px-0">
                <div class="service__top-img-box mb-30" style="background-image: url({{ $item->img1 }});"></div>
                <div class="row mx-0">
                    <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                        <div class="service  @if(!isset($item->albom_id)) mb-80 @endif">
                            <div class="service__header mb-30">
                                <img src="{{ $item->logo }}" class="service__logo" />
                                <h2 class="service__main-title">{{ $item->company }}</h2>
                            </div>
                            <div class="page-hr mb-25"></div>
                            <h2 class="service__title">{{ $item->company }}</h2>
                            <div class="service__text-block">
                                <img src="{{$item->img2}}" />
                                <p>{!!  $item->getTranslation('contents',app()->getLocale(),false) !!} </p><br>
                                @if(isset($item->pdf))
                                <span style="display:inline-block;float: left;font-weight: bold; font-family: 'Antiqua Azeri' " class="index-companies-list__number">PDF: &nbsp;</span>
                                <a style="float: left;margin-bottom: 10px;" href="{{ $item->pdf }}" target="_blank" class="link link_blue link_icon link_icon_download">{{ \Str::afterlast($item->pdf,'/') }}</a>
                                @endif
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

                            <div class="contacts-inner mb-40">
                                <div class="contacts__main">
                                    <span class="contacts__about">{!! $item->contacttext  !!} </span>

                                    <div class="contacts__address mt-auto">
                                        <span class="contacts__name">{{ $item->company }}</span>
                                        <span class="contacts__value">{{ $item->address }}</span>
                                    </div>
                                </div>

                                <div class="contacts__other">
                                    <ul class="contacts-social-list">
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($item->fb !=null) ? $item->fb : "javascript:void(0)" }}"  @if($item->fb) target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($item->instagram !=null) ? $item->instagram : "javascript:void(0)" }}"  @if($item->instagram) target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{asset('img/instagram_white.svg')}}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($item->linkedin !=null) ? $item->linkedin : "javascript:void(0)" }}"  @if($item->linkedin) target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{ asset('img/linkedin_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($item->youtube !=null) ? $item->youtube : "javascript:void(0)" }}"  @if($item->youtube) target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="contacts__connection">
                                        @if(isset($items->shortphone))
                                        <span class="contacts__phone">{{ $item->shortphone }}</span>
                                        @endif
                                        <span class="contacts__phone">{{ $item->phone }}</span>
                                        <span class="contacts__phone">{{ $item->mobphone }}</span>
                                        @if(isset($items->mobphone2))
                                        <span class="contacts__phone">{{ $item->mobphone2 }}</span>
                                        @endif
                                        <span class="contacts__email">{{ $item->email }}</span>
                                        @if(isset($item->email2))
                                        <span class="contacts__email">{{ $item->email2 }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="contacts-inner mb-40">

                                <div class="contacts__main">
                                    <div class="contacts__address mt-auto">
                                        <span class="contacts__name">{{ $__settings->title }} (Baş ofis)</span>
                                        <span class="contacts__value">{{ $__settings->address }}</span>
                                    </div>
                                </div>

                                <div class="contacts__other">
                                    <ul class="contacts-social-list">
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->fb !=null) ? $__settings->fb : 'javascript:void(0)' }}"  @if($__settings->fb)target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->instagram !=null) ? $__settings->instagram : 'javascript:void(0)' }}" @if($__settings->instagram)target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{ asset('img/instagram_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->linkedin !=null) ? $__settings->linkedin : 'javascript:void(0)' }}" @if($__settings->linkedin)target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{ asset('img/linkedin_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                        <li class="contacts-social-list__item">
                                            <a href="{{ ($__settings->youtube !=null) ? $__settings->youtube : 'javascript:void(0)' }}" @if($__settings->youtube)target="_blank" @endif class="contacts-social-list__link">
                                                <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="contacts__connection">
                                        @if(isset($__settings->shortphone))
                                            <span class="contacts__phone">{{ $__settings->shortphone }}</span>
                                        @endif
                                        <span class="contacts__phone">{{ $__settings->phone }}</span>
                                        <span class="contacts__phone">{{ $__settings->mobphone }}</span>
                                        @if(isset($__settings->mobphone2))
                                            <span class="contacts__phone">{{ $__settings->mobphone2 }}</span>
                                        @endif
                                        <span class="contacts__email">{{ $__settings->email }}</span>
                                        @if(isset($__settings->email2))
                                            <span class="contacts__email">{{ $__settings->email2 }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
{{--            @include('site.leftsidebar')--}}
        </div>
    </div>
</div>

@stop
