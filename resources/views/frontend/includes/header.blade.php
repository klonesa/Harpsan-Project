<div id="app">
    <header class="uk-position-relative" style="background-color:rgb(23 34 72)">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-center">
                <div class="uk-navbar-center-left uk-visible@m uk-navbar-item">

                    <ul class="uk-navbar-nav" style="
                    margin-top: 30px;
                ">

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
                                            <li><a href="{{URL('/about')}}">Vizyonumuz</a></li>
                                            <li><a href="{{URL('/about')}}">Misyonumuz</a></li>
                                             <li><a href="{{URL('/media-gallery')}}">{{ trans('backend.gallery') }}</a></li>
                                            <li><a href="{{URL('/contact')}}">Öneri ve Şikayet</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="{{URL('/about/founding_members')}}">Kurucu Üyeler</a></li>
                                            <li><a href="{{URL('/about/executive-management')}}">Başkanlarımız</a></li>
                                            <li><a href="{{URL('/about/boardofdirectory')}}">Yönetim Kurulu</a></li>
                                            <li><a href="{{URL('/about/supervisoryboard')}}">Denetleme Kurulu</a></li>
                                            <li><a href="{{URL('/about/advisory')}}">Danışma ve İstişare Kurulu</a></li>
                                            <li><a href="{{URL('/about/bylaws')}}">Dernek Tüzüğü</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                     

                        <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="{{URL('/activities')}}" title="Hizmetlerimiz">Hizmetlerimiz</a>
                        </li>
                        <li class="@if(Request::segment(1) =='about') active @endif">
                            <a href="#">
                                <span>Haberler & Duyurular & Etkinlikler </span>
                            </a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">

                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/news')}}" title="Haberler">Haberler</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/announcements')}}" title="Duyurular">Duyurular</a>
                                    </li>
                                    <li class="@if(Request::segment(1) =='about') active @endif">
                                        <a href="{{URL('/events')}}"
                                            title="{{ trans('frontend.events') }}">Etkinlikler</a>
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
                    title="Harp-San Tüketim">
                    <img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}"
                        alt="{{ GeneralSiteSettings('site_title') }}"style="width: 135px;height: 135px;">
                </a>

                <div class="uk-navbar-center-right uk-hidden@m" >
                    <a class="uk-navbar-toggle uk-hidden@m uk-navbar-toggle-icon uk-icon tm-text-white "
                        href="#offcanvas-nav" uk-navbar-toggle-icon uk-toggle> <span
                            class="uk-margin-small-right">Menu</span></a>
                </div>

                <div class="uk-navbar-center-right uk-visible@m uk-navbar-item" style="
                margin-top: 30px;
            ">

                    <ul class="uk-navbar-nav uk-margin-small-right">


                        </li>


                        </li>
                        <li>
                            <a href="{{URL('/companies')}}">Anlaşmalı Firmalar</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{URL('/companies')}}#mobilya">Mobilya - Beyaz Eşya</li>
                                    <li><a href="{{URL('/companies')}}#giyim">Ayakkabı - Giyim </a></li>
                                    <li><a href="{{URL('/companies')}}#icecek">Yiyecek - İçecek</a></li>
                                    <li><a href="{{URL('/companies')}}#saglik">Sağlık - Eğitim</a></li>
                                    <li><a href="{{URL('/companies')}}#otomotiv">Otomotiv</a></li>
                                    <li><a href="{{URL('/companies')}}#digerleri">Diğerleri</a></li>
                                </ul>
                            </div>
                        </li>


                        <li>
                            <a href="{{URL('/member_postings')}}">Üye İlanları</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{URL('/member_postings')}}#konut">Konut İlanları</li>
                                    <li><a href="{{URL('/member_postings')}}#arac">Araç İlanları </a></li>
                                    <li><a href="{{URL('/member_postings')}}#diger">Diğer İlanlar</a></li>
                                   
                                </ul>
                            </div>
                        </li>
 
                        <li>
                            <a href="{{URL('/markets')}}">Market</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{URL('/markets')}}#temel">Temel Gıdalar</a></li>
                                    <li><a href="{{URL('/markets')}}#kuru">Kuru Yemiş</a></li>
                                    <li><a href="{{URL('/markets')}}#kuru-gıda">Kuru Gıdalar</a></li>
                                    <li><a href="{{URL('/markets')}}#sıvı">Sıvı Gıdalar</a></li>
                                    <li><a href="{{URL('/markets')}}#baharat">Baharat</a></li>
                                    <li><a href="{{URL('/markets')}}#digerleri">Diğerleri</a></li>
                                    <li><a href="{{URL('/markets')}}">Tüm Liste</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                    <div>
                        <a class="uk-button tm-button-outline-black uk-button-small" style="    border: inset #0e0e0e;
    border-style: inset;
    background-color: whitesmoke;" href="{{route('frontend.auth.login')}}">
                          <b> Üye Girişi </b> 
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
                        <a href="index.html" title="Harpsan">Harp-San</a>
                        <ul class="uk-nav-sub">
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about')}}">{{ trans('frontend.about') }}</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a
                                    href="{{URL('/about/board-of-directors')}}">{{ trans('frontend.board_of_directors') }}</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/executive-management')}}">Başkanlarımız</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/founding_members')}}">Kurucu Üyeler</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/supervisoryboard')}}">Denetleme Kurulu</a>
                            </li>
                            <li><a href="{{URL('/about/advisory')}}">Danışma ve İstişare Kurulu</a></li>
                           
                            <li><a href="{{URL('/about')}}">Hakkımızda</a></li>
                            <li><a href="{{URL('/about')}}">Vizyonumuz</a></li>
                            <li><a href="{{URL('/about')}}">Misyonumuz</a></li>
                            <li><a href="{{URL('/media-gallery')}}">Medya Galeri</a></li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/bylaws')}}">{{ trans('frontend.bylaws') }}</a>
                            </li>
                        </ul>
                    </li> 
                    
                    <li class="uk-nav-divider"></li>
                
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/activities')}}"
                                    title="Hizmetlerimiz">Hizmetlerimiz</a>
                            </li>

                    <li class="uk-nav-divider"></li>
                    <li class="uk-parent">
                        <a href="index.html" title="Harpsan">Haber & Duyuru & Etkinlik</a>
                        <ul class="uk-nav-sub">
                            <li>
                                <a href="{{URL('/news')}}" title="Haberler">Haberler</a>
                            </li>
                            <li>
                                <a href="{{URL('/announcements')}}" title="Duyurular">Duyurular</a>
                            </li>
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/events')}}"
                                    title="{{ trans('frontend.events') }}">{{ trans('frontend.events') }}</a>
                            </li>
                        </ul>
                    </li>




                    <li class="uk-nav-divider"></li>
                    <li class="uk-parent">
                        <a href="index.html" title="Harpsan">Anlaşmalı Firmalar</a>
                        <ul class="uk-nav-sub">
                            <li><a href="{{URL('/companies')}}#mobilya">Mobilya - Beyaz Eşya</li>
                            <li><a href="{{URL('/companies')}}#giyim">Ayakkabı - Giyim </a></li>
                            <li><a href="{{URL('/companies')}}#icecek">Yiyecek - İçecek</a></li>
                            <li><a href="{{URL('/companies')}}#saglik">Sağlık - Eğitim</a></li>
                            <li><a href="{{URL('/companies')}}#otomotiv">Otomotiv</a></li>
                            <li><a href="{{URL('/companies')}}#digerleri">Diğerleri</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li>
                        <a href="{{URL('/member_postings')}}">Üye İlanları</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{URL('/member_postings')}}#konut">Konut İlanları</li>
                                <li><a href="{{URL('/member_postings')}}#arac">Araç İlanları </a></li>
                                <li><a href="{{URL('/member_postings')}}#diger">Diğer İlanlar</a></li>
                               
                            </ul>
                        </div>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li class="uk-parent">
                        <a href="{{URL('/markets')}}" title="Harpsan">Market</a>
                        <ul class="uk-nav-sub">
                                <li><a href="{{URL('/markets')}}#temel">Temel Gıdalar</a></li>
                                    <li><a href="{{URL('/markets')}}#kuru">Kuru Yemiş</a></li>
                                    <li><a href="{{URL('/markets')}}#kuru-gıda">Kuru Gıdalar</a></li>
                                    <li><a href="{{URL('/markets')}}#sıvı">Sıvı Gıdalar</a></li>
                                    <li><a href="{{URL('/markets')}}#baharat">Baharat</a></li>
                                    <li><a href="{{URL('/markets')}}#digerleri">Diğerleri</a></li>
                                    <li><a href="{{URL('/markets')}}">Tüm Liste</a></li>
                        </ul>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li>
                        <a href="{{route('frontend.auth.login')}}">
                            <span uk-icon="icon: sign-in; ratio: .8;"></span>                  <b> Üye Girişi </b> 
                        </a>
                    </li>
                </ul>

            </div>
        </div>

    </header>  
        <div class="rmq-12eea9bc" data-radium="true" style="position: relative; pointer-events: visible; height: auto; background: rgb(255, 255, 255); border-radius: 20px; margin: auto; animation-name: pulse-radium-animation-b93e56c5; animation-duration: 1s; animation-fill-mode: both; animation-iteration-count: 1; width: 450px; box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 15px 0px; overflow: hidden auto;"><div data-radium="true"><div id="PsCloseButton" data-radium="true" style="z-index: 99; position: absolute; right: 10px; top: 10px; cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 60 60"><g id="Group_1196" data-name="Group 1196" transform="translate(-0.5 -0.5)"><circle id="Ellipse_250" data-name="Ellipse 250" cx="30" cy="30" r="30" transform="translate(0.5 0.5)" fill="#000000"></circle><line id="Line_1" data-name="Line 1" x2="23.4" y2="23.4" transform="translate(18.8 18.8)" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="2"></line><line id="Line_2" data-name="Line 2" x1="23.4" y2="23.4" transform="translate(18.8 18.8)" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="2"></line></g></svg></div><style></style></div><div data-radium="true"><div data-radium="true" style="width: 100%; display: flex; justify-content: center; align-items: center;"><img src="https://popup.popupsmart.com/resized/1ab5cdbfc5822346b7d7c0467d59838a.jpeg" data-radium="true" style="margin: 0px; max-width: 100%; width: 96%; height: auto;"></div><style></style></div><div data-radium="true"><div class="rmq-43f44628" data-radium="true" style="padding: 33px 50px;"><div data-radium="true"><div id="PsHeadline" data-radium="true" style="font-family: Inter; font-weight: 700; line-height: initial; margin: 0px 0px 15px;"><p style="text-align: center;"><span style="font-size: 16px;color: #3179F7;">Meet Our Conversion Experts</span></p></div><style></style></div><div data-radium="true"><div id="PsDescription" data-radium="true" style="font-family: Inter; font-weight: 700; line-height: 1.22; margin: 0px 0px 10px;"><p style="text-align: center;"><span style="font-size: 29px;color: #000000;">Exit-intent detected! 🧐<br>Increase sales with popups for free. <br></span></p></div><style></style></div><div data-radium="true"><div id="PsSubDescription" data-radium="true" style="font-family: Inter; font-weight: 400; line-height: initial;"><p style="text-align: center;"><span style="font-size: 16px;color: #000000;">Schedule a product demo meeting, and we'll show you Popupsmart in action!<br><br>If you don't have time for the product demo, you can try popupsmart now for free!</span></p></div><style></style></div><div id="PsCountdown" style="margin-bottom: 15px; font-family: &quot;Nunito Sans&quot;; font-size: 1.2em; color: rgb(0, 0, 0); text-align: center;"></div></div><div class="rmq-126a285f" data-radium="true" style="border-top: 1px solid rgb(204, 204, 204); display: flex; justify-content: center;"><button class="rmq-d802e13 psButtons" name="BUTTON_2" type="button" data-radium="true" style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); border-radius: 0px; border-color: transparent; font-family: Inter; font-weight: 600; font-size: 18px; text-align: center; text-transform: none; text-decoration: none; transition: opacity 0.3s ease 0s; flex-grow: 1; padding: 15px;">Register Now</button><button class="rmq-d802e13 psButtons" name="BUTTON_1" type="button" data-radium="true" style="background-color: rgb(49, 121, 247); color: rgb(255, 255, 255); border-radius: 0px; border-color: transparent; font-family: Inter; font-weight: 600; font-size: 18px; text-align: center; text-transform: none; text-decoration: none; transition: opacity 0.3s ease 0s; flex-grow: 1; padding: 15px;">Schedule a Meeting</button></div><style>@media (max-width:600px){ .rmq-43f44628{padding: 33px 20px !important;}}
@media (max-width:600px){ .rmq-126a285f{flex-direction: column-reverse !important;}}
@media (max-width:600px){ .rmq-d802e13{text-align: center !important;
width: 100% !important;}}</style></div></div>