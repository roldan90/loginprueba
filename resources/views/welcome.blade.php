<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    
    <form action="{{ route('logear') }}" method="post">
        @csrf

        <input type="text" name="user" placeholder="user">
        <br>
        <input type="text" name="password" placeholder="password">
        <br>
        <button>Entrar</button>
    </form>
    
</body>
</html>