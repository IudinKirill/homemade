<x-layout title="category">
    <x-ui.section title="category">

        @if (count($categories) < 1)
            Category not found
        @else
            <table class="w-2/3">
                <thead>
                    <tr class="grid grid-cols-[1fr_5fr_5fr_1fr]">
                        <th>ID</th>
                        <th>Name</th>
                        <th>description</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="grid grid-cols-[1fr_5fr_5fr_1fr] odd:bg-white even:bg-gray-200 hover:bg-gray-600 hover:text-white cursor-pointer">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <form action="{{ route('category.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 text-sm">
                                    <x-form.button>DELETE</x-form.button>
                                    </button>
                                    </form>
                                    </td>
                        </tr>

                    @endforeach
                </tbody>

                <table>
        @endif

    </x-ui.section>
</x-layout>
