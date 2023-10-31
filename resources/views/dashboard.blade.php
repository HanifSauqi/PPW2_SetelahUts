<x-app-layout>
    <x-slot name="header">
    <h1 class="text-3xl font-bold text-center text-black  rounded">
        Daftar Buku
    </h1>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @include('buku.index')
        </div>
    </div>
</x-app-layout>
