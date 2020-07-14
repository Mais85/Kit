@extends('layouts.site')

@section('title', '| '. __('header.Contact'))

@section('content')

    <div class="content">

        <div class="contacts-page container-fluid bg-navy-dark pt-50">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                    <h1 class="page-title page-title_white mb-60">{{ __('header.Contact') }}</h1>

                   <div class="contacts-inner">
                        <div class="contacts__main">
                            <span class="contacts__about">{!! $__settings->getTranslation('footcontent',app()->getLocale(),false) !!}</span>

                            <div class="contacts__address mt-auto">
                                <span class="contacts__name">{{ $__settings->title }}</span>
                                <span class="contacts__value">{{ $__settings->address }}</span>
                            </div>
                        </div>

                        <div class="contacts__other">
                            <ul class="contacts-social-list">
                                <li class="contacts-social-list__item">
                                    <a href="{{ ($__settings->fb !=null) ? $__settings->fb : 'javascript:void(0)' }}" @if($__settings->fb)target="_blank" @endif class="contacts-social-list__link">
                                        <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                    </a>
                                </li>
                                <li class="contacts-social-list__item">
                                    <a href="{{ ($__settings->instagram !=null) ? $__settings->instagram : 'javascript:void(0)' }}" @if($__settings->instagram)target="_blank" @endif class="contacts-social-list__link">
                                        <img src="{{ asset('img/instagram_white.svg') }}" class="contacts-social-list__img"/>
                                    </a>
                                </li>
                                <li class="contacts-social-list__item">
                                    <a href="{{ ($__settings->linkedin !=null) ? $__settings->linkedin : 'javascript:void(0)' }}" @if($__settings->linkedin)target="_blank" @endif  class="contacts-social-list__link">
                                        <img src="{{ asset('img/linkedin_white.svg') }}" class="contacts-social-list__img"/>
                                    </a>
                                </li>
                                <li class="contacts-social-list__item">
                                    <a href="{{ ($__settings->youtube !=null) ? $__settings->youtube : 'javascript:void(0)' }}" @if($__settings->youtube)target="_blank" @endif  class="contacts-social-list__link">
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

                    <div class="page-hr page-hr_grey mt-25 mb-40"></div>

                    <div class="contacts-map-block">
                        <div class="contacts-map-white-in-map"></div>
                        <div id="contacts-map"></div>
                    </div>

                </div>
            </div>
        </div>

        <div id="index-map" class="contacts-map-white"></div>

    </div>
@stop
