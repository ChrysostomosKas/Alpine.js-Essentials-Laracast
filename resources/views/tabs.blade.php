<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Memory Game</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <style>
        .active{
            color: blue;
        }
    </style>
</head>

<body>
        <div x-data="{currentTab: '' }">
            <button @click="currentTab = 'first'" :class="{ 'active' : currentTab === 'first'}">First</button>
            <button @click="currentTab = 'second'" :class="{ 'active' : currentTab === 'second'}">Second</button>
            <button @click="currentTab = 'third'" :class="{ 'active' : currentTab === 'third'}">Third</button>
            <div style="border: 1px dotted grey; padding: 1rem; margin-top: 1rem;">
                <div x-show="currentTab === 'first'">
                    <p>First tab.</p>
                </div>

                <div x-show="currentTab === 'second'">
                    <p>Second tab.</p>
                </div>

                <div x-show="currentTab === 'third'">
                    <p>Third tab.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
