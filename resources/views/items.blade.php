{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>item</title>
</head>
<body >
 
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach ($items as $item)
            
      
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
        </tr>
          @endforeach
    </table>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Daftar Item</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-white shadow-lg rounded-2xl w-11/12 md:w-3/4 lg:w-1/2">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
      <h1 class="text-2xl font-semibold text-center text-gray-800">Daftar Item</h1>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse">
        <thead class="bg-blue-50 text-blue-700 uppercase text-sm">
          <tr>
            <th class="px-6 py-3 text-left">ID</th>
            <th class="px-6 py-3 text-left">Nama</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          @foreach ($items as $item)
          <tr class="hover:bg-gray-50 border-b border-gray-200">
            <td class="px-6 py-3 font-medium">{{ $item->id }}</td>
            <td class="px-6 py-3">{{ $item->name }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
