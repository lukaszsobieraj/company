<!DOCTYPE html>
<html>
    <head>
        <title>Podgląd firmy</title>
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

            <h1>Podgląd firmy:  {{ $company->name }}</h1>

            <div class="jumbotron text-center">
                <h2>{{ $company->name }}</h2>
                <div>
                    <strong>Kategoria:</strong> {{ $company->category->name }}
                </div>
                <div>
                    <strong>Email:</strong> {{ $company->email }}
                </div>
                <div>
                    <strong>Województwo:</strong> {{ $company->district }}
                </div>
                <div>
                    <strong>Miasto:</strong> {{ $company->city }}
                </div>
                <div>
                    <strong>Ulica:</strong> {{ $company->street }}
                </div>
                <div>
                    <strong>Numer:</strong> {{ $company->number }}
                </div>
                <div>
                    <strong>Kod pocztowy:</strong> {{ $company->zipcode }}
                </div>

            </div>

        </div>
    </body>
</html>