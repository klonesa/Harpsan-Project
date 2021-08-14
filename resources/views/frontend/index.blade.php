@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('navs.general.home'))

@section('content')

 <section id="home">
    <div class="container-fluid p-0">

        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
            <div class="rev_slider rev_slider_fullscreen" data-version="5.0">
                <ul>
                    @foreach ($sliders as $slider)
                    <!-- SLIDE 1 -->
                    <li data-index="rs-{{ $loop->index + 1 }}" data-transition="slidingoverlayhorizontal"
                        data-slotamount="default" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-thumb="{{asset('uploads/sliders/')}}/{{$slider->image}}"
                        data-rotate="0" data-saveperformance="off" data-title="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('uploads/sliders/')}}/{{$slider->image}}" alt="{{$slider->title}}"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-bgparallax="10" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                            id="rs-{{ $loop->index + 1 }}-layer-1" data-x="['middle']" data-hoffset="['0']"
                            data-y="['middle']" data-voffset="['-25']" data-fontsize="['35']" data-lineheight="['54']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:600;">{{$slider->title}}
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme text-white" id="rs-{{ $loop->index + 1 }}-layer-2"
                            data-x="['middle']" data-hoffset="['0']" data-y="['middle']" data-voffset="['35','35','40']"
                            data-fontsize="['16','18',24']" data-lineheight="['28']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                            {!! $slider->text !!}
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" id="rs-{{ $loop->index + 1 }}-layer-3" data-x="['middle']"
                            data-hoffset="['0']" data-y="['middle']" data-voffset="['95','105','110']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20"
                                href="{{ $slider->url }}">{{ trans('frontend.read_more')}}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- end .rev_slider -->
        </div>
        <!--  Revolution slider scriopt -->
        <script>
        $(document).ready(function(e) {
            $(".rev_slider_fullscreen").revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: false,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div></div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        hide_under: 600,
                        style: "metis",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 5,
                        tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
                    }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [600, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        });
        </script>
        <!-- Slider Revolution Ends -->
    </div>
</section>
<section id="tm-home-news" class="uk-section tm-filter-after">
    <div class="uk-container">

    <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">

        <div class="uk-width-1-3@m">
            <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                <h3 class="uk-h2"><span>Son</span> <span>Haberler</span></h3>
            </div>
        </div>

        <div class="uk-width-1-3@m uk-visible@s uk-text-small">
            <div class="uk-panel uk-flex uk-flex-middle">
                GYİAD, sosyal sorumluluk projeleri üretmek, üyeler arası ticari ilişki ve işbirliğinin artırılması yönünde çalışmalar yapmak ve sektörel sorunların çözümüne yönelik projeler geliştirmek üzere faaliyetlerini sürdürmektedir.
            </div>
        </div>

        <div class="uk-width-expand">
            <div class="uk-panel uk-flex uk-flex-middle">
                <a class="uk-button tm-button-outline-primary tm-button-large uk-flex uk-flex-middle uk-flex-between" href="basin/haberler.html">
                    TÜMÜNÜ GÖSTER
                    <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                </a>
            </div>
        </div>

    </div>

</div>

