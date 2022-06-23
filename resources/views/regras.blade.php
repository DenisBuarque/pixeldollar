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

        <section class="m-auto my-5 flex flex-row flex-wrap" style="width: 1024px">
            
            <h1 class="font-semibold mb-3">Como Funciona:</h1>
            <p class="text-sm mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ad amet quisquam tempora dolores inventore maxime, voluptatum ipsum similique cupiditate, velit laboriosam architecto, aspernatur harum eveniet dicta quas assumenda cum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ad amet quisquam tempora dolores inventore maxime, voluptatum ipsum similique cupiditate, velit laboriosam architecto, aspernatur harum eveniet dicta quas assumenda cum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ad amet quisquam tempora dolores inventore maxime, voluptatum ipsum similique cupiditate, velit laboriosam architecto, aspernatur harum eveniet dicta quas assumenda cum.</p>
        
            <h1 class="font-semibold mb-3">Com comprar:</h1>
            <p class="text-sm mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ad amet quisquam tempora dolores inventore maxime, voluptatum ipsum similique cupiditate, velit laboriosam architecto, aspernatur harum eveniet dicta quas assumenda cum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ad amet quisquam tempora dolores inventore maxime, voluptatum ipsum similique cupiditate, velit laboriosam architecto, aspernatur harum eveniet dicta quas assumenda cum. Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        
            <h1 class="font-semibold mb-3">Formas de pagamento:</h1>
            <p class="text-sm mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ad amet quisquam tempora dolores inventore maxime, voluptatum ipsum similique cupiditate, velit laboriosam architecto, aspernatur harum eveniet dicta quas assumenda cum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi ad amet quisquam tempora dolores inventore maxime.</p>
        
        </section>

        @include('footer')

    </body>
</html>
