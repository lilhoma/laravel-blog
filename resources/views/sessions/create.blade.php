<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel class="bg-gray-100">
                <h1 class="text-center font-bold text-xl">Log In</h1>
                <form action="/login" method="POST" class="mt-10">
                    @csrf
                    <x-form.input name="email" type="email" autocomplete="username" required /> 
    
                    <x-form.input name="password" type="password" autocomplete="new-password" required /> 
    
                    <x-form.button>Log In</x-form.button>
    
                    {{-- @if ($errors -> any())    
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif --}}
                    
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>