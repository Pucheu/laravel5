<!DOCTYPE html>
<html>
<head>
    <title>accueil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="stylesheet" href="{{ URL::asset('css/accueil1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui-themes.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('cssaxure_rp_page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styless.css') }}">
    <script src="{{ URL::asset('js/acceuil.js') }}"></script>
    <script src="{{ URL::asset('js/documents.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-1.7.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui-1.8.10.custom.min.js') }}"></script>
    <script src="{{ URL::asset('js/prototypePre.js') }}"></script>
    <script src="{{ URL::asset('js/prototypePost.js') }}"></script>
    <script src="{{ URL::asset('js/document.js') }}"></script>
    <script type="text/javascript">
        $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
        $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
        $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
</head>
<body>
<div id="base" class="">

    <!-- Unnamed (footer) -->

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u51" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u51_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u52" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u53" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u53_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u54" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- mentions (Rectangle) -->
    <div id="u55" class="ax_default link_button" data-label="mentions">
        <div id="u55_div" class=""></div>
        <!-- Unnamed () -->
        <a id="u56" href= "{{ url('mention') }}"  class="text">
            <p><span style="text-decoration:underline;">Mentions légales</span><span> </span></p>
        </a>
    </div>

    <!-- contact (Rectangle) -->
    <div id="u57" class="ax_default link_button" data-label="contact">
        <div id="u57_div" class=""></div>
        <!-- Unnamed () -->
        <a id="u58" href= "{{ url('contact') }}" class="text">
                       <p><span style="text-decoration:underline;" >Nous contacter </span></p>
        </a>
    </div>

    <!-- logo_cesi (Image) --><
    <div id="u59" class="ax_default image selected" data-label="logo_cesi">
        <img id="u59_img" class="img " src="img/logo_cesi.png"/>
        <!-- Unnamed () -->
        <div id="u60" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>



    <!-- logo_alumni (Image) -->
    <div id="u61" class="ax_default image selected" data-label="logo_alumni">
        {{ Html::image('img/logo_alumni.jpg', 'a picture', array('id' => 'u61')) }}
        <img id="u61_img" class="img " src="img/logo_alumni.png"/>
        <!-- Unnamed () -->
        <div id="u62" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_certification (Image) -->
    <div id="u63" class="ax_default image selected" data-label="logo_certification">
        <img id="u63_img" class="img " src="img/logo_certification.png"/>
        <!-- Unnamed () -->
        <div id="u64" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_entreprise (Image) -->
    <div id="u65" class="ax_default image selected" data-label="logo_entreprise">
        <img id="u65_img" class="img " src="img/logo_entreprise.png"/>
        <!-- Unnamed () -->
        <div id="u66" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_alternace (Image) -->
    <div id="u67" class="ax_default image selected" data-label="logo_alternace">
        <img id="u67_img" class="img " src="img/logo_alternace.png"/>
        <!-- Unnamed () -->
        <div id="u68" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_ei (Image) -->
    <div id="u69" class="ax_default image selected" data-label="logo_ei">
        <img id="u69_img" class="img " src="img/logo_ei.png"/>
        <!-- Unnamed () -->
        <div id="u70" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u71" class="ax_default image selected">
        <img id="u71_img" class="img " src="img/logo_exia.png"/>
        <!-- Unnamed () -->
        <div id="u72" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (header non connecté) -->

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u74" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u74_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u75" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- inscrire (Rectangle) -->
    <!-- <div id="u76" class="ax_default button" data-label="inscrire">
         <div id="u76_div" class=""></div>
         <!-- Unnamed () -->
    <!-- <div id="u77" class="text">
         <p><span>S'incrire</span></p>
     </div>
 </div>-->
    <a  id="u76" class="btn" data-label="inscrire"  href="{{ url('inscription') }}">
        <div id="u76_div" class=""></div>
        <!-- Unnamed () -->
         <div id="u77" class="text">
             <p><span>S'incrire</span></p>
         </div>
    </a>
    <!-- connexion (Rectangle)
    <div id="u78" class="ax_default button" data-label="connexion">
        <div id="u78_div" class=""></div>
        <!-- Unnamed ()
        <div id="u79" class="text">
            <p><span>Connexion</span></p>
        </div>
    </div>-->
    <a  id="u78" class="btn" data-label="connexion"  href="{{ url('connexion') }}">
        <div id="u78_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u79" class="text">
            <p><span>Connexion</span></p>
        </div>
    </a>

    <!-- Unnamed (Image) -->
    <div id="u80" class="ax_default image">
        <a href="#">{{ HTML::image("img/logo_bde.jpg", "Logo") }}</a>
               <!-- Unnamed () -->
        <div id="u81" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u82" class="ax_default image">
        <img id="u82_img" class="img " src="img/mail.png"/>
        <!-- Unnamed () -->
        <div id="u83" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u84" class="ax_default image">
        <img id="u84_img" class="img " src="img/facebook.png"/>
        <!-- Unnamed () -->
        <div id="u85" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u86" class="ax_default image">
        <a id="u86_img" href="https://www.youtube.com/">{{ HTML::image("img/youtube.png", "Logo") }}</a>
       <!-- <img id="u86_img" class="img " src="img/youtube.png"/> -->
        <!-- Unnamed () -->
        <div id="u87" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u88" class="ax_default image">
        <a href="https://twitter.com/login?lang=fr">{{ HTML::image("img/twitter.png", "Logo") }}</a>
       <!-- <img id="u88_img" class="img " src="img/twitter.png"/> -->
        <!-- Unnamed () -->
        <div id="u89" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- description BDE (Rectangle) -->
    <div id="u90" class="ax_default paragraph" data-label="description BDE">
        <div id="u90_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u91" class="text">
            <p><span>Description BDE</span></p><p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</span></p>
        </div>
    </div>

    <!-- nos evenements (Rectangle) -->
    <div id="u92" class="ax_default heading_1" data-label="nos evenements">
        <div id="u92_div" class=""></div>
        <!-- Unnamed () -->
        <a id="u93" href="{{ url('liste_evenement') }}" class="text">
            <p><span>Nos événements</span></p>
        </a>
    </div>

    <!-- notre boutique (Rectangle) -->
    <div id="u94" class="ax_default heading_1" data-label="notre boutique">
        <div id="u94_div" class=""></div>
        <!-- Unnamed () -->
        <a id="u97" href="{{ url('boutique') }}" class="text">
            <p><span>Notre boutique</span></p>
        </a>
    </div>
    <!--
    <div id="u94" class="ax_default heading_1" data-label="notre boutique">
        <div id="u94_div" class=""></div>

        <div id="u95" href="{{ url('boutique') }} class="text">
            <p><span>Notre boutique</span></p>
        </div>
    </div>

    <!-- Acceuil (Rectangle) -->
    <div id="u96" class="ax_default heading_1" data-label="Acceuil">
        <div id="u96_div" class=""></div>
        <!-- Unnamed () -->
        <a id="u97" href="{{ url('accueil') }}" class="text">
            <p><span>Accueil</span></p>
        </a>
    </div>
    <!-- <div id="u96" class="ax_default heading_1" data-label="Acceuil">
        <div id="u96_div" class=""></div>
        <!-- Unnamed ()
        <a id="u97" href="{{ url('accueil') }} class="text">
            <p><span>Accueil</span></p>
        </div>
    </div>

    <!-- image (Image) -->
    <div id="u98" class="ax_default image" data-label="image">
        <img id="u98_img" class="img " src="img/image_u48.jpg"/>
        <!-- Unnamed () -->
        <div id="u99" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>
</div>
</body>
</html>
