<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiply tabel</title>
</head>
<body>
<form action="/showmultiply" method="POST">
    @csrf
    <label for="">Enter number</label>
    <input type="number" name="num1" id=" ">
    <label for="">Enter upto</label>
    <input type="number" name="num2" id=" ">
    <input type="submit" value="submit">



</form>
</body>
</html>
