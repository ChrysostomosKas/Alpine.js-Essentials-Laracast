<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alpine Examples</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer
    ></script>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet"
    >
</head>
<body class="grid items-center justify-center h-screen">
<div x-data="{ show: true }">
    <div class="w-12 h-12">
        <div class="bg-green-400 w-full h-full"
             x-show="show"
             x-transition:enter="transition transform duration-1000"
             x-transition:enter-start="opacity-0 scale-125"
             x-transition: enter-end="opacity-100"
             x-transition:leave="transition duration-200"
             x-transition:leave-end="opacity-100"
             x-transition:leave-end="opacity-0"
        >
        </div>
    </div>
    <button @click="show = ! show">Toggle</button>
</div>
</body>

</html>
