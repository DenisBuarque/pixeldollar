<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="/css/styles.css" rel="stylesheet">

    </head>
    <body class="bg-gray-300">

        @include('header')

        <section class="m-auto mt-20 flex bg-white p-5 rounded-md shadow-sm" style="width: 400px">
            
            <div class="w-full">
                <h1 class="text-3xl text-center">Log In</h1>
                <p class="text-center mb-8">Entre com seus dados:</p>

                <form method="GET" action="/pixel-shop">
                    <div>
                        <small for="name">E-mail:</small>
                        <input type="email" name="" placeholder="joao@gmail.com" class="border p-2 text-md rounded-md shadow-sm w-full">
                    </div>
                    <div>
                        <small for="name">Senha:</small>
                        <input type="password" name="" placeholder="*********" class="border p-2 text-md rounded-md shadow-sm w-full">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="py-2 px-5 float-right text-white bg-indigo-800 rounded-md shadow-sm">Entrar</button>
                    </div>
                </form>
            </div>
         
        </section>


    </body>
</html>
