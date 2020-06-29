<header class="header-index">

    <div class="header-index-inner-wrapper container-fluid">
        <div class="row h-100">
            <div class="col-xl-9 col-12 px-0">
                <div class="header-index__main">
                    <div class="header-index-carousel owl-carousel">
                        <div class="header-index-carousel__item">
                            <video video autobuffer autoplay muted loop>
                                <source src="{{ $__header->video }}" type="video/mp4">
                                {{__('header.video')}}
                            </video>
                        </div>

                        <div class="header-index-carousel__item">
                            <img src="{{ $__header->img1 }}" />
                        </div>

                        <div class="header-index-carousel__item">
                            <div class="header-index-carousel__img-box" style="background-image: url({{ $__header->img2 }})"></div>
                        </div>
                    </div>
                    <div class="header-index__top-substitute"></div>

                    <div class="header-index__top row ml-0 mr-0 flex-row-center-between">
                        <div class="header-index__top-mobile"></div>
                        <div class="header__left col-1 px-0">
                            <a href="{{ route('main', ['local' => App::getLocale()]) }}" class="header__logo-link">
                                <img src="{{ $__settings->logo }}" class="header__logo" />
                            </a>
                        </div>
                        <div class="header__right flex-row-center-between col-xl-10 col-2 px-0">
                            <ul class="menu-list">
                                <li class="menu-list__item">
                                    <a href="{{ route('about', ['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.About') }}</a>
                                </li>
                                <li class="menu-list__item">
                                    <a href="{{ route('about', ['local' => App::getLocale()]) }}" class="menu-list__link">Şirkətlər</a>
                                </li>
                                <li class="menu-list__item">
                                    <a href="{{ route('services',['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.Services') }}</a>
                                </li>
                                <li class="menu-list__item">
                                    <a href="{{ route('ourprojects',['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.OurProjects') }}</a>
                                </li>
                                <li class="menu-list__item">
                                    <a href="{{ route('clients',['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.OurClients') }}</a>
                                </li>
                                <li class="menu-list__item">
                                    <a href="{{ route('news',['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.News') }}</a>
                                </li>
                                <li class="menu-list__item">
                                    <a href="{{ route('tes_ref',['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.TestRef') }}</a>
                                </li>
                                <li class="menu-list__item">
                                    <a href="{{ route('gallery',['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.Gallery') }}</a>
                                </li>
                            </ul>

                            <a href="{{ route('contact',['local' => App::getLocale()]) }}" class="button button_blue button_header">{{ __('header.Contact') }}</a>

                            <a id="mobile-nav-open" href="javascript:void(0)" class="link link_icon link_icon_menu"></a>
                        </div>
                    </div>
                    <div class="header-index__center">
                        <div class="row ml-0 mr-0">
                            <div class="col-1">
                                <ul class="contacts-social-list">
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($__settings->fb !=null) ? $__settings->fb : '#' }}"  target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/facebook_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="@if(isset( $__settings->instagram)){{ $__settings->instagram }}@else # @endif" target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/instagram_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($__settings->linkedin !=null) ? $__settings->linkedin : '#' }}"  target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/linkedin_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                    <li class="contacts-social-list__item">
                                        <a href="{{ ($__settings->youtube !=null) ? $__settings->youtube : '#' }}"  target="_blank" class="contacts-social-list__link">
                                            <img src="{{ asset('img/youtube_white.svg') }}" class="contacts-social-list__img"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="offset-1 col-8 flex-column-start-between">
                                     <h1 class="header-index__title">{{  $__header->getTranslation('head_title', App::getLocale(),false) }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="header-index__bottom">
                        <ul class="header-index-bottom-list">
                            <li class="header-index-bottom-list__item">
                                <a href="#index-why" class="header-index-bottom-list__link link link_icon link_icon_arrow-bottom-blue"></a>
                            </li>
                            <li class="header-index-bottom-list__item">
                                <a href="#index-why" class="header-index-bottom-list__link">{{ __('header.Why') }}</a>
                            </li>
                            <li class="header-index-bottom-list__item">
                                <a href="#index-companies" class="header-index-bottom-list__link">{{ __('header.Catalog') }}</a>
                            </li>
                            <li class="header-index-bottom-list__item">
                                <a href="#index-contacts" class="header-index-bottom-list__link">{{ __('header.Contact') }}</a>
                            </li>
                        </ul>

                        <div id="header-index-dots" class="owl-dots">
                        </div>
                        <div class="header-index-slider-text">
                            <span class="header-index-slider-text__current"></span>
                            <span class="header-index-slider-text__slash">/</span>
                            <span class="header-index-slider-text__all"></span>
                        </div>

                        <ul class="lang-list">
                            <li class="lang-list__item {{ langactive('az') }}">
                                <a href="{{ changeLang(url()->current(),'az') }}" class="lang-list__link">az</a>
                            </li>
                            <li class="lang-list__item {{ langactive('en') }}">
                                <a href="{{  changeLang(url()->current(),'en') }}" class="lang-list__link">en</a>
                            </li>
                            <li class="lang-list__item {{ langactive('ru') }}">
                                <a href="{{  changeLang(url()->current(),'ru') }}" class="lang-list__link">ru</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-xl-block d-none px-0">
                <div class="comapnies-view">
                    <div class="comapnies-view__head mb-50">
                        <a id="comapnies-view-button-close" href="javascript:void(0)" class="link link_icon link_icon_arrow-right ml-50"></a>
                        <h2 class="comapnies-view__title">{{__('header.GoC')}}</h2>
                    </div>

                    <ul class="comapnies-view-list mb-30">

                            @php $counter = 0; @endphp
                            @foreach($__companies as $el)
                            @php   $counter++;  @endphp
                            <li class="comapnies-view-list__item">
                                <a href="{{ route('companies',['local' => App::getLocale(),'slug'=> $el->slug, 'id'=>$el->id]) }}" class="comapnies-view-list__link">
                                    <span class="comapnies-view-list__number">{{ $counter }}</span>
                                    <span class="comapnies-view-list__name">{{ $el->company }}</span>
                                </a>
                            </li>
                            @endforeach
                    </ul>
                    <span class="comapnies-view__iso">ISO 9001:2015</span>
                </div>
            </div>
        </div>
    </div>

    <div class="group-companies-mob-block container-fluid bg-navy-dark">
        <div class="group-companies-mob">
            <div id="group-companies-list-open" class="group-companies-mob__header">
                <h1 class="group-companies-mob__title">{{__('header.GoC')}}</h1>
                <button class="link link_icon link_icon_plus-white"></button>
            </div>
            <div class="group-companies-mob__body">
                <ul class="comapnies-view-list mb-30">

                    @php $counter = 0; @endphp
                    @foreach($__companies as $el)
                        @php   $counter++;  @endphp
                        <li class="comapnies-view-list__item">
                            <a href="{{ route('companies',['local' => App::getLocale(),'slug'=> $el->slug, 'id'=>$el->id]) }}" class="comapnies-view-list__link">
                                <span class="comapnies-view-list__number">{{ $counter }}</span>
                                <span class="comapnies-view-list__name">{{ $el->company }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <span class="group-companies-mob__iso">ISO 9001:2015</span>
            </div>
        </div>
    </div>

    <div class="mobile-nav-block">
        <ul class="lang-list mb-30">
            <li class="lang-list__item {{ langactive('az') }}">
                <a href="{{ changeLang(url()->current(),'az') }}" class="lang-list__link">az</a>
            </li>
            <li class="lang-list__item {{ langactive('en') }}">
                <a href="{{  changeLang(url()->current(),'en') }}" class="lang-list__link">en</a>
            </li>
            <li class="lang-list__item {{ langactive('ru') }}">
                <a href="{{  changeLang(url()->current(),'ru') }}" class="lang-list__link">ru</a>
            </li>
        </ul>
        <ul class="mobile-nav-list mb-30">
            <li class="mobile-nav-list__item">
                <a href="{{ route('about',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">{{ __('header.About') }}</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('about',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">Şirkətlər</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('services',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">{{ __('header.Services') }}</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('ourprojects',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">{{ __('header.OurProjects') }}</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('clients',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">{{ __('header.OurClients') }}</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('news',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">{{ __('header.News') }}</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('tes_ref',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">{{ __('header.TestRef') }}</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('gallery',['local' => App::getLocale()]) }}" class="mobile-nav-list__link">{{ __('header.Gallery') }}</a>
            </li>
        </ul>

        <a href="{{ route('contact',['local' => App::getLocale()]) }}" class="button button_blue button_header mb-30">{{ __('header.Contact') }}</a>
    </div>
</header>