<div class="uk-container uk-container-large uk-container-expand-right uk-margin-medium-top">
    <div uk-slider="finite: true;" style="overflow: visible !important;">

        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-3@s uk-grid" uk-height-match="target: > li > article;">
                                <li>
                    <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                <a href="haberler/anitkabir-ziyareti.html" title="Anıtkabir Ziyareti">
                                                                        <img src="storage/uploads/news/12498/conversions/WhatsApp-Image-2021-07-13-at-15.31.52-thumb.jpg" alt="Anıtkabir Ziyareti" uk-img>
                                                                    </a>
                        </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="haberler/anitkabir-ziyareti.html" title="Anıtkabir Ziyareti">
                                    Anıtkabir Ziyareti
                                </a>
                            </h4>
                                                        <div class="uk-text-small">
                                Sizlerin de bildiği gibi 24 Haziran 2021 tarihinde gerçekleşen 18. Olağan Genel Kurul toplantısında 18. Dönem Yönetim Kurulu ve Denetleme Kurulu asil ve yedek üyeleri seçilmiştir. Bu kapsamda, Derneğimiz yeni dönemin ilk ziyaretini yönetim kurulumuz ve üyelerimizden oluşan bir heyetle ANITKABİR’e gerçekleştirerek, Cumhuriyetimizin kurucusu Ulu Önderimiz Gazi Mustafa Kemal ATATÜRK’ü minnet ve saygıyla anmıştır.
                            </div>
                                                        <div class="uk-margin">
                                <a href="haberler/anitkabir-ziyareti.html" title="Anıtkabir Ziyareti">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </article>
                </li>
                                <li>
                    <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                <a href="haberler/gyiad-18-donem-olagan-genel-kurul-toplantisi.html" title="GYİAD 18. Dönem Olağan Genel Kurul Toplantısı">
                                                                        <img src="storage/uploads/news/12441/conversions/MTN_8561-min-thumb.jpg" alt="GYİAD 18. Dönem Olağan Genel Kurul Toplantısı" uk-img>
                                                                    </a>
                        </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="haberler/gyiad-18-donem-olagan-genel-kurul-toplantisi.html" title="GYİAD 18. Dönem Olağan Genel Kurul Toplantısı">
                                    GYİAD 18. Dönem Olağan Genel Kurul Toplantısı
                                </a>
                            </h4>
                                                        <div class="uk-text-small">
                                Derneğimiz 24 Haziran 2021 tarihinde 18. Olağan Genel Kurul toplantısını düzenledi. Toplantının açılış konuşması 17. Dönem Yönetim Kurulu Başkanı Sayın Fuat Pamukçu tarafından yapıldı. Ardından Derneğimizin Genel Sekreteri Sayın Sinem Sonuvar Birbilen 17. Dönem Faaliyet Raporu sunumunu gerçekleştirdi. Hemen akabinde  toplantı gündemi kapsamında Denetleme Kurulu Başkanı İrem Pehlivanoğlu Gürkaş tarafından 17. Dönem Bilanço, gelir ve gider hesaplarının detayları paylaşıldı.  Bahsi geçen toplantıda GYİAD’ın Yönetim Kurulu ve Denetleme Kurulu asil ve yedek üyelerinin seçimi gerçekleştirildi ve Derneğimizin 18. Dönem Yönetim Kurulu Başkanı olarak yeniden Sayın Fuat Pamukçu seçildi.
                            </div>
                                                        <div class="uk-margin">
                                <a href="haberler/gyiad-18-donem-olagan-genel-kurul-toplantisi.html" title="GYİAD 18. Dönem Olağan Genel Kurul Toplantısı">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </article>
                </li>
                                <li>
                    <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                <a href="haberler/genc-yonetici-ve-is-insanlari-dernegi-18-olagan-genel-kurul-cagrisi-.html" title="Genç Yönetici ve İş İnsanları Derneği 18. Olağan Genel Kurul Çağrısı">
                                                                        <img src="storage/uploads/news/12428/conversions/web_gorsel-thumb.jpg" alt="Genç Yönetici ve İş İnsanları Derneği 18. Olağan Genel Kurul Çağrısı" uk-img>
                                                                    </a>
                        </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="haberler/genc-yonetici-ve-is-insanlari-dernegi-18-olagan-genel-kurul-cagrisi-.html" title="Genç Yönetici ve İş İnsanları Derneği 18. Olağan Genel Kurul Çağrısı">
                                    Genç Yönetici ve İş İnsanları Derneği 18. Olağan Genel Kurul Çağrısı
                                </a>
                            </h4>
                                                        <div class="uk-text-small">
                                Derneğimizin 18. Olağan Genel Toplantısı 16 Haziran 2021 tarihinde saat 12:00&#039;da Genç Yönetici ve İş İnsanları Derneği Merkezi, Esentepe Mah. Büyükdere Cad. Assembly Ferko Signature Binası No:175, Levent - Şişli / İstanbul adresinde toplanmış olup yeterli çoğunluk sağlanamamıştır.

