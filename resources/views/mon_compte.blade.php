<!DOCTYPE html>
<html>
<head>
    <title>Mon compte</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="stylesheet" href="{{ URL::asset('css/mon_compte.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui-themes.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('cssaxure_rp_page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styless.css') }}">
    <script src="{{ URL::asset('js/mon_compte.js') }}"></script>
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

    <!-- Unnamed (Rectangle) -->
    <div id="u229" class="ax_default heading_1">
        <div id="u229_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u230" class="text">
            <p><span>Mon compte</span></p>
        </div>
    </div>

    <!-- champs_nom (Text Field) -->
    <div id="u231" class="ax_default text_field" data-label="champs_nom">
        <input id="u231_input" type="text" value=""/>
    </div>

    <!-- champs_prénom (Text Field) -->
    <div id="u232" class="ax_default text_field" data-label="champs_prénom">
        <input id="u232_input" type="text" value=""/>
    </div>

    <!-- champs-telephone (Text Field) -->
    <div id="u233" class="ax_default text_field" data-label="champs-telephone">
        <input id="u233_input" type="text" value=""/>
    </div>

    <!-- champs_email (Text Field) -->
    <div id="u234" class="ax_default text_field" data-label="champs_email">
        <input id="u234_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u235" class="ax_default heading_3">
        <div id="u235_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u236" class="text">
            <p><span>Nom</span><span style="color:#FF0000;">*</span><span> </span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u237" class="ax_default heading_3">
        <div id="u237_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u238" class="text">
            <p><span>Prénom</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u239" class="ax_default heading_3">
        <div id="u239_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u240" class="text">
            <p><span>Téléphone</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u241" class="ax_default heading_3">
        <div id="u241_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u242" class="text">
            <p><span>Email</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- champs_MDP (Text Field) -->
    <div id="u243" class="ax_default text_field" data-label="champs_MDP">
        <input id="u243_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u244" class="ax_default heading_3">
        <div id="u244_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u245" class="text">
            <p><span>Mot de passe</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- champ_confirmer_MDP (Text Field) -->
    <div id="u246" class="ax_default text_field" data-label="champ_confirmer_MDP">
        <input id="u246_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u247" class="ax_default heading_3">
        <div id="u247_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u248" class="text">
            <p><span>Confirmer le mot de passe</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- avatar (Rectangle) -->
    <div id="u249" class="ax_default heading_3" data-label="avatar">
        <div id="u249_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u250" class="text">
            <p><span>Avatar</span></p>
        </div>
    </div>

    <!-- avatar (Image) -->
    <div id="u251" class="ax_default image" data-label="avatar">
        <img id="u251_img" class="img " src="images/inscription/avatar_u174.png"/>
        <!-- Unnamed () -->
        <div id="u252" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- ecole (Rectangle) -->
    <div id="u253" class="ax_default heading_3" data-label="ecole">
        <div id="u253_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u254" class="text">
            <p><span>Ecole</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- liste_ecole (Droplist) -->
    <div id="u255" class="ax_default droplist" data-label="liste_ecole">
        <select id="u255_input">
            <option value="Cesi exia">Cesi exia</option>
            <option value="Ei cesi">Ei cesi</option>
        </select>
    </div>

    <!-- Valider (Rectangle) -->
    <div id="u256" class="ax_default button" data-label="Valider">
        <div id="u256_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u257" class="text">
            <p><span>VALIDER</span></p>
        </div>
    </div>

    <!-- annuler (Rectangle) -->
    <div id="u258" class="ax_default button" data-label="annuler">
        <div id="u258_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u259" class="text">
            <p><span>ANNULER</span></p>
        </div>
    </div>

    <!-- Unnamed (footer) -->

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u261" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u261_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u262" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u263" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u263_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u264" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- mentions (Rectangle) -->
    <div id="u265" class="ax_default link_button" data-label="mentions">
        <div id="u265_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u266" class="text">
            <p><span style="text-decoration:underline;">Mentions légales</span><span> </span></p>
        </div>
    </div>

    <!-- contact (Rectangle) -->
    <div id="u267" class="ax_default link_button" data-label="contact">
        <div id="u267_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u268" class="text">
            <p><span style="text-decoration:underline;">Nous contacter</span></p>
        </div>
    </div>

    <!-- logo_cesi (Image) -->
    <div id="u269" class="ax_default image selected" data-label="logo_cesi">
        <img id="u269_img" class="img " src="images/accueil/logo_cesi_u9.png"/>
        <!-- Unnamed () -->
        <div id="u270" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_alumni (Image) -->
    <div id="u271" class="ax_default image selected" data-label="logo_alumni">
        <img id="u271_img" class="img " src="images/accueil/logo_alumni_u11.png"/>
        <!-- Unnamed () -->
        <div id="u272" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_certification (Image) -->
    <div id="u273" class="ax_default image selected" data-label="logo_certification">
        <img id="u273_img" class="img " src="images/accueil/logo_certification_u13.png"/>
        <!-- Unnamed () -->
        <div id="u274" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_entreprise (Image) -->
    <div id="u275" class="ax_default image selected" data-label="logo_entreprise">
        <img id="u275_img" class="img " src="images/accueil/logo_entreprise_u15.png"/>
        <!-- Unnamed () -->
        <div id="u276" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_alternace (Image) -->
    <div id="u277" class="ax_default image selected" data-label="logo_alternace">
        <img id="u277_img" class="img " src="images/accueil/logo_alternace_u17.png"/>
        <!-- Unnamed () -->
        <div id="u278" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_ei (Image) -->
    <div id="u279" class="ax_default image selected" data-label="logo_ei">
        <img id="u279_img" class="img " src="images/accueil/logo_ei_u19.png"/>
        <!-- Unnamed () -->
        <div id="u280" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u281" class="ax_default image selected">
        <img id="u281_img" class="img " src="images/accueil/u21.png"/>
        <!-- Unnamed () -->
        <div id="u282" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- boutique (Rectangle) -->
    <div id="u283" class="ax_default heading_1" data-label="boutique">
        <div id="u283_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u284" class="text">
            <p><span>Nos événements</span></p>
        </div>
    </div>

    <!-- evenements (Rectangle) -->
    <div id="u285" class="ax_default heading_1" data-label="evenements">
        <div id="u285_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u286" class="text">
            <p><span>Notre boutique</span></p>
        </div>
    </div>

    <!-- Accueil (Rectangle) -->
    <div id="u287" class="ax_default heading_1" data-label="Accueil">
        <div id="u287_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u288" class="text">
            <p><span>Accueil</span></p>
        </div>
    </div>

    <!-- Unnamed (header non connecté) -->

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u290" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u290_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u291" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- inscrire (Rectangle) -->
    <div id="u292" class="ax_default button" data-label="inscrire">
        <div id="u292_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u293" class="text">
            <p><span>S'incrire</span></p>
        </div>
    </div>

    <!-- connexion (Rectangle) -->
    <div id="u294" class="ax_default button" data-label="connexion">
        <div id="u294_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u295" class="text">
            <p><span>Connexion</span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u296" class="ax_default image">
        <img id="u296_img" class="img " src="images/logo.jpg"/>
        <!-- Unnamed () -->
        <div id="u297" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u298" class="ax_default image">
        <img id="u298_img" class="img " src="images/accueil/u32.png"/>
        <!-- Unnamed () -->
        <div id="u299" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u300" class="ax_default image">
        <img id="u300_img" class="img " src="images/accueil/u34.png"/>
        <!-- Unnamed () -->
        <div id="u301" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u302" class="ax_default image">
        <img id="u302_img" class="img " src="images/accueil/u36.png"/>
        <!-- Unnamed () -->
        <div id="u303" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u304" class="ax_default image">
        <img id="u304_img" class="img " src="images/accueil/u38.png"/>
        <!-- Unnamed () -->
        <div id="u305" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>
</div>
</body>
</html>
