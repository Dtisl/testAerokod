@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список ипотек</h1>

        @if ($mortgages->isEmpty())
            <p>Нет доступных ипотек.</p>
        @else
            <div class="list-group">
                @foreach ($mortgages as $mortgage)
                    <div class="list-group-item">
                        <h4 class="mb-1">{{ $mortgage->title }}</h4>
                        <p class="mb-1">Процент: {{ $mortgage->percent }}%</p>
                        <p class="mb-1">Минимальная стоимость: {{ number_format($mortgage->min_price, 0, ',', ' ') }} руб.</p>
                        <p class="mb-1">Максимальная стоимость: {{ number_format($mortgage->max_price, 0, ',', ' ') }} руб.</p>
                        <a href="{{ url('public/mortgages/' . $mortgage->id) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
