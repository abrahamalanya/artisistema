@extends('admin/master')
@section('content')
    <h1>{{ $title }}</h1>
    <ul>
        @forelse($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>Sin registro de usuarios</li>
        @endforelse
    </ul>
@endsection
