
<div class="seocrawler-mobile-header-wrap">
    <div class="seocrawler-mobile-header seocrawler-header-background seocrawler-style-slide" id="seocrawler-mobile-header">
        <div class="seocrawler-mobile-header-container seocrawler-container">
            <div class="seocrawler-logo  seocrawler-item-pdlr">
                <div class="seocrawler-logo-inner">
                    <a href="{{ route('root_path') }}">
                        <img src="{{ url('assets/upload/logo_laganceCom.png') }}" alt="" width="212" height="28" />
                    </a>
                </div>
            </div>
            <div class="seocrawler-mobile-menu-right">
                <div class="seocrawler-main-menu-search" id="seocrawler-mobile-top-search"><i class="fa fa-search"></i></div>
                <div class="seocrawler-top-search-wrap">
                    <div class="seocrawler-top-search-close"></div>
                    <div class="seocrawler-top-search-row">
                        <div class="seocrawler-top-search-cell">
                            <form role="search" method="get" class="search-form" action="#">
                                <input type="text" class="search-field seocrawler-title-font" placeholder="Search..." value="" name="s">
                                <div class="seocrawler-top-search-submit"><i class="fa fa-search"></i></div>
                                <input type="submit" class="search-submit" value="Search">
                                <div class="seocrawler-top-search-close"><i class="icon_close"></i></div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="seocrawler-mobile-menu"><a class="seocrawler-mm-menu-button seocrawler-mobile-menu-button seocrawler-mobile-button-hamburger" href="#seocrawler-mobile-menu"><span></span></a>
                    <div class="seocrawler-mm-menu-wrap seocrawler-navigation-font" id="seocrawler-mobile-menu" data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">

                            <li class="menu-item menu-item-home current-menu-item">
                                <a href="{{ route('root_path') }}">Accueil</a>
                            </li>

                            <li class="menu-item menu-item-has-children seocrawler-normal-menu">
                                <a href="{{ route('root_path') }}#lagance" class="sf-with-ul-pre"> L’AGENCE</a>
                            </li>

                            <li class="menu-item menu-item-has-children"><a href="{{ route('root_path') }}#services" class="sf-with-ul-pre"> Services</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre"> CONSEIL & CRÉATION</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('Conseil.index') }}" class="sf-with-ul-pre"> CONSEIL</a>
                                                <ul class="sub-menu" style="right: auto !important; left: 100% !important;">
                                                    <li class="menu-item">
                                                        <a href="{{ route('Conseil_diagnostic_strategique.index') }}"> 
                                                            Diagnostic Stratégique
                                                        </a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('Conseil_strategie_communication.index') }}"> 
                                                            Stratégie de Communication
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item"><a href="{{ route('Accompagnement.index') }}"> ACCOMPAGNEMENT</a></li>
                                            <li class="menu-item"><a href="{{ route('Identite_visuelle.index') }}" class="sf-with-ul-pre"> IDENTITÉ VISUELLE</a>
                                                <ul class="sub-menu" style="right: auto !important; left: 100% !important;">
                                                    <li class="menu-item">
                                                        <a href="{{ route('Identite_visuelle_Identite_visuelle.index') }}"> Identité visuelle
                                                        </a> 
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('Identite_visuelle_Naming.index') }}"> Naming
                                                        </a> 
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('Identite_visuelle_Marketing_publicitaire.index') }}"> Marketing Publicitaire
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>                                                

                                    <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre"> WEB & DIGITAL</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('Site_internet.index') }}"> SITE INTERNET</a></li>
                                            <li class="menu-item"><a href="{{ route('Referencement.index') }}"> RÉFÉRENCEMENT</a></li>
                                            <li class="menu-item"><a href="{{ route('Webmarketing.index') }}"> WEBMARKETING</a></li>
                                            <li class="menu-item"><a href="{{ route('Community_management.index') }}"> COMMUNITY MANAGEMENT</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre"> IMAGE & VIDÉO</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('Photographie.index') }}"> PHOTOGRAPHIE</a></li>
                                            <li class="menu-item"><a href="{{ route('Video_Animation.index') }}"> VIDÉO & ANIMATION</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            {{--

                            <li class="menu-item menu-item-has-children">
                                <a href="#" class="sf-with-ul-pre"> PORTFOLIO</a>
                            </li>
                                --}}

                            <li class="menu-item menu-item-has-children">
                                <a href="{{ route('root_path') }}#demende_devis" class="sf-with-ul-pre"> Devis en Ligne</a>
                            </li>

                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>