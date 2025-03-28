<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about page</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" ></script>
</head>

<body>

    <style>
        * {
            margin: 0px
        }

        .header {
            padding: 10px 0px;
            background-color: rgb(127, 184, 238);
        }

        .footer {
            background-color: rgb(17, 128, 233);
            padding: 20px 0px;
            /* position: absolute; */
            bottom: 0px;
            width: 100%;
        }

        .header {
            background-color: rgb(81, 159, 232);
        }

        li {
            display: inline;
            padding: 10px;
        }

        a {
            text-decoration: none;
        }
    </style>
    <div class="header">
        <ul>
            <li><a href="home">home</a></li>
            <li><a href="/">about</a></a></li>
            <li><a href="contact">contact</a></li>
        </ul>
    </div>
    <h4>styles are effect from public/css/style.css</h4>

    <br>
    <div>

        <h1>{{ $title }}</h1>
        {{ $main }}

    </div>
    {{ $login }}

    <div class="footer">
        <p>footer page here</p>
    </div>
</body>

</html>
