<x-layout title="Home">
    <x-ui.section title="Home">
        <div class="flex justify-center">
            <x-form.form route='login'>
                <x-form.input title="login" name="login" placeholder="Insert login"/>

                <x-form.input title="password" type="password" name="password" placeholder="Insert password"/>

                <x-form.button>Login</x-form.button>
            </x-form.form>
        </div>
    </x-ui.section>
</x-layout>
