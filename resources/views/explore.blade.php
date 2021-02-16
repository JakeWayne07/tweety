<x-app>
    <div class="container bg-blue-200 grid grid-cols-2 rounded-md border border-blue-600 border">
        @foreach($users as $user)
            <div class="mb-4 hover:bg-blue-300">
                <a
                    class="flex items-center"
                    href="{{route('profile', $user)}}">
                <img
                    class="rounded rounded-full p-2"
                    src="{{$user->avatar}}"
                    width="150px"
                    alt="">


                <h3 class="font-bold">
                    {{ '@' . $user->username}}
                </h3>
                </a>
            </div>
        @endforeach
    </div>
</x-app>
