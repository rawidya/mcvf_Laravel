<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Category</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-4xl bg-white shadow-lg rounded-2xl p-6">
        <h1 class="text-3xl font-bold text-center text-indigo-600 mb-6">Category List</h1>
        
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-indigo-500 text-white text-left">
                        <th class="py-3 px-4 rounded-tl-lg">ID</th>
                        <th class="py-3 px-4 rounded-tr-lg">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="border-b hover:bg-indigo-50 transition">
                        <td class="py-3 px-4 text-gray-700 font-medium">{{ $category->id }}</td>
                        <td class="py-3 px-4 text-gray-700">{{ $category->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
