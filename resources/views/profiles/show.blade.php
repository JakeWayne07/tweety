<x-app>
    <header class=" mb-2 relative">
        <div class="relative">
            <img
                src="/images/banner.jpg"
                alt="profile-banner"
                class=" rounded-lg"
            >
            <img
                src="{{$user->avatar}}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%;"
            >
        </div>
        <div class="flex justify-between items-center">
            <div>
                <div class="text-bold text-2xl">
                    {{$user->name}}
                </div>
                <p class="text-sm muted">
                    Joined at {{$user->created_at->diffForHumans()}}
                </p>
            </div>

                <div class="flex">
                    @can('edit', $user)
                        <a href="{{current_user()->path('edit')}}">
                            <button
                                type="submit"
                                class="rounded-full shadow py-2 px-4 text-black text-xs"
                            >
                                Edit profile
                            </button>
                        </a>
                    @endcan
                    <x-follow-button :user="$user"></x-follow-button>
                </div>
        </div>
        <div>
            <p
                class="text-sm mt-6"
                >
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </header>


    @include('_timeline', [
        'tweets' => $tweets
    ])

</x-app>
