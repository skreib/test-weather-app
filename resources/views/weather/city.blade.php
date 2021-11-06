<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather in {{ $city }}</title>
</head>
<body>
    <h1>Weather in {{ $city }}:</h1>
    <p>temperature: {{ $temperature }}°C</p>
    <p>humidity: {{ $humidity }}%</p>
    <p>pressure: {{ $pressure }} mm Hg</p>
    <p>wind: {{ $wind }} m/s</p>
</body>
</html>