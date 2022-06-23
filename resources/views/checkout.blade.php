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

    <section class="m-auto my-5 flex flex-col" style="width: 500px">
        
        <form class="w-full pb-5">
            <div class="w-full p-5 mb-6 rounded-md border">
                <h1 class="text-3xl text-center">Checkout Transparente:</h1>
                <p class="text-center mb-3">Confira seus dados de pagamento abaixo:</p>

                <div class="w-full">
                    <small for="name">Nome:</small><br />
                    <strong>Nome completo cliente</strong>
                </div>
                <div class="w-full">
                    <small for="name">CPF:</small><br />
                    <strong>054.986.322-98</strong>
                </div>
                <div class="w-full">
                    <small for="name">Telefone para contato:</small><br />
                    <strong>82 97896-5644</strong>
                </div>
                <div class="w-full">
                    <small for="name">E-mail:</small><br />
                    <strong>nome123@gmail.com</strong>
                </div>
                <div class="w-full">
                    <small for="name">Você esta comprando o(s) número(s):</small><br />
                    <strong>4589</strong>
                </div>
                <div class="w-full">
                    <small for="name">Valor total:</small><br />
                    <strong>R$ 30</strong>
                </div>
            </div>

            <button type="button" class="p-3 w-full text-white text-center bg-green-600 rounded-md shadow-sm">
                Pagar com Mercado Pago R$ 30
            </button>

        </form>

        <img src="{{asset("images/brand-card.jpg")}}" alt="Brand card" />

    </section>


</body>

</html>
