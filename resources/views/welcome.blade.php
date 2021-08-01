<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apache Config</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <livewire:styles />
</head>

<body class="antialiased px-10">

    @livewire('apache-config')


</div>
    <livewire:scripts />
    
<script>
    function copy(){
        var copyText = document.querySelector("#input");
        copyText.select();
        document.execCommand("copy");
    }

    document.querySelector("#copy").addEventListener("click", copy);
</script>
</body>

</html>
