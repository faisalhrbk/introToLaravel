<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is http client page</h1>

    <h3>here is the data from api</h3>
{{-- 
    <pre>
        {{print_r($data)}}

    </pre> --}}
    <ul>
        @foreach ($data->products as $product)
            <li>{{$product->id}}</li>
            <li>{{$product->title}}</li>
            <li>{{$product->description}}</li>
            <br>
        @endforeach
    </ul>
</body>
</html>