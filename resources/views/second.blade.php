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
    <h2>asdasd</h2>

    <p>{{ $num+100 }}</p>
    <p>{{ $str.', world!' }}</p>
    <div>
    @for ($i = 0; $i < count($mas); $i++)
        <p>{{ $mas[$i] }}</p>
    @endfor
    </div>
</body>
</html>