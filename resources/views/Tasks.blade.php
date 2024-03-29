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

<div class="bg-gray-300 px-10 py-6 rounded"
     x-data="taskApp()"
>
    <form @submit.prevent="submit">
        <input type="text"
               placeholder="Go to the market..."
               x-model="newTask"
               class="w-full px-1"
        >
    </form>

    <ul class="list-disc mt-3">
        <template x-for="(task, index) in tasks"
                  :key="index"
        >
            <li>
                <input type="checkbox" x-model="task.completed">
                <span x-text="task.body" :class="{ 'line-through' : task.completed }"></span>
            </li>
        </template>
    </ul>
</div>
</body>

    <script>
        let taskApp = () => {
            return {
                tasks: [],
                newTask: '',

                submit() {
                    this.tasks.push({body: this.newTask, completed: false});

                    this.newTask = '';
                }
            };
        }
    </script>

</html>
