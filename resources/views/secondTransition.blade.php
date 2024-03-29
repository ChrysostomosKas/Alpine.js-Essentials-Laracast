<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Second Transition</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer></script>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet">
</head>

<body class="grid items-center justify-center h-screen">
    <div x-data="{ show: false }" @click.away="show = false">
        <button @click="show = ! show">Links</button>

        <div class="absolute bg-black text-white py-2 py-2 rounded mt-1"
             x-show="show"
        x-transition:enter="transition duration-200 transform ease-out"
        x-transition:enter-start="scale-75"
        x-transition:leave="transition duration-100 transform ease-in"
        x-transition:leave-end="opacity-0 scale-90"
        >
            <a class="block hover:bg-gray-800 text-sm py-px px-4" href="#">Edit</a>
            <a class="block hover:bg-gray-800 text-sm py-px px-4" href="#">Delete</a>
            <a class="block hover:bg-gray-800 text-sm py-px px-4" href="#">Report Spam</a>
        </div>
    </div>
</body>
</html>
