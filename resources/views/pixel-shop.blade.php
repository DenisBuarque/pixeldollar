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

        <header class="w-full p-2 bg-indigo-900">
            <div class="m-auto flex justify-between" style="width: 1024px">
                <h3 class="text-white text-bold text-xl"><a href="/">Pixel Dollar</a></h3>
                <div class="flex content-center items-center">
                    <span class="text-white">1.000.000 de pixes - R$ 1,00 real por pixel</span>
                </div>
                <div class="text-white text-sm flex content-center items-center">
                    Olá, Usuário, <a href="/" class="text-blue-200 ml-3"> Log out</a>
                </div>
            </div>
        </header>
        
        <nav class="w-full p-1 bg-yellow-500">
            <div class="m-auto flex justify-center text-sm" style="width: 1024px">
                <a href="/" class="px-3">Página Principal</a>
                <a href="/como-funciona" class="px-3">Como participar</a>
                <a href="/pixel-shop" class="px-3">Comprar pixel</a>
                <a href="/historico" class="px-3">Histórico</a>
            </div>
        </nav>

        @php
            for ($i = 1; $i <= 5000; $i++) { 
                $n[] = str_pad(rand(1, 8000), 2, '0', STR_PAD_LEFT); 
            }
            sort($n);
            $num = implode(',',$n);
            $numbers = explode(',',$num);
        @endphp

        <section class="m-auto my-2 flex justify-between" style="width: 1024px">
            <p class="text-2xl">Selecione o pixel que deseja comprar.</p>

            <a href="/checkout" class="px-3 text-white text-sm flex items-center content-center bg-indigo-800 rounded-md">
                Continuar
            </a>

        </section>

        <section class="m-auto bg-gray-100 my-2 flex flex-row flex-wrap" style="width: 1024px">
            @for($i = 0; $i < 8000; $i++)
                @if (in_array($i,$numbers))
                    <a title="Vendido" class="border w-2 h-2 bg-gray-400"></a>  
                @else
                    <a href="#" target="_blanl" title="{{$i}}" class="border w-2 h-2 hover:bg-red-600"></a>  
                @endif
            @endfor
        </section>

        @include('footer')

    </body>
</html>
