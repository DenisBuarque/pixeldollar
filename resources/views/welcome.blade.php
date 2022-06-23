<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pixel Dollar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="/css/styles.css" rel="stylesheet">

    </head>
    <body class="bg-gray-300">

        @include('header')

        <section class="m-auto bg-gray-100 my-2 flex flex-row flex-wrap" style="width: 1024px">
            @for($i = 0; $i < 9000; $i++)
                <a href="#" target="_blanl" title="Título do link" class="border w-2 h-2"></a>
            @endfor
        </section>

        @include('footer')

    </body>
</html>
