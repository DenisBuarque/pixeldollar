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
    <body>

        @include('header')

        <section class="m-auto my-5 flex" style="width: 500px">
            
            <div class="w-full">
                <h1 class="text-3xl text-center">Cadastre-se para participar:</h1>
                <p class="text-center mb-3">Informe seu dados completo abaixo:</p>

                <form method="GET" action="/pixel-shop">
                    <div class="w-full">
                        <small for="name">Nome:</small>
                        <input type="text" name="" placeholder="Digite seu nome completo" class="border p-2 text-md rounded-md shadow-sm w-full">
                    </div>
                    <div>
                        <small for="name">CPF:</small>
                        <input type="text" name="" placeholder="000.000.000-00" placeholder="" class="border p-2 text-md rounded-md shadow-sm w-full">
                    </div>
                    <div>
                        <small for="name">Telefone para contato:</small>
                        <input type="tel" name="" placeholder="ddd + número" class="border p-2 text-md rounded-md shadow-sm w-full">
                    </div>
                    <div>
                        <small for="name">E-mail:</small>
                        <input type="email" name="" placeholder="joao@gmail.com" class="border p-2 text-md rounded-md shadow-sm w-full">
                    </div>
                    <div>
                        <small for="name">Senha:</small>
                        <input type="password" name="" placeholder="*********" class="border p-2 text-md rounded-md shadow-sm w-full">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="py-2 px-5 float-right text-white bg-indigo-800 rounded-md shadow-sm">Cadastrar agora</button>
                    </div>
                </form>
            </div>
         
        </section>


    </body>
</html>
