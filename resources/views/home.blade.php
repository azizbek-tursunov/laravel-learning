<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nimadir</title>
</head>
<body>
    <h1>Assalomu alaykum</h1>
    <form action="/store" method="GET">
        @csrf
        <input type="text" name="ism"> <br />
        <input type="text" name="familiya"> <br />
        <button type="submit"> Jo'natish </button>
    </form>
</body>
</html>