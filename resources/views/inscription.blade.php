<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="stylesheet" href="{{ URL::asset('css/inscription.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui-themes.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('cssaxure_rp_page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styless.css') }}">
    <script src="{{ URL::asset('js/inscription.js') }}"></script>
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
    <div id="u152" class="ax_default heading_1">
        <div id="u152_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u153" class="text">
            <p><span>Inscription</span></p>
        </div>
    </div>

    <!-- champs_nom (Text Field) -->
    <div id="u154" class="ax_default text_field" data-label="champs_nom">
        <input id="u154_input" type="text" value=""/>
    </div>

    <!-- champs_prénom (Text Field) -->
    <div id="u155" class="ax_default text_field" data-label="champs_prénom">
        <input id="u155_input" type="text" value=""/>
    </div>

    <!-- champs-telephone (Text Field) -->
    <div id="u156" class="ax_default text_field" data-label="champs-telephone">
        <input id="u156_input" type="text" value=""/>
    </div>

    <!-- champs_email (Text Field) -->
    <div id="u157" class="ax_default text_field" data-label="champs_email">
        <input id="u157_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u158" class="ax_default heading_3">
        <div id="u158_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u159" class="text">
            <p><span>Nom</span><span style="color:#FF0000;">*</span><span> </span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u160" class="ax_default heading_3">
        <div id="u160_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u161" class="text">
            <p><span>Prénom</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u162" class="ax_default heading_3">
        <div id="u162_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u163" class="text">
            <p><span>Téléphone</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u164" class="ax_default heading_3">
        <div id="u164_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u165" class="text">
            <p><span>Email</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- champs_MDP (Text Field) -->
    <div id="u166" class="ax_default text_field" data-label="champs_MDP">
        <input id="u166_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u167" class="ax_default heading_3">
        <div id="u167_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u168" class="text">
            <p><span>Mot de passe</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- champ_confirmer_MDP (Text Field) -->
    <div id="u169" class="ax_default text_field" data-label="champ_confirmer_MDP">
        <input id="u169_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u170" class="ax_default heading_3">
        <div id="u170_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u171" class="text">
            <p><span>Confirmer le mot de passe</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- avatar (Rectangle) -->
    <div id="u172" class="ax_default heading_3" data-label="avatar">
        <div id="u172_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u173" class="text">
            <p><span>Avatar</span></p>
        </div>
    </div>

    <!-- avatar (Image) -->
    <div id="u174" class="ax_default image" data-label="avatar">
        <img id="u174_img" class="img " src="images/inscription/avatar_u174.png"/>
        <!-- Unnamed () -->
        <div id="u175" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- ecole (Rectangle) -->
    <div id="u176" class="ax_default heading_3" data-label="ecole">
        <div id="u176_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u177" class="text">
            <p><span>Ecole</span><span style="color:#FF0000;">*</span></p>
        </div>
    </div>

    <!-- liste_ecole (Droplist) -->
    <div id="u178" class="ax_default droplist" data-label="liste_ecole">
        <select id="u178_input">
            <option value="Cesi exia">Cesi exia</option>
            <option value="Ei cesi">Ei cesi</option>
        </select>
    </div>

    <!-- Valider (Rectangle) -->
    <div id="u179" class="ax_default button" data-label="Valider">
        <div id="u179_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u180" class="text">
            <p><span>VALIDER</span></p>
        </div>
    </div>

    <!-- annuler (Rectangle) -->
    <div id="u181" class="ax_default button" data-label="annuler">
        <div id="u181_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u182" class="text">
            <p><span>ANNULER</span></p>
        </div>
    </div>

    <!-- Unnamed (footer) -->

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u184" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u184_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u185" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u186" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u186_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u187" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- mentions (Rectangle) -->
    <div id="u188" class="ax_default link_button" data-label="mentions">
        <div id="u188_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u189" class="text">
            <p><span style="text-decoration:underline;">Mentions légales</span><span> </span></p>
        </div>
    </div>

    <!-- contact (Rectangle) -->
    <div id="u190" class="ax_default link_button" data-label="contact">
        <div id="u190_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u191" class="text">
            <p><span style="text-decoration:underline;">Nous contacter</span></p>
        </div>
    </div>

    <!-- logo_cesi (Image) -->
    <div id="u192" class="ax_default image selected" data-label="logo_cesi">
        <img id="u192_img" class="img " src="images/accueil/logo_cesi_u9.png"/>
        <!-- Unnamed () -->
        <div id="u193" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_alumni (Image) -->
    <div id="u194" class="ax_default image selected" data-label="logo_alumni">
        <img id="u194_img" class="img " src="images/accueil/logo_alumni_u11.png"/>
        <!-- Unnamed () -->
        <div id="u195" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_certification (Image) -->
    <div id="u196" class="ax_default image selected" data-label="logo_certification">
        <img id="u196_img" class="img " src="images/accueil/logo_certification_u13.png"/>
        <!-- Unnamed () -->
        <div id="u197" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_entreprise (Image) -->
    <div id="u198" class="ax_default image selected" data-label="logo_entreprise">
        <img id="u198_img" class="img " src="images/accueil/logo_entreprise_u15.png"/>
        <!-- Unnamed () -->
        <div id="u199" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_alternace (Image) -->
    <div id="u200" class="ax_default image selected" data-label="logo_alternace">
        <img id="u200_img" class="img " src="images/accueil/logo_alternace_u17.png"/>
        <!-- Unnamed () -->
        <div id="u201" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_ei (Image) -->
    <div id="u202" class="ax_default image selected" data-label="logo_ei">
        <img id="u202_img" class="img " src="images/accueil/logo_ei_u19.png"/>
        <!-- Unnamed () -->
        <div id="u203" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u204" class="ax_default image selected">
        <img id="u204_img" class="img " src="images/accueil/u21.png"/>
        <!-- Unnamed () -->
        <div id="u205" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- boutique (Rectangle) -->
    <div id="u206" class="ax_default heading_1" data-label="boutique">
        <div id="u206_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u207" class="text">
            <p><span>Nos événements</span></p>
        </div>
    </div>

    <!-- evenements (Rectangle) -->
    <div id="u208" class="ax_default heading_1" data-label="evenements">
        <div id="u208_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u209" class="text">
            <p><span>Notre boutique</span></p>
        </div>
    </div>

    <!-- Accueil (Rectangle) -->
    <div id="u210" class="ax_default heading_1" data-label="Accueil">
        <div id="u210_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u211" class="text">
            <p><span>Accueil</span></p>
        </div>
    </div>

    <!-- Unnamed (header non connecté) -->

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u213" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u213_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u214" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- inscrire (Rectangle) -->
    <div id="u215" class="ax_default button" data-label="inscrire">
        <div id="u215_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u216" class="text">
            <p><span>S'incrire</span></p>
        </div>
    </div>

    <!-- connexion (Rectangle) -->
    <div id="u217" class="ax_default button" data-label="connexion">
        <div id="u217_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u218" class="text">
            <p><span>Connexion</span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u219" class="ax_default image">
        <img id="u219_img" class="img " src="images/logo.jpg"/>
        <!-- Unnamed () -->
        <div id="u220" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u221" class="ax_default image">
        <img id="u221_img" class="img " src="images/accueil/u32.png"/>
        <!-- Unnamed () -->
        <div id="u222" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u223" class="ax_default image">
        <img id="u223_img" class="img " src="images/accueil/u34.png"/>
        <!-- Unnamed () -->
        <div id="u224" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u225" class="ax_default image">
        <img id="u225_img" class="img " src="images/accueil/u36.png"/>
        <!-- Unnamed () -->
        <div id="u226" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u227" class="ax_default image">
        <img id="u227_img" class="img " src="images/accueil/u38.png"/>
        <!-- Unnamed () -->
        <div id="u228" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>
</div>
</body>
</html>