Bu sebeple ikinci toplantı 24 Haziran 2021 tarihinde aynı gündemle Portaxe&#039;da, Baltalimanı Hisar Cd. No:60, 34470 Sarıyer / İstanbul adresinde saat 09:30&#039;da yapılacaktır.
                            </div>
                                                        <div class="uk-margin">
                                <a href="haberler/genc-yonetici-ve-is-insanlari-dernegi-18-olagan-genel-kurul-cagrisi-.html" title="Genç Yönetici ve İş İnsanları Derneği 18. Olağan Genel Kurul Çağrısı">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </article>
                </li>
                                <li>
                    <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                <a href="haberler/gyiad-tuzuk-degisikligi-olaganustu-genel-kurul-toplantisi.html" title="GYİAD Tüzük Değişikliği Olağanüstü Genel Kurul Toplantısı">
                                                                        <img src="storage/uploads/news/12397/conversions/2-thumb.jpg" alt="GYİAD Tüzük Değişikliği Olağanüstü Genel Kurul Toplantısı" uk-img>
                                                                    </a>
                        </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="haberler/gyiad-tuzuk-degisikligi-olaganustu-genel-kurul-toplantisi.html" title="GYİAD Tüzük Değişikliği Olağanüstü Genel Kurul Toplantısı">
                                    GYİAD Tüzük Değişikliği Olağanüstü Genel Kurul Toplantısı
                                </a>
                            </h4>
                                                        <div class="uk-text-small">
                                Genç Yönetici ve İş İnsanları Derneği Yönetim Kurulu Tüzük Değişikliği Olağanüstü Genel Kurul Toplantısı 30 Mart 2021 tarihinde Hyatt Centric Levent İstanbul (Balo Salonu)&#039;da gerçekleştirildi.
                            </div>
                                                        <div class="uk-margin">
                                <a href="haberler/gyiad-tuzuk-degisikligi-olaganustu-genel-kurul-toplantisi.html" title="GYİAD Tüzük Değişikliği Olağanüstü Genel Kurul Toplantısı">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </article>
                </li>
                                <li>
                    <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                <a href="haberler/genc-yonetici-ve-is-insanlari-dernegi-yonetim-kurulu-tuzuk-degisikligi-olaganustu-genel-kurul-cagrisi-.html" title="Genç Yönetici Ve İş İnsanları Derneği Yönetim Kurulu Tüzük Değişikliği Olağanüstü Genel Kurul Çağrısı">
                                                                        <img src="storage/uploads/news/12373/conversions/WhatsApp-Image-2021-03-08-at-14.20.49-thumb.jpg" alt="Genç Yönetici Ve İş İnsanları Derneği Yönetim Kurulu Tüzük Değişikliği Olağanüstü Genel Kurul Çağrısı" uk-img>
                                                                    </a>
                        </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="haberler/genc-yonetici-ve-is-insanlari-dernegi-yonetim-kurulu-tuzuk-degisikligi-olaganustu-genel-kurul-cagrisi-.html" title="Genç Yönetici Ve İş İnsanları Derneği Yönetim Kurulu Tüzük Değişikliği Olağanüstü Genel Kurul Çağrısı">
                                    Genç Yönetici Ve İş İnsanları Derneği Yönetim Kurulu Tüzük Değişikliği Olağanüstü Genel Kurul Çağrısı
                                </a>
                            </h4>
                                                        <div class="uk-text-small">
                                Derneğimizin Tüzük Değişikliği Olağanüstü Genel Kurul toplantısı 23.03.2021 tarihinde saat 12:00&#039;da GYİAD Merkez&#039;de yeterli çoğunluk sağlanamadığından 30.03.2021 tarihinde aynı gündemle, Hyatt Centric Levent İstanbul (Balo Salonu) Levent, Büyükdere Cd. No:136, 34330 Beşiktaş / İstanbul adresinde saat 17:00&#039;da yapılacaktır.
                            </div>
                                                        <div class="uk-margin">
                                <a href="haberler/genc-yonetici-ve-is-insanlari-dernegi-yonetim-kurulu-tuzuk-degisikligi-olaganustu-genel-kurul-cagrisi-.html" title="Genç Yönetici Ve İş İnsanları Derneği Yönetim Kurulu Tüzük Değişikliği Olağanüstü Genel Kurul Çağrısı">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </article>
                </li>
                                <li>
                    <article class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                <a href="haberler/gyiad-surdurulebilir-kalkinma-icin-once-surdurulebilir-egitim-webinari.html" title="GYİAD Sürdürebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi">
                                                                        <img src="storage/uploads/news/12371/conversions/1200x800webson-thumb.jpg" alt="GYİAD Sürdürebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi" uk-img>
                                                                    </a>
                        </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="haberler/gyiad-surdurulebilir-kalkinma-icin-once-surdurulebilir-egitim-webinari.html" title="GYİAD Sürdürebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi">
                                    GYİAD Sürdürebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi
                                </a>
                            </h4>
                                                        <div class="uk-text-small">
                                GYİAD, Covid-19 salgınına yönelik olarak alınan tedbirler çerçevesinde çalışmalarını sanal ortamda sürdürmeye devam etmektedir.
Bu kapsamda Eğitim Çalışma Grubu&#039;nun ilk projesinde işbirliği yaptığı, Bilişim Garajı Kurucusu ve Gazi Üniversitesi, Gazi Eğitim Fakültesi Öğretim Üyesi Prof. Dr. Sayın Selçuk Özdemir 08 Mart 2021 tarihinde saat 20:00&#039;da öğretmenlere yönelik gerçekleştirilecek olan “Sürdürülebilir Kalkınma İçin Önce Sürdürülebilir Eğitim&quot; başlıklı online toplantımızda konuşmacı olarak yer almıştır.
                            </div>
                                                        <div class="uk-margin">
                                <a href="haberler/gyiad-surdurulebilir-kalkinma-icin-once-surdurulebilir-egitim-webinari.html" title="GYİAD Sürdürebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </article>
                </li>
                            </ul>
            <a uk-icon="icon: arrow-left" class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-left uk-position-small uk-box-shadow-large" href="#" uk-slider-item="previous"></a>
            <a uk-icon="icon: arrow-right" class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-right uk-position-small uk-box-shadow-large" href="#" uk-slider-item="next"></a>
        </div>

    </div>
