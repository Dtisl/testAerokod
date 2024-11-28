@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать ипотеку</h1>
        <form action="{{ route('mortgages.update', $mortgage->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Название</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $mortgage->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="percent" class="form-label">Процент</label>
                <input type="number" name="percent" id="percent" class="form-control" value="{{ old('percent', $mortgage->percent) }}" required>
            </div>

            <div class="mb-3">
                <label for="min_price" class="form-label">Минимальная стоимость</label>
                <input type="number" name="min_price" id="min_price" class="form-control" value="{{ old('min_price', $mortgage->min_price) }}" required>
            </div>

            <div class="mb-3">
                <label for="max_price" class="form-label">Максимальная стоимость</label>
                <input type="number" name="max_price" id="max_price" class="form-control" value="{{ old('max_price', $mortgage->max_price) }}" required>
            </div>

            <div class="mb-3">
                <label for="min_first_payment" class="form-label">Минимальный первоначальный взнос</label>
                <input type="number" name="min_first_payment" id="min_first_payment" class="form-control" value="{{ old('min_first_payment', $mortgage->min_first_payment) }}" required>
            </div>

            <div class="mb-3">
                <label for="min_term" class="form-label">Минимальный срок</label>
                <input type="number" name="min_term" id="min_term" class="form-control" value="{{ old('min_term', $mortgage->min_term) }}" required>
            </div>

            <div class="mb-3">
                <label for="max_term" class="form-label">Максимальный срок</label>
                <input type="number" name="max_term" id="max_term" class="form-control" value="{{ old('max_term', $mortgage->max_term) }}" required>
            </div>

            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
    </div>
@endsection
