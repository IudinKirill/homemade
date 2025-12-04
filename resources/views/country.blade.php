<x-layout title="country">
    <x-ui.section title="country">

        @if (count($countries) < 1)
            Country not found
        @else
            <table class="w-2/3">
                <thead>
                    <tr class="grid grid-cols-[1fr_9fr_1fr_1fr]">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Top</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr class="grid grid-cols-[1fr_9fr_1fr_1fr] odd:bg-white even:bg-gray-200 hover:bg-gray-600 hover:text-white cursor-pointer">
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->name }}</td>
                                <td class="flex items-center gap-2">
                                <form method="POST" action="{{ route('country.top.decrease', $country) }}" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="w-6 h-6 flex items-center justify-center bg-red-500 text-white rounded hover:bg-red-600 transition">−</button>
                                </form>
                                <span class="w-8 text-center font-medium">{{ $country->top }}</span>
                                <form method="POST" action="{{ route('country.top.increase', $country) }}" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="w-6 h-6 flex items-center justify-center bg-green-500 text-white rounded hover:bg-green-600 transition">+</button>
                                </form>
                            </td>
                            <td>
                            <form action="{{ route('country.destroy', $country) }}" method="POST">
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

            </table>
        @endif

    </x-ui.section>
</x-layout>
