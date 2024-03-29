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

<body class="p-10 max-w-lg mx-auto">

<form
    x-data="{
            form: {
                name: ''
            },
            user: null,
            submit() {
                fetch('https://reqres.in/api/users', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(this.form)
                })
                .then(response => response.json())
                .then(user => this.user = user);
            }
        }"
    @submit.prevent="submit"
>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
               for="name"
        >
            Name
        </label>

        <input class="border border-gray-400 p-2 w-full"
               type="text"
               name="name"
               id="name"
               x-model="form.name"
               required
        >
    </div>

    <template x-if="user">
        <div x-text="`The user ${user.name} was created at ${user.createdAt}`"></div>
    </template>
</form>

</body>

</html>
