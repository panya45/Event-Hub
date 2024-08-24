<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Alpine.js</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
</head>
<body>

<div x-data="{ message: 'Hello Alpine.js!' }">
    <p x-text="message"></p>
    <button @click="message = 'Button Clicked!'">Click me</button>
</div>

</body>
</html>