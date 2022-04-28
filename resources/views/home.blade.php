<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-migration-seeders</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Trains</h1>
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                <li class="trains">
                    <div>
                        <h5>Azienda</h5>
                        {{ $train['azienda'] }} <br>
                    </div>
                    <div>
                        <span class="codT">cod.Treno</span>
                        {{ $train['codice_treno'] }}
                    </div>
                    <div>
                        <p>partenza</p>
                        {{ $train['stazione_di_partenza'] }}
                    </div>
                    <div>
                        <p>arrivo</p>
                        {{ $train['stazione_di_arrivo'] }}
                    </div>
                    <div>
                        <span class="codT">orario arrivo</span>
                        {{ $train['orario_di_arrivo'] }}
                    </div>
                    <div>
                        <span class="codT">orario partenze</span>
                        {{ $train['orario_di_partenza'] }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
