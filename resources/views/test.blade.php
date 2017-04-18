<!DOCTYPE html>
<<<<<<< HEAD
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon joli site</title>
    {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
    {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
    {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
    <style> textarea { resize: none; } </style>
</head>
<body>
<br>

<div class="col-sm-offset-4 col-sm-4">

    <div class="panel panel-info">

        <div class="panel-heading">Envoi d'une photo</div>

        <div class="panel-body">

            @if(session()->has('error'))

                <div class="alert alert-danger">{!! session('error') !!}</div>

            @endif

            {!! Form::open(['url' => 'photo', 'files' => true]) !!}

            <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">

                {!! Form::file('image', ['class' => 'form-control']) !!}

                {!! $errors->first('image', '<small class="help-block">:message</small>') !!}

            </div>

            {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}

            {!! Form::close() !!}

        </div>

    </div>

</div>
=======
<html>
<head>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
<h3>My Google Maps Demo</h3>
<div id="map"></div>
<script>
    function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_qBpLpipBcc4aa2iKHGABkrDGpz2Vuh4&callback=initMap">
</script>
>>>>>>> 6157fd6d9b27665848763e30334466d326bc277b
</body>
</html>