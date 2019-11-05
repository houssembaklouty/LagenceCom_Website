<div class="seocrawler-navigation seocrawler-item-pdlr clearfix">
    <div class="seocrawler-main-menu seocrawler-with-slidebar" id="seocrawler-main-menu">
        <ul id="menu-main-navigation-1" class="sf-menu">
                <li class="menu-item menu-item-home current-menu-item seocrawler-normal-menu">
                    <a href="{{ route('root_path') }}">Accueil</a>
                </li>

                <li class="menu-item menu-item-has-children seocrawler-normal-menu"><a href="{{ route('root_path') }}#services" class="sf-with-ul-pre"> Services</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-has-children" data-size="60"><a class="sf-with-ul-pre"> CONSEIL & CRÉATION</a>
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

                        <li class="menu-item menu-item-has-children" data-size="60"><a class="sf-with-ul-pre"> WEB & DIGITAL</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('Site_internet.index') }}"> SITE INTERNET</a></li>
                                <li class="menu-item"><a href="{{ route('Referencement.index') }}"> RÉFÉRENCEMENT</a></li>
                                <li class="menu-item"><a href="{{ route('Webmarketing.index') }}"> WEBMARKETING</a></li>
                                <li class="menu-item"><a href="{{ route('Community_management.index') }}"> COMMUNITY MANAGEMENT</a></li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children" data-size="60"><a class="sf-with-ul-pre"> IMAGE & VIDÉO</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('Photographie.index') }}"> PHOTOGRAPHIE</a></li>
                                <li class="menu-item"><a href="{{ route('Video_Animation.index') }}"> VIDÉO & ANIMATION</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                
                <li class="menu-item menu-item-has-children seocrawler-normal-menu">
                    <a href="{{ route('root_path') }}#lagance" class="sf-with-ul-pre"> L’AGENCE</a>
                </li>

                {{--

                <li class="menu-item menu-item-has-children seocrawler-normal-menu">
                    <a href="#" class="sf-with-ul-pre"> PORTFOLIO</a>
                </li>
                    --}}

                <li class="menu-item menu-item-has-children seocrawler-normal-menu">
                    <a href="{{ route('root_path') }}#demende_devis" class="sf-with-ul-pre"> Devis en Ligne</a>
                </li>
            </ul>
    </div>
    <div class="seocrawler-main-menu-right-wrap clearfix">
        <div class="seocrawler-main-menu-search" id="seocrawler-top-search"><i class="fa fa-search"></i></div>
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
        </div> <a class="seocrawler-main-menu-right-button" href="{{ route('contact.index') }}" target="_self"> Nous Contacter</a></div>
</div>