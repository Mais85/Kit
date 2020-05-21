@extends('layouts.site')

{{--@section('title', '| '. __('main.title'))--}}

@section('content')

@include('site.catalog')

<div class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="d-xl-block col-xl-4 d-none bc-light-blue px-0">
                <div class="service-left-block">
                    <div class="row mx-0">
                        <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                            <h1 class="page-title mt-70 mb-35">{{ __('services.serv') }}</h1>
                            <ul class="services-list">
                                @foreach($services as $key => $item)
                                    @if($loop->first)
                                    <li class="services-list__item active">
                                        <a href="#" class="services-list__link">{{ $item->title }}</a>
                                    </li>
                                    @elseif(true)
                                    <li class="services-list__item">
                                        <a href="{{ route('servicesItem', ['local' => App::getLocale(),'slug'=>$item->slug]) }}" class="services-list__link">KIT Consulting & Service</a>
                                    </li>
                                    @else
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <span class="service__iso">ISO 9001:2015</span>
                </div>
            </div>
            <div class="col-xl-8 offset-xl-0 col-sm-10 offset-sm-1 offset-0 col-12 px-0">
                <div class="service__top-img-box mb-30" style="background-image: url(img/service_top.png);"></div>
                <div class="row mx-0">
                    <div class="offset-xl-2 col-xl-8 offset-1 col-10">
                        <div class="service">
                            <div class="service__header mb-30">
                                <img src="img/kit_group_logo_dark.png" class="service__logo" />
                                <h2 class="service__main-title">KIT construction</h2>
                            </div>
                            <div class="page-hr mb-25"></div>
                            <h2 class="service__title">Sənaye Alpinizmi</h2>
                            <div class="service__text-block">
                                <p>Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</p>
                                <img src="img/project_item_preview.png" />
                                <p>Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</p>
                                <img src="img/project_item_preview.png" />
                                <p>Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</p>
                                <img src="img/project_item_preview.png" />
                                <p>Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</p>
                                <img src="img/project_item_preview.png" />
                                <p>Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</p>
                                <img src="img/project_item_preview.png" />
                                <p>Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</p>
                                <img src="img/project_item_preview.png" />
                                <p>Yes, you’ve read that correctly. We’ve taken the axe throwing out of the woodland and brought it into the city. Wrapped in a vibrant venue, expertly hosted by kick-ass instructors and backed up with a suitably pumping soundtrack. In no time at all you’ll be throwing axes and competing against your friends or colleagues, you’d better practice those celebrations!</p>
                                <img src="img/project_item_preview.png" />
                            </div>
                        </div>
                    </div>
                </div>


                <div class="contacts-page bg-navy-dark pt-50">
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

                            <div class="contacts__other mb-80">
                                <div class="contacts__address">
                                    <span class="contacts__name">KIT Consulting & Service</span>
                                    <span class="contacts__value">36, 4 floor Chinar Park,</span>
                                    <span class="contacts__value">Baku, Azerbaijan</span>
                                </div>
                                <div class="contacts__connection">
                                    <span class="contacts__phone">012 345 67 89</span>
                                    <span class="contacts__phone">055 814 41 91</span>
                                    <span class="contacts__email">info@kitgroup.az</span>
                                </div>
                            </div>

                            <div class="contacts__main flex-row-center-end mb-30">
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
                                    <span class="contacts__name">KIT Group (Baş ofis)</span>
                                    <span class="contacts__value">36, 4 floor Chinar Park,</span>
                                    <span class="contacts__value">Baku, Azerbaijan</span>
                                </div>
                                <div class="contacts__connection">
                                    <span class="contacts__phone">012 345 67 89</span>
                                    <span class="contacts__phone">055 814 41 91</span>
                                    <span class="contacts__email">info@kitgroup.az</span>
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
