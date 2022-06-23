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



        <section class="m-auto my-2 " style="width: 1024px">
           <h1 class="text-2xl font-semibold">Histórico de compras</h1>
        </section>

        <section class="m-auto bg-gray-100 my-2 flex flex-row flex-wrap" style="width: 1024px">
            <table class="table-auto w-full">
                <thead>
                    <th class="p-2 text-left">Código</th>
                    <th class="p-2 text-left">Data</th>
                    <th class="p-2 text-left">Transação</th>
                    <th class="p-2 text-left">Valor</th>
                    <th class="p-2 text-left">Números</th>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)    
                        <tr>
                            <td class="border p-2">s54d8a7t5sf54a8t65sa6g54d6g65d</td>
                            <td class="border p-2">00/00/0000</td>
                            <td class="border p-2">Aprovado</td>
                            <td class="border p-2">R$ 0,00</td>
                            <td class="border p-2">1596</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </section>

        @include('footer')

    </body>
</html>
