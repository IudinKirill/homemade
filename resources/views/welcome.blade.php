<x-layout title="Home">
    <x-ui.section title="Home">
        <div class="flex justify-center">
            <form action="{{ route('login') }}" class="grid gap-y-6 border border-gray-400 p-6 w-full md:w-2/3 lg:w-1/3" method="POST">
                @csrf
                <div class="grid">
                    <x-form.input title="login" name="login" placeholder="Insert login"/>
                </div>
                <div class="grid">
                    <x-form.input title="password" type="password" name="password" placeholder="Insert password"/>
                </div>
                <x-form.button>Login</x-form.button>
            </form>
        </div>
    </x-ui.section>
</x-layout>
