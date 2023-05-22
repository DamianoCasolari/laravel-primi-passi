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

        a i {
            color: white;
        }

        header {
            height: 100px;
        }

        .my_container {
            height: calc(100vh - 100px);
        }
    </style>
</head>

<body class="bg-black">

    <header class="d-flex justify-content-center align-items-center flex-wrap">
        <a href="/">
            <i class="fa fa-home fa-xl" aria-hidden="true"></i>
        </a>
        <a href="/about-me">
            <i class="ms-5 fa fa-info fa-xl" aria-hidden="true"></i>
        </a>

    </header>
    <main>
        <div class="my_container d-flex justify-content-around align-items-center flex-column">
            <div class="badge bg-dark p-4">
                <h2 class="mb-4"> About me :</h2>
                <p class="text-white">{{ $description }}</p>

                <p>
            </div>
            <i>Written on the day: {{ $date }} </i>
            </p>
        </div>
    </main>

</body>

</html>