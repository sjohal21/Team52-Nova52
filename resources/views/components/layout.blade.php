<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- Set title based on title variable set by pages using layout-->
    <title>{{isset($title) ? $title . ' - Nova52' : 'Nova52'}}</title>
    <!-- Set up daisyUI for CSS components building on Laravel's Tailwind support -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="flex">
    <main>
        {{$slot}}
    </main>
</body>
