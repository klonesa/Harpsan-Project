<div id="app">
    <header class="uk-position-relative" style="background-color:#F5F5F5;">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-center">
                <div class="uk-navbar-center-left uk-visible@m uk-navbar-item">

                    <ul class="uk-navbar-nav">

                   <!--     <li class="@if(Request::segment(1) == '') active @endif"><a
                                href="{{route('frontend.index')}}">{{ trans('frontend.home') }}</a>
                        </li>
-->
                        <li>
                            <a href="#">Harp-San</a>
                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="{{URL('/about')}}">Hakkımızda</a></li>
                                            <li><a href="#">Vizyonumuz</a></li>
                                            <li><a href="#">Misyonumuz</a></li>
                                            <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="{{URL('/media-gallery')}}"
                                title="{{ trans('backend.gallery') }}">{{ trans('backend.gallery') }}</a>
                        </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="{{URL('/about/founding_members')}}">Kurucu Üyeler</a></li>
                                            <li><a href="{{URL('/about/executive-management')}}">Başkanlarımız</a></li>
                                            <li><a href="{{URL('/about/board-of-directors')}}">Yönetim Kurulu</a></li>
                                            <li><a href="{{URL('/about/supervisoryboard')}}">Denetleme Kurulu</a></li>
                                            <li><a href="{{URL('/about/advisory')}}">Danışma ve İstişare Kurulu</a></li>
                                            <li><a href="{{URL('/about/bylaws')}}">Dernek Tüzüğü</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                <a href="#">Faaliyetlerimiz</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                    

                        <li><a href="#">Harp-San Finans</a></li>
                        <li><a href="#">Harp-San Tüketim</a></li>
                        <li><a href="#">Harp-San Firmalar</a></li>
                        <li><a href="#">Harp-San Sosyal</a></li>
                        <li><a href="#">Harp-San Yapı</a></li>


                    </ul>
                </div>
            </li>
            <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="{{URL('/events')}}"
                                title="{{ trans('frontend.events') }}">Etkinliklerimiz</a>
                        </li>
                        <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="#">
                                <span>Haberler & Duyurular</span>
                            </a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/news')}}" title="Haberler">Haberler</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/announcements')}}" title="Duyurular">Duyurular</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!--   <li class="uk-active">
                            <a href="#" title="Harpsan">
                                <span>Hakkımızda</span>
                            </a>
                            <div class="uk-navbar-dropdown uk-width-4-5@m">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/about')}}">{{ trans('frontend.about') }}</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a
                                            href="{{URL('/about/board-of-directors')}}">{{ trans('frontend.board_of_directors') }}</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/about/executive-management')}}">Başkanlar</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/about/founding_members')}}">Kurucu Üyeler</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/about/supervisoryboard')}}">Denetleme Kurulu</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a
                                            href="{{URL('/about/organizational-structure')}}">{{ trans('frontend.organizational_structure') }}</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/about/bylaws')}}">{{ trans('frontend.bylaws') }}</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="{{URL('/activities')}}">
                                <span>{{ trans('frontend.activities') }}</span>
                            </a>
                        </li>
                        -->
                  

                    </ul>

                </div>



                <a href="{{route('frontend.index')}}" class="uk-navbar-item uk-logo uk-margin-left uk-margin-right"
                    title="GYİAD">
                    <img width="80" src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}"
                        alt="{{ GeneralSiteSettings('site_title') }}">
                </a>

                <div class="uk-navbar-center-right uk-hidden@m">
                    <a class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon tm-text-white"
                        href="#offcanvas-nav" uk-navbar-toggle-icon uk-toggle> <span
                            class="uk-margin-small-right">Menu</span></a>
                </div>

                <div class="uk-navbar-center-right uk-visible@m uk-navbar-item">

                    <ul class="uk-navbar-nav uk-margin-small-right">


                        </li>
                        <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="{{URL('/companies')}}" title="Anlaşmalı Firmalar">Anlaşmalı Firmalar</a>
                        </li>
                        <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="{{URL('/companies')}}" title="Üye İlanları">Üye İlanları</a>
                        </li>
                        <li>
                <a href="#">Harp-San Ürünler</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
                        
                    </ul>

                    <div>
                        <a class="uk-button tm-button-outline-black uk-button-small" style="    border: cadetblue;
    border-style: inset;
    background-color: whitesmoke;" href="{{route('frontend.auth.login')}}">
                            Portal Giriş
                        </a>

                    </div>

                </div>

            </div>
        </nav>

        <div id="offcanvas-nav" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar">



                <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                    <li>
                        <a href="{{route('frontend.index')}}">{{ trans('frontend.home') }}</a>
                    </li>
                    <li class="uk-nav-divider"></li>

                    <li class="uk-parent">
                        <a href="index.html" title="Harpsan">Harpsan</a>
                        <ul class="uk-nav-sub">
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about')}}">{{ trans('frontend.about') }}</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a
                                    href="{{URL('/about/board-of-directors')}}">{{ trans('frontend.board_of_directors') }}</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/executive-management')}}">Başkanlar</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/founding_members')}}">Kurucu Üyeler</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/supervisoryboard')}}">Denetleme Kurulu</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a
                                    href="{{URL('/about/organizational-structure')}}">{{ trans('frontend.organizational_structure') }}</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/bylaws')}}">{{ trans('frontend.bylaws') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li class="@if(Request::segment(1) =='about') active @endif">
                        <a href="{{URL('/activities')}}">
                            <span>{{ trans('frontend.activities') }}</span>
                        </a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li>
                        <a href="{{URL('/news')}}" title="Haberler">Haberler</a>
                    </li>
                    <li class="uk-nav-divider"></li>

                    <li>
                        <a href="{{URL('/announcements')}}" title="Duyurular">Duyurular</a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li class="@if(Request::segment(1) =='about') active @endif">
                        <a href="{{URL('/companies')}}" title="Anlaşmalı Firmalar">Anlaşmalı Firmalar</a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li class="@if(Request::segment(1) =='about') active @endif">
                        <a href="{{URL('/events')}}"
                            title="{{ trans('frontend.events') }}">{{ trans('frontend.events') }}</a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li class="@if(Request::segment(1) =='about') active @endif">
                        <a href="{{URL('/media-gallery')}}"
                            title="{{ trans('backend.gallery') }}">{{ trans('backend.gallery') }}</a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li>
                        <a href="{{route('frontend.auth.login')}}">
                            <span uk-icon="icon: sign-in; ratio: .8;"></span> Portal Giriş
                        </a>
                    </li>
                </ul>

            </div>
        </div>

    </header>