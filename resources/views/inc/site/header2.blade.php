<header class="header">
    <div class="container-fluid">
        <div class="row flex-row-center-between">
            <div class="header__left col-1">
                <a href="{{ route('main') }}" class="header__logo-link">
                    <img src="{{ $__settings->logo}}" class="header__logo" />
                </a>
            </div>
            <div class="header__right flex-row-center-end col-xl-10 col-2">
                <ul class="menu-list">
                    <li class="menu-list__item">
                        <a href="{{ route('about') }}" class="menu-list__link">About</a>
                    </li>
                    <li class="menu-list__item">
                        <a href="{{ route('services') }}" class="menu-list__link">Services</a>
                    </li>
                    <li class="menu-list__item">
                        <a href="{{ route('ourprojects') }}" class="menu-list__link">Our projects</a>
                    </li>
                    <li class="menu-list__item">
                        <a href="{{ route('clients') }}" class="menu-list__link">Our clients</a>
                    </li>
                    <li class="menu-list__item">
                        <a href="{{ route('news') }}" class="menu-list__link">News</a>
                    </li>
                    <li class="menu-list__item">
                        <a href="{{ route('tes_ref') }}" class="menu-list__link">Testimonials and References</a>
                    </li>
                    <li class="menu-list__item">
                        <a href="{{ route('gallery') }}" class="menu-list__link">Gallery</a>
                    </li>
                </ul>

                <ul class="lang-list ml-auto">
                    <li class="lang-list__item">
                        <a href="#" class="lang-list__link">az</a>
                    </li>
                    <li class="lang-list__item active">
                        <a href="#" class="lang-list__link">en</a>
                    </li>
                    <li class="lang-list__item">
                        <a href="#" class="lang-list__link">ru</a>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="button button_blue button_header">Contacts</a>

                <a id="mobile-nav-open" href="javascript:void(0)" class="link link_icon link_icon_menu"></a>
            </div>
        </div>
    </div>
    <div class="group-companies-mob-block container-fluid bg-navy-dark">
        <div class="group-companies-mob">
            <div id="group-companies-list-open" class="group-companies-mob__header">
                <h1 class="group-companies-mob__title">Group of companies</h1>
                <button class="link link_icon link_icon_plus-white"></button>
            </div>
            <div class="group-companies-mob__body">
                <ul class="comapnies-view-list mb-30">
                    @php $counter = 0; @endphp
                    @foreach($__companies as $el)
                        @php   $counter++;  @endphp
                        <li class="comapnies-view-list__item">
                            <a href="{{ route('companies') }}" class="comapnies-view-list__link">
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
            <li class="lang-list__item">
                <a href="#" class="lang-list__link">az</a>
            </li>
            <li class="lang-list__item active">
                <a href="#" class="lang-list__link">en</a>
            </li>
            <li class="lang-list__item">
                <a href="#" class="lang-list__link">ru</a>
            </li>
        </ul>
        <ul class="mobile-nav-list mb-30">
            <li class="mobile-nav-list__item">
                <a href="{{ route('about') }}" class="mobile-nav-list__link">About</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('services') }}" class="mobile-nav-list__link">Services</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('ourprojects') }}" class="mobile-nav-list__link">Our projects</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('clients') }}" class="mobile-nav-list__link">Our clients</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('news') }}" class="mobile-nav-list__link">News</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('tes_ref') }}" class="mobile-nav-list__link">Testimonials and References</a>
            </li>
            <li class="mobile-nav-list__item">
                <a href="{{ route('tes_ref') }}" class="mobile-nav-list__link">Gallery</a>
            </li>

        </ul>

        <a href="{{ route('contact') }}" class="button button_blue button_header mb-30">Contacts</a>

    </div>
</header>
