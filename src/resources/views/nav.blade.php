<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkorange;">
    <div class="container">
        <a href="/" class="navbar-brand">radirepo <i class="fa-solid fa-pen"></i></a>
        <ul class="navbar-nav">
            @guest
            <li class="nav-item"> <a href="{{route('register')}}" class="nav-link"> ユーザー登録</a></li>

            <li class="nav-item"><a href="{{route('login')}}" class="nav-link"> ログイン</a></li>
            @endguest
            @Auth
            <li class="nav-item"><a href="{{route('articles.create')}}" class="nav-link"> 投稿する</a></li>
            <li class="nav-item">
                <a href="" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> ログアウト</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endAuth
        </ul>
    </div>
</nav>