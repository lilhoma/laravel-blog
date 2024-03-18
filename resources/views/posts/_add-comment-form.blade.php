@auth
<x-panel>
    <form method="POST" action="/post/{{$post -> slug}}/comments">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{ auth() -> id() }}" alt="" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea 
                name="body" 
                rows="5" 
                class="w-full text-sm rounded border border-gray-200 focus:outline-none focus:ring" 
                placeholder="What do you think about this post?"
                required></textarea>
            
            @error('body')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end mt-6 pt-6">
            <x-form.button>post</x-form.button>
        </div>
    </form>
</x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline text-blue-500">Register</a> or <a href="/login" class="hover:underline text-blue-500">Log In</a> to leave a comment!
    </p>
@endauth