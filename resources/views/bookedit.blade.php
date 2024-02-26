<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Book Details') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                    <form action="/updatebook" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $book['id'] }}">
                        <input type="text" class="form-control" name="title" value="{{ $book['title'] }}">
                        <input type="text" class="form-control" name="author" value="{{ $book['author'] }}">
                        <input type="text" class="form-control"
                            name="publication_year"value="{{ $book['publication_year'] }}">
                        <input
                            type="submit"class="rounded-md bg-red-500 text-white focus:ring-red-600 px-4 py-2 text-sm"
                            value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
