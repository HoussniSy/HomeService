<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Service - Fournisseur de services en ligne pour vos besoins domestiques</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">        
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
    @livewireStyles
</head>
<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+22237402757"><i class="fa fa-phone"></i> +222-37402757</a></li>
                            <li><a href="mailto:aichetousow335@gmail.com"><i class="fa fa-envelope"></i>
                                    homeservice@gmail.com</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+22237402757"><i class="fa fa-phone"></i>
                                    +222-37402757</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i>Riyad , Nouakchott</a></li>
                        </ul>
                    </div>
                    @livewire('location-component')
                </div>
            </div>
        </div>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img src="{{ asset('images/logo.png') }}"></a>
                    </li>
                    <li> <a href="{{route('home.service_categories')}}">Catégories de Services</a></li>
                    
                    <li> <a href="#"></a>
                        <ul class="drop-down one-column hover-fade">
                            
                            <li><a href="{{route('home.service_categories')}}">Réparation d’ordinateur</a></li>
                            <li><a href="servicesbycategory/12.html">Télé</a></li>
                            <li><a href="servicesbycategory/1.html">Courant alternatif</a></li>
                            <li><a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><a href="servicesbycategory/21.html">Machine à laver</a></li>
                            <li><a href="servicesbycategory/22.html">Micro-ondes</a></li>
                            <li><a href="servicesbycategory/9.html">Cheminée et plaque de cuisson</a></li>
                            <li><a href="servicesbycategory/10.html">Purificateur d’eau</a></li>
                            <li><a href="servicesbycategory/13.html">Réfrigérateur</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Acceuil Besions</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/19.html">Blanchisserie</a></li>
                            <li><a href="servicesbycategory/4.html">Antiparasitaire</a></li>
                            <li><a href="servicesbycategory/8.html">Antiparasitaire</a></li>
                            <li><a href="servicesbycategory/7.html">Menuiserie</a></li>
                            <li><a href="servicesbycategory/3.html">Plomberie </a></li>
                            <li><a href="servicesbycategory/20.html">Peinture</a></li>
                            <li><a href="servicesbycategory/17.html">Déménageurs &amp; Packers</a></li>
                            <li><a href="servicesbycategory/5.html">Filtres de douche </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Néttoyage à Domicile</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/bedroom-deep-cleaning.html">Nettoyage en profondeur de la chambre</a></li>
                            <li><a href="service-details/overhead-water-storage.html">Stockage aérien de l’eau </a></li>
                            <li><a href="/service-details/tank-cleaning">Nettoyage du réservoir</a></li>
                            <li><a href="service-details/underground-sump-cleaning.html">Nettoyage souterrain des puisards</a>
                            </li>
                            <li><a href="service-details/dining-chair-shampooing.html">Shampooing pour chaise de salle à manger </a></li>
                            <li><a href="service-details/office-chair-shampooing.html">Shampooing pour chaise de bureau</a></li>
                            <li><a href="service-details/home-deep-cleaning.html">Nettoyage en profondeur à domicile </a></li>
                            <li><a href="service-details/carpet-shampooing.html">Shampooing pour tapis </a></li>
                            <li><a href="service-details/fabric-sofa-shampooing.html">Shampooing de canapé en tissu</a></li>
                            <li><a href="service-details/bathroom-deep-cleaning.html">Nettoyage en profondeur de la salle de bain</a></li>
                            <li><a href="service-details/floor-scrubbing-polishing.html">Nettoyage des planchers &amp; Polissage
                                </a></li>
                            <li><a href="service-details/mattress-shampooing.html">Shampooing de matelas </a></li>
                            <li><a href="service-details/kitchen-deep-cleaning.html">Nettoyage en profondeur de la cuisine </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Services Spéciaux</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/16.html">Services de documentation</a></li>
                            <li><a href="servicesbycategory/15.html">Voitures &amp; Vélos</a></li>
                            <li><a href="servicesbycategory/17.html">Déménageurs &amp; Packers </a></li>
                            <li><a href="servicesbycategory/18.html">Domotique</a></li>
                        </ul>
                    </li>
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype==='ADM')
                                <li class="login-form"> <a href="#" title="Register">Mon compte (Administrateur)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('admin.dashboard')}}">Tableau de bord</a></li>
                                        <li><a href="{{route('admin.service_categories')}}">Catégories Service</a></li>
                                        <li><a href="{{route('admin.all_services')}}">Tous les Services</a></li>
                                        <li><a href="{{route('admin.slider')}}">Gérer le curseur</a></li>
                                        <li><a href="{{route('admin.contacts')}}">Tous les contacts</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->utype==='SVP')
                                <li class="login-form"> <a href="#" title="Register">Mon compte (Fournisseur)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('sprovider.dashboard')}}">Tableau de bord</a></li>
                                        <li><a href="{{route('sprovider.profile')}}">Profil</a></li>
                                        <li><a href="{{route('sprovider.service')}}">Service</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="login-form"> <a href="#" title="Register">Mon compte (Client)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('customer.dashboard')}}">Tableau de bord</a></li>
                                        <li><a href="{{route('customer.confirmation')}}">Confirmation</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
                                    </ul>
                                </li>
                            @endif
                            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                                @csrf
                            </form>
                        @else
                            <li class="login-form"> <a href="{{route('register')}}" title="Register">Inscrivez-vous</a></li>
                            <li class="login-form"> <a href="{{route('login')}}" title="Login">Connectez-vous</a></li>
                        @endif
                    @endif
                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>
        {{$slot}}
        <footer id="footer" class="footer-v1">
            <div class="container">
                <div class="row visible-md visible-lg">
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>SERVICES D’APPAREILS ÉLECTROMÉNAGERS </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/12.html">Télé</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/13.html">Réfrigérateur</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/21.html">Machine à laver</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/22.html">Micro-ondes</a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/10.html">Purificateur d’eau</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>SERVICES DE CLIMATISATION </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-installation.html">Installation</a></li>
                            <li><i class="fa fa-check"></i> <a
                                    href="service-details/ac-uninstallation.html">Désinstallation</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-repair.html">Réparation AC</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-gas-refill.html">Recharge de gaz</a>
                            </li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-wet-servicing.html">Entretien humide</a></li>
                            <li><i class="fa fa-check"></i> <a href="service-details/ac-dry-servicing.html">Entretien à sec </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>BESOINS À DOMICILE </h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/19.html">Blanchisserie </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/4.html">Électrique </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/8.html">Antiparasitaire </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/7.html">Menuiserie </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/3.html">Plomberie </a></li>
                            <li><i class="fa fa-check"></i> <a href="servicesbycategory/20.html">Peinture </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>CONTACTEZ-NOUS</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Riyad , Nouakchott, Mauritanie</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:aichetousow335@gmail.com">homeservice@gmail.com</a>
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="tel:+22237402757">+222-37402757</a>
                            </li>
                        </ul>
                        <h3 style="margin-top: 10px">SUIVEZ-NOUS</h3>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row visible-sm visible-xs">
                    <div class="col-md-6">
                        <h3 class="mlist-h">CONTACTEZ-NOUS</h3>
                        <ul class="contact_footer mlist">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href="#"> Riyad , Nouakchott, Mauritanie</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:aichetousow335@gmail.com">homeservice@gmail.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> <a href="tel:+22237402757">+222-37402757</a>
                            </li>
                        </ul>
                        <ul class="social mlist-h">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="about-us.html">Qui sommes-nous</a> </li>
                                <li><a href="{{route('home.contact')}}">CONTACTEZ-NOUS</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="terms-of-use.html">Conditions d’utilisation</a></li>
                                <li><a href="privacy.html">Vie privée</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2023 3sFEEWNENAM. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>                
            </div>            
        </footer>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/nav/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/totop/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/accordion/accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/maps/gmap3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/carousel/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/filters/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/twitter/jquery.tweet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flickr/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/theme-options.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/jquery.cookies.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.table2excel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/validation-rule.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
   <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>
    @stack('scripts')
    @livewireScripts
</body>
</html>