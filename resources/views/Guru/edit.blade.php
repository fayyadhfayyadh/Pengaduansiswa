<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h1 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Data</h1>
            <form action="{{ route ('Guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
               @method('PUT')

               <select name="status" id=""> 
                    <option value="sedang dalam tinjauan">sedang dalam tinjauan</option>
                    <option value="done">done</option>
               </select>
                
               <button type="submit" style="background-color: blue" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              send massage
            </button>
            </form>
        </div>
      </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</html>