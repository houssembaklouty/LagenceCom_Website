@extends('layouts/master', ['title' => $title])

@section('content')

<div class="seocrawler-page-wrapper" id="seocrawler-page-wrapper">
    <div class="gdlr-core-page-builder-body">

    	@include('layouts/_slider')

        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;" id="lagance">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-repeat: no-repeat;background-position: center;" data-parallax-speed="0.1"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">


                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 250px 0px 250px 0px;" data-sync-height="video-bg-height" data-sync-height-center>
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #161616 ;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/images/presentation.jpg);opacity: 0.38;background-size: cover;background-position: center;" data-parallax-speed="0.1"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                            <a class="gdlr-core-ilightbox gdlr-core-js " href="//www.youtube.com/embed/F0uq5gyqIf8?wmode=transparent" data-type="iframe" data-options="width: 1280, height: 720"><img src="/assets/upload/hp1-service-play.png" alt="" width="85" height="85" /><span class="gdlr-core-image-overlay "></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 130px 70px 75px 77px;" data-sync-height="video-bg-height">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f2f2f2 ;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/upload/hp1-video-title-bg.png);background-repeat: no-repeat;background-position: top left;" data-parallax-speed="0"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" style="max-width: 580px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal;"> Qui sommes nous ?</span>
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px;font-weight: 500;letter-spacing: 0px;text-transform: none;"> PRÉSENTATION GÉNÉRALE <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px; text-align: justify;">
                                        <div class="gdlr-core-text-box-item-content">
                                            <p>
                                                « <a href="{{ route('root_path') }}">L’@gence Com</a> » accompagne les professionnels & les entreprises dans leurs
                                                projets de communication globale : conseil, création, internet, marketing digital,
                                                photo & vidéo.
                                                
                                            </p>
                                            <p>
                                                La communication est un métier nécessitant, rigueur, méthode, recherche, réflexion,
                                                créativité... et ce, pour vous fournir des prestations de qualité et toucher vos cibles.
                                                
                                            </p>
                                            <p>
                                                Notre passion : vous accompagner dans votre développement et vous apporter les
                                                solutions les plus adaptées à vos problématiques.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <a class="gdlr-core-button  gdlr-core-button-gradient gdlr-core-button-no-border"
                                                href="{{ route('contact.index') }}" 
                                                style="padding: 16px 24px 15px 30px;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;background: #81ca41 ;"
                                            >
                                            <span class="gdlr-core-content" >Nous contacter </span><i class="gdlr-core-pos-right fa fa-long-arrow-right"  ></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    	@include('layouts/service_1')

    	@include('layouts/_demende_devis')

        {{--

    	@include('layouts/lagence_en_chiffre')
            --}}

        @include('layouts/service_2')

        <div class="gdlr-core-pbf-wrapper " style="padding: 130px 0px 60px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/upload/hp2-service4-bg.jpg);background-size: cover;background-position: center;" data-parallax-speed="0.2"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first" data-skin="Dark Port">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 45px;"><img src="/assets/upload/hp2-service4-icon-1.png" alt="" width="118" height="117" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px;">
                                                <h3 class="gdlr-core-column-service-title" style="font-size: 20px;font-weight: 70;letter-spacing: 0px;text-transform: none;">Goal Discuss</h3></div>
                                            <div class="gdlr-core-column-service-content">
                                                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Conson antia, theree texts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15" data-skin="Dark Port">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 45px;"><img src="/assets/upload/hp2-service4-icon-2.png" alt="" width="118" height="117" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px;">
                                                <h3 class="gdlr-core-column-service-title" style="font-size: 20px;font-weight: 70;letter-spacing: 0px;text-transform: none;">Strategy Planning</h3></div>
                                            <div class="gdlr-core-column-service-content">
                                                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Conson antia, theree texts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15" data-skin="Dark Port">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 45px;"><img src="/assets/upload/hp2-service4-icon-3.png" alt="" width="118" height="118" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px;">
                                                <h3 class="gdlr-core-column-service-title" style="font-size: 20px;font-weight: 70;letter-spacing: 0px;text-transform: none;">Execution</h3></div>
                                            <div class="gdlr-core-column-service-content">
                                                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Conson antia, theree texts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-15" data-skin="Dark Port">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;">
                                        <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-bottom: 45px;"><img src="/assets/upload/hp2-service4-icon-4.png" alt="" width="118" height="119" /></div>
                                        <div class="gdlr-core-column-service-content-wrapper">
                                            <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px;">
                                                <h3 class="gdlr-core-column-service-title" style="font-size: 20px;font-weight: 70;letter-spacing: 0px;text-transform: none;">Monitoring</h3></div>
                                            <div class="gdlr-core-column-service-content">
                                                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Conson antia, theree texts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    	@include('layouts/call_to_action_1')



        {{--

        @include('layouts/What_Clients_Say')


        @include('layouts/reference')

        --}}
        

        {{--

        @include('layouts/blog')
        --}}
    </div>
</div>

@endsection