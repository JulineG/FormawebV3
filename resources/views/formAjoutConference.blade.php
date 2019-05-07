<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Insertion d'une conférence</title>
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
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel panel-info">
        <div class="panel-heading">Créer une conférence</div>
        <div class="panel-body">
            {!! Form::open(['url' => 'saisieConference']) !!}
            <div class="form-group {!! $errors->has('intituleConf') ? 'has-error' : '' !!}">
                {!! Form::text('intituleConf', null, ['class' => 'form-control', 'placeholder' => 'Intitulé de la conférence']) !!}
                {!! $errors->first('intituleConf', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('descriptionConf') ? 'has-error' : '' !!}">
                {!! Form::textarea ('descriptionConf', null, ['class' => 'form-control', 'placeholder' => 'Description de la conférence']) !!}
                {!! $errors->first('descriptionConf', '<small class="help-block">:message</small>') !!}
            </div>
            {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>