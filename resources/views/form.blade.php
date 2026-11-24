@extends('layouts.catalog')

@section('title', $isEdit ? 'Редактировать' : 'Добавить')

@section('content')
    <h1>{{ $isEdit ? 'Редактировать' : 'Добавить' }} запись</h1>

    <form action="{{ $action }}" method="POST">
        @csrf
        
        @if($isEdit)
            @method('PUT')
        @endif

        <div style="margin-bottom: 15px;">
            <label style="display:block; font-weight:bold; margin-bottom: 5px;">Название / Имя:</label>
            <input type="text" name="name" value="{{ $item->name ?? '' }}" required style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        @php $segment = request()->segment(1); @endphp

        @if($segment == 'players')
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom: 5px;">Год рождения:</label>
                <input type="number" name="year" value="{{ $item->year ?? '' }}" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom: 5px;">Игровой номер:</label>
                <input type="number" name="number" value="{{ $item->number ?? '' }}" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
        @endif

        @if(in_array($segment, ['teams', 'doctors', 'treners', 'staffs', 'tournaments']))
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom: 5px;">Год:</label>
                <input type="number" name="year" value="{{ $item->year ?? '' }}" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
        @endif

        @if($segment == 'stadiums')
            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom: 5px;">Количество мест:</label>
                <input type="number" name="number_of_seats" value="{{ $item->number_of_seats ?? '' }}" style="width: 100%; max-width: 400px; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
        @endif

        <button type="submit" style="padding: 10px 20px; background: green; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Сохранить
        </button>
        <a href="{{ url()->previous() }}" style="margin-left: 10px;">Отмена</a>
    </form>
@endsection