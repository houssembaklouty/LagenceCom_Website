@extends('layouts/master', ['title' => $title])

@section('content')

<div class="seocrawler-page-wrapper" id="seocrawler-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 345px 0px 135px 0px;" data-skin="Dark Port">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/images/conseil1.jpg);background-size: cover;background-position: center;" data-parallax-speed="0.3"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap ">
                            	<h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 90px;font-weight: 700;letter-spacing: 0px;text-transform: none;">L'@gence Com
                            		<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                            	</div>
                            	<span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 30px;font-weight: 300;font-style: normal;">Conseil en Marketing & Communication</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 40px 0px;">
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 40px 0px 0px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h4 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 40px;font-weight: 700;letter-spacing: 0px;text-transform: none;"> Web Marketing
                                            	<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 5px; text-align: justify;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 15px;">
                                            <p>
                                                « <a href="{{ route('root_path') }}">L’@gence Com</a> », vous accompagne dans votre stratégie webmarketing.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 5px; text-align: justify;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 15px;">
                                            <p> 

                                                Pour augmenter le trafic sur votre site Internet (institutionnel, catalogue ou e-commerce), vous devez répartir votre budget d’acquisition sur différents leviers. Grâce à une méthodologie éprouvée auprès de nombreux clients, <br> « <a href="{{ route('root_path') }}">L’@gence Com</a> » est en mesure de vous apporter son expertise pour gérer vos <b>campagnes d’achats de mots clés</b>, améliorer votre <b>visibilité online</b> et <b>optimiser le taux de conversion</b> de votre site e-commerce grâce à notre maitrise de la gestion des flux.     
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                                        <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 92px;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #191919;border-bottom-width: 3px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 20px 0px 0px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                        <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="/assets/upload/service-1-2-400x270.jpg" width="619" height="418"  alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @include('layouts/singel_page/_section_btn_action_to_appele_contact')

                </div>
            </div>
        </div>

        {{--


    	@include('layouts/singel_page/_section_lagence_en_chiffre')

            --}}


        <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-repeat: no-repeat;background-position: center;" data-parallax-speed="0.1"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">

                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 100px 0px 50px 40px;" data-sync-height="service-screen-height">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" style="max-width: 640px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">

                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 35px;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="/assets/upload/service-1-icon-1.jpg" alt="" width="90" height="90">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="gdlr-core-title-item-title-wrap" style="text-align: center;">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px;font-weight: 500;letter-spacing: 0px;text-transform: none;">
                                                Achat de mots clés (SEA)
                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="text-align: justify; margin-right: 2em; ">
                                            <p>
                                                Les liens sponsorisés sont aujourd’hui un canal d’acquisition majeur. En effet, « <a href="{{ route('root_path') }}">L’@gence Com</a> » vous offre la possibilité de vous positionner sur la 1 ère page et dans les 3 premières positions sur des requêtes concurrentielles tout en maitrisant le coût par
                                                clic sur Google, Bing ouYahoo.
                                            </p>

                                            <p>

                                                NOTRE MÉTHODOLOGIE:
                                                <ul>
                                                    
                                                    <li>Prendre en considération vos besoins</li>
                                                    <li>créer votre compte et vos campagnes</li>
                                                    <li>Générer du trafic à court et moyen terme sur votre site pour accroitre votre visibilité</li>
                                                    <li>Vous apporter du trafic qualifié à moindre coût avec des groupes d’annonces qualitatifs</li>
                                                    <li>Vous positionner en 1ère page de Google en sélectionnant des mots clés qualitatifs et en limitant le coût par clic</li>
                                                </ul>

                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-hide-in-mobile">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding: 0px 0px 0px 0px;" data-sync-height="service-screen-height">
                            <div class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/upload/816KPMNUS2.jpg);background-size: cover;background-position: bottom left;" data-parallax-speed="0.2"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                        </div>
                    </div>



                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 250px 0px 250px 0px;" data-sync-height="video-bg-height" data-sync-height-center>
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #161616 ;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(https://cdn.goodlayers.com/seocrawler/demo2/wp-content/uploads/2017/06/shutterstock_531870244.jpg);opacity: 0.38;background-size: cover;background-position: center;" data-parallax-speed="0.1"></div>
                            </div>

                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column gdlr-core-column-30">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 130px 70px 75px 77px;" data-sync-height="video-bg-height">
                            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f2f2f2 ;">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(assets/upload/hp1-video-title-bg.png);background-repeat: no-repeat;background-position: top left;" data-parallax-speed="0"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" style="max-width: 580px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 35px;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="/assets/upload/service-1-icon-2.jpg" alt="" width="90" height="90">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="gdlr-core-title-item-title-wrap" style="text-align: center;">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px;font-weight: 500;letter-spacing: 0px;text-transform: none;">
                                                Affiliation & retargeting
                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px;">
                                        <div class="gdlr-core-text-box-item-content" style="text-align: justify; margin-right: 2em; ">
                                            <p>
                                                Parce que les coûts d’acquisition ne cessent de croître,
                                                votre agence , « <a href="{{ route('root_path') }}">L’@gence Com</a> » vous propose de
                                                vous accompagner sur votre stratégie d’affiliation et de
                                                retargeting. Nos objectifs : augmenter vos ventes &
                                                votre taux de conversion grâce à notre process
                                                associé à des plateformes adaptées.
                                                
                                            </p>

                                            <p>
                                                NOTRE MÉTHODOLOGIE:

                                                <ul>
                                                    <li>Vous aider à mettre en œuvre votre stratégie </li>
                                                    <li>Définir votre mode de rémunération (choix, type, niveau)</li>
                                                    <li>Négocier des partenariats clés pour maximiser vos ventes</li>
                                                    <li>Gérer & motiver vos affiliés</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 100px 0px 50px 40px;" data-sync-height="service-screen-height">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content" style="max-width: 640px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">

                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 35px;">
                                                <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="/assets/upload/service-1-icon-3.jpg" alt="" width="90" height="90">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="gdlr-core-title-item-title-wrap" style="text-align: center;">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px;font-weight: 500;letter-spacing: 0px;text-transform: none;">
                                                 Comparateurs & Marketplaces
                                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="text-align: justify; margin-right: 2em; ">
                                            <p>
                                                Les comparateurs et les marketplaces sont souvent négligés par les e-commerçants en raison de la difficulté à mettre en oeuvre des flux qualitatifs. Aujourd’hui, « <a href="{{ route('root_path') }}">L’@gence Com</a> » vous aide à gérer les catégories de produits que vous souhaitez vendre sur ces plateformes.
                                            </p>

                                            <p>
                                                
                                                NOTRE MÉTHODOLOGIE:

                                                <ul>
                                                    <li>Limiter les coûts d’acquisition en sélectionnant avec vous les catégories/ produits à afficher </li>
                                                    <li>Choisir les plateformes les plus pertinentes en fonction de votre secteur d’activité </li>
                                                    <li>Configurer les flux à votre place pour améliorer votre visibilité & la disponibilité des produits sur ces plateformes </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-hide-in-mobile">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding: 0px 0px 0px 0px;" data-sync-height="service-screen-height">
                            <div class="gdlr-core-pbf-background-wrap">
                                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/upload/816KPMNUS2.jpg);background-size: cover;background-position: bottom left;" data-parallax-speed="0.2"></div>
                            </div>
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    	@include('layouts/singel_page/_team')

    	@include('layouts/singel_page/_section_contact')
    </div>
</div>

@endsection