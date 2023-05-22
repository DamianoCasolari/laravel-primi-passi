<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .my_container {
            height: 100vh;
        }
    </style>
</head>

<body class="antialiased">
    <div class="my_container d-flex justify-content-center align-items-center flex-wrap">
        <span class="badge bg-dark">
            <h1> This exercise was carried out by : {{ $first_name . ' ' . $last_name }} </h1>
        </span>
        <p>
            <i>cit: {{ $description }} </i>
        </p>
    </div>

</body>

</html>