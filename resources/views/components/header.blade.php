<header>
    <a href="{{ route('home') }}">Главная</a> |
    <a href="{{ route('category') }}">Категория</a> |
    <a href="{{ route('journalist') }}">Журналист</a> |
    <a href="{{ route('admin') }}">Админ</a> |

    @auth
        <span>Привет, {{ auth()->user()->login }}</span>
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    @else
        <a href="{{ route('login') }}">Вход</a> |
        <a href="{{ route('register') }}">Регистрация</a>
    @endauth
</header>
<hr>