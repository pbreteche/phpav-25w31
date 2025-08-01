@extends('layout')

@section('title', 'Liste des articles')

@section('body')
    @parent
    <p><a href="{{ route('articles.index') }}">Retour à la liste</a></p>

    <article>
        <h1>{{ $article->title }}</h1>
        <div>{{ $article->body }}</div>
    </article>
@endsection
