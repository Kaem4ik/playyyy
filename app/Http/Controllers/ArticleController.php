<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Главная — все статьи, от новых к старым
    public function index()
    {
        $articles = Article::with('user')->latest()->paginate(5);
        return view('welcome', compact('articles'));
    }

    // Категория
    public function category($category = null)
    {
        $category = $category ?? Article::value('category') ?? 'Без категории';

        $articles = Article::with('user')
            ->where('category', $category)
            ->latest()
            ->paginate(5);

        return view('twos', compact('articles', 'category'));
    }

    // Форма создания статьи
    public function create()
    {
        return view('threes');
    }

    // Сохранение статьи
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        $data['user_id'] = Auth::id();

        Article::create($data);

        return redirect()->route('home')->with('success', 'Статья опубликована');
    }
}