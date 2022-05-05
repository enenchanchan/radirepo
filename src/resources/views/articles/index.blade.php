@extends('app')
@section('title','記事一覧')
@section('content')
@include('nav')
<div class="container">
    @foreach($articles as $article)
    <div class="card mt-5">
        <div class="card-body d-flex flex-row">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
            <div class="font-weight-bold">
                {{$article->user->name}}
            </div>
            <div class="font-weight-lighter">
                {{$article->created_at->format("Y/m/d H:i")}}
            </div>
        </div>
        <div class="card-body">
            <h3>{{$article->radio_title}}</h3>
            <p>{{$article->radio_date}}</p>
            <h3>{{$article->body}}</h3>
        </div>
    </div>
    @endforeach
</div>
@include('footer')
@endsection