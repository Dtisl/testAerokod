@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить ипотеку</h1>
        <form action="{{ route('mortgages.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Название</label>
                <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="percent" class="form-label">Процент</label>
                <input type="number" name="percent" id="percent" class="form-control" required value="{{ old('percent') }}">
                @error('percent')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="min_first_payment" class="form-label">Минимальный первоначальный взнос</label>
                <input type="number" name="min_first_payment" id="min_first_payment" class="form-control" required value="{{ old('min_first_payment') }}">
                @error('min_first_payment')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="max_price" class="form-label">Максимальная стоимость</label>
                <input type="number" name="max_price" id="max_price" class="form-control" required value="{{ old('max_price') }}">
                @error('max_price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="min_price" class="form-label">Минимальная стоимость</label>
                <input type="number" name="min_price" id="min_price" class="form-control" required value="{{ old('min_price') }}">
                @error('min_price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="min_term" class="form-label">Минимальный срок</label>
                <input type="number" name="min_term" id="min_term" class="form-control" required value="{{ old('min_term') }}">
                @error('min_term')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="max_term" class="form-label">Максимальный срок</label>
                <input type="number" name="max_term" id="max_term" class="form-control" required value="{{ old('max_term') }}">
                @error('max_term')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="is_active" id="is_active" class="form-check-input" {{ old('is_active') ? 'checked' : '' }}>
                <label class="form-check-label" for="is_active">Активная</label>
            </div>

            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
