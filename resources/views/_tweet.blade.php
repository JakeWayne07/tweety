<div class="flex p-4 {{$loop->last ? '' : 'border-b border-gray-400 ' }}mb-2 ">
    <div class=" flex-shrink-0">
        <a href="{{route('profile', $tweet->user)}}">
            <img
            src="{{$tweet->user->avatar}}"
            alt=""
            width="50px"
            class="rounded-full mr-2"
            >
        </a>
    </div>
    <div>
        <div class="flex">
            <h3 class="font-bold mb-2 mr-1">
                <a href="{{route('profile', $tweet->user)}}">
                    {{$tweet->user->name}}
                </a>
            </h3>
            <p class="text-gray-500">
                &commat;{{$tweet->user->username}}
            </p>
        </div>
        <p class=" text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>
