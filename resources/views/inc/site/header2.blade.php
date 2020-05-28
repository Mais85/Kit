<header class="header">
    <div class="container-fluid">
        <div class="row flex-row-center-between">
            <div class="header__left col-1">
                <a href="{{ route('main',['local' => App::getLocale()]) }}" class="header__logo-link">
                    <img src="{{ $__settings->logo}}" class="header__logo" />
                </a>
            </div>
            <div class="header__right flex-row-center-end col-xl-10 col-2">
                <ul class="menu-list">
                    <li class="menu-list__item">
                        <a href="{{ route('about',['local' => App::getLocale()]) }}" class="menu-list__link">{{ __('header.About') }}</a>
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

                <a href="{{ route('contact',['local' => App::getLocale()]) }}" class="button button_blue button_header ml-auto">{{ __('header.Contact') }}</a>

                <a id="mobile-nav-open" href="javascript:void(0)" class="link link_icon link_icon_menu  ml-auto"></a>
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
