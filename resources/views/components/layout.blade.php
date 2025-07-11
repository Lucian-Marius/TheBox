<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
    <title>Pandora</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>


<body>
        
    <nav>    
        <x-navbar></x-navbar>
    </nav>
    
    <main>
        {{ $slot }}
    </main>

    

</body>

<x-footer></x-footer>
</html>