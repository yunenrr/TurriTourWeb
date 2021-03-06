<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Turri Tour</title>
        <link rel="stylesheet" href="{{ URL::asset('vendors/A.font-awesome%2c%2c_css%2c%2c_font-awesome.css%2bmaterial-design-icons%2c%2c_material-icons.css%2cMcc.uOhyMDMOxj.css.pagespeed.cf.K8D6eSun2t.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/fonts/icomoon/A.icomoon.css.pagespeed.cf.h1hiNiS22M.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('A.vendors%2c%2c_animate%2c%2c_animate.css%2bcss%2c%2c_bootstrap.css%2bvendors%2c%2c_owl-carousel%2c%2c_owl.carousel.css%2bvendors%2c%2c_owl-carousel%2c%2c_owl.theme.css%2cMcc.dMxOIndY85.css.pagespe') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/A.main.css.pagespeed.cf.dh-u0IlCYq.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('vendors/revolution/css/A.settings.css.pagespeed.cf._eBCeu2xge.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/function-map-route.js') }}"></script>
    </head>
    <body>
        <!-- Página mientras carga-->
<!--         <div class="preloader" id="pageLoad">
            <div class="holder">
                <div class="coffee_cup"></div>
            </div>
        </div> -->

        <div id="wrapper">
            <div class="page-wrapper">
                <header id="header" class="white-header">
                    <div class="container-fluid">
                        <div class="logo">
                                <a href="/" style="margin-top:-50">
                                    <img class="normal" src="{{URL::asset('/img/logos/log.png')}}" alt="Entrada">
                                    <img class="gray-logo" src="{{URL::asset('/img/logos/log.png')}}" alt="Entrada">
                                </a>
                        </div>

                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="nav">
                                <ul class="nav navbar-nav">

                                    <li class="dropdown">
                                        <li><a href="/">Inicio</a></li>
                                    </li>
                                    <li><a href="/game">Juego</a></li>


                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Soporte <b class="icon-angle-down"></b></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="/support">Contacto</a></li>
                                                <li><a href="/credentials">Credenciales</a></li>
    
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rutas Turísticas <b class="icon-angle-down"></b></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="/search-routes">Buscar Rutas</a></li>
                                                @if(Session::get('user','')!="")
                                                <li><a href="/search-routes">Recomendar Rutas</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </li>
                                    @if(Session::get('user','')=="")
                                       <li class="visible-xs visible-sm">
                                        <a href="/session">
                                            <span class="icon icon-user"></span>
                                            <span class="text" >Iniciar Sesión</span>
                                        </a>
                                    </li>
                                    <li class="hidden-xs hidden-sm v-divider">
                                        <a href="/session">
                                            <span class="icon icon-user"></span>
                                            <span class="text">Iniciar Sesión</span>
                                        </a>
                                    </li>
                                    @endif
                                    @if(Session::get('user','')!="")
                                    <li class="visible-xs visible-sm dropdown">

                                        <a href="#"  class="dropdown-toggle" data-toggle="dropdown" style="margin-top:-20">

                                            <img src="{{Session::get('profilphoto','assets/img/log.png')}}" height="75" width="75" alt="image description">
                                            <span class="text" style="margin-top:20">{{Session::get('user','')}}<br>{{Session::get('email','')}}</span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="/logout">Cerrar Sesión</a></li>
                                                <li><a href="/administrator">Administrador</a></li>
    
                                            </ul>
                                        </div>
                                    </li>
                                                                     
                                    <li class="hidden-xs hidden-sm v-divider dropdown">

                                        <a href="#"  class="dropdown-toggle" data-toggle="dropdown" style="margin-top:-20">
                                            <img id="imgSesion"  src="{{Session::get('profilphoto','assets/img/log.png')}}" height="75" width="75" alt="image description">
                                            <span class="text" style="margin-top:20">{{Session::get('user','')}}<br>{{Session::get('email','')}}</span>                                       
                                          
                                        </a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="/logout">Cerrar Sesión</a></li>
                                                <li><a href="/administrator">Administrador</a></li>
    
                                            </ul>
                                        </div>
                                    </li>
                                    @endif
                                </ul>

                            </div>
                        </nav>
                    </div>
                </header> 
                @yield('body')
            </div>
        </div>
        <div class="scroll-holder text-center">
            <a href="javascript:" id="scroll-to-top"><i class="icon-arrow-down"></i></a>
        </div>

        <!-- Script -->
        <script type="text/javascript" src="{{ URL::asset('vendors/jquery/jquery-2.1.4.min.js.pagespeed.jm.BnirE05kB4.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendors/bootstrap%2c_javascripts%2c_bootstrap.min.js%2bjquery-placeholder%2c_jquery.placeholder.min.js%2bmatch-height%2c_jquery.matchHeight.js%2bwow%2c_wow.min.js') }}"></script>
        <script>eval(mod_pagespeed_5soB4fkDwh);</script>
        <script>eval(mod_pagespeed_WzEgH7Mbwj);</script>
        <script>eval(mod_pagespeed_6JRIscR3AF);</script>
        <script>eval(mod_pagespeed_iy5KxNNZ0u);</script>
        <script>eval(mod_pagespeed_M$7zikRx0a);</script>
        <script type="text/javascript" src="{{ URL::asset('vendors/validate%2c_jquery.validate.js%2bwaypoint%2c_waypoints.min.js%2bcounter-up%2c_jquery.counterup.min.js.pagespeed.jc.HBwbmT5L9s.js') }}"></script>
        <script>eval(mod_pagespeed_7K8Kt8o7XI);</script>
        <script>eval(mod_pagespeed_pXfm80nLex);</script>
        <script>eval(mod_pagespeed_G2qnf2j0tb);</script>
        <script type="text/javascript" src="{{ URL::asset('vendors/jquery-ui/jquery-ui.min.js.pagespeed.jm.q8NOJHfIqQ.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendors/jQuery-touch-punch%2c_jquery.ui.touch-punch.min.js%2bfancybox%2c_jquery.fancybox.js%2bowl-carousel%2c_owl.carousel.min.js%2bjcf%2c_js%2c_jcf.js.pagespeed.jc.orefCYZDVq.8.js') }}"></script>

        <script>eval(mod_pagespeed_nTDailUT1x);</script>
        <script>eval(mod_pagespeed_SBHk$Uaekg);</script>
        <script>eval(mod_pagespeed_Azw0rM_xWU);</script>
        <script>eval(mod_pagespeed_FpEJcevRQr);</script>
        <script type="text/javascript" src="{{ URL::asset('vendors%2c_jcf%2c_js%2c_jcf.select.js%2bjs%2c_mailchimp.js%2bvendors%2c_sticky-kit%2c_sticky-kit.js%2bjs%2c_sticky-kit-init.js.pagespeed.jc.Y3v8TSzcF7.js') }}"></script>
        <script>eval(mod_pagespeed_D15koe43s5);</script>
        <script>eval(mod_pagespeed_B9blEk2EBN);</script>
        <script>eval(mod_pagespeed_Z0l95V8fjY);</script>
        <script>eval(mod_pagespeed_3LbmbDQKcE);</script>
        <script type="text/javascript" src="{{ URL::asset('vendors%2c_bootstrap-datetimepicker-master%2c_dist%2c_js%2c_bootstrap-datepicker.js%2bjs%2c_jquery.main.js.pagespeed.jc.5AIOC4BsjI.js') }}"></script>
        <script>eval(mod_pagespeed_XVGMscOHX4);</script>
        <script>eval(mod_pagespeed_riNnHKUXoW);</script>
        <script type="text/javascript" src="{{ URL::asset('vendors/revolution/js/jquery.themepunch.tools.min.js.pagespeed.jm.8V-tfkN7ro.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendors/revolution/js/jquery.themepunch.revolution.min.js.pagespeed.jm.ZqIGaMtVT-.js') }}"></script>
         <script type="text/javascript" src="{{ URL::asset('vendors/revolution/js/jquery.themepunch.tools.min.js%2cqrev%3d5.0.pagespeed.jm.8V-tfkN7ro.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendors/revolution/js/jquery.themepunch.revolution.min.js%2cqrev%3d%3d5.0%2bextensions%2c_revolution.extension.slideanims.min.js%2bextensions%2c_revolution.extension.actions.m.js') }}"></script>
        <script>eval(mod_pagespeed_0ItxS9g9JK);</script>
        <script>eval(mod_pagespeed_D_nD3zG6QK);</script>
        <script>eval(mod_pagespeed_JyeXd_nsvq);</script>
        <script type="text/javascript" src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js%2brevolution.extension.parallax.min.js.pagespeed.jc.l9HL9Uzl1p.js') }}"></script>
        <script>eval(mod_pagespeed_E9e6JRQe5S);</script>
        <script>eval(mod_pagespeed_rEveLN3F44);</script>
        <script type="text/javascript" src="{{ URL::asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('vendors%2c_revolution%2c_js%2c_extensions%2c_revolution.extension.navigation.min.js%2bvendors%2c_revolution%2c_js%2c_extensions%2c_revolution.extension.kenburn.min.js') }}"></script>
        <script>eval(mod_pagespeed_pbVYzrd81s);</script>
        <script>eval(mod_pagespeed_25NkK2SeCf);</script>
         
        <script>eval(mod_pagespeed_moqds_RuAC);</script>
        <script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>
    </body>
</html>