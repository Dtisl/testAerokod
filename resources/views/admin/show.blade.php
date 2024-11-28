@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Детали ипотеки</h1>
        <div class="mb-3">
            <strong>Название:</strong> {{ $mortgage->title }}
        </div>
        <div class="mb-3">
            <strong>Процент:</strong> {{ $mortgage->percent }}%
        </div>
        <div class="mb-3">
            <strong>Диапазон стоимости:</strong> от {{ $mortgage->min_price }} до {{ $mortgage->max_price }}
        </div>
        <div class="mb-3">
            <strong>Активна:</strong> {{ $mortgage->is_active ? 'Да' : 'Нет' }}
        </div>
        <a href="{{ route('mortgages.index') }}" class="btn btn-secondary">Назад</a>
    </div>
@endsection
