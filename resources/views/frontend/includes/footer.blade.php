<footer class="uk-light">
    <div class="uk-container">
        <div uk-grid>

            <div class="uk-width-1-3@m">
                <div class="uk-panel">
 <h4>İletişim Bilgilerimiz</h4>
                    <div class="uk-margin-medium-top uk-text-small">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3"><span uk-icon="icon: phone;"></span> Telefon:</div>
                            <div class="uk-width-expand">{{ GeneralSiteSettings('site_mobile')}}</div>
                        </div>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3"><span uk-icon="icon: mail;"></span> E-posta:</div>
                            <div class="uk-width-expand"> <a
                                class="text-gray" href="mailto:">{{ GeneralSiteSettings('site_email')}}</a></div>
                        </div>
              
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3"><span uk-icon="icon: home;"></span> Adres:</div>
                            <div class="uk-width-expand">{{ GeneralSiteSettings('site_address')}} </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-1-3@m">
                <div class="uk-child-width-1-2@m" uk-grid>

                    <div>
                        <h4>Harpsan Tüketim Derneği</h4>
                        <ul class="uk-nav uk-nav-default">
                         
                                                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/supervisoryboard')}}">Denetleme Kurulu</a>
                            </li>
                                                      
                                                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/bylaws')}}">{{ trans('frontend.bylaws') }}</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4>Hakkımızda</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about')}}">{{ trans('frontend.about') }}</a>
                            </li>
                                                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/board-of-directors')}}">{{ trans('frontend.board_of_directors') }}</a>
                            </li>
                                                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/executive-management')}}">Başkanlar</a>
                            </li>
                                                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/about/founding_members')}}">Kurucu Üyeler</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="uk-width-1-3@m">
                <div class="uk-panel">
                     <div>
                        <h4>Haberler Duyurular</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li class="@if(Request::segment(1) =='about') active @endif">
                                <a href="{{URL('/news')}}" title="Haberler">Haberler</a>
                            </li>
                                                                <li class="@if(Request::segment(1) =='about') active @endif">
                                    <a href="{{URL('/announcements')}}" title="Duyurular">Duyurular</a>
                                 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
<div class="row" style="text-align:center;">
<div class="col">
<a href="{{ GeneralSiteSettings('site_facebook_url')}}" target="_blank" uk-icon="facebook"></a>&nbsp;
<a href="{{ GeneralSiteSettings('site_instagram_url')}}" target="_blank" uk-icon="instagram"></a>&nbsp;
<a href="{{ GeneralSiteSettings('site_linkedin_url')}}" target="_blank" uk-icon="linkedin"></a>&nbsp;
<a href="{{ GeneralSiteSettings('site_twitter_url')}}" target="_blank" uk-icon="twitter"></a>&nbsp;
</div>





</div>
        <hr class="uk-margin-large-top">

        <div class="uk-flex uk-flex-between">
            <span>Tüm Hakları Saklıdır &copy; 2021</span>
             <a href="https://themedyacreative.com">Themedya Creative Yazılım & Tasarım</a>  
        </div>
        <hr>

    </div>

   <script>
            $(function(){
                // sayfa açılışında dialog kutusunun gelmesi için her hangi bir buton için yerleştirmedik
                $("#uyari").dialog({
                    width:600, //dialog kutusunun genişliği
                    modal:true, //arkaplanın koyu olması
                    autoOpen:true, //gerek yok ama otomatik açılması için
                    position:  { my: "center top", at: "center top" } //konum
                });
            })
            
        </script>

     <script>
         
         var acceptButton = document.getElementById('acceptButton');
        var acceptCookies = new XMLHttpRequest();
        var cookiesRoute = 'index.html';
        function acceptCookie() {
            document.getElementById('cookie-banner').style.display = "none";
            acceptCookies.open('GET.html', cookiesRoute);
            acceptCookies.send();
            UIkit.notification({message: '<p class="uk-margin-remove">Kullanım koşullarını kabul ettiniz</p>', pos: 'bottom-center', status: 'success'});
        }
        function denyCookie() {
            document.getElementById('cookie-banner').style.display = "none";
            acceptCookies.open('GET.html', cookiesRoute);
            acceptCookies.send();
            UIkit.notification({message: '<p class="uk-margin-remove">Kullanım koşullarını kabul etmediniz</p>', pos: 'bottom-center', status: 'warning'});
        }
    </script>
    </footer>

</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
                                    });
</script>
</body>

 </html>