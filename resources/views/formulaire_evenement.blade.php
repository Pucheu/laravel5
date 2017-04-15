<!DOCTYPE html>
<html>
<head>
    <title>formulaire ajout événement</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="stylesheet" href="{{ URL::asset('css/formulaire_evenement.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui-themes.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('cssaxure_rp_page.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styless.css') }}">
    <script src="{{ URL::asset('js/formulaire_evenement.js') }}"></script>
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
    <div id="u984" class="ax_default heading_1">
        <div id="u984_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u985" class="text">
            <p><span>Ajout d'un événement</span></p>
        </div>
    </div>

    <!-- champs_nom_evenement (Text Field) -->
    <div id="u986" class="ax_default text_field" data-label="champs_nom_evenement">
        <input id="u986_input" type="text" value=""/>
    </div>

    <!-- champs_prix_evenement (Text Field) -->
    <div id="u987" class="ax_default text_field" data-label="champs_prix_evenement">
        <input id="u987_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u988" class="ax_default heading_3">
        <div id="u988_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u989" class="text">
            <p><span>Nom de l'événement</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u990" class="ax_default heading_3">
        <div id="u990_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u991" class="text">
            <p><span>Prix (mettre 0 si gratuit)</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u992" class="ax_default heading_3">
        <div id="u992_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u993" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u994" class="ax_default heading_3">
        <div id="u994_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u995" class="text">
            <p><span>Description</span></p>
        </div>
    </div>

    <!-- champs_description_evenement (Text Field) -->
    <div id="u996" class="ax_default text_field" data-label="champs_description_evenement">
        <input id="u996_input" type="text" value=""/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u997" class="ax_default heading_3">
        <div id="u997_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u998" class="text">
            <p><span>Image de l'événement</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u999" class="ax_default button">
        <div id="u999_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1000" class="text">
            <p><span>VALIDER</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u1001" class="ax_default button">
        <div id="u1001_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1002" class="text">
            <p><span>ANNULER</span></p>
        </div>
    </div>

    <!-- Unnamed (Checkbox) -->
    <div id="u1003" class="ax_default checkbox">
        <label for="u1003_input">
            <!-- Unnamed () -->
            <div id="u1004" class="text">
                <p><span>Cocher si l'événement est récurrent</span></p>
            </div>
        </label>
        <input id="u1003_input" type="checkbox" value="checkbox"/>
    </div>

    <!-- Unnamed (Droplist) -->
    <div id="u1005" class="ax_default droplist ax_default_hidden" style="display:none; visibility: hidden">
        <select id="u1005_input">
            <option value="chaque jour">chaque jour</option>
            <option value="toute les semaines">toute les semaines</option>
            <option value="toute les deux semaines">toute les deux semaines</option>
            <option value="tout les mois">tout les mois</option>
        </select>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u1006" class="ax_default label ax_default_hidden" style="display:none; visibility: hidden">
        <div id="u1006_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1007" class="text">
            <p><span>Indiquez la récurence</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u1008" class="ax_default label">
        <div id="u1008_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1009" class="text">
            <p><span>Indiquez la date </span></p>
        </div>
    </div>

    <!-- liste_heure (Droplist) -->
    <div id="u1010" class="ax_default droplist" data-label="liste_heure">
        <select id="u1010_input">
            <option selected value="Heure">Heure</option>
        </select>
    </div>

    <!-- liste_jour (Droplist) -->
    <div id="u1011" class="ax_default droplist" data-label="liste_jour">
        <select id="u1011_input">
            <option value="Jour">Jour</option>
        </select>
    </div>

    <!-- liste_mois (Droplist) -->
    <div id="u1012" class="ax_default droplist" data-label="liste_mois">
        <select id="u1012_input">
            <option selected value="Mois">Mois</option>
        </select>
    </div>

    <!-- Unnamed (footer) -->

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u1014" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u1014_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1015" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- rectangle_rouge (Rectangle) -->
    <div id="u1016" class="ax_default box_1" data-label="rectangle_rouge">
        <div id="u1016_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1017" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- mentions (Rectangle) -->
    <div id="u1018" class="ax_default link_button" data-label="mentions">
        <div id="u1018_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1019" class="text">
            <p><span style="text-decoration:underline;">Mentions légales</span><span> </span></p>
        </div>
    </div>

    <!-- contact (Rectangle) -->
    <div id="u1020" class="ax_default link_button" data-label="contact">
        <div id="u1020_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1021" class="text">
            <p><span style="text-decoration:underline;">Nous contacter</span></p>
        </div>
    </div>

    <!-- logo_cesi (Image) -->
    <div id="u1022" class="ax_default image selected" data-label="logo_cesi">
        <img id="u1022_img" class="img " src="images/accueil/logo_cesi_u9.png"/>
        <!-- Unnamed () -->
        <div id="u1023" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_alumni (Image) -->
    <div id="u1024" class="ax_default image selected" data-label="logo_alumni">
        <img id="u1024_img" class="img " src="images/accueil/logo_alumni_u11.png"/>
        <!-- Unnamed () -->
        <div id="u1025" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_certification (Image) -->
    <div id="u1026" class="ax_default image selected" data-label="logo_certification">
        <img id="u1026_img" class="img " src="images/accueil/logo_certification_u13.png"/>
        <!-- Unnamed () -->
        <div id="u1027" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_entreprise (Image) -->
    <div id="u1028" class="ax_default image selected" data-label="logo_entreprise">
        <img id="u1028_img" class="img " src="images/accueil/logo_entreprise_u15.png"/>
        <!-- Unnamed () -->
        <div id="u1029" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_alternace (Image) -->
    <div id="u1030" class="ax_default image selected" data-label="logo_alternace">
        <img id="u1030_img" class="img " src="images/accueil/logo_alternace_u17.png"/>
        <!-- Unnamed () -->
        <div id="u1031" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- logo_ei (Image) -->
    <div id="u1032" class="ax_default image selected" data-label="logo_ei">
        <img id="u1032_img" class="img " src="images/accueil/logo_ei_u19.png"/>
        <!-- Unnamed () -->
        <div id="u1033" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u1034" class="ax_default image selected">
        <img id="u1034_img" class="img " src="images/accueil/u21.png"/>
        <!-- Unnamed () -->
        <div id="u1035" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- image_evenement (Placeholder) -->
    <div id="u1036" class="ax_default placeholder" data-label="image_evenement">
        <img id="u1036_img" class="img " src="images/formulaire_ajout_boutique/image_produit_u963.png"/>
        <!-- Unnamed () -->
        <div id="u1037" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (header connecté) -->

    <!-- barre_rouge (Rectangle) -->
    <div id="u1039" class="ax_default box_1" data-label="barre_rouge">
        <div id="u1039_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1040" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- panier (Rectangle) -->
    <div id="u1041" class="ax_default button" data-label="panier">
        <div id="u1041_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1042" class="text">
            <p><span>Mon panier</span></p>
        </div>
    </div>

    <!-- deconnecter (Rectangle) -->
    <div id="u1043" class="ax_default button" data-label="deconnecter">
        <div id="u1043_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1044" class="text">
            <p><span>Se déconnecter</span></p>
        </div>
    </div>

    <!-- compte (Rectangle) -->
    <div id="u1045" class="ax_default button" data-label="compte">
        <div id="u1045_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1046" class="text">
            <p><span>Mon compte</span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u1047" class="ax_default image">
        <img id="u1047_img" class="img " src="images/logo.jpg"/>
        <!-- Unnamed () -->
        <div id="u1048" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u1049" class="ax_default image">
        <img id="u1049_img" class="img " src="images/accueil/u32.png"/>
        <!-- Unnamed () -->
        <div id="u1050" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u1051" class="ax_default image">
        <img id="u1051_img" class="img " src="images/accueil/u34.png"/>
        <!-- Unnamed () -->
        <div id="u1052" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u1053" class="ax_default image">
        <img id="u1053_img" class="img " src="images/accueil/u36.png"/>
        <!-- Unnamed () -->
        <div id="u1054" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u1055" class="ax_default image">
        <img id="u1055_img" class="img " src="images/accueil/u38.png"/>
        <!-- Unnamed () -->
        <div id="u1056" class="text" style="display:none; visibility: hidden">
            <p><span></span></p>
        </div>
    </div>
</div>
</body>
</html>
