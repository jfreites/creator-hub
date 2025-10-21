<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="font-display bg-background-light dark:bg-background-dark">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <div class="flex h-full grow flex-col">
            <header></header>
            <main class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                {{ $slot }}
            </main>
            <footer></footer>
        </div>
    </div>
</body>

</html>
