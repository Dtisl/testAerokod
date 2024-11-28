@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $mortgage->title }}</h1>

        <p><strong>Процентная ставка:</strong> {{ $mortgage->percent }}%</p>
        <p><strong>Описание:</strong> {{ $mortgage->description ?? 'Нет описания' }}</p>

        <h3>Параметры ипотеки</h3>
        <ul>
            <li><strong>Минимальная стоимость недвижимости:</strong> {{ number_format($mortgage->min_price, 0, ',', ' ') }} руб.</li>
            <li><strong>Максимальная стоимость недвижимости:</strong> {{ number_format($mortgage->max_price, 0, ',', ' ') }} руб.</li>
            <li><strong>Минимальный первый взнос:</strong> {{ $mortgage->min_first_payment }}%</li>
            <li><strong>Минимальный срок ипотеки:</strong> {{ $mortgage->min_term }} лет</li>
            <li><strong>Максимальный срок ипотеки:</strong> {{ $mortgage->max_term }} лет</li>
        </ul>

        <a href="{{ url('public/mortgages') }}" class="btn btn-secondary">Вернуться к списку</a>
    </div>
@endsection