</div>
</section>
    <section id="tm-home-about" class="uk-section tm-background">
    <div class="uk-container">
    <div class="uk-child-width-1-2@m" uk-grid uk-height-match="target: > div;">

        <div>

            <div class="uk-width-2-3@m">
                <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                    <h3 class="uk-h2"><span>GYİAD</span> <span>Hakkında</span></h3>
                </div>
            </div>

            <div class="uk-margin-medium uk-text-small">
                <p>GYİAD, 1986 yılında gen&ccedil; iş&nbsp;insanları ve y&ouml;neticilerinin ihtiya&ccedil; ve sorunlarına &ccedil;&ouml;z&uuml;m &uuml;retmek ve onları &ccedil;eşitli platformlarda temsil etmek amacıyla kurulmuştur.</p>

<p>GYİAD, toplum &uuml;zerinde gen&ccedil; iş&nbsp;insanları ve y&ouml;neticilerinin siyasi ve ekonomik etkisini artırmak i&ccedil;in &ccedil;alışmalar yapan, yaratıcı girişimcilik projelerini destekleyen ve hızla b&uuml;y&uuml;yen, etkili ve &ouml;nc&uuml; bir sivil toplum &ouml;rg&uuml;t&uuml;d&uuml;r. GYİAD, sosyal sorumluluk projeleri &uuml;retmek, &uuml;yeler arası ticari ilişki ve işbirliğinin artırılması y&ouml;n&uuml;nde &ccedil;alışmalar yapmak ve sekt&ouml;rel sorunların &ccedil;&ouml;z&uuml;m&uuml;ne y&ouml;nelik projeler geliştirmek &uuml;zere faaliyetlerini s&uuml;rd&uuml;rmektedir.</p>
            </div>

            <div class="uk-margin">
                <a class="uk-button uk-button-primary tm-button-large uk-flex uk-flex-middle uk-flex-between" href="hakkinda.html">
                    DETAYLAR
                    <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                </a>
            </div>

        </div>

        <div class="uk-width-expand uk-visible@s"></div>

        <div class="uk-width-2-5@m uk-flex uk-flex-middle">
            <div class="tm-outer-bg">
                <img class="uk-position-relative" src="storage/theme/home/yk18.jpg" alt="GYİAD Board">
            </div>
        </div>

    </div>
</div>
</section>
    <section id="tm-home-groups" class="uk-section tm-filter-after">
    <div class="uk-container">

    <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">

        <div class="uk-width-1-3@m">
            <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                <h3 class="uk-h2"><span>Çalışma</span> <span>Grupları</span></h3>
            </div>
        </div>

        <div class="uk-width-1-3@m uk-visible@s uk-text-small">
            <div class="uk-panel uk-flex uk-flex-middle">
                Üyelerimiz ilgili oldukları alanlarda yer alabilecekleri farklı çalışma grupları sayesinde; bilgi, görüş ve önerileriyle Dernek çalışmalarına aktif olarak katılım sağlamaktadır.
            </div>
        </div>

        <div class="uk-width-expand">
            <div class="uk-panel uk-flex uk-flex-middle">
                <a class="uk-button tm-button-outline-primary tm-button-large uk-flex uk-flex-middle uk-flex-between" href="gruplar.html">
                    TÜMÜNÜ GÖSTER
                    <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                </a>
            </div>
        </div>

    </div>

</div>

