<div class="o-page__sidebar js-page-sidebar">
    <aside class="c-sidebar">
        <div class="c-sidebar__brand" style="height: auto">
            <a href="{{ route('admin') }}"><img style="margin: 5px" src="{{asset('assets/admin/img/logoadmin1.png')}}" alt="Logo"/></a>
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



                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('pages',3)}}" id="sidebar-pages">
                            <li><a class="c-sidebar__link {{menuActive('pages/index')}}" href="/admin/pages/index" >Ana səhifə</a></li>
                            <li><a class="c-sidebar__link {{menuActive('pages/about-us')}}" href="/admin/pages/about-us" >Haqqımızda</a></li>
                            <li><a class="c-sidebar__link {{menuActive('pages/projects')}}" href="/admin/pages/projects">Layihələr</a></li>
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
                    <a class="c-sidebar__link {{menuActive('partners',4)}}" data-toggle="collapse" href="#sidebar-partners" aria-expanded="{{menuActive('partners',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-briefcase "></i>Müştərilərimiz
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('partners',3)}}" id="sidebar-partners">
                            <li><a class="c-sidebar__link {{menuActive('partners')}}" href="/admin/partners" >Bütün Müştərilər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('partners/create')}}" href="/admin/partners/create">Müştəri Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('testimonials',4)}}" data-toggle="collapse" href="#sidebar-testimonials" aria-expanded="{{menuActive('testimonials',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-star "></i>Rəylər
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('testimonials',3)}}" id="sidebar-testimonials">
                            <li><a class="c-sidebar__link {{menuActive('testimonials')}}" href="/admin/testimonials" >Bütün Rəylər</a></li>
                            <li><a class="c-sidebar__link {{menuActive('testimonials/create')}}" href="/admin/testimonials/create">Rəy Yarat</a></li>
                        </ul>
                    </div>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link {{menuActive('referances',4)}}" data-toggle="collapse" href="#sidebar-referances" aria-expanded="{{menuActive('referances',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-file-text"></i>Referanslar
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('referances',3)}}" id="sidebar-referances">
                            <li><a class="c-sidebar__link {{menuActive('referances')}}" href="/admin/referances" >Bütün Referanslar</a></li>
                            <li><a class="c-sidebar__link {{menuActive('referances/create')}}" href="/admin/referances/create">Referans Yarat</a></li>
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
                    <a class="c-sidebar__link {{menuActive('alboms',4)}}" data-toggle="collapse" href="#sidebar-gallery" aria-expanded="{{menuActive('alboms',2)}}" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-film "></i>Qalereya
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse {{menuActive('alboms',3)}}" id="sidebar-gallery">
                            <li><a class="c-sidebar__link {{menuActive('alboms')}}" href="/admin/alboms" >Bütün Albomlar </a></li>
                            <li><a class="c-sidebar__link {{menuActive('alboms/create')}}" href="/admin/alboms/create">AlbomYarat</a></li>
                        </ul>
                    </div>
                </li>
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
