<div class="o-page__sidebar js-page-sidebar">
    <aside class="c-sidebar">
        <div class="c-sidebar__brand">
            <a href="{{ route('admin') }}"><img src="/assets/admin/img/logo.svg" alt="Logo" style="width: 200px;"></a>
        </div>

        <!-- Scrollable -->
        <div class="c-sidebar__body">
            <span class="c-sidebar__title">Menu</span>
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link {{menuActive('')}}" href="{{ route('admin') }}">
                        <i class="c-sidebar__icon feather icon-home"></i>Ana Səhifə
                    </a>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('pages',4)}}" data-toggle="collapse" href="#sidebar-pages" aria-expanded="{{menuActive('pages',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-file-text "></i>Səhifələr
                    </a>

                    {{--                            <div>--}}
                    {{--                                <ul class="c-sidebar__list collapse {{menuActive('pages',3)}}" id="sidebar-pages">--}}
                    {{--                                    <li><a class="c-sidebar__link {{menuActive('pages')}}" href="/home/pages" >Bütün Səhifələr</a></li>--}}
                    {{--                                    <li><a class="c-sidebar__link {{menuActive('pages/create')}}" href="/home/pages/create">Səhifə Yarat</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('pages',3)}}" id="sidebar-pages">
                            <li><a class="c-sidebar__link {{menuActive('pages/index')}}" href="/admin/pages/index" >Ana səhifə</a></li>
                            <li><a class="c-sidebar__link {{menuActive('pages/about-us')}}" href="/admin/pages/about-us" >Haqqımızda</a></li>
{{--                            <li><a class="c-sidebar__link {{menuActive('pages/customers')}}" href="/home/pages/customers">Müştərilər</a></li>--}}
                            <li><a class="c-sidebar__link {{menuActive('pages/projects')}}" href="/admin/pages/projects">Layihələr</a></li>
                            <li><a class="c-sidebar__link {{menuActive('pages/contact')}}" href="/admin/pages/contact">Əlaqə</a></li>
                        </ul>
                    </div>

                </li>


                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('companies',4)}}" data-toggle="collapse" href="#sidebar-companies" aria-expanded="{{menuActive('news',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-aperture "></i>Şirkətlər
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('companies',3)}}" id="sidebar-companies">
                            <li><a class="c-sidebar__link {{menuActive('companies')}}" href="/admin/companies" >Bütün Şirkətlər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('companies/create')}}" href="/admin/companies/create"> Şirkət Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('employers',4)}}" data-toggle="collapse" href="#sidebar-employers" aria-expanded="{{menuActive('employers',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-users "></i>İşçi Heyəti
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('employers',3)}}" id="sidebar-employers">
                            <li><a class="c-sidebar__link {{menuActive('employers')}}" href="/admin/employers" >Bütün İşçilər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('employers/create')}}" href="/admin/employers/create">İşçi Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('news',4)}}" data-toggle="collapse" href="#sidebar-news" aria-expanded="{{menuActive('news',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-info "></i>Xəbərlər
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('news',3)}}" id="sidebar-news">
                            <li><a class="c-sidebar__link {{menuActive('news')}}" href="/admin/news" >Xəbərlər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('news/create')}}" href="/admin/news/create">Xəbər Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('services',4)}}" data-toggle="collapse" href="#sidebar-services" aria-expanded="{{menuActive('services',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-layers "></i>Xidmətlər
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('services',3)}}" id="sidebar-services">
                            <li><a class="c-sidebar__link {{menuActive('services')}}" href="/admin/services" >Bütün Xidmətlər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('services/create')}}" href="/admin/services/create">Xidmət Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('projects',4)}}" data-toggle="collapse" href="#sidebar-projects" aria-expanded="{{menuActive('projects',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-check-square "></i>Layihələr
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('projects',3)}}" id="sidebar-projects">
                            <li><a class="c-sidebar__link {{menuActive('projects')}}" href="/admin/projects" >Bütün Layihələr</a></li>
                            <li><a class="c-sidebar__link {{menuActive('projects/create')}}" href="/admin/projects/create">Layihə Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('clients',4)}}" data-toggle="collapse" href="#sidebar-clients" aria-expanded="{{menuActive('clients',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-briefcase "></i>Müştərilərimiz
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('clients',3)}}" id="sidebar-clients">
                            <li><a class="c-sidebar__link {{menuActive('clients')}}" href="/admin/clients" >Bütün Müştərilər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('clients/create')}}" href="/admin/clients/create">Müştəri Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('testimonials',4)}}" data-toggle="collapse" href="#sidebar-testimonials" aria-expanded="{{menuActive('testimonials',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-star "></i>Rəylər
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('testimonials',3)}}" id="sidebar-testimonials">
                            <li><a class="c-sidebar__link {{menuActive('testimonials')}}" href="/admin/clients" >Bütün Rəylər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('testimonials/create')}}" href="/admin/testimonials/create">Rəy Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('certificates',4)}}" data-toggle="collapse" href="#sidebar-certificates" aria-expanded="{{menuActive('certificates',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-award "></i>Sertifikatlarımız
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('certificates',3)}}" id="sidebar-certificates">
                            <li><a class="c-sidebar__link {{menuActive('certificates')}}" href="/admin/certificates" >Bütün Sertifikatlar </a></li>
                            <li><a class="c-sidebar__link {{menuActive('certificates/create')}}" href="/admin/certificates/create">Sertifikat Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('gallery',4)}}" data-toggle="collapse" href="#sidebar-gallery" aria-expanded="{{menuActive('gallery',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-film "></i>Qalareya
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('gallery',3)}}" id="sidebar-gallery">
                            <li><a class="c-sidebar__link {{menuActive('gallery')}}" href="/admin/gallery" >Bütün Albomlar </a></li>
                            <li><a class="c-sidebar__link {{menuActive('gallery/create')}}" href="/admin/gallery/create">AlbomYarat</a></li>
                        </ul>
                    </div>
                </li>

{{--                <li class="c-sidebar__item has-submenu">--}}
{{--                    <a class="c-sidebar__link {{menuActive('emails',4)}}" data-toggle="collapse" href="#sidebar-emails" aria-expanded="{{menuActive('emails',2)}}" aria-controls="sidebar-submenu">--}}
{{--                        <i class="c-sidebar__icon feather icon-inbox "></i>E-maillər--}}
{{--                    </a>--}}

{{--                    <div>--}}
{{--                        <ul class="c-sidebar__list collapse {{menuActive('emails',3)}}" id="sidebar-emails">--}}
{{--                            <li><a class="c-sidebar__link {{menuActive('emails')}}" href="/admin/emails" >Gələn mailler</a></li>--}}
{{--                            --}}{{--                                    <li><a class="c-sidebar__link {{menuActive('emails/create')}}" href="/admin/emails/create">Reklamçı Yarat</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li>
                    <a class="c-sidebar__link  {{menuActive('setting')}}" href="/admin/setting">
                        <i class="c-sidebar__icon feather icon-settings"></i>Nizamlamalar
                    </a>
                </li>
            </ul>
        </div>
        <form method="post" action="/logout">
            @csrf
            <button class="c-sidebar__footer logout_btn" href="#" name="btn" type="submit" style="border-top: 1px solid #e1e2e8;">
                Çıxış <i class="c-sidebar__footer-icon feather icon-power"></i>
            </button>
        </form>
    </aside>
</div>
