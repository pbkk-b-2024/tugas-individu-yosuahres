<!-- resources/views/admin/rooms/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Rooms</h1>
    <form action="{{ route('admin.rooms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Room Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Room Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="capacity">Capacity</label>
            <input type="number" name="capacity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Room</button>
    </form>

    <h2>Available Rooms</h2>
    <ul>
        @foreach($rooms as $room)
            <li>
                {{ $room->name }} ({{ $room->type }}) - Capacity: {{ $room->capacity }}
                <form action="{{ route('admin.rooms.destroy', $room) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection