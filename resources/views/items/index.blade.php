<!-- resources/views/items/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Input Output</title>
</head>
<body>
    <h1>Input Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    <h2>Items List</h2>
    <ul>
        @foreach($items as $item)
            <li>{{ $item->name }}: {{ $item->quantity }}</li>
        @endforeach
    </ul>
</body>
</html>