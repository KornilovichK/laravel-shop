<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страничка</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <h1>Вторая страничка</h1>

    <p>{{ $num+10 }}</p>
    <p>{{ $str. ', World' }}</p>
    <p>{{ $mas }}</p>
</body>
</html>