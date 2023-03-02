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
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <h1 class=" text-uppercase">Demander un devis</h1><br>
            <label for="quantity">Quantité</label>
            <select name="product">
                @foreach($products as $product)
                <option value="{{ $product->category }}">{{ $product->name }}</option>
                @endforeach
            </select><br><br>
            <label for="quantity">Quantité</label>
            <input type="text" id="quantity" name="quantity"><br><br>
            <button type="submit">Demander un devis</button>
        </form>
    </div>

</body>

</html>