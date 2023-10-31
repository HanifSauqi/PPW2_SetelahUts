<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-md shadow-md max-w-md w-full">
        <h2 class="text-3xl font-semibold mb-6 text-center">Tambah Buku</h2>
        <form action="{{ route('buku.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-gray-600 text-sm">Judul Buku</label>
                <input type="text" id="judul" name="judul" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="penulis" class="block text-gray-600 text-sm">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-600 text-sm">Harga</label>
                <input type="text" id="harga" name="harga" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="tgl_terbit" class="block text-gray-600 text-sm">Tanggal Terbit</label>
                <input type="date" id="tgl_terbit" name="tgl_terbit" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex justify-end items-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">Simpan</button>
                <a href="/buku" class="text-gray-600 ml-2">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
