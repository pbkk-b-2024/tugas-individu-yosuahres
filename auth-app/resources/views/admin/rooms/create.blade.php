<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>
</head>
<body>
    <h1>Add Room</h1>
    <form action="{{ route('admin.rooms.store') }}" method="POST">
        @csrf
        <label for="room_number">Room Number:</label>
        <input type="text" id="room_number" name="room_number" required>
        <button type="submit">Add Room</button>
    </form>
</body>
</html>