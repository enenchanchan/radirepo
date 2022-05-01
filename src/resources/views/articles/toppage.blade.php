@extends('app')
@section('title','記事一覧')
@section('content')
@include('nav')
<div class="container">

    <div class="d-flex align-items-center justify-content-center">
        <img src="{{asset('images/Podcast audience-rafiki.png')}}" alt="">
        <h2 class="">あなたのお気に入りのラジオの<br>聴取履歴を簡単に記録。</h2>
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <h2 class=""><br>視聴した回のメモを残して、<br>いつまでも思い出そう。</h2>
        <img src="{{asset('images/Mobile UX-cuate.png')}}" alt="">
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <img src="{{asset('images/Online friends-bro.png')}}" alt="">
        <h2 class="">自分なりの記録を共有して<br>みんなで番組を盛り上げよう。</h2>
    </div>
    <h2 class="text-center">さあ、はじめよう!</h2>
    <div class="btns text-center  mb-10">
        <button type="button" class="btn btn-warning btn-rounded"><a href="">ユーザー登録はこちら</a></button>
        <button type="button" class="btn btn-primary btn-rounded"><a href=""> ログインはこちら</a></button>
    </div>
</div>
@include('footer')
@endsection