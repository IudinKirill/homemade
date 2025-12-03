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
                            <td>{{ $country->top }}</td>
                            <td>delete</td>
                        </tr>

                    @endforeach
                </tbody>

                <table>
        @endif

    </x-ui.section>
</x-layout>
