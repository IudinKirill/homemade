<form action="{{ route($route) }}"
class="grid gap-y-6 border border-gray-400 p-6 w-full md:w-2/3 lg:w-1/3"
method="POST">
@csrf
    {{ $slot }}
</form>
