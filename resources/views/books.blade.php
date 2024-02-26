<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Library Management System') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/bookadd/"class="rounded-md bg-red-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Add
                        Book</a>
                    <br>
                    <br>
                    <table id="myTable" class="display">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Publication Year</th>
                            <th>Action</th>
                        </tr>
                        <?php $rowNumber = 1; ?>
                        @foreach ($tableData as $book)
                            <tr>
                                <td>{{ $rowNumber++ }}</td>
                                <td>{{ $book['title'] }}</td>
                                <td>{{ $book['author'] }}</td>
                                <td>{{ $book['publication_year'] }}</td>
                                <td>
                                    <a href="/bookdetails/{{ $book['id'] }}"
                                        class="rounded-md bg-red-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Details</a>
                                    <a href="/bookedit/{{ $book['id'] }}"
                                        class="rounded-md bg-red-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Edit</a>
                                    <a href="/bookdelete/{{ $book['id'] }}" onclick="return confirm('Are you sure?')"
                                        class="rounded-md bg-red-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
