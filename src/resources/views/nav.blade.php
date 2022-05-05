<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: darkorange;">
    <div class="container">
        <a href="" class="navbar-brand">radirepo <i class="fa-solid fa-pen"></i></a>
        <ul class="navbar-nav">
            @guest
            <li class="nav-item"> <a href="{{route('register')}}" class="nav-link"> ユーザー登録</a></li>

            <li class="nav-item"><a href="{{route('login')}}" class="nav-link"> ログイン</a></li>
            @endguest
            @Auth
            <li class="nav-item"><a href="" class="nav-link"> 投稿する</a></li>
            <li class="nav-item"><button form="logout-button" type="submit">ログアウト</button>
            </li>
            <form id="logout-button" method="post" action="{{route('logout')}}"> @csrf</form>
            @endAuth
        </ul>
    </div>

</nav>