@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список ипотек</h1>
        <a href="{{ route('mortgages.create') }}" class="btn btn-primary mb-3">Добавить ипотеку</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Процент</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($mortgages as $mortgage)
                <tr>
                    <td>{{ $mortgage->id }}</td>
                    <td>{{ $mortgage->title }}</td>
                    <td>{{ $mortgage->percent }}%</td>
                    <td>{{ $mortgage->is_active ? 'Активна' : 'Неактивна' }}</td>
                    <td>
                        <a href="{{ route('mortgages.show', $mortgage->id) }}" class="btn btn-info btn-sm">Просмотр</a>
                        <a href="{{ route('mortgages.edit', $mortgage->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                        <form action="{{ route('mortgages.destroy', $mortgage->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
