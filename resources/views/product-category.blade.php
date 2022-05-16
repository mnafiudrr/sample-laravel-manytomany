<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        @foreach ($products as $product)
            {{$product->nama}} :
            @foreach ($product->categories as $productCategory)
                {{$productCategory->nama}}                
            @endforeach
            <br>
        @endforeach
        <br><br><br><br><br>
        <form action="{{route('store')}}" method="post">
            @csrf
            <select name="product_id" style="width:200px">
                @foreach ($products as $product)                
                    <option value="{{$product->id}}">{{$product->nama}}</option>
                @endforeach
            </select>
            @foreach ($categories as $category)
                <br>
                <span>
                    <input type="checkbox" name="category_id[]" value="{{$category->id}}" id="">
                    {{$category->nama}}
                </span>
            @endforeach
            <br>
            <button type="submit">Ubah</button>
        </form>
    </body>
</html>
