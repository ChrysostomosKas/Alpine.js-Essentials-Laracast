<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alpine Examples</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer></script>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet">
</head>

<body class="p-12">
<div x-data>
    <button @click="$dispatch('flash', 'Hello There!')">Trigger Flash Message</button>
</div>

{{--Flash--}}
<div x-data="{ show: false, message: '' }"
     x-show.transition.opacity.scale.75.duration="show"
     @flash.window="
     show = true;
     message = $event.detail;
    setTimeout(() => show = false), 3000;
"
     x-text="message"
     class="fixed bottom-0 right-0 mb-4 mr-4 bg-blue-500 text-white p-4 rounded"
>
</div>

<script>
    // Additionally, any component can call $dispatch('flash', 'A flash message');

    window.flash = message => window.dispatchEvent(new CustomEvent('flash', {detail: message}));
</script>
</body>
</html>
