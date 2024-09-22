<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Rooms</title>
    <!-- Add your CSS links here -->
</head>

<body>
    <div class="container">
        <h1>Available Rooms</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <ul>
            @foreach ($rooms as $room)
                <li>
                    Room Number: {{ $room->room_number }}
                    @if (!$room->is_reserved)
                        <form action="{{ route('reservations.store') }}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                            <button type="submit" class="btn btn-primary">Reserve</button>
                        </form>
                    @else
                        <span class="text-muted">Reserved</span>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Add your JS scripts here -->
</body>

</html>