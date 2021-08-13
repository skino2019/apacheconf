<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apache Config - The Easy way </title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <livewire:styles />
</head>

<body class="antialiased px-10">

    @livewire('apache-config')

    </div>
    <livewire:scripts />

    <script>
        function copyToClipboard(){
            var codeToBeCopied = document.getElementById('content-copy').innerText;
            var emptyArea = document.createElement('TEXTAREA');
            emptyArea.innerHTML = codeToBeCopied;
            const parentElement = document.getElementById('post-title');
            parentElement.appendChild(emptyArea);
            emptyArea.select();
            document.execCommand('copy');
            parentElement.removeChild(emptyArea);
        }
    </script>
</body>

</html>
