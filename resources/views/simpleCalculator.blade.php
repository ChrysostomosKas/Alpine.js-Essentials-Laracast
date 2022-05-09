<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>

<div x-data="{ first: 0, second: 0 }">
    <input type="text" x-model.number="first"> + <input type="text" x-model.number="second"> =
    <output x-text="first + second"></output>
</div>

</body>

</html>
