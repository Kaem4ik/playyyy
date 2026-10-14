<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <title>Моя пустая страница</title>
        <link rel="stylesheet" href="index.css">
</head>
<body>

<x-header />

<main>
    <h1>Вход</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <p>
            <label>Логин</label><br>
            <input type="text" name="login" value="{{ old('login') }}" required>
        </p>

        <p>
            <label>Пароль</label><br>
            <input type="password" name="password" required>
        </p>

        <button type="submit">Войти</button>
    </form>

    <p style="margin-top: 15px;">
        Нет аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a>
    </p>
</main>

<x-footer />

</body>
</html>