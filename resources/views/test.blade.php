<!DOCTYPE html>
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
</body>
</html>