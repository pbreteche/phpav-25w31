@extends('layout')

@section('title', 'Liste des articles')

@section('body')
    @parent
    <ul>
        @foreach($articles as $article)
            <li><a href="{{ route('articles.show', ['article' => $article->id]) }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>
@endsection
