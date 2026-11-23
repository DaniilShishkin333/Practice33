@extends('layouts.catalog')

@section('title', 'Каталог ЦСКА')

@section('content')
    <h1>Каталог ЦСКА</h1>


    <ul class="catalog-list">
        @foreach ($counts as $table => $count)
          <li>
            <a href="{{ url('/table/' . $table) }}">{{ $table }}</a>
            <br>
            Записей: {{ $count }}
        </li>
        @endforeach
    </ul>
@endsection