<div class="uk-container uk-container-large uk-container-expand-right uk-margin-medium-top">
    <div uk-slider style="overflow: visible !important;">

        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-3@s uk-grid" uk-height-match="target: > li > .uk-card">
                                <li>
                    <div class="uk-card uk-card-default uk-card-body uk-card-small">
                        <div class="group-icon tm-circle tm-circle-small tm-circle-white uk-flex uk-flex-center uk-flex-middle">
                            <img width="22" class="uk-preserve" src="storage/theme/groups/icons/employment.svg" alt="" uk-svg>
                        </div>
                        <h4 class="uk-text-bold">
                            <a class="uk-link-text" href="gruplar/istihdam.html" title="İstihdam Çalışma Grubu">
                                İstihdam Çalışma Grubu
                            </a>
                        </h4>
                        <div class="uk-text-small">İstihdam Çalışma Grubu olarak, istihdamın artırılması için öncelikli sorunları belirlemeyi, GYIAD üyeleri ve konu ile alakalı resmi/sivil kurumların da desteğini alarak çözüm önerileri getirmeyi hedef...</div>
                        <p class="uk-text-small">
                            <a href="gruplar/istihdam.html" title="İstihdam Çalışma Grubu">DETAYLAR <span uk-icon="icon: arrow-right"></span></a>
                        </p>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-body uk-card-small">
                        <div class="group-icon tm-circle tm-circle-small tm-circle-white uk-flex uk-flex-center uk-flex-middle">
                            <img width="22" class="uk-preserve" src="storage/theme/groups/icons/development.svg" alt="" uk-svg>
                        </div>
                        <h4 class="uk-text-bold">
                            <a class="uk-link-text" href="gruplar/uye-gelisim.html" title="Üye Gelişim Çalışma Grubu">
                                Üye Gelişim Çalışma Grubu
                            </a>
                        </h4>
                        <div class="uk-text-small">GYİAD Üye Gelişim Çalışma Grubu, öğrenmenin ve gelişmenin yaşam boyu sürekliliği felsefesiyle, kendi alanlarında tecrübeli mevcut üyelerinin birçok farklı alanda kişisel gelişimlerine, farklı deneyiml...</div>
                        <p class="uk-text-small">
                            <a href="gruplar/uye-gelisim.html" title="Üye Gelişim Çalışma Grubu">DETAYLAR <span uk-icon="icon: arrow-right"></span></a>
                        </p>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-body uk-card-small">
                        <div class="group-icon tm-circle tm-circle-small tm-circle-white uk-flex uk-flex-center uk-flex-middle">
                            <img width="22" class="uk-preserve" src="storage/theme/groups/icons/entrepreneurship.svg" alt="" uk-svg>
                        </div>
                        <h4 class="uk-text-bold">
                            <a class="uk-link-text" href="gruplar/girisimcilik.html" title="Girişimcilik Çalışma Grubu">
                                Girişimcilik Çalışma Grubu
                            </a>
                        </h4>
                        <div class="uk-text-small">Kuruluşundan bugüne GYİAD´ın temel taşlarından biri girişimcilik ve üyeleri arasındaki girişimci ruhunu desteklemek olmuştur. Girişimcilik Çalışma Grubu olarak hedefimiz; farklı sektörlerden alanında...</div>
                        <p class="uk-text-small">
                            <a href="gruplar/girisimcilik.html" title="Girişimcilik Çalışma Grubu">DETAYLAR <span uk-icon="icon: arrow-right"></span></a>
                        </p>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-body uk-card-small">
                        <div class="group-icon tm-circle tm-circle-small tm-circle-white uk-flex uk-flex-center uk-flex-middle">
                            <img width="22" class="uk-preserve" src="storage/theme/groups/icons/digital.svg" alt="" uk-svg>
                        </div>
                        <h4 class="uk-text-bold">
                            <a class="uk-link-text" href="gruplar/dijital.html" title="Dijital Çalışma Grubu">
                                Dijital Çalışma Grubu
                            </a>
                        </h4>
                        <div class="uk-text-small">Çalışma grubumuz, dünyadaki trendleri de takip ederek, dijitalleşme üzerine öncü politikalar ve stratejiler geliştirip farkındalık yaratmak ve toplumsal gelişim için ölçülebilir değerler sağlamayı hed...</div>
                        <p class="uk-text-small">
                            <a href="gruplar/dijital.html" title="Dijital Çalışma Grubu">DETAYLAR <span uk-icon="icon: arrow-right"></span></a>
                        </p>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-body uk-card-small">
                        <div class="group-icon tm-circle tm-circle-small tm-circle-white uk-flex uk-flex-center uk-flex-middle">
                            <img width="22" class="uk-preserve" src="storage/theme/groups/icons/forum.svg" alt="" uk-svg>
                        </div>
                        <h4 class="uk-text-bold">
                            <a class="uk-link-text" href="gruplar/gyiad-cevre-surdurulebilirlik-iklim-degisikligi.html" title="Sürdürülebilir Çevre Çalışma Grubu">
                                Sürdürülebilir Çevre Çalışma Grubu
                            </a>
                        </h4>
                        <div class="uk-text-small">Çalışma grubumuz, 21’inci yüzyılda insanlığın en fazla odaklanması gereken küresel sorunların başında gelen çevresel sorunlar, iklim değişikliği ve tarım odağında çalışmalar yapmaktadır. Çalışma grubu...</div>
                        <p class="uk-text-small">
                            <a href="gruplar/gyiad-cevre-surdurulebilirlik-iklim-degisikligi.html" title="Sürdürülebilir Çevre Çalışma Grubu">DETAYLAR <span uk-icon="icon: arrow-right"></span></a>
                        </p>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-body uk-card-small">
                        <div class="group-icon tm-circle tm-circle-small tm-circle-white uk-flex uk-flex-center uk-flex-middle">
                            <img width="22" class="uk-preserve" src="storage/theme/groups/icons/forum.svg" alt="" uk-svg>
                        </div>
                        <h4 class="uk-text-bold">
                            <a class="uk-link-text" href="gruplar/gyiad-mba.html" title="GYİAD MBA Çalışma Grubu">
                                GYİAD MBA Çalışma Grubu
                            </a>
                        </h4>
                        <div class="uk-text-small">Yüksek lisans programı niteliğinde bu programın amacı ölçülebilir fayda üreten, gençlik başlığıyla örtüşen bir vizyonla ülkeye yetişmiş iş gücü katmaktır. Program kapsamında alanında uzman eğitmenler...</div>
                        <p class="uk-text-small">
                            <a href="gruplar/gyiad-mba.html" title="GYİAD MBA Çalışma Grubu">DETAYLAR <span uk-icon="icon: arrow-right"></span></a>
                        </p>
                    </div>
                </li>
                            </ul>
            <a uk-icon="icon: arrow-left" class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-left uk-position-small uk-box-shadow-large" href="#" uk-slider-item="previous"></a>
            <a uk-icon="icon: arrow-right" class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-right uk-position-small uk-box-shadow-large" href="#" uk-slider-item="next"></a>
        </div>

    </div>
