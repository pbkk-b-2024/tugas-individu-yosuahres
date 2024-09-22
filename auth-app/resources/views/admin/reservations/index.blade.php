<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reservations</title>
</head>
<body>
    <h1>Manage Reservations</h1>
    <ul>
        @foreach ($reservations as $reservation)
            <li>
                Room Number: {{ $reservation->room->room_number }} - Reserved by: {{ $reservation->user->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>