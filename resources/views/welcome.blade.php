<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Apache2 Config Generator - Apache Configs the easy way</title>
    <meta name="title" content="Apache2 Config Generator">
    <meta name="description" content="ApacheConfig aims to help people out by generating most of the config for them. with easy instructions on how to install them and commands to use.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://apacheconfig.live/">
    <meta property="og:title" content="Apache2 Config Generator">
    <meta property="og:description" content="ApacheConfig aims to help people out by generating most of the config for them. with easy instructions on how to install them and commands to use.">
    <meta property="og:image" content="{{ asset('images/seo/googleimage.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://apacheconfig.live/">
    <meta property="twitter:title" content="Apache2 Config Generator">
    <meta property="twitter:description" content="ApacheConfig aims to help people out by generating most of the config for them. with easy instructions on how to install them and commands to use.">
    <meta property="twitter:image" content="{{ asset('images/seo/googleimage.jpg') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DPYLWPZ9PB"></script>
    <script async defer data-website-id="fe5222ec-182b-488d-84a9-4ff2f16f337e" src="http://raspada-analytics.one/umami.js"></script>

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
