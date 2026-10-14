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
    <h1>Регистрация</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <p>
            <label>Логин</label><br>
            <input type="text" name="login" value="{{ old('login') }}" required>
        </p>

        <p>
            <label>Пароль</label><br>
            <input type="password" name="password" required>
        </p>

        <p>
            <label>Подтверждение пароля</label><br>
            <input type="password" name="password_confirmation" required>
        </p>

        <button type="submit">Зарегистрироваться</button>
    </form>

    <p style="margin-top: 15px;">
        Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a>
    </p>
</main>

<x-footer />

</body>
</html>