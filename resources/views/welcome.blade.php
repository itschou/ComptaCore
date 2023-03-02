<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

    <title>Demande Devis </title>

</head>

<body>

    <div class="container text-center">
        <form action="{{ route('devis') }}" method="POST">
            @csrf
            <h1 class=" text-uppercase">Demander un devis</h1><br>
            <label for="quantity">Products</label>
            <select name="category">
                @foreach($categories as $category)
                <option value="{{ $category->category }}">{{ $category->category }}</option>
                @endforeach
            </select><br><br>
            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity"><br><br>
            <button type="submit" class="button">Add devis</button>
        </form><br>
        <form action="{{ route('sendJobs') }}" method="POST">
            @csrf
            <button type="submit">Send Devis</button>
        </form>
    </div>

</body>

</html>