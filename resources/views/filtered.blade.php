<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="public/app.css">
</head>
<body>
    @foreach ($packagesFiltered as $package)
        <div>
            <h1>{{$package['name_of_vacation']}}</h1>
            <ul>
                <li>Departure: {{$package['departure']}}</li>
                <li>Destination: {{$package['destination']}}</li>
                <li>From: {{$package['date_from']}}</li>
                <li>To: {{$package['date_to']}}</li>
                <li>Price: {{$package['price']}}</li>
            </ul>
            <hr>
        </div>
    @endforeach
</body>
</html>