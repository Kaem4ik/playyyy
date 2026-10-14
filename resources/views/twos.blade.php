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
    <h1>Категория: {{ $category }}</h1>

    @forelse ($articles as $article)
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 15px;">
            <h2>{{ $article->title }}</h2>
            <p><strong>Автор:</strong> {{ $article->user->login ?? 'Аноним' }}</p>
            <p>{{ $article->content }}</p>
            <small>{{ $article->created_at->format('d.m.Y H:i') }}</small>
        </div>
    @empty
        <p>В этой категории пока нет статей.</p>
    @endforelse

    <div style="margin-top: 20px;">
        {{ $articles->links() }}
    </div>
</main>

<x-footer />

</body>
</html>