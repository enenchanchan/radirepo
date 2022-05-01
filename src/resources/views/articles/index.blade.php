@extends('app')
@section('title','記事一覧')
@section('content')
@include('nav')
<div class="container">
    @foreach($articles as $article)
    <div class="card">
        <div class="card-body">
            <div class="font-weight-bold">
                {{$article->user->name}}
            </div>
            <div class="font-weight-lighter">
                {{$article->created_at->format("Y/m/d H:i")}}
            </div>
        </div>
    </div>
    @endforeach
</div>
@include('footer')
@endsection