<!-- resources/views/rooms/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Rooms</h1>
    <ul>
        @foreach($rooms as $room)
            <li>
                {{ $room->name }} ({{ $room->type }}) - Capacity: {{ $room->capacity }}
            </li>
        @endforeach
    </ul>
</div>
@endsection