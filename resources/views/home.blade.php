<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-migration-seeders</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
   @foreach($trains as $train)
   <div>
    {{-- {{$train['azienda']}} <br> --}}
  </div>
   @endforeach
</body>
</html>