</div>

</section>
    <section id="tm-home-projects" class="uk-section tm-background tm-filter-after">
    <div class="uk-container">

    <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">

        <div class="uk-width-1-3@m">
            <div class="tm-title-border-top span-block uk-panel uk-flex uk-flex-middle">
                <h3 class="uk-h2"><span>GYİAD</span> <span>Projeleri</span></h3>
            </div>
        </div>

        <div class="uk-width-1-3@m uk-visible@s uk-text-small">
            <div class="uk-panel uk-flex uk-flex-middle">
                30 yılı aşkın bir süredir ortak değerleri paylaşan GYİAD üyeleri, gençlikleri ve enerjileriyle katma değer yaratan projelere imza atmaya ve ülkelerine katkı sağlamaya devam ediyor.
            </div>
        </div>

        <div class="uk-width-expand">
            <div class="uk-panel uk-flex uk-flex-middle">
                <a class="uk-button tm-button-outline-primary tm-button-large uk-flex uk-flex-middle uk-flex-between" href="projeler.html">
                    TÜMÜNÜ GÖSTER
                    <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                </a>
            </div>
        </div>

    </div>

</div>

<div class="uk-container uk-container-large uk-container-expand-right uk-margin-medium-top">
    <div uk-slider="finite: true;" style="overflow: visible !important;">

        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-3@s uk-grid" uk-height-match="target: > li > .uk-card;">
                                <li>
                    <div class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                                            <a href="projeler/gyiad-turkiyede-genc-is-piyasasi-ve-gelecegine-bakis-raporu.html" title="GYİAD Türkiye&#039;de Genç İş Piyasası ve Geleceğine Bakış Raporu">
                                    <img src="storage/uploads/project/11750/conversions/WhatsApp-Image-2020-05-22-at-12.16.01-thumb.jpg" alt="GYİAD Türkiye&#039;de Genç İş Piyasası ve Geleceğine Bakış Raporu" uk-img>
                                </a>
                                                    </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="projeler/gyiad-turkiyede-genc-is-piyasasi-ve-gelecegine-bakis-raporu.html" title="GYİAD Türkiye&#039;de Genç İş Piyasası ve Geleceğine Bakış Raporu">
                                GYİAD Türkiye'de Genç İş Piyasası ve Geleceğine Bakış Raporu
                                </a>
                            </h4>
                            <div class="uk-text-small">
                                
                            </div>
                            <div class="uk-margin">
                                <a href="projeler/gyiad-turkiyede-genc-is-piyasasi-ve-gelecegine-bakis-raporu.html" title="GYİAD Türkiye&#039;de Genç İş Piyasası ve Geleceğine Bakış Raporu">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                                            <a href="projeler/gyiad-mba.html" title="GYİAD MBA">
                                    <img src="storage/uploads/project/12352/conversions/Gyiad_1200x800-thumb.jpg" alt="GYİAD MBA" uk-img>
                                </a>
                                                    </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="projeler/gyiad-mba.html" title="GYİAD MBA">
                                GYİAD MBA
                                </a>
                            </h4>
                            <div class="uk-text-small">
                                
                            </div>
                            <div class="uk-margin">
                                <a href="projeler/gyiad-mba.html" title="GYİAD MBA">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                                            <a href="projeler/gyiad-digital-talks.html" title="GYİAD Digital Talks">
                                    <img src="storage/uploads/project/12401/conversions/img01-thumb.jpg" alt="GYİAD Digital Talks" uk-img>
                                </a>
                                                    </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="projeler/gyiad-digital-talks.html" title="GYİAD Digital Talks">
                                GYİAD Digital Talks
                                </a>
                            </h4>
                            <div class="uk-text-small">
                                
                            </div>
                            <div class="uk-margin">
                                <a href="projeler/gyiad-digital-talks.html" title="GYİAD Digital Talks">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                                            <a href="projeler/gyiad-surdurulebilir-kalkinma-icin-once-surdurulebilir-egitim-.html" title="GYİAD Sürdürülebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi">
                                    <img src="storage/uploads/project/12366/conversions/sonsonsosn-thumb.jpg" alt="GYİAD Sürdürülebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi" uk-img>
                                </a>
                                                    </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="projeler/gyiad-surdurulebilir-kalkinma-icin-once-surdurulebilir-egitim-.html" title="GYİAD Sürdürülebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi">
                                GYİAD Sürdürülebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi
                                </a>
                            </h4>
                            <div class="uk-text-small">
                                
                            </div>
                            <div class="uk-margin">
                                <a href="projeler/gyiad-surdurulebilir-kalkinma-icin-once-surdurulebilir-egitim-.html" title="GYİAD Sürdürülebilir Eğitim ve Dijital Yetkinlik Eğitim Serisi">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                                            <a href="projeler/gyiad-akilli-tarim-teknolojileri-online-egitimi-.html" title="GYİAD Akıllı Tarım Teknolojileri Online Eğitimi">
                                    <img src="storage/uploads/project/12365/conversions/1200x800-thumb.jpg" alt="GYİAD Akıllı Tarım Teknolojileri Online Eğitimi" uk-img>
                                </a>
                                                    </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="projeler/gyiad-akilli-tarim-teknolojileri-online-egitimi-.html" title="GYİAD Akıllı Tarım Teknolojileri Online Eğitimi">
                                GYİAD Akıllı Tarım Teknolojileri Online Eğitimi
                                </a>
                            </h4>
                            <div class="uk-text-small">
                                
                            </div>
                            <div class="uk-margin">
                                <a href="projeler/gyiad-akilli-tarim-teknolojileri-online-egitimi-.html" title="GYİAD Akıllı Tarım Teknolojileri Online Eğitimi">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                                <li>
                    <div class="uk-card uk-card-default uk-card-small uk-border-rounded">
                        <div class="uk-card-media-top">
                                                            <a href="projeler/gyiad-akademii.html" title="GYİAD Akademi">
                                    <img src="storage/uploads/project/2144/conversions/Akademi_01-thumb.jpg" alt="GYİAD Akademi" uk-img>
                                </a>
                                                    </div>
                        <div class="uk-card-body">
                            <h4>
                                <a class="uk-link-text" href="projeler/gyiad-akademii.html" title="GYİAD Akademi">
                                GYİAD Akademi
                                </a>
                            </h4>
                            <div class="uk-text-small">
                                GYİAD Akademi 2011 yılından günümüze kadar uzanan ve toplamda Türkiye’nin yedi saygın üniversitesinde 102 GYİAD...
                            </div>
                            <div class="uk-margin">
                                <a href="projeler/gyiad-akademii.html" title="GYİAD Akademi">Devamı <span uk-icon="icon: arrow-right; ratio: 1.2;"></span></a>
                            </div>
                        </div>
                    </div>
                </li>
                            </ul>
            <a uk-icon="icon: arrow-left" class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-left uk-position-small uk-box-shadow-large" href="#" uk-slider-item="previous"></a>
            <a uk-icon="icon: arrow-right" class="tm-circle tm-circle-white tm-circle-smaller uk-text-primary uk-position-center-right uk-position-small uk-box-shadow-large" href="#" uk-slider-item="next"></a>
        </div>

    </div>
