<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
        <title>Моя пустая страница</title>
        <link rel="stylesheet" href="index.css">
       <body>

<x-header />

<main>
    <h1>Создать статью</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('journalist.store') }}">
        @csrf

        <p>
            <label>Заголовок</label><br>
            <input type="text" name="title" value="{{ old('title') }}" required style="width: 100%;">
        </p>

        <p>
            <label>Категория</label><br>
            <input type="text" name="category" value="{{ old('category') }}" required style="width: 100%;">
        </p>

        <p>
            <label>Текст статьи</label><br>
            <textarea name="content" rows="10" required style="width: 100%;">{{ old('content') }}</textarea>
        </p>

        <button type="submit">Опубликовать</button>
    </form>
</main>

<x-footer />

</body>
</html>