<!DOCTYPE html>
<html>
    <head>
        <title>Lista firm</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <style>
            th{
                text-align: center;
            }
            td{
                text-align: center;
            }

            td.category{
                text-align: left;
            }
            td.action{
                width:20%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><h2>Lista zarejestrowanych firm</h2></div>
            </div>
            <div>
                <table class="table table-striped table-bordered" id="companies">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nazwa</th>
                            <th>Kategoria</th>
                            <th>Email</th>
                            <th>Województwo</th>
                            <th>Miasto</th>
                            <th>Kod</th>
                            <th>Ulica</th>
                            <th>Numer</th>        
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($company as $element)
                        <tr>
                            <td>{{ $element->id }}</td>
                            <td>{{ $element->name }}</td>
                            <td class="category">{{ $element->category->name }}</td>
                            <td>{{ $element->email }}</td>
                            <td>{{ $element->district }}</td>
                            <td>{{ $element->city }}</td>
                            <td>{{ $element->zipcode }}</td>
                            <td>{{ $element->street }}</td>
                            <td>{{ $element->number }}</td>
                            <td class="action">
                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                <a class="btn btn-small btn-success" href="{{ URL::to('company/' . $element->id) }}">Podgląd</a>

                                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                <a class="btn btn-small btn-info" href="{{ URL::to('company/' . $element->id . '/edit') }}">Edycja</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a role="button" class='btn btn-lg btn-primary' href="{{ URL::to('create') }}">Zarejestruj firmę</a>
                <a role="button" class='btn btn-lg btn-default' href="{{ URL::to('/logout') }}">Wyloguj</a>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script>$(document).ready(function () {
    $('#companies').DataTable({
        columnDefs: [{
                targets: [0],
                orderData: [0, 1]
            }, {
                targets: [1],
                orderData: [1, 0]
            }, {
                targets: [3],
                orderData: [3, 0]
            }],
        language: {
            "search": "Szukaj:",
            "info": "Strona _PAGE_ z _PAGES_",
            "lengthMenu": "Pokaż _MENU_ wpisów",
            "paginate": {
                "first": "Pierwszy",
                "last": "Ostatni",
                "next": "Następny",
                "previous": "Wróć"
            },
        }
    });
});</script>
    </body>
</html>