</div>
</section>
        <section id="tm-home-events" class="uk-section tm-background">
        <div class="uk-container">

    <div class="tm-background-white uk-padding" style="padding-bottom: 10px;">
        <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">

            <div class="uk-width-1-3@m">
                <div class="uk-panel uk-flex uk-flex-middle">
                    <h2 class="uk-text-bold">Etkinlikler</h2>
                </div>
            </div>

            <div class="uk-width-1-3@m uk-visible@s uk-text-small">
            </div>

            <div class="uk-width-expand">
                <div class="uk-panel uk-flex uk-flex-middle uk-flex-right">
                    <a class="uk-button tm-button-outline-primary tm-button-large uk-flex uk-flex-middle uk-flex-between" href="basin/haberler.html">
                        TÜMÜNÜ GÖSTER
                        <span class="tm-button-icon" uk-icon="icon: arrow-right; ratio: 1.2;"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="uk-container">
    <div class="tm-background-white uk-padding">
                <div class="uk-child-width-1-3@m" uk-grid uk-height-match="target: article > .tm-card-body > h3;">

                        <article class="uk-card" style="opacity: .5;">
                <div class="tm-card-header uk-flex uk-flex-between uk-flex-middle tm-padding-vertical">
                    <div>
                        <h4 class="uk-margin-remove uk-text-bold">13 Temmuz</h4>
                    </div>
                    <div>
                        <p class="uk-margin-remove uk-text-small">Anıtkabir, Ankara</p>
                    </div>
                </div>
                <div class="tm-card-body tm-padding-vertical-large uk-position-relative">
                                        <span class="uk-label tm-label-muted uk-position-top-right">tamamlandı</span>
                                        <h3 class="uk-text-bold uk-margin-remove-top">
                        <a class="uk-link-text" href="etkinlikler/anitkabir-ziyareti-13-07.html" title="Anıtkabir Ziyareti">Anıtkabir Ziyareti</a>
                    </h3>
                    <div class="uk-margin uk-text-small">
                        24 Haziran 2021 tarihinde gerçekleşen 18. Olağan Genel Kurul toplantısında 18. Dönem Yönetim Kurulu ve Denetleme Kurulu asil ve yedek üyeleri seçilmiştir. Bu kapsamda, Derneğimiz yeni dönemin ilk ziyaretini yönetim kurulumuz ve üyelerimizden oluşan bir heyetle ANITKABİR’e gerçekleştirerek, Cumhuriyetimizin kurucusu Ulu Önderimiz Gazi Mustafa Kemal ATATÜRK’ü minnet ve saygıyla anmıştır.
                    </div>
                </div>
            </article>
                        <article class="uk-card" style="opacity: .5;">
                <div class="tm-card-header uk-flex uk-flex-between uk-flex-middle tm-padding-vertical">
                    <div>
                        <h4 class="uk-margin-remove uk-text-bold">06 Temmuz</h4>
                    </div>
                    <div>
                        <p class="uk-margin-remove uk-text-small">Sakıp Sabancı Müzesi, MSA Restaurant</p>
                    </div>
                </div>
                <div class="tm-card-body tm-padding-vertical-large uk-position-relative">
                                        <span class="uk-label tm-label-muted uk-position-top-right">tamamlandı</span>
                                        <h3 class="uk-text-bold uk-margin-remove-top">
                        <a class="uk-link-text" href="etkinlikler/networking-kahvaltisi-06-07.html" title="Networking Kahvaltısı">Networking Kahvaltısı</a>
                    </h3>
                    <div class="uk-margin uk-text-small">
                        GYİAD Networking Kahvaltısı 6 Temmuz 2021 tarihinde üyelerimizin katılımıyla Sakıp Sabancı Müzesi, MSA Restaurant’ta gerçekleştirildi.
                    </div>
                </div>
            </article>
                        <article class="uk-card" style="opacity: .5;">
                <div class="tm-card-header uk-flex uk-flex-between uk-flex-middle tm-padding-vertical">
                    <div>
                        <h4 class="uk-margin-remove uk-text-bold">24 Haziran</h4>
                    </div>
                    <div>
                        <p class="uk-margin-remove uk-text-small">Portaxe</p>
                    </div>
                </div>
                <div class="tm-card-body tm-padding-vertical-large uk-position-relative">
                                        <span class="uk-label tm-label-muted uk-position-top-right">tamamlandı</span>
                                        <h3 class="uk-text-bold uk-margin-remove-top">
                        <a class="uk-link-text" href="etkinlikler/gyiad-18-olagan-genel-kurul-toplantisi.html" title="GYİAD 18. Olağan Genel Kurul Toplantısı">GYİAD 18. Olağan Genel Kurul Toplantısı</a>
                    </h3>
                    <div class="uk-margin uk-text-small">
                        Derneğimiz 24 Haziran 2021 tarihinde 18. Olağan Genel Kurul toplantısını düzenledi. Toplantının açılış konuşması 17. Dönem Yönetim Kurulu Başkanı Sayın Fuat Pamukçu tarafından yapıldı. Ardından Derneğimizin Genel Sekreteri Sayın Sinem Sonuvar Birbilen 17. Dönem Faaliyet Raporu sunumunu gerçekleştirdi. Hemen akabinde  toplantı gündemi kapsamında Denetleme Kurulu Başkanı İrem Pehlivanoğlu Gürkaş tarafından 17. Dönem Bilanço, gelir ve gider hesaplarının detayları paylaşıldı.  Bahsi geçen toplantıda GYİAD’ın Yönetim Kurulu ve Denetleme Kurulu asil ve yedek üyelerinin seçimi gerçekleştirildi ve Derneğimizin 18. Dönem Yönetim Kurulu Başkanı olarak yeniden Sayın Fuat seçildi.
                    </div>
                </div>
            </article>
            
        </div>
                </div>
</div>
    </section>
 
 
@endsection