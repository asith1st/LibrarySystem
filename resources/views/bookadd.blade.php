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
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                    <form method="post" action="/booksave">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="title" placeholder="Enter Title Here">
                        <input type="text" class="form-control" name="author" placeholder="Enter Author Here">
                        <input type="text" class="form-control"
                            name="publication_year"placeholder="Enter Publication Year Here">
                        <input type="submit"
                            class="rounded-md bg-red-500 text-white focus:ring-red-600 px-4 py-2 text-sm"
                            value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
