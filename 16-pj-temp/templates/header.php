<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LD Pizza</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;
            text-transform: uppercase;
        }
    </style>
</head>
<body class="bg-gray-400">
    <nav class="bg-white shadow-sm px-4 py-2">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.php" class="text-4xl brand-text font-semibold shadow-sm">LD Pizza</a>
        <ul id="nav-mobile" class="text-center hide-on-small-and-down">
            <li><a href="add.php" class="brand text-xl text-gray-100 font-samibold p-2 rounded-lg shadow-xl">Add a Pizza</a></li>
        </ul>
        </div>
    </nav>