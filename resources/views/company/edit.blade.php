
<!DOCTYPE html>
<html>
    <head>
        <title>Edycja firmy</title>
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

            <h1>Edit {{ $company->name }}</h1>

            <!-- if there are creation errors, they will show here -->
            {!! HTML::ul($errors->all()) !!}

            {!! Form::model($company, array('url' => array('company/update', $company->id), 'method' => 'PUT')) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nazwa') !!}
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nerd_level', 'Kategoria') !!}
                {!! Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('district', 'Województwo') !!}
                {!! Form::text('district', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('city', 'Miasto') !!}
                {!! Form::text('city', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('street', 'Ulica') !!}
                {!! Form::text('street', null, array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('number', 'Numer') !!}
                {!! Form::text('number', null, array('class' => 'form-control')) !!}
            </div>


            <div class="form-group">
                {!! Form::label('zipcode', 'Kod pocztowy') !!}
                {!! Form::text('zipcode', null, array('class' => 'form-control')) !!}
            </div>





            {!! Form::submit('Edycja firmy', array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}

            <div class="footer"></div>

        </div>
    </body>
</html>