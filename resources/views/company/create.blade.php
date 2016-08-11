<!DOCTYPE html>
<html>
    <head>
        <title>Rejestracja firmy</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <style>
            .footer{
                margin-bottom: 10%;
            }
            .container{
                margin-top: 5%;
            }
        </style>

    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('company') }}">Wszystkie firmy</a></li>
                    <li><a href="{{ URL::to('create') }}">Zarejestruj firmę</a>
                    <li><a href="{{ URL::to('/logout') }}">Wyloguj</a>
                </ul>
            </nav>

            <h1>Formularz rejestracji firmy:</h1>

            {!! HTML::ul($errors->all()) !!}

            {!! Form::open(array('url' => 'store')) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nazwa') !!}
                {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
            </div>

            <!--            {# moze zrob selecta #}-->

            <div class="form-group"> 
                {!! Form::label('district', 'Województwo') !!}
                {!! Form::text('district', Input::old('district'), array('class' => 'form-control')) !!}
            </div>

            <div class="form-group"> 
                {!! Form::label('city', 'Miasto') !!}
                {!! Form::text('city', Input::old('city'), array('class' => 'form-control')) !!}
            </div>

            <div class="form-group"> 
                {!! Form::label('street', 'Ulica') !!}
                {!! Form::text('street', Input::old('street'), array('class' => 'form-control')) !!}
            </div>

            <div class="form-group"> 
                {!! Form::label('number', 'Numer') !!}
                {!! Form::text('number', Input::old('number'), array('class' => 'form-control')) !!}
            </div>

            <div class="form-group"> 
                {!! Form::label('zipcode', 'Kod pocztowy') !!}
                {!! Form::text('zipcode', Input::old('zipcode'), array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Kategoria') !!}
                {!! Form::select('category_id', array('1' => 'Atrakcje turystyczne', '2' => 'Audyty oprogramowania i sprzętu komputerowego', '3' => 'Renowacja mebli', '4' => 'Serwis urządzeń chłodniczych'), Input::old('nerd_level'), array('class' => 'form-control')) !!}
            </div>

            {!! Form::submit('Zarejestruj!', array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}

            <div class="footer"></div>

        </div>
    </body>
</html>