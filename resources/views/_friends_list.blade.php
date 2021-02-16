<h3 class=" font-bold text-xl mb-4">Following</h3>

<ul>
    @forelse (current_user()->follows as $user)
        <li>
            <div class="text-sm mb-4">
                <a class="flex items-center" href="{{route('profile', $user)}}">
                    <img
                        src="{{$user->avatar}}"
                        alt=""
                        class="rounded-full mr-2"
                        width="50px"
                        >
                    {{$user->name}}
                </a>
                @empty
                    No friends yet
            </div>
        </li>
    @endforelse
</ul>
