<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <div class="flex items-center justify-between mb-4">
            <a href="{{ route('buku.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block">Tambah
                Buku</a>
            <form action="{{ route('buku.search') }}" method="GET" class="flex">
                <input type="text" name="search" placeholder="Cari Buku"
                    class="rounded-l py-2 px-4 border-t border-b border-l text-gray-800 border-gray-300 bg-white" />
                <button type="submit"
                    class="px-6 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-r">Cari</button>
            </form>
        </div>
        <table class="w-full border-collapse border border-gray-300 bg-white shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border border-gray-300">No.</th>
                    <th class="px-4 py-2 border border-gray-300">Judul Buku</th>
                    <th class="px-4 py-2 border border-gray-300">Penulis</th>
                    <th class="px-4 py-2 border border-gray-300">Harga</th>
                    <th class="px-4 py-2 border border-gray-300">Tgl. Terbit</th>
                    <th class="px-4 py-2 border border-gray-300">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 0;
                @endphp
                @foreach ($data_buku as $buku)
                <tr>
                    <td class="px-4 py-2 border border-gray-300 text-center">{{ ++$no }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-center">{{ $buku->judul }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-center">{{ $buku->penulis }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-center">Rp {{ number_format($buku->harga, 2) }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-center">{{ $buku->tgl_terbit }}</td>
                    <td class="px-4 py-2 border border-gray-300 text-center">
                        <a href="{{ route('buku.edit', $buku->id) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mr-2">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Yakin mau dihapus?')"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @include('buku.pagination', ['paginator' => $data_buku])
        <div class="w-full flex flex-col items-center my-3">
            <div class="flex flex-col">{{ $data_buku->links() }}</div>
        </div>

        <div class="my-6 p-4 bg-blue-100 rounded-lg">
            <p class="text-lg text-blue-800">Jumlah buku yang tersedia: {{ $jumlah_buku }}</p>
            <p class="text-lg text-blue-800">Total harga dari seluruh buku: Rp {{ number_format($total_harga, 2) }}</p>
        </div>

    </div>
</body>

</html>
