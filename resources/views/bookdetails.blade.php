<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>Title: {{ $book['title'] }}</h3>
                    <p>Author: {{ $book['author'] }}</p>
                    <p>Publication Year: {{ $book['publication_year'] }}</p>
                    <br>
                    <a href="/books"class="rounded-md bg-red-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
