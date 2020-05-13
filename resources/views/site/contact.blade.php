@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')
    <button id="comapnies-view-button-open" class="button button_white">View Group of companies</button>

    @include('site.catalog')

    <div class="content">

        <div class="contacts-page container-fluid bg-navy-dark pt-50">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                    <h1 class="page-title page-title_white mb-60">contacts</h1>

                    <div class="contacts__main">
                        <span class="contacts__about">Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping </span>
                        <ul class="contacts-social-list">
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/facebook_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/instagram_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/twitter_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                            <li class="contacts-social-list__item">
                                <a href="#" class="contacts-social-list__link">
                                    <img src="img/youtube_white.svg" class="contacts-social-list__img"/>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="contacts__other mb-25">
                        <div class="contacts__address">
                            <span class="contacts__name">KIT Group</span>
                            <span class="contacts__value">36, 4 floor Chinar Park,</span>
                            <span class="contacts__value">Baku, Azerbaijan</span>
                        </div>
                        <div class="contacts__connection">
                            <span class="contacts__phone">012 345 67 89</span>
                            <span class="contacts__phone">055 814 41 91</span>
                            <span class="contacts__email">info@kitgroup.az</span>
                        </div>
                    </div>

                    <div class="page-hr page-hr_grey mb-40"></div>

                    <div class="contacts-map-block">
                        <div class="contacts-map-white-in-map"></div>
                        <div id="contacts-map"></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="contacts-map-white"></div>

    </div>
@stop
