<!-- resources/views/components/layout.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles 
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="/public">Работни места</a>
                   @auth  
                      <a href="/public/airbnb_reservations/reservations">Резервации</a>   
                      <a href="/public/airbnb_reservations/vatinvoices">ДДС фактури от airbnb</a>
                      <a href="#">Разходни фактури</a>
                   @endauth
                
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/public/jobs/create">Създай обява</a>

                    <form method="POST" action="/public/logout">
                        @csrf
                        @method('DELETE')

                        <button>Изход</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/public/register">Регистрация</a>
                    <a href="/public/login">Вход</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>
</html>